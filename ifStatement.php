<?php
    $title = "If statement";
    include './includes/header.php' 
?>

    <?php 
        $grade = "D";

        if($grade == "A"){
            echo "<h2 style='color: green;'> You have passed with $grade grade</h2>";
        }
        elseif($grade == "B"){
            echo "<h2 style='color: green;'> You have passed with  $grade grade</h2>";
        }
        else{
            echo "<h2  style='color: red;'> You have failed with $grade grade</h2>";
        }
    ?>
    <?php require './includes/footer.php' ?>