<?php
require ('dbconnect.php');

if (isset($_POST['delete'])) {
    $Name = mysqli_real_escape_string($conn, $_POST['Name']);
    $Age = mysqli_real_escape_string($conn, $_POST['Age']);
    $Gender = mysqli_real_escape_string($conn, $_POST['Gender']);
    $Absences = mysqli_real_escape_string($conn, $_POST['Absences']);
    $GPA = mysqli_real_escape_string($conn, $_POST['GPA']);

    // Corrected SQL DELETE query
    $sql = "DELETE FROM `tablename` WHERE `Name` = '$Name' AND `Age` = '$Age' AND `Gender` = '$Gender' AND `Absences` = '$Absences' AND `GPA` = '$GPA'";

    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
    header("Location: ../student/tables.php?delete=success"); 
    exit;
}
?>
