<?php
    $title = "While Loop";
    include './includes/header.php' 
?>

    <h1>While loop</h1>
    <?php 
        //While Loop
        // $grade = 1;
        // while($grade < 10){
        //     echo "I am less than 10";
        //     $grade++;
        // }

        ?>

    <h1>Do while Loop</h1>
    <?php
        //Do while Loop
        $grade = 0;
        do{
            echo "<p>$grade is less than 10</p>";
            $grade++;
        }
        while ($grade < 10)
        
    ?>
    <?php require './includes/footer.php' ?>