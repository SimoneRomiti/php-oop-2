<?php 

	class Product{
		public $name;
		public $brand;
		private $price;
		private $discount;
		public $img;

		public function __construct($constrName, $constrBrand, $constrPrice, $constrDiscount, $constrImg) {
			$this->name = $constrName;
			$this->brand = $constrBrand;
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


?>