<?php
require_once "./app/database.php";

$date = jdate("Y/m/d", time(), 'none', 'Asia/Tehran', 'en');
$nowTime = jdate("H:i:s", time(), 'none', 'Asia/Tehran', 'en');
$day = jdate("l", time(), 'none', 'Asia/Tehran', 'en');
$month = jdate("F", time(), 'none', 'Asia/Tehran', 'en');
//$dateNow = str_replace("/", "", $date);
//$dateForSms = jdate("Ymd", time(), 'none', 'Asia/Tehran', 'en');
$dateTime = $day . "_" . $date . "_" . $nowTime;
//print_r($dateTime);

$db = new DATABASE();

$id = explode("/", $_GET["url"])[2];

if ($id) {
    $invoiceData = $db->select("SELECT * FROM invoice where id = '$id'")[0];
//    print_r($invoiceData);
}


if (isset($_POST["invoice_submit"])) {
//    print_r($id);

    $sender_full_name = $_POST["sender_full_name"];
    $sender_company = $_POST["sender_company"];
    $sender_national_code = $_POST["sender_national_code"];
    $sender_phone = $_POST["sender_phone"];
    $sender_address = $_POST["sender_address"];

    $receiver_full_name = $_POST["receiver_full_name"];
    $receiver_company = $_POST["receiver_company"];
    $receiver_phone = $_POST["receiver_phone"];
    $receiver_address = $_POST["receiver_address"];
    $receiver_national_code = $_POST["receiver_national_code"];

    $consignment_origin = $_POST["consignment_origin"];
    $consignment_type = $_POST["consignment_type"];
    $consignment_quantity = $_POST["consignment_quantity"];
    $consignment_destination = $_POST["consignment_destination"];
    $consignment_weight = $_POST["consignment_weight"];
    $consignment_calculate_weight = $_POST["consignment_calculate_weight"];
    $consignment_price_rent = $_POST["consignment_price_rent"];
    $packaging_cost = $_POST["packaging_cost"];
    $maliyat = $_POST["maliyat"];


    $dataUpdate = $db->update("UPDATE invoice SET 
    sender_fullname='$sender_full_name',
    sender_company='$sender_company',
    sender_national_code='$sender_national_code',
    sender_phone='$sender_phone',
    sender_address='$sender_address',
                  
    receiver_fullname='$receiver_full_name',
    receiver_company='$receiver_company',
    receiver_address='$receiver_address',
    receiver_national_code='$receiver_national_code',
    receiver_phone='$receiver_phone',
                  
    consignment_origin='$consignment_origin',
    consignment_type='$consignment_type',
    consignment_weight='$consignment_weight',
    consignment_destination='$consignment_destination',
    consignment_quantity='$consignment_quantity',
    consignment_calculate_weight='$consignment_calculate_weight',
    consignment_price_rent='$consignment_price_rent',
    packaging_cost='$packaging_cost',
    maliyat='$maliyat'

    WHERE id='$id'");
    if ($dataUpdate) {
        $message = "اطلاعات با موفقیت بروز شد.";
        header("Refresh:1");
//        print_r($dataUpdate);
    } else {
//        print_r($dataUpdate);
        $message = "تغییری صورت نگرفت!";
    }
}

require_once "./view/invoice/edit.php";
