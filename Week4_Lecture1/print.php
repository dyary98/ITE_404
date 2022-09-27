<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- 
    Some notes from youtube

    "." the dot in php is equall to "+" sign of java when you want to concatinate two strings
    java code 
    int a = 99;
    System.out.println("the variable a's value or number is " + a);
    thats how we concatinate a string with a variable in java 

    PHP code 
    $a = 99;
    echo "the variable a's value or number is " . $a



    There is a small difference between "" Double quote and '' single quote in php 

    with double quote we can do the following 
    echo "the variable a's value or number is $a"
    we can put the variables inside the double quote and it can understand that if it is a variable or not

    with single quote we can not do that
    echo 'the variable a's value or number is ' . $a
    we have to do it this way, we can not put a variable inside a single quote. we have to concatinate it with the help of the "." dot



    How to escape some characters in php 

    echo "The man said " HI " "; this will give you an error you are expecting to be shown on the browser as
    The man said "HI"
    inorder to do that we have to use the backslash inorder to escape that cahracter from being read
    echo "The man said \" HI \" ";
    the correct way

 -->
    <?php
        echo "<b>".$_POST['username']."</b>";
    ?>

    <!-- key advantage for using  POST 
            hides sensitive data


-->
<!-- 
    key advantage for using  GET
    you can use hiperlink to send the data, you can not do it with post
    you can share it(the link) with other people, 
 -->
</body>
</html>