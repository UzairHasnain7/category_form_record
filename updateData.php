<?php

session_start();

include 'conn.php';

if(isset($_POST['updatebtn']))
{
    $id = $_POST['cat_id'];
    $cat_name = $_POST['cat_name'];
    $address = $_POST['address'];
    $mobile_number = $_POST['mobile_number'];
    $price = $_POST['price'];
    $image_name = $_FILES['image']['name'];
    $image_temp_name = $_FILES['image']['tmp_name'];
    $image_type = $_FILES['image']['type'];
    $image_size = $_FILES['image']['size'];
    $folder = "Images/";

    if(strtolower($image_type) == "image/jpg" || strtolower($image_type) == "image/png" || strtolower($image_type) == "image/jpeg")
    {
        if($image_size <= 1000000)
        {
            $folder = $folder . $image_name;
            $sql = "UPDATE `crud` SET `cat_id` = '$id', `cat_name` = '$cat_name', `address` = '$address', `mobile_number` = '$mobile_number', `price` = '$price', `cat_image` = '$folder' WHERE `cat_id` = '$id'";
            $query = mysqli_query($conn, $sql);
            if($query)
            {
                move_uploaded_file($image_temp_name, $folder);
                unlink($oldImage);
                $_SESSION['SuccessMessage'] = "Data Updated Successfully";
                header('Location: create.php');
            }
            else
            {
                $_SESSION['ErrorMessage'] =  "Data not Inserted";
                header('Location: create.php');
            }
        }
        else
        {
            $_SESSION['ErrorMessage'] = "Image Size Should be less than 1MB";
            header('Location: create.php');
        }
    }
    else
    {
        $_SESSION['ErrorMessage'] = "Image formate Not Supported";
        header('Location: create.php');
    }
    }

?>