<html>
<head>
    <title>Form Get</title>
</head>
<body>
    <form action="/form_get" method="get">
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="email" placeholder="Email">
        <input type="submit" value="Submit">
    </form>
</html>

<?php
if (isset($_GET['name']) && isset($_GET['email'])) {
    echo "Name: " . $_GET['name'] . "<br>";
    echo "Email: " . $_GET['email'];
}
?>