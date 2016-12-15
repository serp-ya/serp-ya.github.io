<?php $title = 'My First Function' ?>
<?php include_once ('../header.php');?>
  	<div class="container">
  		<div class="row">
  			<div class="col-md-8 col-md-offset-2">
    			<h1 class="text-center">Работа функции</h1>
    			<a href="http://university.netology.ru/user_data/kundryukov/lesson-2/">Вернуться назад</a>
    		</div>
    		<div class="col-md-8 col-md-offset-2">
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
<?php include_once ('../footer.php');?>
