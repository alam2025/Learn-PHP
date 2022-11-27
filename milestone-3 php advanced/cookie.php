<?php
$cookieName = "user";
$cookieValue = "Solti miahS";
setcookie($cookieName, $cookieValue, time() + (30 * 86400), "/");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>

<body>
    <?php
    if (!isset($_COOKIE[$cookieName])) {
        echo "Cookie named '" . $cookieName . "' is not set";
    } else {
        echo "Cookie name " . $cookieName . "is set <br>";
        echo "Cooke name is " . $_COOKIE[$cookieName];
    }
    ?>
</body>

</html>