<?php

class User
{
    public $name;
    public $email;
    public $id;
    public $userType;
    public $userTypeId;
    public $password;

    function __construct($id = 0, $name = '', $email = '', $userTypeId = 0, $userType = '', $password = '')
    {
        $this->name = $name;
        $this->email = $email;
        $this->id = $id;
        $this->userType = $userType;
        $this->password = $password;
        $this->userTypeId = $userTypeId;
    }
}


?>