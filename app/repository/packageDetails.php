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
    }
       ?>