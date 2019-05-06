<?php

    require_once(dirname(__FILE__).'/../models/user.php');
    require_once(dirname(__FILE__).'/../config.php');

    class UserRepository {
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
            $users = array();

            if(mysqli_connect_errno()){
                
                
            }else{
                    
                $sql = "select U.`id`, U.`user_type_id`, U.`user_name`, UI.`email`, UT.`user_type`" 
                        . "FROM user U"
                        . "INNER JOIN user_type UT on U.user_type_id = UT.id"
                        . "INNER JOIN user_info UI on U.id = UI.user_id";

                $result = $connection->query($sql);

                if ($result && $result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {              
                        $user = new User($row["id"], $row["user_name"], $row["email"],$row["user_type_id"], $row["user_type"]);
                        array_push($users, $user);
                    }
                }

                $connection->close();
            }

            return $users;
        }

        public function signin($userNameOrEmail, $password){
            $user = new User();
            $pwd = md5($password);
            $connection = $this->get_conn();
            $sql = "SELECT U.id, U.user_type_id, U.user_name, UI.email, UT.user_type FROM `user` U"
                . " INNER JOIN user_type UT on U.user_type_id = UT.id"
                . " INNER JOIN `user_info` UI on U.id = UI.user_id"
                . " WHERE (U.user_name = '$userNameOrEmail' OR UI.email = '$userNameOrEmail') AND U.password_hash = '$pwd'";
             $result = $connection->query($sql);

            if ($result &&  $result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {              
                    $user = new User($row["id"], $row["user_name"], $row["email"],$row["user_type_id"], $row["user_type"]);
                }
            }

            $connection->close();

            return $user;
            
        }

        

        public function delete($id){

            $connection = $this->get_conn();
        
            $deleteUserInfo = "DELETE FROM `user_info` WHERE user_id=$id";
            $deleteUser = "DELETE FROM `user` WHERE id=$id";

            $result = mysqli_query($connection, $deleteUserInfo);
            $result = mysqli_query($connection, $deleteUser);

            $connection->close();

            return $result;

       }

         public function update($id, $password){
            $pwd = md5($password);
            $connection = $this->get_conn();

            $sql = "UPDATE `user` SET `password`='$pwd'WHERE id=$id";
            
            $result = mysqli_query($connection, $sql);

            $connection->close();

            return $result;

         }

        public function insert($userName, $email, $password){
            $pwd = md5($password);

            $connection = $this->get_conn();

            mysqli_query($connection, "START TRANSACTION");

            $sql1 = "INSERT INTO `user`(`user_type_id`, `user_name`, `password_hash`) VALUES (2,'$userName', '$pwd')";         

            $result1 = mysqli_query($connection, $sql1);

            $sql2 = "INSERT INTO `user_info`(`user_id`,`first_name`,`last_name`,`email`)"
                    . "VALUES((SELECT `id` from `user` WHERE `user_name` = '$userName'),"
                    . "'Customer','User','$email')";
            $result2 = mysqli_query($connection, $sql2);
            
            if ($result1 && $result2) {
                mysqli_query($connection, "COMMIT");
            } else {        
                mysqli_query($connection, "ROLLBACK");
            }

            $connection->close();
            return $result1 && $result2 ? true : false;
        }
    }
?>