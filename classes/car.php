<?php 

	require_once __DIR__."/product.php";

	class Car extends Product{
		public $horsepower;

		public function __construct($constrName, $constrBrand, $constrPrice, $constrDiscount, $constrImg, $constrHorsepower) {
			parent::__construct($constrName, $constrBrand, $constrPrice, $constrDiscount, $constrImg);
			$this->horsepower = $constrHorsepower;
		}

		public function setDiscount(){
			$prevDiscount = parent::getDiscount();
			if($this->brand == "Ferrari"){
				$realDiscount = $prevDiscount + 5;
			} elseif($this->brand == "Aston Martin"){
				$realDiscount = $prevDiscount + 10;
			}
			return $realDiscount;
		}

		public function setRealPrice(){
			$realDiscount = $this->setDiscount();
			$prevPrice = parent::getPrice();
			return $prevPrice - $prevPrice * $realDiscount / 100;
		}
	}

	$car1 = new Car("LaFerrari FXXK", "Ferrari", 4000000, 0, "https://upload.wikimedia.org/wikipedia/commons/f/f4/2015_Ferrari_FXX-K_in_Shanghai.jpg", 1050);

	$car2 = new Car("Aston Martin Valkyrie", "Aston Martin", 2800000, 0, "https://upload.wikimedia.org/wikipedia/commons/thumb/e/ec/Aston_Martin_Valkyrie_Verification_Prototype_001_Genf_2019_1Y7A5569.jpg/280px-Aston_Martin_Valkyrie_Verification_Prototype_001_Genf_2019_1Y7A5569.jpg", 1014);


?>