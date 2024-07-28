<?php
require ('dbconnect.php');

if (isset($_POST['update'])) {
    $Name = $_POST['Name'];
    $Age = $_POST['Age'];
    $Gender = $_POST['Gender'];
    $Absences = $_POST['Absences'];
    $GPA = $_POST['GPA'];

    // Create update form with pre-filled data
    echo '<form method="POST" action="process_update.php">';
    echo '<input type="hidden" name="originalName" value="' . $Name . '">';
    echo '<input type="text" name="Name" value="' . $Name . '">';
    echo '<input type="text" name="Age" value="' . $Age . '">';
    echo '<input type="text" name="Gender" value="' . $Gender . '">';
    echo '<input type="text" name="Absences" value="' . $Absences . '">';
    echo '<input type="text" name="GPA" value="' . $GPA . '">';
    echo '<button type="submit">Update</button>';
    echo '</form>';
}
?>
