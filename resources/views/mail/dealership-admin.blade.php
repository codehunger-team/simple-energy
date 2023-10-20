<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .container {
            width: 90%;
            margin: auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <h3>Simple Energy Dealership Applied</h3>
        <p>Firm Name: {{ $f_name ?? '' }}</p>
        <p>Name: {{ $name ?? '' }}</p>
        <p>Email: {{ $email ?? '' }}</p>
        <p>Mobile: {{ $mobile ?? '' }}</p>
        <p>City: {{ $city ?? '' }}</p>
        <p>State: {{ $state ?? '' }}</p>
        <p>Address: {{ $address ?? '' }}</p>
        <p>Pincode: {{ $pincode ?? '' }}</p>
        <p>Type of property ownership: {!! $rent ?? '' !!}</p>
        <p>Locality: {{ $locality ?? '' }}</p>
        <p>Turn Over: {{ $turnover ?? '' }}</p>
        <p>Any relevant experience in automotive
            industry?: {{ $experience ?? '' }}</p>
        <p>Application Number: {{ $application_number ?? '' }}</p>

    </div>
</body>

</html>
