<?php
    $title = "Date and Time Manipulation";
    require 'includes/nav.php';
    $dateTime = " active";
    include 'includes/header.php';
?>
    <h1>Date and Time Manipulation</h1>
    <?php
        $datenow = getdate();
        // print_r($datenow);
        echo "Today's Date: <br/>";
        echo $datenow['mday'] . " " . $datenow['month']." " . $datenow['year']."<br/>";

        echo $datenow['mon'] . "/" . $datenow['mday']."/" . $datenow['year']."<br/><hr/>";

        echo time();
        print date("m/d/y G:i:s<br>", time()) . '<br/>';
        print "Today is ";
        print date("j \o\\f F Y, \a\\t g:i a", time());
    ?>
    <?php
        require 'includes/footer.php';
    ?>