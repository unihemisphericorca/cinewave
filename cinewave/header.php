<?php
    include"db.php";
    
 
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/styles.css">
        <link href="https://fonts.googleapis.com/css2?family=Lavishly+Yours&family=Quantico:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
        <a href=index.php><h1>Cinewave</h1></a>
        <?php
           session_start();
             if(!isset($_SESSION['email'])){?>
        <nav>
            <a href="movie.php">Movie</a>
            <a href="fnb.php">Food and Beverage</a>
            <a href="promotion.php">Promotion</a>
            <a href="login.php"><btn class="btn">Login/Register</btn></a>
        </nav>
        <?php 
    } else{
        
    ?>
     <nav>
            <a href="movie.php">Movie</a>
            <a href="fnb.php">Food and Beverage</a>
            <a href="promotion.php">Promotion</a>
            <a href="reward.php">Reward</a>
            <a href="aboutme.php">Me</a>
        </nav>
        <?php
    }
    ?>
        </header>
    </body>
</html>