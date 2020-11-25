<?php
include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';
include $_SERVER['DOCUMENT_ROOT'] . '/parts/header.php';
?>
<div class="row">
	<?php
		$sql = "SELECT * FROM products";
		$result = $link->query($sql);
		while ($row = mysqli_fetch_assoc($result)){
			include 'parts/product_card.php';
		}
	?>

</div>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/parts/footer.php'; ?>