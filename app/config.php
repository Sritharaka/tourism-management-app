<?php
    class Config {
        public function get_db_info($isLocal = false)
        {
            if($_SERVER['SERVER_NAME'] == 'localhost'){
                $config = (object) array(
                    "host" => "localhost",
                    "user" => "root",
                    "password" => "",
                    "db" => "gayana_db",
                );
            }
            else
            {
                $config = (object) array(
                    "host" => "db4free.net",
                    "user" => "keminda",
                    "password" => "1qaz2wsx@",
                    "db" => "gayanadb",
                );
        }

            return $config;
        }
    }
?>