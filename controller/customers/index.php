<?php

//if ($role !== "admin") {
//    header('location: /automation/dashboard');
//}

require_once "./app/database.php";


$db = new DATABASE();

$data = $db->select("SELECT * FROM customers");



if (isset($_POST["submit_address"])) {

    $address = $_POST["address"];
    $id = $_POST["submit_address"];
    $dataUpdate = $db->update("UPDATE customers SET address='$address' WHERE id='$id'");
    if ($dataUpdate){
        $message = "آدرس به روزرسانی شد.";
        header("Refresh:.5");
    }
//    print_r($dataUpdate);
}

require_once "./view/customers/index.php";
