<?php
    $title = "Switch Statement";
    require 'includes/nav.php';
    $swtch = " active";
    include 'includes/header.php';
?>
    <h1>Switch Statements</h1>
    <?php
        $grade = 'A';

        switch ($grade) {
            case 'A':
                echo '<h2 style="color: green">You are a SUPERSTAR!</h2>';
                break;
            
            case 'B':
                echo '<h2 style="color: blue">You did Well!</h2>';
                break;

            default:
            echo '<h2 style="color: red">You have FAILED!</h2>';
                break;
        }
    ?>
    <?php
        require 'includes/footer.php';
    ?>