<?php
include '../configs/db.php';
$page = "products";
include 'parts/header.php';
?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Products</li>
  </ol>
</nav>
    <a href="options/products/add.php" type="button" class="btn btn-primary m-2">Add Product</a>
    <a href="options/products/add_category.php" type="button" class="btn btn-primary m-2">Add Category</a>
    <a href="options/products/edit_categories.php" type="button" class="btn btn-primary m-2">Edit Categories</a>
    <a href="options/products/delete_category.php" type="button" class="btn btn-primary m-2">Delete Categories</a>
    <div class="row">
        <div class="col-md-12">
            <div class="card strpied-tabled-with-hover">
                <div class="card-header">
                    <h4 class="card-title">Products</h4>
                </div>
                <div class="card-body table-full-width table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Options</th>
                        </thead>
                        <tbody>
                            <?php 
                                $sql = "SELECT * FROM products";
                                $result = $link->query($sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $row['id'] ?></td>
                                            <td><?php echo $row['title'] ?></td>
                                            <td><?php echo $row['description'] ?></td>
                                            <td><?php echo $row['category_id'] ?></td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                  <a href="options/products/edit.php?id=<?php echo $row['id'] ?>" type="button" class="btn btn-secondary">Edit</a>
                                                  <a href="options/products/delete.php?id=<?php echo $row['id'] ?>" type="button" class="btn btn-secondary">
                                                  Remove</a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php
                                }

                            ?>
                            
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php include'parts/footer.php' ?>