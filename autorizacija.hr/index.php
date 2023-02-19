<?php
session_start();

echo '<pre>';
print_r($_COOKIE);
echo '</pre>';

$_SESSION['kljuc'] = 'Hello';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javno</title>
</head>

<body>
    Javni dio
    <form action="autorizacija.php" method="post">
        <input type="text" name="email" placeholder="email">
        <input type="password" name="lozinka" placeholder="email">
        <input type="submit" value="Autoriziraj se">
    </form>
</body>

</html>