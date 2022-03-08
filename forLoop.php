<?php 
    $title = "ForLoop";
    include './includes/header.php' 
?> 
        for($count = 1; $count < 10; $count++){
            echo "<p>Hello world</p>";
        }
        for($count = 1; $count < 10; $count++){
            echo "<p>This is count: $count</p>";
        }

    ?>
    <?php require './includes/footer.php' ?>