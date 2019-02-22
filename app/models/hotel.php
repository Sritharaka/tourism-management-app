<?php

class Hotel
{
    public $name;
    public $price;
    public $details;
	public $image;
	
	function __construct($name, $price, $details, $image) {
		$this->name = $name;
		$this->price = $price;
		$this->details = $details;
		$this->image = $image;
	}
}

?>