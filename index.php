<?php
require_once __DIR__ . "/classes/smartphone.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<h1>IPHONE</h1>
	<p>Nome: <?php echo $smart1->name ?></p>
	<p>Sconto: <?php echo $smart1->setRealPrice() ?></p>

	<h1>ONEPLUS</h1>
	<p>Nome: <?php echo $smart2->name ?></p>
	<p>Sconto: <?php echo $smart2->setRealPrice() ?></p>
</body>

</html>