<?php

    require_once(dirname(__FILE__).'/../models/tour.php');
    require_once(dirname(__FILE__).'/../config.php');

    class TourRepository {
        private $config;

        public function __construct()
        {
            $configuration = new Config();
            $this->config = $configuration->get_db_info();
        }

        private function get_conn()
        {
            return mysqli_connect($this->config->host,$this->config->user,$this->config->password,$this->config->db);
        }

        public function get_all()
        {
            $connection = $this->get_conn();
            $tours = array();

            if(mysqli_connect_errno()){
                $detail = "Suspendisse potenti. In faucibus massa. Lorem ipsum
                dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.
                Lorem ipsum dolor sit amet.";

                $tours = array(
                	new Tour(1, "Tour 1", 1000, $detail, "images/tour_1.jpg", 'keminda4lk@gamil.com'),
                	new Tour(2, "Tour 2", 1200, $detail, "images/tour_2.jpg", 'keminda4lk@gamil.com'),
                    new Tour(3, "Tour 3", 1300, $detail, "images/tour_3.jpg", 'keminda4lk@gamil.com'),
                    
                );
            }else{
                    
                $sql =  "SELECT `id`, `name`, `destination`, `price`, `image_path`, `details`, `tour_type` FROM `tour`"; 
                $result = $connection->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {              
                        $tour = new Tour($row["id"], $row["name"], $row["destination"], $row["price"], $row["image_path"], $row["details"], $row["tour_type"]);
                        array_push($tours, $tour);
                    }
                }

                $connection->close();
            }

            return $tours;
        }

       public function delete_tour($id){

        $connection = $this->get_conn();
       
         $sql = "DELETE FROM `tour` WHERE id=$id";
         
         $result = mysqli_query($connection, $sql);

         $connection->close();

         return $sql;

       }

         public function update_tour($id, $name, $price, $image, $details, $destination, $tourType){
           
            $connection = $this->get_conn();

            $sql = "UPDATE `tour` SET `name`='$name',`destination`='$destination',`price`='$price',`image_path`='$image',`details`='$details', `tour_type`='$tourType' WHERE id=$id";
            
            $result = mysqli_query($connection, $sql);

            $connection->close();

            return $result;

         }

        public function add_tour($name, $price, $image, $detials, $destination, $tourType){
            $connection = $this->get_conn();

            $sql = "INSERT INTO `tour`( `name`, `destination`, `price`, `image_path`, `details`, `tour_type`) VALUES ('$name','$destination','$price','$image','$detials','$tourType')";         

            $result = mysqli_query($connection, $sql);

            $connection->close();

            return $sql;
        }
    }
?>