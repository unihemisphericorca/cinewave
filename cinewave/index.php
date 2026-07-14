<?php
include "db.php";
include "header.php";
$sql="SELECT *FROM movie";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinewave</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <img src="https:promotion banner">
    <h1>Now Showing</h1>
    <a href="movie.php"><btn class="btn">Learn More</btn></a>
    <?php
        while($row=$result -> fetch_assoc()){
        ?>
    <img src="<?php echo $row['path']; ?>" alt="Movie Poster">
    <?php
        }
    ?>
</body>
<?php
include "footer.html"?>
</html>