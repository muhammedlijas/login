<?php
include_once('conn.php');

        ?>


<?php
include('header.php');
?>
    
    <button type="submit" class="btn btn-primary box"data-bs-toggle="modal" data-bs-target="#ex">ADD USER</button>
    
	<table class="table table-hover table-borderd table-striped" name="add" style="background-color:wheat;">
        <thead>
    <tr>
<th>id</th>
<th>Name</th>
<th>age</th>
<th>email</th>
<th>address</th>
<th>contact</th>
<th>update</th>
<th>delete</th>

</tr>
<tr> 
</thead>
<tbody>

<?php
$query="select * from tblcrud";
$result=mysqli_query($connection,$query);
if(!$result){
    die("query failed".mysqli_error());
}
else{
    while($row=mysqli_fetch_assoc($result)){
        ?>

<tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['name']?></td>
        <td><?php echo $row['age']?></td>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['address']?></td>
        <td><?php echo $row['contact']?></td>
        <td> <a href="update.php?id=<?php echo $row['id']?>" class ="btn btn-success">update</a></td>
        <td> <a href="dlt.php?id=<?php echo $row['id']?>" class ="btn btn-danger">delete</a></td>
        <tbody>    

</tr> 

        <?php
    }
}
?>

</table>
<?php
if(isset($_GET['message']))
{
  echo "<h6>".$_GET['message']."</h6>";
}
?>



<!-- Modal -->
<div class="modal fade" id="ex" tabindex="-1" role="dialog" aria-labelledby="ex" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ex">REGISTRATION</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     <form action="" method="POST">
      <div class="form-group">

      <label for="fname" >name</label>
      <input type="text" name="fname" class="form-control" required>
      </div>
      <div class="form-group">

      <label for="lname" >age</label>
      <input type="text" name="lname" class="form-control" required>
      </div>
      <div class="form-group">

      <label for="email" >email</label>
      <input type="text" name="email" class="form-control" required>
      </div>
      <div class="form-group">

      <label for="address" >address</label>
      <input type="text" name="address" class="form-control"required>
      </div>
      <div class="form-group">

      <label for="image" >contact</label>
      <input type="number" name="image" class="form-control" required>
      </div>

    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" name="add_student" value="ADD">
      </div>
      </form>
    </div>
  </div>
</div>
<?php
include('footer.php');




?>
<?php 
if(isset($_POST['add_student'])){
    $fname=$_POST['name'];
    $lname=$_POST['age'];
    $dob=$_POST['email'];
    $email=$_POST['address'];
    $phone=$_POST['contact'];
    $sql="INSERT INTO tblcrud(name,age,email,address,contact) VALUES ('$fname','$lname','$dob','$email','$phone')";
    $result=mysqli_query($connection,$sql);
    if($result){
        echo "<script>alert('Registration successful');</script>";
        // Redirect to prevent form resubmission
        echo "<script>window.location.href = 'index.php';</script>";
    } else {
        echo "<script>alert('Registration not completed, please try again');</script>";}
}
?>