<?php
require_once __DIR__ . "/classes/smartphone.php";
require_once __DIR__ . "/classes/car.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" href="css/style.css">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>

	<section>
		<h1>SMARTPHONE</h1>

		<h2>IPHONE</h2>
		<p>Nome: <?php echo $smart1->name ?></p>
		<p>Marca: <?php echo $smart1->brand ?></p>
		<img src="<?php echo $smart1->img ?>" alt="">
		<p>Sistema opertivo: <?php echo $smart1->os ?></p>
		<p>Prezzo listino: <span class="barred"><?php echo number_format($smart1->getPrice(), 2, ",", ".") . "€" ?></span></p>
		<p>Sconto: <?php echo $smart1->setDiscount() . "%" ?></p>
		<p>Prezzo finale: <strong><?php echo number_format($smart1->setRealPrice(), 2, ",", ".") . "€" ?></strong></p>

		<h2>ONEPLUS</h2>
		<p>Nome: <?php echo $smart2->name ?></p>
		<p>Marca: <?php echo $smart2->brand ?></p>
		<img src="<?php echo $smart2->img ?>" alt="">
		<p>Sistema opertivo: <?php echo $smart2->os ?></p>
		<p>Prezzo listino: <span class="barred"><?php echo number_format($smart2->getPrice(), 2, ",", ".") . "€" ?></span></p>
		<p>Sconto: <?php echo $smart2->setDiscount() . "%" ?></p>
		<p>Prezzo finale: <strong><?php echo number_format($smart2->setRealPrice(), 2, ",", ".") . "€" ?></strong></p>
	</section>


	<section>
		<h1>AUTO</h1>

		<h2>Ferrari</h2>
		<p>Nome: <?php echo $car1->name ?></p>
		<p>Marca: <?php echo $car1->brand ?></p>
		<img src="<?php echo $car1->img ?>" alt="">
		<p>Potenza: <?php echo $car1->horsepower . "CV" ?></p>
		<p>Prezzo di listino: <?php echo number_format($car1->getPrice(), 2, ",", ".") . "€" ?></p>
		<p>Sconto: <?php echo $car1->setDiscount() . "%" ?></p>
		<p>Prezzo finale: <?php echo number_format($car1->setRealPrice(), 2, ",", ".") . "€" ?></p>

		<h2>Aston Martin</h2>
		<p>Nome: <?php echo $car2->name ?></p>
		<p>Marca: <?php echo $car2->brand ?></p>
		<img src="<?php echo $car2->img ?>" alt="">
		<p>Potenza: <?php echo $car2->horsepower . "CV" ?></p>
		<p>Prezzo di listino: <?php echo number_format($car2->getPrice(), 2, ",", ".") . "€" ?></p>
		<p>Sconto: <?php echo $car2->setDiscount() . "%" ?></p>
		<p>Prezzo finale: <?php echo number_format($car2->setRealPrice(), 2, ",", ".") . "€" ?></p>
	</section>



</body>

</html>