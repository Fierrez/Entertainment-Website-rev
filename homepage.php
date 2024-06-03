<?php
session_start();
include ("connect.php");


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    <div style="text-align:center;padding:15%;">
        <p style="font-size:50px;font-weight:bold;">
            Hello <?php
                if(isset($_SESSION['email'])){
                    $userAccountEmail = $_SESSION['email'];
                    $query =mysqli_query($conn, "SELECT useraccount.* FROM `useraccount` where useraccount.userAccountEmail = '$userAccountEmail' ");
                  
                    while($row=mysqli_fetch_array($query)){
                        echo $row['userAccountName'];
                    }

                }

            ?>
            
        </p>

    </div>
</body>
</html>