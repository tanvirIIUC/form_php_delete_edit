<?php
session_start();
$connection=mysqli_connect('localhost','root','','form_php_delete_edit');
$id=$_GET['id'];
 
$result=mysqli_query($connection,"DELETE  FROM form_table WHERE id='$id'");
if($result)
{
    $_SESSION['success']='success';
    header("Location:main.php");
}else{
    $_SESSION['success']='failed';
}
?>