<?php
include 'connect.php';

if(isset($_POST['SignUpName'])){

    $userAccountEmail = $_POST['email'];
    $userAccountPassword = $_POST['password'];
    $userAccountPassword = md5($userAccountPassword);
    $userAccountName = $_POST['username'];

    $checkEmail = "SELECT * FROM useraccount where userAccountEmail= '$userAccountEmail'";
    $result = $conn -> query($checkEmail);
    if($result -> num_rows > 0 ){
        echo 'Email Address Already Exist!';

    }else{
        $insertQuery = 
        "INSERT INTO useraccount ( userAccountEmail, userAccountPassword,userAccountName) 
        VALUES ('$userAccountEmail','$userAccountPassword','$userAccountName')";

        if($conn -> query($insertQuery) == TRUE){
            header("location:index.php");
        }else{
            echo "Error: " .$conn -> error; 
        }
    }
}
 
if(isset($_POST['LogInName'])){
    $userAccountEmail=$_POST['email'];
    $userAccountPassword = $_POST['password'];
    $userAccountPassword = md5($userAccountPassword);

    $sql = "SELECT * FROM userAccount where userAccountEmail= '$userAccountEmail' and userAccountPassword='$userAccountPassword'";
    $result = $conn -> query($sql);
   

    if($result -> num_rows > 0){
        session_start();
        $row = $result -> fetch_assoc();
        $_SESSION['email']= $row['userAccountEmail'];
        header('location:homepage.php');
        
        
        exit();
        
    }else{

        echo "Not Found, Incorrect Email or Password" ;

    } 
}

?>