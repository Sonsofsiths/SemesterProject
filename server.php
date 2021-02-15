<?php 
	$username = ""; 
	$email = "";
	$errors = array();



	//Connection to database
	$db = mysqli_connect('localhost','root','', 'registration')

	//if registration button is clicked
		if(isset($_POST['register'])) {
			$username = mysql_real_escape_string($_POST['username']);
		$username = mysql_real_escape_string($_POST['email']);
		$username = mysql_real_escape_string($_POST['password_1']);
		$username = mysql_real_escape_string($_POST['password_2']);
		//checking for correct fields
		if(empty($username)){}
			array_push($errors, "Username is required"); //adding errors for the array

		}
		if(empty($email)){}
			array_push($email, "Email is required"); //adding errors for the array
			
		}
		if(empty($password_1)){}
			array_push($errors, "password is required"); //adding errors for the array
			
		}
		if($password_1 != $password_2){}
			array_push($errors, "Passwords must match!"); //adding errors for the array
			}
			//If no errors
			if(count($errors) ==0;)
			$password = md5($password_1); //encrypting password
			$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
			mysqli_query($db, $sql);
		}

?>