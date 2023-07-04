<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP|Calculator</title>
</head>
<body>
    <form action="index.php" method="get">
Name: <input type="text" name="username">
    </form>
    <?php 
    $username = "Your name will appear here";
    echo $_GET["username"]; ?>
</body>
</html>