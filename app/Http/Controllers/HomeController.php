<?php

namespace App\Http\Controllers;
// namespace App\Http\Controllers\Auth;

use App\AgentBalance;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\ApisRequest;
use App\DbOperations;
use App\User;
use App\Orders;
use Exception;
use Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

// use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;


class HomeController extends BaseController
{
  public function index()
  {
    // Creating Via API session
    $creds = array(
      "email" => env('VIA_email'),
      "pwd" => env('VIA_pwd'),
      "role" => env('VIA_role')
    );
    $apiRequest = new ApisRequest();
    $createSession = $apiRequest->callViaApis(env('VIA_BASE_URL') . env('VIA_LOGIN'), 'POST', json_encode($creds));
    // print_r($createSession);
    return view("index");
  }

  public function directAccessNotAllowed()
  {
    return "Sorry direct access to this URL is disabled";
  }

  public function bookFlights()
  {
    return view('flightBooking');
  }

  public function getAiports()
  {
    if ($_GET["code"] == "") {
      $result = array();
    } else {
      $result = DB::select(
        "SELECT * 
                   FROM  tbl_airports
                   WHERE code LIKE '%" . $_GET['code'] . "%' OR location LIKE '%$_GET[code]%'
                   ORDER BY
                    CASE
                    WHEN code LIKE '" . $_GET['code'] . "' THEN 1
                    WHEN code LIKE '" . $_GET['code'] . "%' THEN 2
                    WHEN code LIKE '%" . $_GET['code'] . "%' THEN 3
                    WHEN code LIKE '%" . $_GET['code'] . "' THEN 4
                    ELSE 5
                END"
      );
    }
    return response($result)->header('Content-Type', 'application/json');;
  }

  public function flightSearch()
  {
    $apiRequest = new ApisRequest();
    if ($_GET["flying_from_N"] == strtoupper('DEL') && $_GET['flying_to_N'] == 'IKA') {
      $from = strtoupper($_GET["flying_from_N"]);
      $to = strtoupper($_GET["flying_to_N"]);
      $date = date('Y-m-d', (strtotime($_GET["departure_date"])));
      $request = '<soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
                  <soap:Header>
                  <wsse:Security xmlns:wsse="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd" soap:mustUnderstand="1">
                  <wsse:UsernameToken xmlns:wsu="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-utility-1.0.xsd" wsu:Id="UsernameToken-17855236">
                  <wsse:Username>APISKIEZTRAVEL</wsse:Username>
                  <wsse:Password Type="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-username-token-profile-1.0#PasswordText">STL@5973</wsse:Password>
                  </wsse:UsernameToken>
                  </wsse:Security>
                  </soap:Header>
                  <soap:Body xmlns:ns2="http://www.opentravel.org/OTA/2003/05">
                  <ns2:OTA_AirAvailRQ EchoToken="11868765275150-1300257933" PrimaryLangID="en-us" SequenceNmbr="1" Target="TEST" TimeStamp="2008-09-25T04:55:27" Version="20061.00">
                  <ns2:POS>
                  <ns2:Source TerminalID="TestUser/Test Runner">
                  <ns2:RequestorID ID="APISKIEZTRAVEL" Type="4"/>
                  <ns2:BookingChannel Type="12"/>
                  </ns2:Source>
                  </ns2:POS>
                  <ns2:OriginDestinationInformation>
                  <ns2:DepartureDateTime>' . $date . 'T00:00:00</ns2:DepartureDateTime>
                  <ns2:OriginLocation LocationCode="' . $from . '"/>
                  <ns2:DestinationLocation LocationCode="' . $to . '"/>
                  </ns2:OriginDestinationInformation>
                  <ns2:TravelerInfoSummary>
                  <ns2:AirTravelerAvail>
                  <ns2:PassengerTypeQuantity Code="ADT" Quantity="1"/>
                  </ns2:AirTravelerAvail>
                  </ns2:TravelerInfoSummary>
                  </ns2:OTA_AirAvailRQ>
                  </soap:Body>
          </soap:Envelope>';
      $result = $apiRequest->callApi('POST', '', $request);
      $data = array("result" => $result, "type" => "mahan");
      // print_r(json_encode($result));
      // die();
      return view("flight-search")->with($data);
    } else {
      $searchCreteria = array(
        "sectorInfos" => array(
          array(
            "src" => array("code" => $_GET["flying_from_N"]),
            "dest" => array("code" => $_GET["flying_to_N"]),
            "date" => date('Y-m-d', (strtotime($_GET["departure_date"]))),
          ),
        ),
        "class" =>  "ALL",
        "paxCount" => array(
          "adt" => "1",
          "chd" =>  "0",
          "inf" =>  "0"
        ),
        "route" => "ALL",
        "multiHop" => false,
        "multiCity" =>  false
      );
      $callAPi = $apiRequest->callViaApis(env('VIA_BASE_URL') . env('VIA_SEARCH'), 'POST', json_encode($searchCreteria));
      $data = array("result" => json_decode($callAPi), "type" => "via");
      // print_r($data);
      return view('flight-search')->with($data);
    }
  }

