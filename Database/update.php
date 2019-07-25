 <?php
// Create connection
$conn = mysqli_connect('localhost', 'root', '', 'registration');
// sql to Update a record
$sql = "update  users set email='ransl62@gmail.com',username='ranasl62',password='123456' where email = 'ak@gmail.com'";

if (mysqli_query($conn, $sql)){
	echo "User Update Successfully";
}

$conn->close();
?> 