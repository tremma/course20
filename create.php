<?php

session_start();
$text = $_POST['text'];

$pdo = new PDO('mysql:host = localhost;dbname=course_db','root','');

$sql = "SELECT * FROM text_info WHERE text=:text";

$statement = $pdo->prepare($sql);

$statement->execute(['text' => $text]);

$result = $statement->fetch(PDO::FETCH_ASSOC);

if(!empty($result)){
	$message = 'Такая запись уже есть!';

	$_SESSION['message'] = $message;

	header("Location: index.php");
	exit;
}


$sql = 'INSERT INTO text_info (text) VALUES (:text)';

$statement = $pdo->prepare($sql);

$statement->execute($_POST);


header("Location: index.php");

?>