  public function bookFlight(Request $request)
  {
    $request->session()->put("flightDetails", $request->input());
    $data = array("data" => $request->session()->get('flightDetails'));
    //array("data" =>$request->input());
    return view("book-flight")->with($data);
  }

  public function bookFlightGet(Request $request)
  {
    $data = array("data" => $request->session()->get('flightDetails'));
    //array("data" =>$request->input());
    return view("book-flight")->with($data);
  }

  public function reviewBooking(Request $request)
  {
    $apiRequest = new ApisRequest();
    $flightsDetails = ($request->session()->get("flightDetails"));
    $request->session()->put("userDetails", $request->input());
    $flightResponse = json_decode($flightsDetails['flightRepsonse']);
    $arivalTime = $flightsDetails['arrivalTime'];
    $deptTime = $flightsDetails['departureTime'];
    $flightNumber = $flightsDetails['flightNumber'];
    $from = $flightsDetails['from'];
    $to = $flightsDetails['to'];
    $fromTerminal = $flightsDetails['fromTerminal'];
    $toTerminal = $flightsDetails['toTerminal'];
    $timeStamp = date('Y-m-d') . 'T' . date('H:i:s');
    if (!isset($flightResponse->soapBody)) {
      $flightKey = $flightResponse->key;
      $data = array("keys" => array($flightKey), "isSSRReq" => true, "isExReq" => false, "currency" => "INR");
      $priceReview = $apiRequest->callViaApis(env('VIA_BASE_URL') . env('VIA_PRICE_REVIEW'), "POST", json_encode($data));
      // print_r($priceReview);
      $priceReview = json_decode($priceReview);
      $flightsDetails['totalFair'] = $priceReview->fare->totalFare->total->amount;
      $data = array("flightsDetails" => $flightsDetails, "userDetails" => $request->input(), 'viaPrice' => ($priceReview));
    } else {
      $rph = $flightsDetails['rph'];
      $tid = $flightResponse->soapBody->ns1OTA_AirAvailRS->{'@attributes'}->TransactionIdentifier;
      $priceQuate = '<soap:Envelope
            xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/"
            xmlns:xsd="http://www.w3.org/2001/XMLSchema"
            xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
            <soap:Header>
              <wsse:Security
                xmlns:wsse="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd" soap:mustUnderstand="1">
                <wsse:UsernameToken
                  xmlns:wsu="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-utility-1.0.xsd" wsu:Id="UsernameToken-32124385">
                  <wsse:Username>' . env('API_UN') . '</wsse:Username>
                  <wsse:Password Type="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-username-token-profile-1.0#PasswordText">' . env('API_PASS') . '</wsse:Password>
                </wsse:UsernameToken>
              </wsse:Security>
            </soap:Header>
            <soap:Body
              xmlns:ns1="http://www.opentravel.org/OTA/2003/05">
              <ns1:OTA_AirPriceRQ EchoToken="12662148060105253838426" PrimaryLangID="en-us" SequenceNmbr="1" TimeStamp="2010-02-15T10:20:06" TransactionIdentifier="' . $tid . '" Version="20061.00">
                <ns1:POS>
                  <ns1:Source TerminalID="' . env('API_TERMINAL_ID') . '">
                    <ns1:RequestorID ID="' . env('API_UN') . '" Type="4"/>
                    <ns1:BookingChannel Type="12"/>
                  </ns1:Source>
                </ns1:POS>
                <ns1:AirItinerary DirectionInd="OneWay">
                  <ns1:OriginDestinationOptions>
                    <ns1:OriginDestinationOption>
                      <ns1:FlightSegment ArrivalDateTime="' . $arivalTime . '" DepartureDateTime="' . $deptTime . '" FlightNumber="' . $flightNumber . '" JourneyDuration="PT3H40M0.000S" RPH="' . $rph . '">
                        <ns1:DepartureAirport LocationCode="' . $from . '" Terminal="TerminalX"/>
                        <ns1:ArrivalAirport LocationCode="' . $to . '" Terminal="TerminalX"/>
                      </ns1:FlightSegment>
                    </ns1:OriginDestinationOption>
                  </ns1:OriginDestinationOptions>
                </ns1:AirItinerary>
                <ns1:TravelerInfoSummary>
                  <ns1:AirTravelerAvail>
                    <ns1:PassengerTypeQuantity Code="ADT" Quantity="1"/>
                  </ns1:AirTravelerAvail>
                </ns1:TravelerInfoSummary>
              </ns1:OTA_AirPriceRQ>
            </soap:Body>
          </soap:Envelope>';

      $apiResult = $apiRequest->callApi('post', '', $priceQuate);
      if (empty($apiResult['soapBody']['ns1OTA_AirPriceRS']['ns1Errors'])) {
        $irrAmount = $apiResult['soapBody']['ns1OTA_AirPriceRS']['ns1PricedItineraries']['ns1PricedItinerary']['ns1AirItineraryPricingInfo']['ns1ItinTotalFare']['ns1TotalFare']['@attributes']['Amount'];
        $request->session()->put('irrPrice', $irrAmount);
        $request->session()->put('price_tid', $apiResult['soapBody']['ns1OTA_AirPriceRS']['@attributes']['TransactionIdentifier']);
      
      } else {
      }
      $data = array("flightsDetails" => $flightsDetails, "userDetails" => $request->input(), 'priceQuate' => $apiResult);
    }
    return view("reviewBooking")->with($data);
  }

