<?php
include '../../../configs/db.php';


if(isset($_POST["edited"])){

$sql = "UPDATE `products` SET `title`='" . $_POST["newTitle"] . "', `description`='" . $_POST["newDescription"] . "',`category_id`='" . $_POST["newCategory"] . "' WHERE `id`=" . $_POST["product_id"] . "";
    $result = $link->query($sql);

header("Location: http://shop-master.local/admin/products.php");

}
?>