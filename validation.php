<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation</title>
</head>
<body>
    <h2>Validation Form</h2>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        Name : <input type="text" name="name" id=""><br><br>
        E-mail : <input type="email" name="email" id=""><br><br>
        Website : <input type="text" name="website" id=""><br><br>
        Comment : <textarea name="comment" id="" cols="40" rows="5"></textarea><br><br>
        Gender :
            <input type="radio" value="female" name="gender"> female
            <input type="radio" value="male" name="gender">male
            <input type="radio" value="others" name="gender">others <br><br>
         <input type="submit" value="Submit" name="submit">
</form>

<?php
$name=$email=$website=$comment=$gender="";
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $name= test_method($_POST['name']);
        $email= test_method($_POST['email']);
        $website= test_method($_POST['website']);
        $comment= test_method($_POST['comment']);
        $gender= test_method($_POST['gender']);
    }

    function test_method($data)
    {
        $data= trim($data);
        $data= stripcslashes($data);
        $data=htmlspecialchars($data);
        return $data;

    }
?>

<h3>Your Input is : </h3>
<?php
    echo $name."<br>";
    echo $email."<br>";
    echo $website."<br>";
    echo $comment."<br>";
    echo $gender."<br>";
     
?>
</body>
</html>