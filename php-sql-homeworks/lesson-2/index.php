<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Нетология php-7, домашнее задание №2</title>
    <meta name="description" content="">

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

    <link rel="shortcut icon" href="http://netology.ru/favicon.ico" type="image/x-icon">
    
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<section class="main">
  		<div class="container">
  			<div class="row">
  				<div class="col-md-8 col-md-offset-2">
  					<h1 class="text-center">Основы PHP</h1>
            <a href="http://university.netology.ru/user_data/kundryukov/">На главную</a>
  				</div>
  				<div class="col-md-8 col-md-offset-2">
           <h5>Введите число от 10-99</h5>
           <form action="first-function.php" method="POST">
            <input id="userNumber" name="userNumber" type="text">
            <button type="submit">Отправить</button>
           </form>
  				</div><!-- /col-md-4 -->
  			</div><!-- /row -->
        <div class="row">
          <div class="col-xs-8 col-xs-offset-2">
            <div class="gist">
              <h3>Код скрипта с Gist</h3>
              <script src="https://gist.github.com/serp-ya/c82ea64ac721f1610678a01252f5575b.js"></script>
            </div>
          </div>
        </div>
  		</div><!-- /container -->

  	</section><!-- /main -->

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="../js/jquery.maskedinput.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script>
      jQuery(function($){
         $("#userNumber").mask("99");
      });
    </script>
  </body>
</html>