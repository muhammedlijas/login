<?php
include_once('conn.php');
$id=$_GET['id'];
$sql="select * from tblcrud where id='$id'";
$data=mysqli_query($connection,$sql);
$row=mysqli_fetch_array($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
  </style>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header bg-dark text-light">
            <h3 class="mb-0">Student registration</h3>
          </div>
          <div class="card-body">
            <form action="" method="post">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="firstName">Name</label>
                  <input type="text" class="form-control" id="" name="firstName"  value="<?php echo $row['name'];?>">
                </div>
                <div class="form-group col-md-6">
                  <label for="lastName">age</label>
                  <input type="text" class="form-control" name="lastName"  value="<?php echo $row['age'];?>">
                </div>
             
                <div class="form-group col-md-6">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" name="email"  value="<?php echo $row['email'];?>">
                </div>
                <div class="form-group col-md-6">
                  <label for="phone">contact</label>
                  <input type="tel" class="form-control" name="phone" value="<?php echo $row['contact'];?>">
                </div>
              </div>
              <div class="form-row">
              
              <div class="form-group col-md-12">
                <label for="address">Address</label>
                <textarea class="form-control" name="address" rows="3"  value="<?php echo $row['address'];?>"></textarea>
              </div></div>
              <div class="text-center">
              <button type="submit" name="ok" class="btn btn-primary">Submit</button><div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap JS (Optional) -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<?php
if(isset($_POST['ok']))
{
    $fname=$_POST['firstName'];
    $lname=$_POST['lastName'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $sql2="UPDATE tblcrud SET name='$fname',age='$lname',email='$email',contact='$phone',address='$address'  WHERE id='$id'";
    $result=mysqli_query($connection,$sql2);
    if($result){
        echo" data edited succesfully";
        header("location:index.php");

    }
}
 ?>



</body>
</html>