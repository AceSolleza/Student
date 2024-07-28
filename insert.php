<?php
    include_once ('dbconnect.php');

    $Name = $_POST['Name'];
    $Age = $_POST['Age'];
    $Gender = $_POST['Gender'];
    $Absences = $_POST['Absences'];
    $GPA = $_POST['GPA'];

        $sql1 = "INSERT INTO `tablename`(`Name`,`Age`,`Gender`,`Absences`,`GPA`) VALUES ('$Name','$Age','$Gender','$Absences','$GPA')";
        $result1 = mysqli_query($conn, $sql1);

        header("Location: ../student/tables.php?insert=success");
?>