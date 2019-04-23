<?php

class Package {

	public $name;
    public $price;
	public $rating;
	public $image;
	
	function __construct($name, $price, $rating, $image){
		$this->name = $name;
		$this->price = $price;
		$this->rating = $rating;
		$this->image = $image;
	}
}

?>