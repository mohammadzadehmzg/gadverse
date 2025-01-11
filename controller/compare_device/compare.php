<?php
require_once "./app/database.php";

$db = new DATABASE();


//$name = $_SESSION["name"];
//$family = $_SESSION["family"];
//$username = $_SESSION["username"];
//$products = $db->select("SELECT * FROM products");
//print_r($products);
////    print_r($invoiceData);
//if (isset($_POST["delete_invoice"])) {
////    print_r($_POST["delete_invoice"]);
//    $id = $_POST["delete_invoice"];
//    $deleteItem = $db->delete("DELETE FROM invoice where id = '$id'");
//    if ($deleteItem) {
//        header("Refresh:.1");
//    }
//}


header('Content-Type: application/json');
try {
    $categoryId = $_GET['category_id'] ?? null;
    $productId = $_GET['product_id'] ?? null;

    if ($productId) {
        // دریافت اطلاعات محصول خاص
        $products = $db->select("SELECT * FROM products WHERE id = $productId")[0];
        echo json_encode([$products]);
    } elseif ($categoryId) {
        // دریافت محصولات دسته‌بندی خاص
        $products_by_cat = $db->select("SELECT id, name FROM products WHERE category_id = $categoryId");
        echo json_encode($products_by_cat);
    } else {
        // دریافت همه دسته‌بندی‌ها
        $categories = $db->select("SELECT * FROM categories");
        echo json_encode($categories);
    }
} catch (PDOException $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
