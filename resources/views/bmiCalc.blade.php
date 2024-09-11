<!DOCTYPE html>
<html>
<head>
    <title>Hitung BMI</title>
</head>
<body>
    <h1>Kalkulator BMI</h1>
    <form method="POST" action="/calculate-bmi">
        @csrf
        <label for="weight">Berat Badan (kg):</label><br>
        <input type="number" name="weight" id="weight" required><br><br>

        <label for="height">Tinggi Badan (cm):</label><br>
        <input type="number" name="height" id="height" required><br><br>

        <button type="submit">Hitung BMI</button>
    </form>
</body>
</html>
