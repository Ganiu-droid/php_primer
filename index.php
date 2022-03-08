<?php 
    $title = "Index";
    include './includes/header.php'
?>

    <?php 
        $name = "Ganiu Durojaye";
        $age = 21;
        echo '<br/>';
        echo '<h1>This is the HOME page </h1>';
        echo '<br/>';
        //echo using double quotation
        echo "<h1> My age is: $age </h2>";
        echo "<h1>My age is:  </h1>";
    ?>
    <button class="btn btn-primary" >Click me</button>
    <button class="btn btn-danger" >Click me</button>
    <button class="btn btn-warning" >Click me</button>
    <a href="http://www.heroku.com" class="btn btn-success" target ="_blank">Visit heroku</a>
    <?php require './includes/footer.php' ?>