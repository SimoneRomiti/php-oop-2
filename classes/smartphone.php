<?php 

	require_once __DIR__."/product.php";

	class Smartphone extends Product{
		public $os;

		public function __construct($constrName, $constrBrand, $constrPrice, $constrDiscount, $constrImg, $constrOs) {
			parent::__construct($constrName, $constrBrand, $constrPrice, $constrDiscount, $constrImg);
			$this->os = $constrOs;
		}

		public function setDiscount(){
			$prevDiscount = parent::getDiscount();
			if($this->os == "Ios"){
				return $prevDiscount + 5;
			} elseif($this->os == "Android"){
				return $prevDiscount + 15;
			}
		}

		public function setRealPrice(){
			$prevPrice = parent::getPrice();
			$realDiscount = $this->setDiscount();
			return $prevPrice - $prevPrice * $realDiscount / 100;
		}



	}

	$smart1 = new Smartphone("Iphone 12pro", "Apple", 1200, 10, "https://www.pcportatili.it/wp-content/uploads/2020/10/iphone-12-pro.jpg", "Ios");

	$smart2 = new Smartphone("OnePlus 8t", "OnePlus", 800, 10, "https://www.tomshw.it/images/images/2020/10/oneplus-8t-118481.jpg", "Android");
	

?>