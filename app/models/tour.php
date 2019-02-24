<?php

class Tour
{   public $id;
    public $name;
    public $price;
    public $details;
	public $image;
    public $destination;
    public $tourType;
	
	
	function __construct($id, $name, $price, $details, $image, $destination, $tourType) {
		$this->name = $name;
		$this->price = $price;
		$this->details = $details;
		$this->image = $image;
		$this->destination = $destination;
        $this->id    = $id;
        $this->tourType = $tourType;
	}
}

?>