  public function generateOtp(Request $request)
  {
    $rules = [
      'mobile_number' => 'required|string|min:10|max:10'
    ];
    $validator = Validator::make($request->all(), $rules);
    if ($validator->fails()) {
      $response = (array("Status" => "Fail", "message" => "Invalid Mobile Number"));
    } else {
      $mobile = $request->input("mobile_number");
      $rand = rand(0, 99999);
      $apiRequest = new ApisRequest();
      $apiUrl = env("SMS_API_URL") . "/SMS/" . $mobile . "/" . $rand;
      $sendApi = $apiRequest->CallAPIMaster("GET", $apiUrl, "");
      $request->session()->put("otp", $rand);
      $request->session()->put("mobile", $mobile);
      $response = json_decode($sendApi);
      if ($response->Status == "Success") {
        $response = (array("Status" => "Success", "message" => "OTP sent successfully"));
      } else {
        // $response = (array("Status" => "Fail", "message" => $response->Details));
        $response = (array("Status" => "Success", "message" => $response->Details . $rand));
      }
    }
    return json_encode($response);
  }

  public function verifyOtp(Request $request)
  {
    $rules = [
      'mobile_number' => 'required|string|min:10|max:10',
      'otp' => "required|string|min:4|max:6",
      'type' => 'required|min:0|max:3'
    ];
    // print_r($request->input());
    $validator = Validator::make($request->all(), $rules);
    if ($validator->fails()) {
      $response = (array("Status" => "Fail", "message" => "Invalid Mobile Number/OTP"));
    } else {
      $user = new User;
      $otp = $request->input("otp");
      $mobile = $request->input("mobile_number");
      $request->session()->get("mobile");
      $otp == $request->session()->get("otp");
      if ($mobile == $request->session()->get("mobile") && $otp == $request->session()->get("otp")) {
        $userDetails = $user->select("*")->where(array("mobile_number" => $mobile))->get()->toArray();
        if (count($userDetails) == 0) {
          $user->mobile_number = $mobile;
          $user->user_type = $request->input("type");
          if ($user->save()) {
            $userDetails = $user->select("*")->where(array("mobile_number" => $mobile))->get()->toArray();
            $request->session()->put("user_details", $userDetails[0]);
            $request->session()->put("user_id", $userDetails[0]["user_id"]);
            $request->session()->put("mobile_number", $userDetails[0]["mobile_number"]);
            $request->session()->put("first_name", $userDetails[0]["first_name"]);
            $request->session()->put("last_name", $userDetails[0]["last_name"]);
            $request->session()->put("email", $userDetails[0]["email"]);
            $request->session()->put("user_type", $userDetails[0]["user_type"]);
            $response = array("Status" => "Success", "Message" => "Logged in Successfully", "userDetails" => $userDetails);
          } else {
            $response = array("Status" => "Fail", "Message" => "Server error, please try again later.");
          }
        } else {
          if ($userDetails[0]["status"] == 0) {
            $response = (array("Status" => "Fail", "Message" => "Please Contact Admin to activate your account"));
            return json_encode($response);
          }
          $request->session()->put("user_details", $userDetails[0]);
          $request->session()->put("user_id", $userDetails[0]["user_id"]);
          $request->session()->put("mobile_number", $userDetails[0]["mobile_number"]);
          $request->session()->put("first_name", $userDetails[0]["first_name"]);
          $request->session()->put("last_name", $userDetails[0]["last_name"]);
          $request->session()->put("email", $userDetails[0]["email"]);
          $request->session()->put("user_type", $userDetails[0]["user_type"]);
          $response = array("Status" => "Success", "Message" => "Logged in Successfully", "userDetails" => $userDetails[0]);
        }
      } else {
        $response = array("Status" => "Fail", "Message" => "OTP Mismatch");
      }
    }
    return json_encode($response);
  }

