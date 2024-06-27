<?php
include_once('conn.php');
$id=$_GET['id'];
$query="DELETE from  tblcrud where  id='$id'";
$data=mysqli_query($connection,$query);
if($data){
    ?>
    <script>alert("data deleted successfully");
window.open("http://localhost/login/index.php","_self");</script>
  
    <?php
}
else{
    ?>
    <script>alert("please try again")</script>

<?php
}
?>