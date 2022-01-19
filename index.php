<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,700|Roboto:400,500&amp;subset=cyrillic"
    rel="stylesheet">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="css/slick.css">
  <link rel="stylesheet" href="css/jquery.formstyler.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/media.css">
</head>

<body>
  <header class="header">
    <div class="header__top">
      <div class="container">
        <div class="header__contacts">
          <a class="header__email" href="#">help123@gmail.com</a>
          <a data-fancybox data-src="#modal" href="javascript:;" class="header__btn" href="#">Add task</a>
        </div>
      </div>
    </div>
    <div class="header__content">
      <div class="container">
        <div class="header__content-inner">
          <div class="header__logo">
            <a href="#">
              <img src="img/logo.png" alt="">
            </a>
          </div>
          <nav class="menu">
            <div class="header__btn-menu">
              <span class="icon-bars"></span>
            </div>
            <ul>
              <li><a data-fancybox data-src="#modal2" href="javascript:;" class="header__get" href="#">Get tasks</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>

<div class="container mt-4">
  <div class="row">
    <div id="modal">
      <form action="php/check.php" method="post">
      <input type="text" class="form-control" name="theme" id="theme" placeholder="Theme">
      <input type="text" class="form-control" name="task" id="task" placeholder="Task">
      <button class="btn btn-success" type="submit" >Отправить</button>
    </form>
    </div>

    <div id="modal2">
      <form action="php/get.php" method="post">
        <input type="text" class="form-control" name="theme" id="theme" placeholder="Theme">
      <button class="btn btn-success" type="submit" name="get" id="get"  >Отправить</button>
    </form>
  </div>
  </div>
  <?php
    if(!isset($_COOKIE['p'])):
  ?>
  <?php else:
    $data = json_decode($_COOKIE['p'],true);?>
  <?php
  foreach ($data as &$value) {
    printf ("%s (%s)\n", $value["temat"], $value["zadanie"]);
   }
  setcookie('p', '', time()-3600, "/");
  endif;
  ?>
  </div>
</div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
<script src="js/slick.min.js"></script>
    <script src="js/jquery.formstyler.min.js"></script>
    <script src="js/main.js"></script>

  </body>
</html>
