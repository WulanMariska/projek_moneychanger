<!DOCTYPE html>
<html>
    <head>
        <title>Money Changer</title>
</head>
<body>

    <h1>Daftar Kurs Hari Ini </h1>

    @foreach ($currencies as $currency)
    <div> 
        <h2> {{ $currency->code}}</h2>
        <p> {{ $currency->name}}</p>
        <p> Kurs Beli: {{ $currency->buy_rate}}</p>
        <p> Kurs Jual: {{ $currency->sell_rate}}</p>
    </div>
    <hr>
    @endforeach
</body>
</html>
