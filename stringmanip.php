<?php
    $title = "String Manipulation";
    require 'includes/nav.php';
    $strings = " active";
    include 'includes/header.php';
?>
    <h1>String Manipulation</h1>
    <?php
        $phrase1 = "Students who came late";
        $phrase2 = "in class, stand with Rock";
        $name = "trevoir williams";

        echo $phrase1 . ", named Tiffany,  " . $phrase2;
        echo '<hr/>';

        //string transformation
        echo '<br/>Uppercase first letter: ' . ucfirst($name);
        echo '<br/>Uppercase first letter of each word: ' . ucwords($name);
        echo '<br/>Upper case string: ' . strtoupper($name);
        echo '<br/>Lower case string: ' . strtolower("THIS WAS ALL UPPER CASE");
        echo '<hr/><br/>Repeat String: ' . strtoupper(str_repeat('a', 10));

        echo '<hr/><br/>Get a Substring: ' . substr($name, 5, 10);

        echo '<hr/><br/>Get position of string: ' . strpos($name, 'm');
        //Returns NULL
        //echo '<hr/><br/>Get position of string: ' . strpos($name, 'z');

        echo '<hr/><br/>Find Character "R": ' . strchr($name, 'R');
        echo '<br/>Find Character "r": ' . strchr($name, 'r');
        echo '<br/>Find Character "s": ' . strchr($name, 's');
        echo '<br/>Find Character "e": ' . strchr($name, 'e');
        echo '<br/>Find Character "e": ' . strchr($name, 'e');

        echo '<hr/><br/>Find Length of String: ' . strlen($name);

        echo '<hr/><br/>Without Trim: '. "A" . " B C D " . "E";
        echo '<br/>Trim spaces on both sides: '. "A" . trim(" B C D ") . "E";
        echo '<br/>Trim spaces to the left: '. "A" . ltrim(" B C D ") . "E";
        echo '<br/>Trim spaces to the right: '. "A" . rtrim(" B C D ") . "E";

        echo '<hr/><br/>Replace string with another: '.  str_replace("stand", "sit", $phrase2 );
    ?>
    <?php
        require 'includes/footer.php';
    ?>