<?php

    require_once(dirname(__FILE__).'/../app/models/hotel.php');
    require_once(dirname(__FILE__).'/../app/config.php');

    class HotelRepository {
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
    }
       ?>