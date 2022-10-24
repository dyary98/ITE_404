<?php 
//include 'lec15.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>


<!-- 
key advantages of using function is reducing code duplication
another way for reducing code duplication is the keyword include 
include is similar to calling a function
the moment you see include keyword php will stop executing the 
current file and jump to another file and execute whatever is in there.
you can move from one include statement to another
You can add all the functions you need in one file, then include the file
and call the functions. 
php will assume the path of the include is in the same directory. 
you can use 
include '../lec15.php'
include './auis/auis/lec15.php'
if it is not in the same directory

keyword require is identical in the terms of functionality
but there is a small difference
include is more forgiving, if you use include and there is an error it will give you a warning and 
keeps executing the file
but require will stop executing the whole file
both of them are used but depending on the context

two other keywords similar to include and require:
include once
require once


his is a behavior similar to the include statement, with the only difference being that if the code from a file 
has already been included, it will not be included again, and include_once returns true . As the name suggests, 
the file will be included just once.



As the name suggests, the file will be included just once. include_once may be used in
cases where the same file might be included and evaluated more than once during a particular 
execution of a script, so in this case it may help avoid problems such as function redefinitions, 
variable value reassignments, etc.


Require means it needs it. Require_once means it will need it but only requires it once. Include 
means it will include a file but it doesn't need it to continue. There is also an include_once function
 which includes a file once.

 -->


<body>
    <?php

   //echo $server;
   $textbox = $_GET["text"];
   //encoding decoding ........... base64 bultin function in php takes a string gives you back a string;
   //secuirity one o one 
   // encoding: you have a data, you are going to change its fomr to something else thats quite different from the originak valu, you cahnge it to something new, and you can decoded back to the original data
   // going from original to new : encoding the reverse of this is decoding
    // it is not about secuirty that we use this decoding and encoding 
    // three benifits:
    // no matter the language you give it, it will give you back english
    //there is no spaces, you dont need to worry about spaces,

   $output = base64_encode($textbox);
   echo "The encoded textbox is : " . $output;
   $msg = base64_decode($output);
   echo "The decoded textbox is : " . $msg;

   $textarea = $_GET["textarea"];
   echo "<br>";

   echo "original textbox: " . $textbox;
   echo "<br>";
   echo "textarea: ". $textarea;
    ?>

    </body>