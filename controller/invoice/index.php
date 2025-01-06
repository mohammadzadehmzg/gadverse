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

if (isset($_POST["invoice_submit"])) {
//    print_r($_POST);
    $code = 0;
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

    $invoiceTbl = $db->select("SELECT invoice_code FROM invoice ORDER BY id DESC LIMIT 1");

    if ($invoiceTbl && $invoiceTbl[0]['invoice_code'] && $invoiceTbl[0]['invoice_code'] != 0) {
        $code = $invoiceTbl[0]['invoice_code'] + 1;

    } else {
        $code = 400401001;
    }

//    print_r($code);
     $insertInvoiceTbl = $db->insert("INSERT INTO invoice (sender_fullname, sender_company, sender_national_code, sender_phone, sender_address,
                         receiver_fullname,receiver_company, receiver_address, receiver_national_code,receiver_phone,
                         consignment_origin, consignment_type , consignment_weight,
                         consignment_destination, consignment_quantity, consignment_calculate_weight, consignment_price_rent, invoice_code, packaging_cost, maliyat,  created_at, updated_at)
                     VALUES ('$sender_full_name', '$sender_company','$sender_national_code','$sender_phone', '$sender_address',
                             '$receiver_full_name', '$receiver_company', '$receiver_address', '$receiver_national_code', '$receiver_phone',
                             '$consignment_origin', '$consignment_type', '$consignment_weight', '$consignment_destination',
                             '$consignment_quantity', '$consignment_calculate_weight','$consignment_price_rent', '$code', '$packaging_cost', '$maliyat',
                             '$dateTime', '$dateTime')");
     if ($insertInvoiceTbl) {
         $message = "اطلاعات با موفقیت ثبت شد.";
//         print_r($insertInvoiceTbl);
         header("Refresh:1");
     } else {
         $message = "خطا در ثبت اطلاعات!";
     }
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

require_once "./view/invoice/index.php";
