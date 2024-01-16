<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>certificate</title>
</head>
<style>
   #cert {
        width: 100%;
    }
    #user {
        position: absolute;
        top: 150;
        left: 100;
        width: 100px;
        height: 100px;
    }
    h5 {
        position: absolute;
        left: 45%;
        top: 130;
    }
    h4 {
        position: absolute;
        left: 45%;
        top: 170;
    }
</style>
<body>
    
<img id="cert"src="{{ public_path('uploads/cert.png') }}" alt="Opis slike">
<img id="user" src="{{ public_path('uploads/IMG_20231001_122337_421.jpg') }}" alt="Opis slike">
<h5>{{ $name }}</h5>
<h4>{{ $date }}</h4>
    <!-- Dodajte vaš HTML sadržaj ovde -->
</body>
</html>
