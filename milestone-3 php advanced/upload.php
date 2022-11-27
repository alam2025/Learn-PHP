<?php
    $target_dir="uploads/";
    $upload_file= $target_dir . basename($_FILES["fileUpload"]["name"]);
    $uploadOk=1;

    $image_file_type=strtolower(pathinfo($upload_file,PATHINFO_EXTENSION));
    //if image is actual file or not

    if(isset($_POST["submit"]))
    {
        $check= getimagesize($_FILES["fileUpload"]["tmp_name"]);
        if($check!==false)
        {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk=1;
        }else
        {
            echo "<br>File is not an image";
            $uploadOk=0;
        }
    }

    //if file already exists

    if(file_exists($upload_file))
    {
        echo "<br>File already exists";
        $uploadOk=0;
    }

    //Check file size
    if($_FILES["fileUpload"]["size"]>500000)
    {
        echo "<br>File is too larze ";
        $uploadOk=0;
    }
    // Allow certain file formats
if($image_file_type != "jpg" && $image_file_type != "png" && $image_file_type != "jpeg"
&& $image_file_type != "gif" ) {
    echo "<br>Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<br>Sorry, your file was not uploaded.";
}
else {
    if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $upload_file)) {
        echo "<br>The file ". basename( $_FILES["fileUpload"]["name"]). " has been uploaded.";
    } else {
        echo "<br>Sorry, there was an error uploading your file.";
    }
}

?>