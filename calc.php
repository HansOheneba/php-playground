<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP|Calculator</title>
</head>
<body>
    <form action="calc.php" method="post">
First number: <input type="number" name="num1">
<br>
Operator: <input type="text" name="op">
<br>
Second number:<input type="number" name="num2">
<br>
<input type="submit">
    </form>
    Answer: <?php 
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $op = $_POST["op"];

    if($op == "+"){
        echo $num1 + $num2;
    }
    elseif($op == "-"){
        echo $num1 - $num2;
    }
    elseif($op == "/"){
        echo $num1 / $num2;
    }
    elseif($op == "*"){
        echo $num1 * $num2;
    }
    else{
        echo "invalid operator";
    }

    ?>
</body>
</html>