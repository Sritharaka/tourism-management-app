<?php
class Booking
{
    public $id;
    public $user_id;
    public $hotel_id;
    public $package_id;
    public $tour_id;

    public $hotel;
    public $package;
    public $tour;

    public function __constructor($id, $user_id, $hotel_id = 0, $package_id = 0, $tour_id = 0)
    {
        $this->id = $id;
        $this->user_id = $user_id;
        $this->hotel_id = $hotel_id;
        $this->package_id = $package_id;
        $this->tour_id = $tour_id;
    }
}
