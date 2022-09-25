<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET" action="submit.php">
        <label for="firstInput">firstInput</label>
        <input name = "firstInput" type="Email">
        <br>
        <label for="lname">LastName</label>
        <input name ="lname" type="text">
        <br>
        <textarea name="address" id="address" placeholder="Enter text" cols="30" rows="10"></textarea>

        <br>
        <input type="radio" id="radioBtn1" name = "radioButton" value="MR">
        <label for="radioBtn1">MR</label>
        <input type="radio" name = "radioButton" id = "radioBtn2"value="Miss">
        <label for="radioBtn2">Miss</label>

        <input type="radio" name = "radioButton" id = "radioBtn3" value="Mrs">
        <label for="radioBtn3">Mrs</label>

        <input type="radio" name = "radioButton" id="radioBtn4"value="Others">
        <label for="radioBtn4">Others</label>

        <br>

        <label for="Email" require>Email</label>
        <input name ="Email" type="Email">
        <br>
        <input type="submit"  value ="send my value">
        <input type="hidden" name="UNI"  value ="Auis">


    </form>
</body>
</html>