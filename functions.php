<?php
    $title = "Functions";
    require 'includes/nav.php';
    $functn = " active";
    include 'includes/header.php';
?>
    <h1>PHP Functions</h1>
    <?php
        // Defining a Function
        function writeMessage() {
            echo "You are really a nice person, have a nice day!";
        }

        // Calling a function
        writeMessage();
        echo "<hr/>";
        writeMessage();
        echo "<hr/>";

        // Functions with parameters
        function addNumbers($num1, $num2) {
            $sum = $num1 + $num2;
            $num2 = $num2 + 1;
            echo "The sume of $num1 and $num2 is: $sum <br/>";
        }

        // Defining parameted passed by reference
        function changeNum(&$num){
            $num += 10;
        }

        function returnProduct($num1, $num2) {
            return $num1 * $num2;
        }

        $num = 500;
        addNumbers(10, 20);
        addNumbers(10, $num);
        addNumbers("10", "20");
        changeNum($num);
        echo $num. "<br/>";

        echo "The product of 10 and 20 is: " . returnProduct(10,20);
    ?>
    <?php
        require 'includes/footer.php';
    ?>