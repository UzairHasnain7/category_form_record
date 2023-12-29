<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'uzair';
    
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn){
        echo 'Login New record created  successfull';

    }
    // else
    // {
    //     echo 'Error';
    // }
 
?> 