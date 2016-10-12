<?php

namespace App;

class DbConnect
{

    /**
     * DbConnect constructor.
     */
    private $con;

    public function __construct()
    {
    }


    function connect()
    {
        include_once 'Constants.php';
        $this->con = new \mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_errno();
        }
        return $this->con;
    }
}

?>