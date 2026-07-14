<?php
include "db.php";
include "header.php";
$id=$_GET["id"];
$sql="SELECT*FROM customers WHERE membership_id= $id";
$result =$conn->query($sql);
$row=$result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cinewave-Me</title>
        <link rel="stylesheet" href="css/styles.css">
        <link href="https://fonts.googleapis.com/css2?family=Lavishly+Yours&family=Quantico:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    </head>
    <body class="body">
        <h1>Profile</h1>
        <img src="https:profilephoto.com">
        <section class="container">
        <h3><?php echo $row["email"]; ?></h3>
        <h3><?php echo $row["date_of_birth"]; ?></h3>
        <h3>Membership points:<?php echo $row["points"]; ?> </h3>
       <a href="profile_edit.php?id=<?php echo $row['membership_id'];?>"></a> <btn class="btn">Edit Profile</btn>
         </section>

    </body>
<?php
    include" footer.html";
?>
</html>