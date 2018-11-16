<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kalkulasi</title>
</head>
<body>
    <h1>Perhitungan</h1>
    <form action="/calculate" method="post">
        @csrf
        <p>Angka 1: </p>
        <input type="text" name="angka1" id="angka1">
        <p>Angka 2: </p>
        <input type="text" name="angka2" id="angka2">
        <input type="submit" value="hitung">
    </form>
</body>
</html>