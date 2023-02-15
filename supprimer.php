<?php
include('conn.php');
?>
<?php
$id =$_POST['id'];
$sql="DELETE FROM `étudiants` WHERE ID='$id';";
mysqli_query($con,$sql);
header('location:index.php');












//script sql :
//$sql="DELETE FROM `étudiants` WHERE sexe='H';";
//mysqli_query($con,$sql);
