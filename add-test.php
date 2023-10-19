require ("db.php");
     if(isset($_POST['submit'])){
        $packageName =  $_POST['packageName'];
        $time = $_POST['time'];
        $testInfo = $_POST['testInfo'];
        $price = $_POST['price'];
        header("location:index.php");
    }


  
 //Performing insert query execution
 // here our table name is college
 $sql = "INSERT INTO popular_test (`id`, `package_name`, `time`, `test_info`, `price`) VALUES ('', '$packageName', ' $time', ' $testInfo', '$price')";  
 mysqli_query($conn, $sql);   
  
//  if(mysqli_query($conn, $sql)){
//      echo "<h3>data stored in a database successfully."
//          . " Please browse your localhost php my admin"
//          . " to view the updated data</h3>";

//      echo nl2br("\n$package_name\n"
//          . "$price");
//  } else{
//      echo "ERROR: Hush! Sorry $sql. "
//          . mysqli_error($conn);
//  }
  
 // Close connection
 mysqli_close($conn);

<?php include ('header.php') ?>
<section>
    <div class="container" style="margin-top:70px">
      <h2>Add Product</h2>
    <form class="row g-3" action="" method="post" enctype="multipart/form-data">
    <div class="col-md-6">
    <label for="packagename" class="form-label">Package Name</label>
    <input type="text" class="form-control" name="packageName">
  </div>
  <div class="col-md-6">
    <label for="time" class="form-label">Time</label>
    <input type="time" class="form-control" name="time">
  </div>
  <div class="col-6">
    <label for="testinfo" class="form-label">Test Info</label>
    <input type="text" class="form-control" placeholder="" name="testInfo">
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