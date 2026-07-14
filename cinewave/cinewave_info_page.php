<?php
include "db.php";
include "header.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Cinewave_info_page</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Lavishly+Yours&family=Quantico:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>

<body class="body">
    <div>
        <nav>
            <li></li>
        </nav>
    </div>
    <main class="container">
        <div class="card">
            <a href="booking_management.php">Booking Management</a>
        </div>
        <div class="card">
            <a href="payment_management.php">Payment Management</a>
        </div>
        <div class="card">
            <a href="movie_management.php">Movie Management</a>
        </div>
        <div class="card">
            <a href="fnb_management.php">FNB Management</a>
        </div>
        <div class="card">
            <a href="showtime_management.php">Showtime Management</a>
        </div>
        <div class="card">
            <a href="hall_management.php">Hall Management</a>
        </div>
        <div class="card">
            <a href="promotion_management.php">Promotion Management</a>
        </div>
        <div class="card">
            <a href="reward_management.php">Reward Management</a>
        </div>
        <div class="card">
            <a href="report_generator.php">Report generator</a>
        </div>
    </main>
</body>
<?php
include "footer.html" ?>

</html>