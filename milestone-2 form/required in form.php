<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <style>
        .error {
            color: #ff0000;
        }
    </style>
</head>

<body>
    <h1>Form Validation</h1>
    <?php
    $name = $email = $website = $comment = $gender = "";
    $nameErr = $emailErr = $websiteErr = $commentErr = $genderErr = "";

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        //name section
        if (empty($_POST["name"])) {
            $nameErr = "Name is Required";
        } else {
            $name = input_test($_POST['name']);
            //check validate name
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $nameErr = "Only letters and white space allowed";
            }
        }

        //Email section
        if (empty($_POST["email"])) {
            $emailErr = "Email is Required";
        } else {
            $email = input_test($_POST['email']);
            //check validate email
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }

        //website section
        if (empty($_POST["website"])) {
            $websiteErr = "Website url is Required";
        } else {
            $website = input_test($_POST['website']);
            // check if URL address syntax is valid
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
                $websiteErr = "Invalid URL";
            }
        }
        //comment section
        if (empty($_POST["comment"])) {
            $commentErr = "Comment is Required";
        } else {
            $comment = input_test($_POST['comment']);
        }

        //gender section
        if (empty($_POST["gender"])) {
            $genderErr = "Gender is Required";
        } else {
            $gender = input_test($_POST['gender']);
        }
    }

    //function
    function input_test($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    ?>

    <p><span class="error">* required field</span></p>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        Name : <input type="text" name="name" id="" value="<?php echo $name; ?>">
        <span class="error"><?php echo $nameErr; ?>*</span>
        <br><br>
        Email : <input type="email" name="email" id="" value="<?php echo $email; ?>">
        <span class="error"><?php echo $emailErr; ?>*</span>
        <br><br>
        Website : <input type="text" name="website" id="" value="<?php echo $website; ?>">
        <span class="error"><?php echo $websiteErr; ?>*</span>

        <br><br>
        Comment : <textarea name="comment" id="" cols="40" rows="5" value="<?php echo $comment; ?>"></textarea><br><br>
        Gender :
        <input type="radio" name="gender" value="male" id="" <?php if (isset($gender) && $gender=="emale") echo "checked";?>>male
        <input type="radio" name="gender" value="female" id="" <?php if (isset($gender) && $gender=="female") echo "checked";?>>female
        <input type="radio" name="gender" value="others" id="" <?php if (isset($gender) && $gender=="others") echo "checked";?>>others
        <span class="error"><?php echo $genderErr; ?>*</span>
        <br><br>

        <input type="submit" value="Submit" name="submit">

    </form>

    <h3>Your Input is : </h3>

    <?php
    echo $name . "<br>";
    echo $email . "<br>";
    echo $website . "<br>";
    echo $comment . "<br>";
    echo $gender . "<br>";

    ?>


</body>

</html>