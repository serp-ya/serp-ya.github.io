<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Нетология php-7, домашнее задание №1</title>
    <meta name="description" content="">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link rel="shortcut icon" href="http://..." type="image/x-icon">
    
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <?php 
	require ('about.php');
  ?>
  	<section class="main">
  		<div class="container">
  			<div class="row">
  				<div class="col-md-8 col-md-offset-2">
  					<h1 class="text-center">Коротко о себе</h1>
  				</div>
  				<div class="col-md-4 col-md-offset-2">
  					<img class="ava" src="img/ava.jpg" alt="Кундрюков Сергей Георгиевич">
  					<dl>
  						<dt>Фамилия</dt>
  						<dd><?= $last_name; ?></dd>
  					</dl><!-- /Фамилия -->
  					<dl>
  						<dt>Имя</dt>
  						<dd><?= $first_name; ?></dd>
  					</dl><!-- /имя -->
  					<dl>
  						<dt>Возраст</dt>
  						<dd><?= $age; ?> лет</dd>
  					</dl><!-- /Возраст -->
  					<dl>
  						<dt>Город</dt>
  						<dd><?= $city; ?></a></dd>
  					</dl><!-- /Город -->
  					<dl>
  						<dt>E-mail</dt>
  						<dd><a href="mailto:<?= $email; ?>"><?= $email;?></a></dd>
  					</dl><!-- /email -->
  					<div class="soc-icons">
  						<a href="https://vk.com/kosinsky" target="blank" class="vk"></a>
  						<a href="https://www.facebook.com/Sergei.Kundryukov" target="blank" class="fb"></a>
  						<a href="https://plus.google.com/u/0/115793327740702824374" target="blank" class="gp"></a>
  						<a href="http://university.netology.ru/u/kundryukov/" target="blank" class="ntl"></a>
  					</div><!-- /soc-icons -->
  					<!-- <div class="soc-icons">
  						<a href="https://vk.com/kosinsky" target="blank"><img src="img/vk.png" alt="Аккаунт ВКонтакте"></a>
  						<a href="https://www.facebook.com/Sergei.Kundryukov"><img src="img/fb.png" alt="Аккаунт в Facebook"></a>
  						<a href="https://plus.google.com/u/0/115793327740702824374"><img src="img/g-plus.png" alt="Аккаунт в Google+"></a>
  						<a href="http://university.netology.ru/u/kundryukov/"><img src="img/ntl.png" alt="Страничка в Нетологии"></a>
  					</div> --><!-- /soc-icons -->
  				</div><!-- /col-md-4 -->
  				<div class="col-md-4">
  					<p><?= $about; ?></p>
  				</div><!-- /col-md-4 -->
  			</div><!-- /row -->

  		</div><!-- /container -->

  	</section><!-- /main -->

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>