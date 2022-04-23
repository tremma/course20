<?php

$img = $_GET['img'];

$pdo = new PDO('mysql:host = localhost;dbname=course_db','root','');

	$sql = "DELETE FROM `images` WHERE `images`.`image` = (?)";

	$statement = $pdo->prepare($sql);

	$statement->execute([$img]);


	$imagePath = __DIR__.'/images/'.$img;

	if($imagePath){
		unlink($imagePath);
	}

	header('Location: task_18.php');

?>