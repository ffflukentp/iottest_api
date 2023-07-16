<?php
class Room2{
    //ตัวแปรที่ใช้ในการติดต่อdatabase
    private $conn;

    public $id;
    public $airValue1;
    public $airValue2;
    public $airValue3;
    public $roomDate;
    public $roomtime;

    public $message;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    

}