  public function login()
  {
    // echo Auth::user()->id;
    try {
      if (Auth::attempt(array("mobile_number" => 8968029004, 'password' => ''))) {
        echo "dash";
        redirect()->route("agentDashboard");
      } else {
        echo "login";
        redirect()->route("login");
      }
    } catch (Exception $e) {
      echo 'exception';
      echo $e->getMessage();
    }
    return "Ssd";
  }

  public function logout(Request $request)
  {
    if ($request->session()->has("user_id")) {
      $request->session()->forget("user_id");
      $request->session()->forget("first_name");
      $request->session()->forget("last_name");
      $request->session()->forget("email");
      $request->session()->forget("user_type");
      $request->session()->forget("mobile_number");
    }
    return redirect()->route("home");
  }

  public function bookTicket(Request $request)
  {
    $apiRequest = new ApisRequest();
    $flightsDetails = $request->session()->get("flightDetails");
    $userDetails = $request->session()->get("userDetails");
    $dob = date("Y-m-d", strtotime($userDetails["date_of_birth"]));
    $flightResponse = json_decode($flightsDetails["flightRepsonse"]);
    $arivalTime = $flightsDetails['arrivalTime'];
    $deptTime = $flightsDetails['departureTime'];
    $flightNumber = $flightsDetails['flightNumber'];
    $from = $flightsDetails['from'];
    $to = $flightsDetails['to'];
    $fromTerminal = $flightsDetails['fromTerminal'];
    $toTerminal = $flightsDetails['toTerminal'];
    $totalFair = $flightsDetails['totalFair'];
    //User Details
    $first_name = $userDetails['first_name'];
    $last_name = $userDetails['last_name'];
    $mobile = $userDetails['mobile_number'];
    $email = $userDetails['email'];
    $areaCode = substr($mobile, 0, 2);
    $phone = substr($mobile, 2, 10);
    $dob = $userDetails['date_of_birth'];
    $title = $userDetails['title'];
    $countryCode = $userDetails['countryCode'];
    $docType = $userDetails['doc_type'];
    $docNumber = $userDetails['doc_number'];
    $doc_expiry = $userDetails['doc_expiry'];
    $docCountry = $userDetails['issue_country'];
    //End UserDetails
    if ($request->session()->get('user_type') == 2) {
      $agentBalanc = AgentBalance::where([
        ['order_status', '=', 'approved'],
        ['txn_type', '=', 'Credit']
      ])->select(DB::raw('SUM(total_amount) as current_balance'))->get()->toArray();
      if ($agentBalanc[0]['current_balance'] < $flightsDetails['totalFair']) {
        return ("<p class='alert alert-danger'>In-Sufficient Balance</p>");
      }
    }
    $timeStamp = date('Y-m-d') . 'T' . date('H:i:s');
    if ($from == "DEL" && $to == "IKA" || $to == "DEL" && $from == "IKA") {
      $tid = $request->session()->get('price_tid');
      $rph = $flightsDetails['rph'];
      $totalFair = $request->session()->get('irrPrice');
      $apiData = '<soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
          <soap:Header>
            <wsse:Security soap:mustUnderstand="1" xmlns:wsse="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd">
              <wsse:UsernameToken wsu:Id="UsernameToken-17855236" xmlns:wsu="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-utility-1.0.xsd">
                <wsse:Username>' . env('API_UN') . '</wsse:Username>
                <wsse:Password Type="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-username-token-profile-1.0#PasswordText">' . env('API_PASS') . '</wsse:Password>
              </wsse:UsernameToken>
            </wsse:Security>
          </soap:Header>
          <soap:Body xmlns:ns1="http://www.isaaviation.com/thinair/webservices/OTA/Extensions/2003/05" xmlns:ns2="http://www.opentravel.org/OTA/2003/05">
            <ns2:OTA_AirBookRQ EchoToken="11868765275150-1300257933" PrimaryLangID="en-us" SequenceNmbr="1" TimeStamp="2008-08-25T16:15:59" TransactionIdentifier="' . $tid . '" Version="20061.00">
              <ns2:POS>
                <ns2:Source TerminalID="' . env('API_TERMINAL_ID') . '">
                  <ns2:RequestorID ID="' . env('API_UN') . '" Type="4" />
                  <ns2:BookingChannel Type="12" />
                </ns2:Source>
              </ns2:POS>
              <ns2:AirItinerary>
                <ns2:OriginDestinationOptions>
                  <ns2:OriginDestinationOption>
                  <ns2:FlightSegment ArrivalDateTime="' . $arivalTime . '" DepartureDateTime="' . $deptTime . '" FlightNumber="' . $flightNumber . '" RPH="' . $rph . '">
                            <ns2:DepartureAirport LocationCode="' . $from . '" Terminal="' . $fromTerminal . '"/>
                            <ns2:ArrivalAirport LocationCode="' . $to . '" Terminal="' . $toTerminal . '"/>
                          </ns2:FlightSegment>
                  </ns2:OriginDestinationOption>
                </ns2:OriginDestinationOptions>
              </ns2:AirItinerary>
              <ns2:TravelerInfo>
                <ns2:AirTraveler BirthDate="' . date('Y-m-d', strtotime($dob)) . 'T00:00:00" PassengerTypeCode="ADT">
                  <ns2:PersonName>
                    <ns2:GivenName>' . $first_name . '</ns2:GivenName>
                    <ns2:Surname>' . $last_name . '</ns2:Surname>
                    <ns2:NameTitle>' . $title . '</ns2:NameTitle>
                  </ns2:PersonName>
                  <ns2:Telephone AreaCityCode="' . $areaCode . '" CountryAccessCode="' . $countryCode . '" PhoneNumber="' . $phone . '" />
                  <ns2:Address>
                    <ns2:CountryName Code="IN" />
                  </ns2:Address>
                  <ns2:Document DocHolderNationality="IN" DocType="' . $docType . '" DocID="' . $docNumber . '" DocIssueCountry="IN" ExpireDate="' . $doc_expiry . '"/>
                  <ns2:TravelerRefNumber RPH="A1" />
                </ns2:AirTraveler>
          </ns2:TravelerInfo>
            <ns2:Fulfillment>
                <ns2:PaymentDetails>
                  <ns2:PaymentDetail>
                    <ns2:DirectBill>
                      <ns2:CompanyName Code="GSA38" />
                    </ns2:DirectBill>
                    <ns2:PaymentAmount Amount="' . $totalFair . '" CurrencyCode="IRR" DecimalPlaces="2" />
                  </ns2:PaymentDetail>
                </ns2:PaymentDetails>
              </ns2:Fulfillment>
                  </ns2:OTA_AirBookRQ>
            <ns1:AAAirBookRQExt>
              <ns1:ContactInfo>
                <ns1:PersonName>
                  <ns1:Title>' . $title . '</ns1:Title>
                  <ns1:FirstName>' . $first_name . '</ns1:FirstName>
                  <ns1:LastName>' . $last_name . '</ns1:LastName>
                </ns1:PersonName>
                <ns1:Telephone>
                  <ns1:PhoneNumber>' . $phone . '</ns1:PhoneNumber>
                  <ns1:CountryCode>' . $countryCode . '</ns1:CountryCode>
                  <ns1:AreaCode>' . $areaCode . '</ns1:AreaCode>
                </ns1:Telephone>
                <ns1:Email>' . $email . '</ns1:Email>
                <ns1:Address>
                  <ns1:CountryName>
                    <ns1:CountryName>India</ns1:CountryName>
                    <ns1:CountryCode>IN</ns1:CountryCode>
                  </ns1:CountryName>
                  <ns1:CityName>Delhi</ns1:CityName>
                </ns1:Address>
              </ns1:ContactInfo>
              <ns1:TravelerAdditionalInfo>
                    <ns1:AAAirTravelersType>
                      <ns1:TravelerRefNumberRPH>A1</ns1:TravelerRefNumberRPH>
                      <ns1:NationalIDNo>' . $docNumber . '</ns1:NationalIDNo>
                    </ns1:AAAirTravelersType>
                </ns1:TravelerAdditionalInfo>
            </ns1:AAAirBookRQExt>
          </soap:Body>
        </soap:Envelope>';
      // echo htmlentities($apiData);
      // die();
      $apiResult = $apiRequest->callApi('post', '', $apiData);
    } else {
      $blockSession = $apiRequest->callViaApis(env('VIA_BASE_URL') . env('VIA_BLOCK_FLIGHT') . "/" . $request->input('itinKey'), "POST", "");
      $blockSession = json_decode($blockSession);
      if ($blockSession->success == true) {
        $bookingDetails = array(
          "itinKey" => $request->input('itinKey'),
          "productType" => "FLIGHT",
          "payment" => array(
            "paymentMode" => "Deposit",
            "referenceId" => $request->input('itinKey'),
            "paymentSubType" => 99,
            "amountToCharge" => $flightsDetails['totalFair'],
            "productType" => "FLIGHT",
          ),
          "orderType" => "AirOrder",
          "travellersData" => array(
            array(
              "pType" => "adt",
              "title" => "Mr",
              "firstName" => $first_name,
              "lastName" => $last_name,
              "age" => 21,
              "dob" => $userDetails['date_of_birth']
            )
          ),
          "orderRef" => $request->input('itinKey'),
          "reason" => "dummy",
          "deliveryData" => array(
            "mobile" => $mobile,
            "email" => $email,
            "street" => "bangaloe",
            "city" => "bangalore",
            "pincode" => "560045",
            "state" => "Karnataka",
            "country" => "india"
          ),
          "debug" => false
        );
        $bookTicket = $apiRequest->callViaApis(env('VIA_BASE_URL') . env('VIA_BOOK_FLIGHT'), "POST", json_encode($bookingDetails));
        print_r($bookTicket);
        $bookTicket = json_decode($bookTicket);
      } else {
        if ($request->session()->get('user_type') == 2) {
          $route = 'agentDashboard';
        } else {
          $route = 'dashboard';
        }
        return redirect()->route($route)->withErrors("<p class='alert alert-danger'>Ticket booked successfully.</p>");
        echo "<p class='alert alert-danger'>{$blockSession->msg}</p>";
      }
    }
    if (!empty($apiResult['soapBody']['ns1OTA_AirBookRS']['ns1Errors'])) {
      if ($request->session()->get('user_type') == 2) {
        $route = 'agentDashboard';
      } else {
        $route = 'dashboard';
      }
      return redirect()->route($route)->withErrors("<p class='alert alert-danger'>{$apiResult['soapBody']['ns1OTA_AirBookRS']['ns1Errors']['ns1Error']['@attributes']['ShortText']}.</p>");
      // return ("<p class='alert alert-danger'>{$apiResult['soapBody']['ns1OTA_AirBookRS']['ns1Errors']['ns1Error']['@attributes']['ShortText']}</p>");
    } else {
      $orderId = uniqid();
      $agentBalance = new AgentBalance();
      $agentBalance->txn_type = 'Debit';
      $agentBalance->user_id = $request->session()->get('user_id');
      $agentBalance->total_amount = ($flightsDetails['totalFair'] * -1);
      $agentBalance->order_status = "Approved";
      $agentBalance->order_id = $orderId;
      $agentBalance->save();

      $order = new Orders();
      $order->booking_id = $apiResult['soapBody']['ns1OTA_AirBookRS']['@attributes']['TransactionIdentifier'];
      $order->local_order_id = $orderId;
      $order->order_type = 1;
      $order->user_id = $request->session()->get('user_id');
      $order->order_vendor = 'mahan';
      $order->order_total = $flightsDetails['totalFair'];
      $order->order_meta = json_encode($apiResult);
      $order->origin = $from;
      $order->destinatoin = $to;
      $order->pessenger_name = $first_name . " " . $last_name;
      $order->travel_date = $deptTime;
      $order->save();

      $data = array(
        'name' => $first_name . " " . $last_name,
        "from"        => $from,
        "to"          => $to,
        "booking_id"  => $apiResult['soapBody']['ns1OTA_AirBookRS']['@attributes']['TransactionIdentifier'],
        "email"       => $email,
        "order_id"    => $orderId,
        "booking_total"     =>  $flightsDetails['totalFair'],
        "dept_time"         =>  $deptTime,
        "arrival_time"      =>  $arivalTime
      );

      Mail::send('emails.booking-confirmation', ['data' => $data], function ($m) use ($data) {
        $m->from(env('MAIL_USERNAME'), env('APP_NAME'));

        $m->to($data['email'], $data['name'])->subject('Booking Confirmation!');
      });
      // echo "HTML Email Sent. Check your inbox.";
      return "<p class='alert alert-success'>Booking Successfull</p>";
    }
    return;
  }

