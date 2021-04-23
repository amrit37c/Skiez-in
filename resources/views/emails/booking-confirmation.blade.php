<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
</head>

<body>
    <h3>Thanks For booking ticket.</h3>
    <p>Please check your dashboard to see booking details.</p>
    <table>
        <tr>
            <th>From</th>
            <td>{{$data['from']}}</td>
        </tr>
        <tr>
            <th>To</th>
            <td>{{$data['to']}}</td>
        </tr>
        <tr>
            <th>Departure Time</th>
            <td>{{$data['dept_time']}}</td>
        </tr>
        <tr>
            <th>Arrival Time</th>
            <td>{{$data['arrival_time']}}</td>
        </tr>
        <tr>
            <th>Booking ID</th>
            <td>{{$data['booking_id']}}</td>
        </tr>
        <tr>
            <th>Order Id</th>
            <td>{{$data['order_id']}}</td>
        </tr>
        <tr>
            <th>Passenger Name</th>
            <td>{{$data['name']}}</td>
        </tr>
        <tr>
            <th>Booking Total</th>
            <td>{{$data['booking_total']}}</td>
        </tr>
    </table>

    <p>Thanks</p>
    <p>{{env('APP_NAME')}}</p>
</body>

</html>