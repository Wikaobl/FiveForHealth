<?php
$servername = 'localhost';
$username = "root";
$password = "";
$database = "good_habits";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Błąd połączenia z bazą danych: " . mysqli_connect_error());
}

$query = "SELECT * FROM `habits`ORDER BY RAND() LIMIT 5";
$result = mysqli_query($conn, $query);
$time = date("H:i");


if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='habit-and-icon'><div class='habit-container'>
        <p class='habit'>" . $row['nazwa nawyku'] . "</p></div>" . "<div class='icon-container'><i class='icon check fas fa-check'></i> <i class='icon xmark fa-solid fa-xmark'></i></div></div>";
    }
} else {
    echo "Brak danych w bazie.";
}

mysqli_close($conn);
?>