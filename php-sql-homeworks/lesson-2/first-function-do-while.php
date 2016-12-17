<?php $title = 'Function While' ?>
<?php include_once ('../header.php');?>
  	<div class="container">
  		<div class="row">
  			<div class="col-md-8 col-md-offset-2">
    			<h1>Работа цикла Do While</h1>
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

          $Amber = 1;                                   // Создаём переменные
          $Brother = 1;

            do                                          // Начало цикла
            {

              if ($Amber > $userNumber)                 // Проверяем больше ли переменная (1) 
              {                                         // в отношении заданного пользователем числа
                echo "Задуманное число НЕ входит в числовой ряд";
                break;                                  // Прерываем цикл при выполнении условия if
              } 

              else {

                if ($Amber == $userNumber)              // Проверяем, равна ли переменная (1)
                {                                       // заданному пользователем числу
                  echo "Задуманное число входит в числовой ряд";
                  break;                                // Прерываем цикл при выполнении условия elseif
                }

                else {

                $Chrome = $Amber;                       // Обрабатываем переменные в соответствие с ТЗ
                $Amber = $Amber + $Brother;
                $Brother = $Chrome;

                }
              }
            }

            while ($Amber !== $Brother);
          ?>

          <div class="gist">
            <script src="https://gist.github.com/serp-ya/a0cd4734165a06d801adabd62834888b.js"></script>
          </div>
  			</div>
  		</div>
  	</div>
<?php include_once ('../footer.php');?>