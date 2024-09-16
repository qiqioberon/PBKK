<!DOCTYPE html>
<html>
<head>
    <title>Hasil BMI</title>
</head>
<body>
    <h1>Hasil BMI</h1>
    <p>BMI Anda adalah: {{ number_format($bmi, 1) }}</p>
    <p>Kategori: {{ $category }}</p>

    <a href="/bmi">Hitung Ulang</a>
</body>
</html>
