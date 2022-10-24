<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit</title>
    <link rel="stylesheet" href="php.css">
</head>
<body>
    <?php
    // decalraing array
    $first = $_GET["firstInput"];
    $address = $_GET["address"];
    // $second = $_GET["lname"];
    echo "<p>first Name: $first</p>";
    echo"<br>";

    echo "<p>Last Name:".$_GET['lname']."</p>";
    echo"<br>";

    echo "<p>Address: $address</p>";
    echo"<br>";

    echo "<p> Title: ".$_GET['radioButton']."</p>";
    echo"<br>";

    echo "<p> Title: ".$_GET['Email']."</p>";
    echo"<br>";


    print_r($_GET);


    ?>
</body>
</html>