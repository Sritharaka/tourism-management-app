<?php

require_once dirname(__FILE__) . '/../models/booking.php';
require_once dirname(__FILE__) . '/../config.php';

class BookingRepository
{
    private $config;

    public function __construct()
    {
        $configuration = new Config();
        $this->config = $configuration->get_db_info();
    }

    private function get_conn()
    {
        return mysqli_connect($this->config->host, $this->config->user, $this->config->password, $this->config->db);
    }

    public function get_all()
    {
        $connection = $this->get_conn();
        $bookings = array();

        if (mysqli_connect_errno()) {
            throw new Exception('Connection Error');
        } else {
            $sql = "SELECT `id`, `user_id`, `hotel_id`, `package_id`, `tour_id` FROM `booking_order`";
            $result = $connection->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    $booking = new Booking($row["id"], $row["user_id"], $row["hotel_id"], $row["package_id"], $row["tour_id"]);
                    array_push($bookings, $booking);
                }
            }

            $connection->close();
        }

        return $bookings;
    }

    public function delete($id)
    {
        $connection = $this->get_conn();
        $sql = "DELETE FROM `booking_order` WHERE id=$id";
        $result = mysqli_query($connection, $sql);
        $connection->close();
        return $sql;
    }

    public function update($id, $user_id, $hotel_id, $package_id, $tour_id)
    {
        $connection = $this->get_conn();
        $sql = "UPDATE `booking_order` SET `user_id`='$user_id',`hotel_id`='$hotel_id',`package_id`='$package_id',`tour_id`='$tour_id' WHERE `id` = '$id";
        $result = mysqli_query($connection, $sql);

        $connection->close();

        return $result;

    }

    public function add( $user_id, $hotel_id, $package_id, $tour_id)
    {
        $connection = $this->get_conn();
        $sql = "INSERT INTO `booking_order`(`user_id`, `hotel_id`, `package_id`, `tour_id`) VALUES ('$user_id', '$hotel_id', '$package_id', '$tour_id')";
        $result = mysqli_query($connection, $sql);
        $connection->close();
        return $sql;
    }
}
