<?php
include '../../../configs/db.php';

$i=1;
var_dump($i);
$sql = "DELETE FROM `products` WHERE id=" . $_GET["id"] . "";
    $result = $link->query($sql);
    header("Location: http://shop-master.local/admin/products.php");
    
?>