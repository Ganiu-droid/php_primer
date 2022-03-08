<?php 
    $title = "Switch Statement";
include './includes/header.php' ?>


    <?php     
        $grade = 'F';

        switch($grade){
            case 'A':
                echo "<h2 style='color: green;'> You have passed with $grade grade</h2>";
                break;
            case 'B':
                echo "<h2 style='color: green;'> You have passed with $grade grade</h2>";
                break;
            case 'C':
                echo "<h2 style='color: green;'> You have passed with $grade grade</h2>";
                break;
            default:
                echo "<h2 style='color: red;'> You have failed</h2>";
                echo "<br/>";
                echo "Please see your Course Supervisor";
                break;
            }
    ?>


<?php require './includes/footer.php' ?>