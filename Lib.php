
<?php

    $servername = "localhost";
    $username = "root";
    $password = "1234";
    $dbname = "web programming";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM articles WHERE aid = '".htmlspecialchars($_GET["name"])."'" ;
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $title=$row["Title"];
            $Subtitle=$row["Subtitle"];
            $Content=$row["Content"];
            $ImagePath=$row["ImagePath"];
        }
    } else {
     echo "0 results";
    }
    $conn->close();

?>
