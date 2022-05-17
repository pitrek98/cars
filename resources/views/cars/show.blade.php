<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wyświetlanie</title>
</head>

<body>
    <div class="container">
        <h1>{{ $car->vin }}</h1>
        <h3>Szczegóły:</h3>
        <ul>
            <li>Kolor: {{ $car->color }}</li>
            <li>Cena: {{ $car->price }}</li>
            <li>Opis: {{ $car->description }}</li>
        </ul>
    </div>
</body>

</html>
