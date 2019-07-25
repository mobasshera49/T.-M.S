
<!DOCTYPE html>
<html>
<body>

<table border="1 ">
<tr>

	<th>username</th>
	<th>email</th>
	<th>password</th>
</tr>

<?php

echo '<h1> Student Information </h1>';
$con = mysqli_connect('localhost','root','','registration');

$sql = 'select * from users ';
$res = mysqli_query($con,$sql);
?>

<?php
while($row = mysqli_fetch_assoc($res))
{
	?>
	<tr>
	<td bgcolor = 'green'> <?php echo $row['username']; ?> </td>
	<td bgcolor = 'yellow'> <?php echo $row['email']; ?></td> 
	<td bgcolor = 'blue'> <?php echo $row['password']; ?></td> 
	</tr>


<?php

}

?>

</table>
</body>
</html>