<?php 

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Курс PHP</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<!-- ------------------------- -->
	<!-- задание 1 -->
	<!-- ------------------------- -->
	<section class="tusk-block">
		<div class="container">
			<h2 class="block-title">Задание 1 <span>Сформировать массив элементов. Вывести при помощи цикла foreach</span></h2>
			<div class="w3-padding w3-white notranslate" style="width:100%">
<div style="width:100%"> 
  <input class="form-control" id="myInputList" type="text" placeholder="Поиск...">
  <br>

  <?php 
  $products = [
  	[	
  		'id' => '1',
  		'name' => 'телефон',
  		'price' => '500',
  	],
  	[	
  		'id' => '2',
  		'name' => 'планшет',
  		'price' => '800',
  	],
  	[	
  		'id' => '3',
  		'name' => 'ноутбук',
  		'price' => '1000',
  	],
  	[	
  		'id' => '4',
  		'name' => 'Персональный компьютер',
  		'price' => '1500',
  	]
  ];

  ?>
  <ul class="list-group" id="myList" style="color:#333;">
  	<?php 
  		foreach ($products as $product) {?>
  			<li class="list-group-item" style=""><?php echo $product['name']?></li>

  			<?php
  		}
  	?>
  </ul>
</div>
</div>
		</div>
	</section>
	<!-- ------------------------- -->
	<!-- задание 2 -->
	<!-- ------------------------- -->
	<section class="tusk-block">
		<div class="container">
			<h2 class="block-title">задание 2 <span>Сформировать массив элементов. Вывести при помощи цикла foreach</span></h2>
			<div class="text">
				<?php 
					  $items = [
					  	[	
					  		'title' => 'Lorem, ipsum, dolor.',
					  		'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur dolore excepturi numquam rerum soluta unde, quas consequuntur est ad nemo adipisci delectus sunt et nesciunt ipsam consectetur veritatis nulla quos.'
					  	],
					  	[	
					  		'title' => 'Далеко-далеко, за, словесными.',
					  		'desc' => 'Далеко-далеко за, словесными горами, в стране гласных и согласных живут рыбные тексты. На берегу гор послушавшись ты ведущими там злых предложения даже курсивных инициал прямо снова строчка, она запятой, вершину, осталось агентство переписывается.'
					  	]
					  ];

				?>
				<?php 
			  		foreach ($items as $item) {?>
			  			<div class="text__item">
							<h3 class="text__title"><?php echo $item['title']?></h3>
						    <p class="text__desc"><?php echo $item['desc']?></p>
						</div>

  				<?php
  					}
  				?>
  				<?php echo count($items)?>
			</div>
		</div>
	</section>
	<!-- ------------------------- -->
	<!-- задание 3 -->
	<!-- ------------------------- -->
	<section class="tusk-block">
		<div class="container">
			<h2 class="block-title">задание 3 <span>Сформировать массив элементов. Вывести при помощи цикла foreach.</span> <span class="small">Обратите внимание, что последний элемент не является ссылкой.</span></h2>

			<?php 
				$crumbs = [
				[
					'id' => '1',
					'name' => 'Главная'
				],
				[
					'id' => '2',
					'name' => 'PHP'
				],
				[
					'id' => '3',
					'name' => 'Функции'
				]
			];


			?>

			<ul class="crumbs__list">
				
				<?php 

				foreach ($crumbs as $item) { 
					if($item['id'] != count($crumbs)){?>
						<li><a href="#"><?php echo $item['name'].' '.'/'?></a></li><?php

					}
					else{?>
						<li><span><?php echo $item['name']?></span></li>

						<?php
					}
					
									
				
			}

				?>

			</ul>

		</div>
	</section>
	<!-- ------------------------- -->
	<!-- задание 4 -->
	<!-- ------------------------- -->
	<section class="tusk-block">
		<div class="container">
			<h2 class="block-title">задание 4 <span>Сформировать массив элементов. Вывести при помощи цикла foreach.</span> <span class="small">При формирования массива берите все что формирует элемент: атрибуты тегов, значения стилей и др.</span></h2>

				<?php 

				$skills = [

					[
                      'name' => 'My tasks',
                      'progress_min' => '0',
                      'progress_max' => '150',
                      'progress_now' => '130',
                      'show_max' => true,
                      'val' => ' ',
					],
					[
                      'name' => 'Transfered',
                      'progress_min' => '0%',
                      'progress_max' => '1000',
                      'progress_now' => '440',
                      'show_max' => false,
                      'val' => 'TB',
					],
					[
                      'name' => 'Bags Squashed',
                      'progress_min' => '0%',
                      'progress_max' => '100',
                      'progress_now' => '77',
                      'show_max' => false,
                      'val' => '%',
					],
					[
                      'name' => 'User testing',
                      'progress_min' => '0',
                      'progress_max' => '10',
                      'progress_now' => '7',
                      'show_max' => false,
                      'val' => 'days',
					],

				];

				foreach ($skills as $skill) {
					$kaf = $skill['progress_now']/$skill['progress_max'];
					$width = $kaf * 100;
					?>
				<div class="progress__item">
					<div class="progress__top">
						<span class="progress__name"><?php echo $skill['name']?></span>

						<?php 
						if($skill['show_max']){?>
							<div class="progress__info"><?php echo $skill['progress_now'].'/'.$skill['progress_max'].$skill['val']?></div>
						<?php	
						}

						
						else{?>
							<div class="progress__info"><?php echo $skill['progress_now'].' '.$skill['val']?></div>
					<?php		
					}
					?>
						
					</div>
					<div class="progress">
				  <div class="progress-bar" style="width: <?php echo $width.'%' ?>" data-min="0" data-max="100"></div>
				</div>
				</div>

					<?php
				}

				?>
		</div>
	</section>
	<!-- ------------------------- -->
	<!-- задание 5-6 -->
	<!-- ------------------------- -->
	<section class="tusk-block">
		<div class="container">
			<h2 class="block-title">задание 5-6 <span>Сформировать массив элементов. Вывести при помощи цикла foreach.</span>
				<span class="small">Представим, что два пользователя были забанены. Внесите изменения в результат предыдущего задания и доработайте задание.</span>
			</h2>

				<?php 

				$users = [

					[
                      'name' => 'Sunny A',
                      'skill' => 'UI/UX Expert',
                      'position' => 'Lead Author',
                      'mail' => '@myplanetiket',
                      'image' => 'https://avatars.mds.yandex.net/i?id=67baef44c1b216104d1fba9d2b0fda9c-4576159-images-thumbs&n=13',
                      'isBanned' => false,
					],
					[
                      'name' => 'Jos K',
                      'skill' => 'ASP.NET Developer',
                      'position' => 'Prtner & Contributor',
                      'mail' => '@atlantez',
                      'image' => 'https://econet.ru/media/110749/covers/179125/original.jpg?1516099569',
                      'isBanned' => false,

					],
					[
                      'name' => 'Roberto R',
                      'skill' => 'Rails Developer',
                      'position' => 'Prtner & Contributor',
                      'mail' => '@sildur',
                      'image' => 'https://avatars.mds.yandex.net/i?id=2a00000179dfb4e079f437cb7a26332e058a-2795487-images-thumbs&n=13',
                      'isBanned' => true,

					],
					[
                      'name' => 'Jovanni L',
                      'skill' => 'PHP Developer',
                      'position' => 'Prtner & Contributor',
                      'mail' => '@lodev09',
                      'image' => 'https://cdn.fishki.net/upload/post/2016/11/19/2140537/1cee8fb5b6a8036a5239efdd9cc05087.jpg',
                      'isBanned' => true,

					],


				];?>
				<div class="users__list">

					<?php 

					foreach ($users as $user) {

						if ($user['isBanned']){?>
							<div class="users__item <?php echo 'bann' ?>">
						<?php		
						}
						else{?>
							<div class="users__item">
							<?php	
						}
						?>
						<div class="users__item-img">
							<img src="<?php echo $user['image']?>" alt="<?php echo $user['name']?>">
						</div>
						<div class="users__item-info">
							<h3 class="users__item-name"><?php echo $user['name']?>
                                <span class="users__item-skill">(<?php echo $user['skill']?>)</span>
							</h3>
							<div class="users__item-pos"><?php echo $user['position']?></div>
							<a href="#" class="users__item-email"><?php echo $user['mail']?></a>
						</div>
					</div>

					<?php

					}

					?>
			
		</div>
	</section>
		<!-- ------------------------- -->
	<!-- задание 7-->
	<!-- ------------------------- -->
	<section class="tusk-block">
		<div class="container">
			<h2 class="block-title">задание 7 <span>Вывод из базы данных</span></h2>

				<?php
				$pdo = new PDO('mysql:host = localhost;dbname=course_db','root','');

				$sql = 'SELECT * FROM users';

				$query = $pdo->query($sql);

				$allUsers = $query->fetchAll(PDO::FETCH_ASSOC);

				?>
				<div class="users__list">

					<?php 

					foreach ($allUsers as $user) {

						if ($user['isBanned']){?>
							<div class="users__item <?php echo 'bann' ?>">
						<?php		
						}
						else{?>
							<div class="users__item">
							<?php	
						}
						?>
						<div class="users__item-img">
							<img src="<?php echo $user['image']?>" alt="<?php echo $user['name']?>">
						</div>
						<div class="users__item-info">
							<h3 class="users__item-name"><?php echo $user['name']?>
                                <span class="users__item-skill">(<?php echo $user['skill']?>)</span>
							</h3>
							<div class="users__item-pos"><?php echo $user['position']?></div>
							<a href="#" class="users__item-email"><?php echo $user['mail']?></a>
						</div>
					</div>

					<?php

					}

					?>
			
		</div>
	</section>
		<!-- ------------------------- -->
	<!-- задание 8-->
	<!-- ------------------------- -->
	<section class="tusk-block">
		<div class="container">
			<h2 class="block-title">задание 8 <span>Сфомируйте таблицу в базе данных и выведите данные при помощи цикла.</span></h2>

				<?php
				$pdo = new PDO('mysql:host = localhost;dbname=course_db','root','');

				$sql = 'SELECT * FROM persons';

				$query = $pdo->query($sql);

				$persons = $query->fetchAll(PDO::FETCH_ASSOC);

				?>
				
				<table class="table">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">First Name</th>
				      <th scope="col">Last Name</th>
				      <th scope="col">Username</th>
				      <th scope="col">Actions</th>
				    </tr>
				  </thead>
				  <tbody>

				  	<?php 

				  	foreach ($persons as $person) {?>
				  		<tr>
				      <th scope="row"><?php echo $person['id'] ?></th>
				      <td><?php echo $person['first_Name'] ?></td>
				      <td><?php echo $person['last_Name'] ?></td>
				      <td><?php echo $person['username'] ?></td>

				      <?php $id = $person['id'];
				      		$current_name = $person['first_Name'];


				      ?>

				      <td class="btn-block">
				      	<a href="show.php?id=<?php echo $id ?>" class="btn btn-1">Редактировать</a>
				      	<a href="upgrade.php?id=<?php echo $id ?>" class="btn btn-2">Изменить</a>
				      	<a href="delete.php?id=<?php echo $id ?>" class="btn btn-3">Удалить</a>
				      </td>
				    </tr>

				  	<?php	
				  	}
				  	?>

				 
				  </tbody>
				</table>
			
		</div>
	</section>
	<!-- ------------------------- -->
	<!-- задание 9 -->
	<!-- ------------------------- -->
	<section class="tusk-block">
		<div class="container">
			<h2 class="block-title">задание 9 <span>Напишите скрипт, который запишет данные из поля Text в таблицу Базы данных.</span></h2>

				
				<form action="create.php<?php $text ?>" method="post">
					 	<?php

					  	if(isset(($_SESSION['message']))){
					  		 echo $_SESSION['message']; 
					  	     unset($_SESSION['message']);
					  	}
					  	
					  	 ?>
					  <div class="form-group">
					    <label for="text">text</label>
					    <input type="text" name="text" class="form-control" id="text">
					  </div>
					
					  <button type="submit" class="btn btn-default">Submit</button>
					</form>

					<div class="out">
						<h4>Вывод из базы таблицы с текстом</h4>

						<?php 

						$sql = 'SELECT * FROM text_info';

						$query = $pdo->query($sql);

						$text = $query->fetchAll(PDO::FETCH_ASSOC);

						foreach ($text as $item) {?>
							
						<p><?php echo $item['text']?> </p>	

						<?php	
						}
						?>

					</div>
			
		</div>
	</section>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="main.js"></script>
</body>
</html>