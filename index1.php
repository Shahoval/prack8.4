<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
$e = $_POST['firststring'];
$f = $_POST['secondstring'];
?>
<body>
<h1>Результати</h1>
    <p>1) <?php echo("$e $f"); ?></p>
    <p>2) <?php echo("$f $e"); ?></p>
<button><a href="index.php">Меню</a></button>
</body>
</html>