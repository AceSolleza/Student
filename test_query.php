<?php
$conn = new mysqli('hostname', 'username', 'password', 'database');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT `Name`, `Age` FROM `tablename` ORDER BY Quantity DESC LIMIT 5";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Name: " . $row['Name'] . " - Age: " . $row['Age'] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
