<?php
    $title = "If Statement";
    require 'includes/nav.php';
    $ifStmnt = " active";
    include 'includes/header.php';
?>
    <?php
        //An If state that will carry out an action based on the value of the variable.

        echo '<h2>IF-ELSE Statement</h2>';
        $grade = 80;
        if($grade >= 50) {
            echo '<h3 style="color: green">You have PASSED</h3>';
        }
        else {
            echo '<h3 style="color: red">You have FAILED</h3>';
        }
        $grade = 'A';
        // If-Else If- Else
        if ($grade == 'A') {
            echo '<h2 style="color: green">You are a SUPERSTAR!</h2>';
        }
        elseif ($grade == 'B') {
            echo '<h2 style="color: blue">You did Well!</h2>';
        }
        else {
            echo '<h2 style="color: red">You have FAILED!</h2>';
        }
    ?>
    <?php
        require 'includes/footer.php';
    ?>