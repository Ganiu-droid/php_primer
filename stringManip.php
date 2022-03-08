<?php
    $title = "header";
    include './includes/header.php' 
?>

    <?php
        //String Concateation
        $phrase1 = "Student who came late";
        $phrase2 = "People who Eat Chocolate";
        $name = "Durojaye Ganiu Segun";

        echo $phrase1 . " " .$name. " " . $phrase2;
        echo "<br/>";
        
        //String Transformation
        echo ucfirst($name. "<br/>");
        echo ucwords($name. "<br/>");
        echo strtoupper($phrase1. "<br/>");
        echo strtolower("HELLO WORLD OF PHP");
        echo "<br/>";
        $nameCapitalize = ucwords($name);
        echo str_repeat("Hello Candy <br/>", 10);
        echo strtoupper(str_repeat("Hello Candy <br/>", 10));
        echo str_repeat("<p>$phrase1  $nameCapitalize</p>", 4);

        echo count($name);

        echo "<br/>";
        echo substr($name, 0, count($name));
        
        echo "<hr/>";
        echo '<p>Find Character Position: '.strchr($name, 'G').' </p>';
        echo strpos($name, 'G');
        echo "<br/>";
        echo '<p>Length of a String: '.strlen($name).'</p> <br/>';
        echo '<p>Length of a String: '.strlen($phrase1).'</p> <br/>';
        echo '<p>Length of a String: '.strlen($phrase2).'</p> <br/>';

        echo "<hr/>";
        //Trim strings spaces
        echo '<h4>Trim spaces at both sides: A'.trim(" B C D ").'E</h4>';
        echo '<h4>Trim spaces at both sides: A'.ltrim(" B C D ").'E</h4>';
        echo '<h4>Trim spaces at both sides: A'.rtrim(" B C D ").'E</h4>';
        echo '<h4>Trim spaces at both sides: AJ'.trim(" B C D ").'AM</h4>';



    ?>
    <?php require './includes/footer.php' ?>