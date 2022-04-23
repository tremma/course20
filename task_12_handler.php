<?php 

session_start();

$email = $_POST['email'];

$password = $_POST['password'];

$password = password_hash($password, PASSWORD_DEFAULT);

$pdo = new PDO('mysql:host = localhost;dbname=course_db','root','');


$result = "SELECT id FROM users WHERE email='$email'";

$query = $pdo->query($result);

$result2 = $query->fetchAll(PDO::FETCH_ASSOC);

// var_dump($result2);

if (!empty($result2)) {
    
	$error = '<div class="alert alert-danger fade show" role="alert">Этот эл адрес уже занят другим пользователем </div>' ;

                                     
	$_SESSION['error'] = $error;

	header("Location: task_12.php");	

	exit;
    }


				$sql = 'INSERT INTO users (email,password) VALUES (:email,:password)';

				$statement = $pdo->prepare($sql);

				$statement->execute(['email' => $email,
									'password' => $password

									]);

				$newEmail = $email;

				$_SESSION['email'] = $newEmail;


				header("Location: task_12.php");				

?>