<?php
if ($role !== "admin" && $role !== "manager") {
    header("location: $BaseUrl/dashboard");
}
require_once "./app/database.php";


$db = new DATABASE();

$data = $db->select("SELECT * FROM products");
$dataMaterial = $db->select("SELECT * FROM material");


if (isset($_POST["setData"])) {
    if (isset($_POST["id"])) {
        $id = $_POST["id"];
//        $dataUpdate = $db->update("UPDATE products SET weight='', price='', discount='' WHERE id='$id'");

    } else {
        echo "ERR";
    }

} else {


    require_once "./view/products/index.php";
}