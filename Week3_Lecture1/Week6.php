<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <?php
    // func1'()if you call it here it might execute or not depending on if it has been called before.
    //     function func1(){
    //         echo "called from func1";
    //         print("<br>");
    //         print("end func1");
    //     }
    //     //func1();

    //     function func2(){
    //         echo "<select>";
    //         for ($i=1; $i <12 ; $i++) { 
    //             echo "<option> $i </option>";
    //         }
    //         echo "</select>";
           
    //     }
    //     func2();
    //     function dropdownFunction($x, $y){
            
    //         print("<select name='month'>");
    //         foreach ($months as $k => $v) {
    //             print("<option value =\"$k\">$v </option>");
    //         }
    //         print("</select>");
    //         print("$x+$y");
    //         return $x + $y;
    //         //nothing would be executed after the return keyword's line.
    //     }
    //    $z =  dropdownFunction(7, 18);
       function inClassLab2($x, $y){
            if(is_numeric($x) AND is_numeric($y)){
                return $x * $y;
            }
    
        return 0;
        //nothing would be executed after the return keyword's line.
    }
    $abc = inClassLab2(8, 15);
    print("<i>result: $abc</i>");
    ?>

    <!-- <?php
  // create the 'scores' array
  //$scores = array(9,7,112,89,633,309);
  // create the 'average' function0
  //function average($array){
    // set 'total' to 0
    //$total = 0;
    //foreach($array as $value){
      // adds the value of each item in the array, one by one
    //   $total += $value;
    
    // calculate the average and return the result
    // return $total/count($array);
  
  // call the 'average' function and use the 'scores' array as argument
//   echo "Average = ", average($scores);
?> -->
</body>
<?php
?>

<?php
?>

</html>