<?php

namespace App;

class  DbOperation
{

    private $con=null;

    public function __construct()
    {
        if($this->con==null) {
            $db = new DbConnect();
            $this->con = $db->connect();
        }
    }

    public function queryBrand(){
        $result=$this->con->query('select * from tbl_brand');
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function queryadmin(){
        $result=$this->con->query('select * from tbl_admin');
        return $result->fetch_all(MYSQLI_ASSOC);
    }

}


?>
