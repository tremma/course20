<?php

$loadedImages = $_FILES['images'];

$images = [];

foreach ($loadedImages as $key_name => $values) {

	// var_dump($values);
	
	foreach ($values as $key => $item) {
		
		$images[$key][$key_name] = $item;

	}

}


foreach ($images as $key => $image) {
	
	if(!empty($images)){

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


}


?>