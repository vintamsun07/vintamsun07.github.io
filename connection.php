<?php
	$firstName = $_POST['fullname'];
	$lastName = $_POST['email'];
	$gender = $_POST['username'];
	$email = $_POST['password'];
	$password = $_POST['gender'];

	$conn = new mysqli('localhost','Admin','@dministrat0r','travel_soft');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into userlist(fullname, email, username, password, gender) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss", $firstName, $email, $username, $password, $gender);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?> 