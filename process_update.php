<?php
require ('dbconnect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $originalName = $_POST['originalName'];
    $Name = $_POST['Name'];
    $Age = $_POST['Age'];
    $Gender = $_POST['Gender'];
    $Absences = $_POST['Absences'];
    $GPA = $_POST['GPA'];

    // SQL query to update the record
    $sql = "UPDATE tablename SET Name = ?, Age = ?, Gender = ?, Absences = ?, GPA = ? WHERE Name = ?";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("sissds", $Name, $Age, $Gender, $Absences, $GPA, $originalName);

        if ($stmt->execute()) {
            echo "Record updated successfully.";
        } else {
            echo "Error updating record: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request method.";
}
?>
