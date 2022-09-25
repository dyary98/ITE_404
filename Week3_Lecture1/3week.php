<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="php.css">
</head>
<body>

<select id="select" name= 'years'>

<?php
$dateoftheyear = date("Y");
for ($i=1990; $i < $dateoftheyear + 1 ; $i++) { 
    echo "<option class='option' value=\"$i\">$i</option>";
}
echo "</select>";
    // $x = 2;
    // $y = true;
    // $z = 1==1;
    // $m = 1;

    // if ($m *0) {
    //     echo "<p>";
    //     echo date("Y m d");
    //     echo "slaw";
    //     echo "</p>";
    // }elseif ($x == 2) {
    //     echo "test";
    //     echo "test";
    //     echo "test";
    //     //elseif, you must have an if condition before an elseif
    // }

    // switch ($m) {
    //     case 1:
    //             echo "here";
    //         break;
    //     case 2:
    //             echo "here";
    //         break;
        
    //     default:
    //             break;
    // }
    
    
    
   
    

    // while ($a <= 10) {
    //     # code...
    // }

    // do {
    //     # code...
    // } while ($a <= 10);
?>

<!-- <?php
for ($d=0; $d < 20; $d++) { 
    # code...
}
?>
<p>slaw</p>

<?php
}
// ?> -->

<!-- 
    for the code above
you can use other programming languages or
html with for loops and while loops if statements
from php and the rest from other langauges
 -->


 //endless loops can cause crash of the brawser

</body>
</html>

