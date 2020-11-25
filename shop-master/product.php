<?php
include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';
include $_SERVER['DOCUMENT_ROOT'] . '/parts/header.php';

$sql = "SELECT * FROM products WHERE id=" . $_GET['id'];
$result = $link->query($sql);
$row = mysqli_fetch_assoc($result);
$categoryResult = $link->query( 'SELECT * FROM categories WHERE id=' . $row['category_id'] );
$category = mysqli_fetch_assoc($categoryResult);
?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="cat.php?id=<?php echo $category['id'] ?>" > <?php echo $category['title'] ?></a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo $row['title'] ?></li>
  </ol>
</nav>

<div class="row">
	<?php
		
			?>
			<div class="col-12">
					<div class="card">
						<div class="card-body">
				    <h5 class="card-title">
				    		<?php echo $row['title'] ?>	

				    </h5>
				    <p class="card-text"><?php echo $row['description'] ?></p>
					<p class="card-text"><?php echo $row['content'] ?></p>
				    <a href="#" class="btn btn-primary">В корзину</a>
				  </div>
					</div>
			</div>



</div>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/parts/footer.php'; ?>