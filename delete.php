<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Страница пользователя</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php 

	$id = $_GET['id'];

				?>
	<section class="single-person">
		<div class="container">
			<h2>Страница пользователя <span class="id">id = <?php echo $id ?></span></h2>
			<div class="single-person__info">
				<div class="single-person-img">
					<img src="<?php echo $person['image'] ?>" alt="">
				</div>
				<div class="name"></div>
				<div class="last-name"></div>
				<div class="username"></div>
			</div>
		</div>
	</section>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="main.js"></script>
</body>
</html>