<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>My First Function</title>
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
  	<div class="container">
  		<div class="row">
  			<div class="col-xs-8 col-xs-offset-2">
    			<h1 class="text-center">Работа функции</h1>
    			<a href="http://university.netology.ru/user_data/kundryukov/lesson-2/">Вернуться назад</a>
    		</div>
    		<div class="col-xs-8 col-xs-offset-2">
  				<?php 
          Error_reporting(E_ALL);                      // Блок из лекции Александра, для фильтрации ошибок
          Ini_set('display_errors', 1);

          $userNumber = $_POST['userNumber'];          // Получаемые данные из тега input

          if ($userNumber < 10)                        // Проверка соблюдения "Маски ввода"
          {
          ?>

          <br>                                         <!-- Чистосердечное признание -->
          <p><b>Ваше число - меньше 10!</b> <br>Пожалуйста, вернитесь назад и введите число от 10 до 99, т.к. настроить иначе программу нам мозгов не хватило...</p>
          <img src="../img/kot-v-shoke.jpeg" alt="Кот в шоке от происходящего" width="300">
                    
          <?php 
          } 
          else                                         // Тело алгоритма
          {
          ?>

          <br>
          <p>Задуманное число: <?= $userNumber; ?></p> <!-- Показываем пользователю введённое им число -->
                    
          <?php
          $a = 1;                                      // Создаём переменные
          $b = 1;

            for ($i=0; $i < 99; $i++) {                // Начало цикла

              if ($a > $userNumber)                    // Проверяем больше ли переменная (1) 
              {                                        // в отношении заданного пользователем числа
                echo "Задуманное число НЕ входит в числовой ряд";
                break;                                 // Прерываем цикл при выполнении условия if
              } 

              elseif ($a == $userNumber)               // Проверяем, равна ли переменная (1)
              {                                        // заданному пользователем числу
                echo "Задуманное число входит в числовой ряд";
                break;                                 // Прерываем цикл при выполнении условия elseif
              }

              $c = $a;                                 // Обрабатываем переменные в соответствие с ТЗ
              $a = $a + $b;
              $b = $c;
            }
          }
          ?>

  			</div>
  		</div>
  	</div>
		
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>