<?php 
    $title = "Function";
    include './includes/header.php' 
?>

    <?php 
        function addNum($num1, $num2){
            $result = $num1 + $num2;
            echo $result;
        }
        addNum(5, 6);
    ?>
    <?php require './includes/footer.php' ?>