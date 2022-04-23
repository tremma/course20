<?php 


session_start();

$email = $_POST['email'];

$password = $_POST['password'];

$hash = password_hash($password, PASSWORD_DEFAULT);

$pdo = new PDO('mysql:host = localhost;dbname=course_db','root','');

$sql = "SELECT * FROM `users` WHERE `email` = ?";

$statement = $pdo->prepare($sql);

$statement->execute([$email]);

$user = $statement->fetch(PDO::FETCH_ASSOC);


if($user && password_verify($password, $user['password'])) {

    $login = '<div class="text-primary">Авторизация прошла успешно</div>';

    $_SESSION['login'] = $login;  

    header('location: task_14.php');

} else {
    
	$error = ' <div class="alert alert-danger fade show" role="alert">
                                        Неверный логин или пароль
                                    </div>';

     $_SESSION['error'] = $error;  

     header('location: task_14.php');

    exit();


}


// if (password_verify($password, $hash)) {
//     echo 'есть пароль';
// }
// else {
//     echo 'нет такого пароля';
// }


?>