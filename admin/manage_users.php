<?php 
$q=mysqli_query($con,"select * from collectors ");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No any user exists !!!</h2>";
}
else
{
?>
<script>
	function DeleteUser(id)
	{
		if(confirm("You want to delete this record ?"))
		{
		window.location.href="delete_user.php?id="+id;
		}
	}
</script>
<h2 style="color:#00FFCC">R-WASTE COLLECTORS</h2>

<table class="table table-bordered">
	<Tr class="success">
		<th>Sr.No</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>User Name</th>
		<th>Email</th>
		<th>Mobile</th>
		<th>Location</th>
		<th>Delete</th>
	</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['first_name']."</td>";
echo "<td>".$row['last_name']."</td>";
echo "<td>".$row['user_name']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".$row['phone']."</td>";
echo "<td>".$row['location']."</td>";
// echo "<td>".$row['gender']."</td>";
?>

<Td><a href="javascript:DeleteUser('<?php echo $row['id']; ?>')" style='color:Red'><span class='glyphicon glyphicon-trash'></span></a></td><?php 

echo "</Tr>";
$i++;
}
		?>
		
</table>
<?php }?>


