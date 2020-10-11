<?php
        
        $target_dir = $_SERVER['DOCUMENT_ROOT'] . "/Doctors/uploads/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        var_dump($target_file);
        echo "<script>alert($target_file)</script>";
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
       if(isset($_POST["submit"]))
        {
          
            $check = getimagesize($_FILES["image"]["tmp_name"]);
            if($check !== false) 
            {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } 
            else 
            {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        if ($uploadOk == 0)
        {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } 
        else 
        {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file))
            {
          require_once './MainClass.php';
           session_start();
        $obj = new MyClass();
        $r = $obj->insertverification($_REQUEST['degree'],  basename($_FILES["image"]["name"]),$_SESSION['user']);
        if($r)
        {
            header('location:doctorview.php');
        }
                echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
            } else
            {
                echo "Sorry, there was an error uploading your file.";
            }
        }
        
        
?>

