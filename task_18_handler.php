<?php

if(!empty($_FILES['image'])){

$image = $_FILES['image'];

$name = $image['name'];

$extention = pathinfo($name, PATHINFO_EXTENSION);

$imageName = uniqid() . "." . $extention;

$imagePath = __DIR__.'/images/'.$imageName;

    if(!move_uploaded_file($image['tmp_name'], $imagePath)){

    	echo 'Ошибка загрузки изображения!';
    }

    $pdo = new PDO('mysql:host = localhost;dbname=course_db','root','');

	$sql = "INSERT INTO `images` (image) VALUES (?)";

	$statement = $pdo->prepare($sql);

	$statement->execute([$imageName]);





    header('Location: task_18.php');

}



?>