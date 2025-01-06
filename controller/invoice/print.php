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


//print_r($data[0]["data"]);
/*if (isset($_GET["p"])) {
//    print_r($_GET["p"]);
    $imgCode = explode("-", $_GET["p"])[1];
    $pcode = $_GET["p"];
    $userId = $_GET["i"];
    $fishData = $db->select("SELECT * FROM fish where personCode = '$pcode'")[0];
    $userData = $db->select("SELECT * FROM users where pcode = '$pcode'");

//    $invoiceData = $db->select("SELECT sum(commission) as sum_commission FROM invoice where user_id = '$userId' and (status = 'sent' or status = 'complete')")[0];
//    print_r($invoiceData);

//    echo json_encode($fishData);
}

if (isset($_POST["get_commission"])) {
    $commissionStartDate = $_POST["commissionStartDate"];
    $commissionLastDate = $_POST["commissionLastDate"];

    $pcode = $_GET["p"];
//    print_r($pcode);
    if ($pcode == "k-135" || $pcode == "k-144") {
//        $invoiceDataQ = $db->select("SELECT sum(total_price) as sum_commission FROM invoice where substring_index(invoice.created_at,'_', 1) BETWEEN '$commissionStartDate' and '$commissionLastDate' and (status = 'sent' or status = 'complete') ");

        $invoiceData["sum_commission"] = ($invoiceDataQ[0]["sum_commission"] * 4) / 100;
        echo json_encode($invoiceData);
    }

    $invoiceData = $db->select("SELECT sum(commission) as sum_commission FROM invoice where substring_index(invoice.created_at,'_', 1) BETWEEN '$commissionStartDate' and '$commissionLastDate' and user_id = '$userId' and (status = 'sent' or status = 'complete') ");
//    print_r($invoiceData);
}*/

//echo $user;

require_once "./view/invoice/print.php";
