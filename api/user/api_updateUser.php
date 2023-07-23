<?php

header("Access-control-allow-origin: *");
header("content-type: application/json; charset=UTF-8");

include_once "./../../databaseconnect.php";
include_once "./../../model/user.php";

$databaseConnect = new DatabaseConnect();
$connDB = $databaseConnect->getConnection();

//ทำงานกับUser
$user = new user($connDB);

//สร้างตัวแปรเก็บค่าของข้อมูลที่ส่งมาซึ่งเป็น JSON ที่ทำการ decode แล้ว
$data = json_decode(file_get_contents("php://input"));

//เอาข้อมูลที่ถูก decode ไปเก็บในตัวแปร
$user->userId = $data->userId;
$user->userFullname = $data->userFullname;
$user->userName = $data->userName;
$user->userPassword = $data->userPassword;

//เรียกใช่้ฟังก์ชั่น
if($stmt = $user->updateUser()){
    //บันทึกสำเร็จ
    http_response_code(200);
    //ส่งข้อมูลไปบอกผู้ใช้
    echo json_encode(array("message" =>"1"));

}else{
    //บันทึกสำเร็จ
    http_response_code(200);
    //ส่งข้อมูลไปบอกผู้ใช้
    echo json_encode(array("message" =>"0"));
}
