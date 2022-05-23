<?php

$connection=mysqli_connect('localhost','root','','form_php_delete_edit');

$query=mysqli_query($connection,"SELECT * FROM form_table");
 
 echo 'Data has been saved successfully';

?>


<table border="2" cellspacing="7">
<tr>
    <td>ID</td>
    <td>Roll</td>
    <td>Name</td>
   
    <td>Department</td>
    <td>Delete</td>
    
</tr>
 
<?php

while($row=mysqli_fetch_array($query))
{
$id=$row['id'];
    ?>
    <tr>
   
    <td><?php echo $row['id']?></td>
    <td><?php echo $row['roll']?></td>
    <td><?php echo $row['name']?></td>
    <td><?php echo $row['department']?></td>
    <td>
        <a href="delete.php?id=<?php echo $id?>">Delete</a>
    </td>
    >
</tr>
    <?php
}
?>
</table>