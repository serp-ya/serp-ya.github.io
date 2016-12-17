<?php $title = 'Function While' ?>
<?php include_once ('../header.php');?>
  	<div class="container">
  		<div class="row">
  			<div class="col-md-8 col-md-offset-2">
    			<h1>Работа цикла While</h1>
    			<a href="../lesson-2/">Вернуться назад</a>
    		</div>
    		<div class="col-md-8 col-md-offset-2">
  				<?php 
          Error_reporting(E_ALL);                      // Блок из лекции Александра, для фильтрации ошибок
          Ini_set('display_errors', 1);

          $userNumber = $_POST['userNumber'];          // Получаемые данные из тега input

          ?>

          <br>
          <p>Задуманное число: <?= $userNumber; ?></p> <!-- Показываем пользователю введённое им число -->
                    
          <?php

          $alpha = 1;                                   // Создаём переменные
          $beta = 1;

            while ($alpha >= $beta)                     // Начало цикла
            {

              if ($alpha > $userNumber)                 // Проверяем больше ли переменная (1) 
              {                                         // в отношении заданного пользователем числа
                echo "Задуманное число НЕ входит в числовой ряд";
                break;                                  // Прерываем цикл при выполнении условия if
              } 

              elseif ($alpha == $userNumber)            // Проверяем, равна ли переменная (1)
              {                                         // заданному пользователем числу
                echo "Задуманное число входит в числовой ряд";
                break;                                  // Прерываем цикл при выполнении условия elseif
              }

              else 
              {

              $gamma = $alpha;                           // Обрабатываем переменные в соответствие с ТЗ
              $alpha = $alpha + $beta;
              $beta = $gamma;
              }
            }
          ?>

          <div class="gist">
            <script src="https://gist.github.com/serp-ya/5c96e41a260d057d127ed6a737f6801c.js"></script>
          </div>
  			</div>
  		</div>
  	</div>
<?php include_once ('../footer.php');?>