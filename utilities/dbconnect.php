<<<<<<< HEAD
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "petsada"; 

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
=======
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "petsada"; 

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
>>>>>>> 706c2167ea97f6d170709abd0642e606d82008d4
?>