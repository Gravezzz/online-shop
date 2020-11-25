<?php
include '../../../configs/db.php';

if(isset($_POST["added"])){
$sql = "INSERT INTO `products`(`title`, `description`, `category_id`) VALUES ('" . $_POST["newTitle"] . "', '" . $_POST["newDescription"] . "', '" . $_POST["newCategory"] . "')";
	$result = $link->query($sql);
	
header("Location: http://shop-master.local/admin/products.php");
}
?>
