<?php 
$q=mysqli_query($con,"select * from company ");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No existing company profile !!!</h2>";
}
else
{
?>
<script>
	function DeleteBuyer(id)
	{
		if(confirm("You want to delete this record ?"))
		{
		window.location.href="delete_buyer.php?id="+id;
		}
	}
</script>
<h2 style="color:#00FFCC">RECYCLERS</h2>

<table class="table table-bordered">
	<Tr class="success">
		<th>Sr.No</th>
		<th>Company Name</th>
		<th>Location</th>
		<th>Category</th>
		<th>Email</th>
		<th>Mobile</th>
		<th>Delete</th>
	</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['company_name']."</td>";
echo "<td>".$row['location']."</td>";
echo "<td>".$row['category']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".$row['phone']."</td>";
?>

<Td><a href="javascript:DeleteBuyer('<?php echo $row['id']; ?>')" style='color:Red'><span class='glyphicon glyphicon-trash'></span></a></td><?php 

echo "</Tr>";
$i++;
}
		?>
		
</table>
<?php }?>