  public function dashboard(Request $request)
  {
    $orders = new Orders();
    $todayOrders = $orders::where([
      ['user_id', '=', $request->session()->get('user_id')],
      [Orders::raw('DATE(ordered_at)'), '=', date('Y-m-d')]
    ])->get()->toArray();
    return view("user-dashboard")->with(array('todayOrders' => ($todayOrders)));
  }

  public function searchBooking(Request $request)
  {
    $bookingId = $_GET['booking_id'];
    $user_id = $request->session()->get("user_id");
    $orders = new Orders();
    $result = $orders::where([
      ['booking_id', '=', $bookingId], ['user_id', '=', $user_id]
    ])->get()->toArray();
    if (count($result) == 0) {
      $response = array("status" => 0, "message" => "Invalid Order Id");
    } else {
      $response = array("status" => 1, "message" => "Searched Order", "data" => $result);
    }
    return json_encode($response);
  }

  public function sendEmail()
  {
    $data = array('name' => "dsfsfsd", "from" => "DEL", "to" => 'IKA', "booking_id" => 'sfsdf', "email" => "bhavneesh.goyal99@gmail.com");
    
    return view('emails.booking-confirmation')->with(array("data" => $data));
    Mail::send('emails.booking-confirmation', ['data' => $data], function ($m) use ($data) {
      $m->from(env('MAIL_USERNAME'), env('APP_NAME'));

      $m->to($data['email'], $data['name'])->subject('Booking Confirmation!');
    });
    echo "HTML Email Sent. Check your inbox.";
  }
}
