<?php
include "db.php";
include "header.php";
 $id=$_GET["id"];
$sql="SELECT * FROM customers WHERE membership_id=$id";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
    <head>
        <title> CineWave-Profile Edit</title>
    </head>
    <body class="body">
        <?php
        if(isset($_POST["submit"])){
            $fullname=$_POST["fullname"];
            $phone_number=$_POST["phone_number"];
            $email=$_POST["email"];
            $date_of_birth=$_POST["date_of_birth"];

            $sql="UPDATE customers
                SET fullname='$fullname', phone_number='$phone_number',email='$email',date_of_birth='$date_of_birth'
                WHERE membership_id=$id";
            if($conn->query($sql)===TRUE){
                echo"Profile Change Successfully";
                echo "<br/><a href='aboutme.php'>Back to Profile</a>";
            }else{
                echo "Error".$conn->error;
            }
        }
        ?>
    </body>
</html>