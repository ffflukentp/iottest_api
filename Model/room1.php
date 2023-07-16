<?php
class Room1{
    //ตัวแปรที่ใช้ในการติดต่อdatabase
    private $conn;

    public $id;
    public $airValue1;
    public $airValue2;
    public $airValue3;
    public $roomDate;
    public $roomTime;

    public $message;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    function getallTempRoom1(){
        $strSQL = "SELECT * FROM room1_tb";
        
        $stmt = $this->conn->prepare($strSQL);
        
        $stmt->execute();
        
        return $stmt;
    }


    function getallTempRoom2(){
        $strSQL = "SELECT airValue2 ,roomDate,roomTime FROM room1_tb";
        
        $stmt = $this->conn->prepare($strSQL);
        
        $stmt->execute();
        
        return $stmt;
    }

    function getallTempLessThan20Room(){
        $strSQL = "SELECT * FROM room1_tb WHERE airValue1 < 20 and airValue2 < 20 and airValue3 <20";
        
        $stmt = $this->conn->prepare($strSQL);
        
        $stmt->execute();
        
        return $stmt;
    }

}