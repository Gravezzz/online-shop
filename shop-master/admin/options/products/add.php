<?php
$page = "add_product";
include $_SERVER['DOCUMENT_ROOT'] . '/admin/parts/header.php';
include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';
?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
    <li class="breadcrumb-item"><a href="/admin/products.php">Products</a></li>
    <li class="breadcrumb-item active" aria-current="page">Adding Product</li>
  </ol>
</nav>
                  <form action="http://shop-master.local/admin/options/products/add_product.php" method="POST">
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Title</label>
                      <input type="text" class="form-control" name="newTitle" placeholder="New Title">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Description</label>
                      <input type="text" class="form-control" name="newDescription" placeholder="New Description">
                    </div>
                     <div class="form-group">
                      <label for="exampleFormControlSelect1">Category</label>
                      <select class="form-control" name="newCategory">
                        <option value="0">Не выбрано</option>
                        <?php
                        $sql="SELECT * FROM categories";
                        $result = $link->query($sql);
                        while($row = mysqli_fetch_assoc($result)){
                            echo "<option value='" . $row['id'] . "'>" . $row["title"] . "</option>";
                        }
                        ?>
                      </select>
                    </div>
                    <button type="submit" name="added" class="btn btn-light">                 
                     Add 
                    </button>
                  </form>
                </div>
            </div>
        </div>
    </div>

</body>
<!--   Core JS Files   -->
<script src="../../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../../assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="../../assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="../../assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="../../assets/js/demo.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // Javascript method's body can be found in ../../assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.showNotification();

    });
</script>

</html>




