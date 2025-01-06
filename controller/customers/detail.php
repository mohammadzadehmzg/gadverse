<?php

//if ($role !== "admin") {
//    header('location: /automation/dashboard');
//}

require_once "./app/database.php";


$db = new DATABASE();

//$data = $db->select("SELECT * FROM customers");

$id = explode("/", $_GET["url"])[2];

$invoiceList = $db->select("SELECT * FROM invoice where customer_id= '$id'");
$invoiceReturnsList = $db->select("SELECT * FROM invoice inner JOIN invoice_returns on invoice.code = invoice_returns.resource_invoice_code where invoice_returns.customer_id= '$id'");
print_r($invoiceReturnsList);


//if (isset($_POST["submit_address"])) {
//
//    $address = $_POST["address"];
//    $id = $_POST["submit_address"];
//    $dataUpdate = $db->update("UPDATE customers SET address='$address' WHERE id='$id'");
//    if ($dataUpdate) {
//        $message = "آدرس به روزرسانی شد.";
//        header("Refresh:.5");
//    }
////    print_r($dataUpdate);
//}

require_once "./view/customers/detail.php";
