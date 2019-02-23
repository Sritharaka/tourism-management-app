<?php

    require_once($_SERVER['DOCUMENT_ROOT'].'/app/models/hotel.php');
    require_once($_SERVER['DOCUMENT_ROOT'].'/app/config.php');

    class HotelRepository {
        private $config;

        public function __construct()
        {
            $configuration = new Config();
            $this->config = $configuration->get_db_info(true);
        }

        private function get_conn()
        {
            return mysqli_connect($this->config->host,$this->config->user,$this->config->password,$this->config->db);
        }

        public function get_all()
        {
            $connection = $this->get_conn();
            $hotels = array();

            if(mysqli_connect_errno()){
                $detail = "Suspendisse potenti. In faucibus massa. Lorem ipsum
                dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.
                Lorem ipsum dolor sit amet.";

                $hotels = array(
                	new Hotel("Hotel 1", 1000, $detail, "images/hotel_1.jpg"),
                	new Hotel("Hotel 2", 1200, $detail, "images/hotel_2.jpg"),
                	new Hotel("Hotel 3", 1300, $detail, "images/hotel_3.jpg"),
                );
            }else{
                    
                $sql = "SELECT `id`, `name`, `location`, `email`, `address`, `price`, `image_path`, `details` FROM `hotel`";
                $result = $connection->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {              
                        $hotel = new Hotel($row["name"], $row["price"], $row["details"], $row["image_path"]);
                        array_push($hotels, $hotel);
                    }
                }

                $connection->close();
            }

            return $hotels;
        }

        public function add_hotel($name, $price, $image, $detials, $email){
            $connection = $this->get_conn();

            $sql = "INSERT INTO `hotel`(`name`, `location`, `email`, `telephone_hotline`, `address`, `price`, `image_path`, `details`) VALUES ('$name','location','$email','0123456789','address','$price','$image','$detials')";
            
            $result = mysqli_query($connection, $sql);

            $connection->close();

            return $sql;
        }
    }
?>