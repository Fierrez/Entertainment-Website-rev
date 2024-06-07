<?php
include 'connect.php';

if(isset($_POST['SignUpName'])){

    $userAccountEmail = $_POST['emailSignUp'];
    $userAccountPassword = $_POST['passwordSignUp'];
    $userAccountPassword = md5($userAccountPassword);
    $userAccountName = $_POST['usernameSignUp'];

    $checkEmail = "SELECT * FROM useraccount where userAccountEmail= '$userAccountEmail'";

    $result = $conn -> query($checkEmail);
    if($result -> num_rows > 0 ){
        echo 'Email Address Already Exist!';

    }else{
        $insertQuery = 
        "INSERT INTO useraccount ( userAccountEmail, userAccountPassword,userAccountName) 
        VALUES ('$userAccountEmail','$userAccountPassword','$userAccountName')";

        setcookie("userName",$userAccountName, time()+ 1114445, "/");


        if($conn -> query($insertQuery) == TRUE){
            header("location:index.php");
                
            
        }else{
            echo "Error: " .$conn -> error; 
        }
    }
}




if(isset($_POST['LogInName'])){
    $userAccountEmail=$_POST['emailLogIn'];
    $userAccountPassword = $_POST['passwordLogIn'];
    $userAccountPassword = md5($userAccountPassword);

    $sql = "SELECT * FROM userAccount where userAccountEmail= '$userAccountEmail' and userAccountPassword='$userAccountPassword'";
    $result = $conn -> query($sql);
    

    if($result -> num_rows > 0){
        session_start();
        $row = $result -> fetch_assoc();
        $_SESSION['emailLogIn']= $row['userAccountEmail'];
        header('location:index.php');
        echo " Found, Correct Email or Password" ;

        if(isset($_SESSION['emailLogIn'])){
            $userAccountEmail = $_SESSION['emailLogIn'];
            
            $query =mysqli_query($conn, "SELECT useraccount.* FROM `useraccount` where useraccount.userAccountEmail = '$userAccountEmail' ");
          
            while($row=mysqli_fetch_array($query)){
                echo $row['userAccountName'];
                echo $row['userAccountEmail'];

                $cookie_username= $row['userAccountName'];
                $cookie_useremail= $row['userAccountEmail'];

                setcookie("userName",$cookie_username, time()+ 1114445, "/");

                // $_SESSION['username']= $cookie_username;
                // $_SESSION['usermail'] = $cookie_useremail;

            }

        }
        
        exit();
        
        
    }else{
        echo "Not Found, Incorrect Email or Password";
        
        
    }   
}

?>

