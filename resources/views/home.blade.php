<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trains</title>
</head>
<body>
    <header>
        <h1>Treni</h1>
    </header>
    <main>
        @foreach ($trains as $train)
        <ul>
            <li><strong>Company: </strong>{{$train->company}}</li>
            <li><strong>Departure Station:</strong>{{$train->departure_station}}</li>
            <li><strong>Arrival Station: </strong>{{$train->arrival_station}}</li>
            <li><strong>Departure Time: </strong>{{$train->departure_time}}</li>
            <li><strong>Arrival Time: </strong>{{$train->arrival_time}}</li>
            <li><strong>Code Number: </strong>{{$train->code_number}}</li>
            <li><strong>Carriages: </strong>{{$train->carriages}}</li>
            <li><strong>Carriages: </strong>{{$train->carriages}}</li>
            <li><strong>Is on time? </strong>{{$train->is_on_time}}</li>
            <li><strong>Is canceled? </strong>{{$train->is_canceled}}</li>
        </ul>
        @endforeach
    </main>
</body>
</html>