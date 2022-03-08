<?php 
    $title = "Date Manipulation";
    include './includes/header.php' 
?>
    <h1>Date and Time Manipulation<h2>
    <?php 
        $datenow = getdate();
        echo "<p>Today's date: </p>";
        $year = $datenow['year'];
        $month = $datenow['mon'];
        $day = $datenow['mday'];

        echo "<p>Today's date is: $year/$month/$day</p>";

        print date("m/d/y G.i:s<br/>", time()). '<br/>';
    ?>
    <?php require './includes/footer.php' ?>