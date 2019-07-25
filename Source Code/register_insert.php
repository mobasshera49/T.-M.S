<?php  
	$connection = new PDO('mysql:host=localhost;dbname=registration;charset=utf8mb4', 'root', '');
	if(isset($_POST['submit'])){
		var_dump($_POST);
		$username=$_POST['username'];
		$email=$_POST['email'];
		$password=$_POST['password'];
	$statement = $connection->prepare("INSERT INTO users (username, email, password) VALUES (?, ? , ?)");
    $statement->bindParam(1, $username);
    $statement->bindParam(2, $email);
    $statement->bindParam(3, $password);

    $statement->execute();
	}

?>