<?php


if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>


<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard"></i> Dashboard / Add Supplier

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->


<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title"><!-- panel-title Starts -->

<i class="fa fa-money fa-fw"> </i> Add Supplier

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Supplier Name </label>

<div class="col-md-6">

<input type="text" name="manufacturer_name" class="form-control" >

</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label"> Tel no: </label>

<div class="col-md-6">

<input type="text" name="supplier_tel" class="form-control" >

</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label"> Supplier Location: </label>

<div class="col-md-6">

<input type="text" name="supplier_loc" class="form-control" >

</div>
</div><!-- form-groups Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Show as Top Supplier </label>

<div class="col-md-6">

<input type="radio" name="manufacturer_top" value="yes" >

<label> Yes </label>

<input type="radio" name="manufacturer_top" value="no" >

<label> No </label>

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Select Supplier Image </label>

<div class="col-md-6">

<input type="file" name="manufacturer_image" class="form-control" >

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> </label>

<div class="col-md-6">

<input type="submit" name="submit" class="form-control btn btn-primary" value=" Add New Supplier " >

</div>

</div><!-- form-group Ends -->

</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->

<?php

if(isset($_POST['submit'])){

$manufacturer_name = $_POST['manufacturer_name'];
$supplier_tel=$_POST['supplier_tel'];
$supplier_loc=$_POST['supplier_loc'];

$manufacturer_top = $_POST['manufacturer_top'];

$manufacturer_image = $_FILES['manufacturer_image']['name'];

$tmp_name = $_FILES['manufacturer_image']['tmp_name'];

move_uploaded_file($tmp_name,"other_images/$manufacturer_image");

$insert_manufacturer = "insert into manufacturers (manufacturer_title,manufacturer_top,manufacturer_image,supplier_tel,supplier_loc) values ('$manufacturer_name','$manufacturer_top','$manufacturer_image','$supplier_tel','$supplier_loc')";

$run_manufacturer = mysqli_query($con,$insert_manufacturer);

if($run_manufacturer){

echo "<script>alert('You have successfully added a new Supplier')</script>";

echo "<script>window.open('index.php?view_manufacturers','_self')</script>";

}

}

?>

<?php } ?>