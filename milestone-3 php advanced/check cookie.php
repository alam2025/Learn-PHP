<?php
setcookie("test_cookie", "test", time() + 3600, "/");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (count($_COOKIE) > 0) {
        echo "Cookie are embaded";
    } else {
        echo "Cookie are disabled";
    }

    ?>
</body>

</html>