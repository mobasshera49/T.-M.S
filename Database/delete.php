 <?php
// Create connection
$conn = mysqli_connect('localhost', 'root', '', 'registration');
// sql to delete a record
$sql = "delete from users where email='kmh@gmail.com'";
if (mysqli_query($conn, $sql)){
	echo "User Delete Successfully";
}
$conn->close();
?> 