<?php
include_once "class/Shape.php";
include_once "class/Triangle.php";
$triangle = new Triangle('triangle');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    Side 1:<input type="text" name="side1"><br>
    Side 2:<input type="text" name="side2"><br>
    Side 3:<input type="text" name="side3"><br>
    <input type="submit" value="Calculator">
</form>
<?php
$triangle->setSide1($_POST['side1']);
$triangle->setSide2($_POST['side2']);
$triangle->setSide3($_POST['side3']);
echo $triangle->toString();
?>
</body>
</html>
