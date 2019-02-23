<?php

class Hotel
{
    public $name;
    public $price;
    public $details;
	public $image;
	public $email;
	public $id;
	
	function __construct($id, $name, $price, $details, $image, $email) {
		$this->name = $name;
		$this->price = $price;
		$this->details = $details;
		$this->image = $image;
		$this->email = $email;
		$this->id    = $id;
	}
}

?>