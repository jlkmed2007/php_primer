<?php
    $title = "Index";
    require 'includes/nav.php';
    $home = " active";
    require 'includes/header.php';
?>

    <?php
        // Printing to HTML using echo
        echo 'Hello PHP!';
        echo '<br/>';
        echo 'Second Line <br/>';
  
        // PHP variable declaration
        $name = 'Jose Medina';
        $age = 50;
        echo $name;
        echo '<h1>My name is: '.$name.'</h1>';
        echo '<h1>My age is: '.$age.'</h1>';
        // Echo using double quotes
        echo "<h1>My name is: $name</h1>";
    ?>
    <button type="button" class="btn btn-dark">CLICK ME!</button>
    <button type="button" class="btn btn-primary">CLICK ME!</button>
    <button type="button" class="btn btn-success">CLICK ME!</button>
    <a href="https://www.heroku.com" class="btn btn-danger" target="_blank">Heroku.com</a>
    <?php
        include 'includes/footer.php';
    ?>

