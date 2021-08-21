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
   
        include 'includes/footer.php';
    ?>

