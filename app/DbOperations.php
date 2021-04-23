<?php

namespace App;

use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;
use SoapClient;
use Symfony\Component\Process\ExecutableFinder;
use App\WsseAuthHeader;
use SimpleXMLElement;
use Illuminate\Support\Facades\DB;

class ApisRequest extends Model
{
    //

   public function simpleSelect($tblName, $fields, $condition, $offset = 0, $limit = 100){
    $result = DB::table($tblName)->get();
    return $result;
   }
}
