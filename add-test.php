<?php require ("db.php");
     if(isset($_POST['submit'])){
        $packagename =  $_POST['packagename'];
        $time = $_POST['time'];
        $testinfo = $_POST['testinfo'];
        $price = $_POST['price'];
       
    }
    $sql = "INSERT INTO popular_test (`id`, `package_name`, `time`, `test_info`, `price`) VALUES ('', '$packagename', ' $time', ' $testinfo', '$price')";  
    mysqli_query($conn, $sql);   
    
    mysqli_close($conn);
?>

<?php include ('header.php') ?>
<section>
    <div class="container" style="margin-top:70px">
      <h2>Add Product</h2>
    <form class="row g-3" action="" method="post" enctype="multipart/form-data">
    <div class="col-md-6">
    <label for="packagename" class="form-label">Package Name</label>
    <input type="text" class="form-control" name="packagename">
  </div>
  <div class="col-md-6">
    <label for="time" class="form-label">Time</label>
    <input type="text" class="form-control" name="time">
  </div>
  <div class="col-6">
    <label for="testinfo" class="form-label">Test Info</label>
    <input type="text" class="form-control" placeholder="" name="testinfo">
  </div>
  <div class="col-6">
    <label for="price" class="form-label">Price</label>
    <input type="number" class="form-control" placeholder="" name="price">
  </div>
 
  
  <div class="col-12">
    <input name="submit" type="submit" class="btn btn-primary" value="submit"/>
  </div>
</form>
    </div>
</section>
<?php include('footer.php') ?>