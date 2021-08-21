<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>PHP Primer - <?php echo $title ?></title>
</head>
<body>
    <div class="container">
        <!-- Basic HTML -->
        <h2>Follow each link to the page example</h2>
        <ul class="nav  flex-row nav-tabs">
            <li class="nav-item">
                <a class="nav-link <?php echo $home ?>" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo $rray ?>" href="array.php">Simple Array and Printouts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo $forLoop ?>" href="forloop.php">Simple For Loop</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo $whileDo ?>" href="whiledowhileloop.php">Simple While/Do While Loop</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo $ifStmnt ?>" href="ifstatement.php">Simple If Statement</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo $swtch ?>" href="switchstatement.php">Simple Switch Statement</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo $strings ?>" href="stringmanip.php">Simple String Manipulation</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo $dateTime ?>" href="datetimemanip.php">Simple Date and Time Manipulation</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo $functn ?>" href="functions.php">Simple Functions</a>
            </li>
        </ul>