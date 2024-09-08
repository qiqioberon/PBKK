<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <form action="" method="get">
        @csrf
        <input type="text" placeholder="Nilai A" id="nilaia" name="nilaia">
        <select name="operator" id="operator">
            <option name="" value="">Operator</option>
            <option name="+" value="+">+</option>
            <option name="-" value="-">-</option>
            <option name="*" value="*">*</option>
            <option name="/" value="/">/</option>
        </select>
            <input type="text" placeholder="Nilai B" id="nilaib" name="nilaib">
            <input type="submit" name="submit" value="Submit">
    </form>
</html>

<?php
if(isset($_GET['submit'])){
    $a = $_GET['nilaia'];
    $b = $_GET['nilaib'];
    $operator = $_GET['operator'];
    if($operator == '+'){
        $hasil = $a + $b;
    } elseif($operator == '-'){
        $hasil = $a - $b;
    } elseif($operator == '*'){
        $hasil = $a * $b;
    } elseif($operator == '/'){
        $hasil = $a / $b;
    }
    echo "Hasil dari $a $operator $b = $hasil";
}
?>
