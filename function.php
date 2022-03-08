<?php 
    $title = "Function";
    include './includes/header.php' 
?>
    <?php 
        function addNum($num1, $num2){
            $result = $num1 + $num2;
        }

        echo addNum(15, 36);
    ?>
    <?php require './includes/footer.php' ?>