<?php
    $title = "For Loop";
    require 'includes/nav.php';
    $forLoop = " active";
    include 'includes/header.php';
?>
    <h1>For Loop</h1>
    <?php
        for ($count=0; $count < 10; $count++) { 
            echo '<p>Hello World!</p>';
        }

        for ($count=0; $count < 10; $count++) { 
            echo "<p>The cound is: $count</p>";
        }
    ?>
    <?php
        require 'includes/footer.php';
    ?>