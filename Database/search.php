<?php 
$db = mysqli_connect('localhost', 'root', '', 'registration');

// REGISTER USER
if (isset($_POST['search'])) {
	$query="SELECT * FROM `users` WHERE email like '%".$_POST['input_val']."%' or username like '%".$_POST['input_val']."%'";
	$result = mysqli_query($db,$query);
}
?>
<html>

    <head>

        <title> PHP FIND DATA </title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>

    <form action="" method="POST">

       
        Enter Input:<input type="text" name="input_val" value=""> 
		<button type="submit" name="search" >Search</button>

           </form>
		<?php 
		
		if (isset($result) && mysqli_num_rows($result) > 0) {
			
			echo "<table>";
			echo "<tr><th>Username</th><th>Email</th></tr>";
            while($row = mysqli_fetch_assoc($result)) {
              echo" <tr>";
			   echo "<td>".$row['username']."</td>";
			   echo "<td>".$row['email']."</td>";
			   
			   echo "</tr>";
            }
			echo "</table>";
         } 
		?>

    </body>

</html>