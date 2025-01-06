<?php
require_once "./app/database.php";

$db = new DATABASE();

//$name = $_SESSION["name"];
//$family = $_SESSION["family"];
$username = $_SESSION["username"];
$invoiceData = $db->select("SELECT * FROM invoice");
//    print_r($invoiceData);
if (isset($_POST["delete_invoice"])) {
//    print_r($_POST["delete_invoice"]);
    $id = $_POST["delete_invoice"];
    $deleteItem = $db->delete("DELETE FROM invoice where id = '$id'");
    if ($deleteItem) {
        header("Refresh:.1");
    }
}
require_once "./view/dashboard/index.php";