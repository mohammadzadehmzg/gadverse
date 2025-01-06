<?php
require_once "./vendor/jdf.php";

$date = jdate("Y/m/d", time(), 'none', 'Asia/Tehran', 'en');
$nowTime = jdate("H:i:s", time(), 'none', 'Asia/Tehran', 'en');

function productType($type)
{
    switch ($type) {
        case 1:
            return "منجمد";
            break;
        case 2:
            return "خشک";
            break;
        case 3:
            return "وکیوم";
            break;

        case 4:
            return "کنسرو";
            break;
        case 5:
            return "شیشه";
            break;
        case 6:
            return "بسته";
            break;
    }
}

function salesManagerType($type)
{
    switch ($type) {
        case 1:
            return "مهدی سوری";
            break;
        case 2:
            return "حسن عبادی";
            break;
        case 3:
            return "بازرگانی";
            break;

        case 4:
            return "سعید جلالی";
            break;
    }
}

function transportType($type)
{
    switch ($type) {
        case 1:
            return "باربری";
            break;
        case 2:
            return "پست";
            break;
        case 3:
            return "تیپاکس";
            break;

        case 4:
            return "اتوبوسرانی";
            break;
        case 5:
            return "ترابری شرکت";
            break;
        case 6:
            return "حضوری";
            break;
    }
}

function driverType($type)
{
    switch ($type) {
        case 1:
            return "مالک رشیدنیا";
            break;
        case 2:
            return "بابک پاشایی";
            break;
        case 3:
            return "ترابری کارخانه";
            break;
    }
}

function paymentType($type)
{

    switch ($type) {
        case "cheque":
            return "چک";
            break;
        case "cash":
            return "نقد";
            break;
        case "pos":
            return "پوز";
            break;
    }
}

