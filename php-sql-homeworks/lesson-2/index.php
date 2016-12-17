<?php $title = 'Нетология php-7, домашнее задание №2' ?>
<?php include_once ('../header.php');?>
  <style>
    h4 {
      margin-top: 50px;
    }
  </style>
  	<section class="main">
  		<div class="container">
  			<div class="row">
  				<div class="col-md-8 col-md-offset-2">
  					<h1 class="text-center">Основы PHP</h1>
            <a href="../">На главную</a>
  				</div>
          <div class="col-md-5 col-md-offset-1">
           <h4>Введите любое целое число</h4>
           <form action="first-function-while.php" method="POST">
            <h3>Цикл While</h3>
            <input name="userNumber" type="text">
            <button type="submit">Отправить</button>
           </form>
          </div><!-- /col-md-5 col-md-offset-1 -->
          <div class="col-md-5 col-md-offset-1">
           <h4>Введите любое целое число</h4>
           <form action="first-function-for.php" method="POST">
            <h3>Цикл For</h3>
            <input name="userNumber" type="text">
            <button type="submit">Отправить</button>
           </form>
          </div><!-- /col-md-5 col-md-offset-1 -->
  				<div class="col-md-5 col-md-offset-1">
           <h4>Введите любое целое число</h4>
           <form action="first-function-do-while.php" method="POST">
            <h3>Цикл Do While</h3>
            <input name="userNumber" type="text">
            <button type="submit">Отправить</button>
           </form>
  				</div><!-- /col-md-5 col-md-offset-1 -->
  			</div><!-- /row -->
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
          </div>
        </div>
  		</div><!-- /container -->

  	</section><!-- /main -->
<?php include_once ('../footer.php');?>