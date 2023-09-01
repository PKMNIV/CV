<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../styles/style.css">
    <script src="../scripts/script.js" defer></script>
    <title>Projectpage</title>
</head>

<body>
    <header id="header" class="container">
        <span class="material-symbols-outlined" id="nav-toggle">
            menu
        </span>
        <nav id="nav-menu">
            <ul>
                <li><a href="../index.html">Home</a></li>
                <li><a href="about.html">Over mij</a></li>
                <li><a href="project.php">Projectpagina</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
    </header>
<?php
require("../backend/dbconnection.php");
//make a connection with the db
$connection = db_connect();
//query the db
$query = "SELECT * FROM Projecten";
$result = db_query($connection, $query);

//Print the ID, Title, Description, Creation Date and Image of the Projecten
while($row = mysqli_fetch_assoc($result)){
    echo "<div class='container'>";
    echo "<article class='card'>";
    echo "<header class='card-title'>";
    echo "<h3>" . $row['Title'] . "</h3>";
    echo "</header>";
    echo "<div class='card-image'>";
    echo "<img src='../images/" . $row['Image'] . "' alt=''>";
    echo "</div>";
    echo "<div class='card-description'>";
    echo "<p>" . $row['Description'] . "</p>";
    echo "</div>";
    echo "<footer class='card-date'>";
    echo "<p>" . $row['Creation Date'] . "</p>";
    echo "</footer>";
    echo "</article>";
    echo "</div>";
}

?>
</body>

</html>