<?php
    $title = "While/Do-While Loop";
    require 'includes/nav.php';
    $whileDo = " active";
    include 'includes/header.php';
?>
    <h1>While Loop</h1>
    <?php
        $grade = 0;
        while ($grade < 10) {
            echo "<p>I'm less than 10: $grade</p>";
            $grade++;
        }
        echo "<p>Exit Loop</p>";
    ?>
    <h1>Do-While Loop</h1>
    <?php 
        $grade = 0;
        do {
            echo "<p>I'm less than 10: $grade</p>";
            $grade++;
        } while ($grade < 10);
        echo "<p>Exit Loop</p>";
    ?>
    <?php
        require 'includes/footer.php';
    ?>