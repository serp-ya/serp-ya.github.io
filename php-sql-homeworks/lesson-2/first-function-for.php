<?php $title = 'Function For' ?>
<?php include_once ('../header.php');?>
  	<div class="container">
  		<div class="row">
  			<div class="col-md-8 col-md-offset-2">
    			<h1>Работа цикла For</h1>
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

          $a = 1;                                      // Создаём переменные
          $b = 1;

            for ($i=0; $i < $a; $i++) {                // Начало цикла

              if ($a > $userNumber)                    // Проверяем больше ли переменная (1) 
              {                                        // в отношении заданного пользователем числа
                echo "Задуманное число НЕ входит в числовой ряд";
                break;                                 // Прерываем цикл при выполнении условия if
              } 

              if ($a == $userNumber)                   // Проверяем, равна ли переменная (1)
              {                                        // заданному пользователем числу
                echo "Задуманное число входит в числовой ряд";
                break;                                 // Прерываем цикл при выполнении условия elseif
              }

              $c = $a;                                 // Обрабатываем переменные в соответствие с ТЗ
              $a = $a + $b;
              $b = $c;
            }
          ?>

          <div class="gist">
            <script src="https://gist.github.com/serp-ya/c82ea64ac721f1610678a01252f5575b.js"></script>
          </div>
  			</div>
  		</div>
  	</div>
<?php include_once ('../footer.php');?>