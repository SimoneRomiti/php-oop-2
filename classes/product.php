<?php 

	class Product{
		public $name;
		private $price;
		private $discount;
		public $img;

		public function __construct($constrName, $constrPrice, $constrDiscount, $constrImg) {
			$this->name = $constrName;
			$this->price = $constrPrice;
			$this->discount = $constrDiscount;
			$this->img = $constrImg;
		}

		protected function getDiscount(){
			return $this->discount;
		}

		public function getPrice()
		{
			return $this->price;
		}
	}

	$prod1 = new Product("Iphone", 1200, 10, "https://www.pcportatili.it/wp-content/uploads/2020/10/iphone-12-pro.jpg");

	// var_dump($prod1);

?>