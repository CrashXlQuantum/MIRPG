<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MI RPG</title>
  <link rel="shortcut icon" href="../img/icon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://jqueryui.com/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body style="background-image: url('../img/background_inf.jpg'); background-size: cover; background-position: center; background-attachment: fixed;">

<header>
   <nav class="navbar navbar-expand-lg navbar-light fixed-top mask-custom shadow-0">
    <div class="container">
      <a class="nav-link" href="../index.php"><img src="../img/icon.png" alt="" style="width: 30%; margin-left: 50%;"></a>
      <a class="navbar-brand" href="../index.php"><span style="color: #6F4B7B;">M</span><span style="color: #5A4471;">I </span><span style="color: #D58EA7;">RPG</span></a>
          <div class="dropdown">
    <style>
      @media (min-width: 991px){
        .dropdown{
            display: none;
        }
    }

    .dropbtn {
        background-color: #000;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }

    .dropbtn:hover, .dropbtn:focus {
        background-color: #000;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {background-color: #ddd}

    .show {display:block;}

    a{
    text-decoration: none;
    }

    </style>

            <button onclick="myFunction()" class="dropbtn">Меню</button>
            <div id="myDropdown" class="dropdown-content">
              <a href="screenru.php">Скриншоты</a>
              <a href="informru.php">Информация</a>
              <a href="mapru.php">Карта</a>
            </div>
          </div>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link" href="screenru.php"><h4>Скриншоты</h4></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="informru.php"><h4>Информация</h4></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mapru.php"><h4>Карта</h4></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../index.html"><img src="../img/logo.png" alt="" style="width: 20%; margin-left: 40%;"></a>
          </li>
        </ul>
        <ul class="navbar-nav d-flex flex-row">
          <li class="nav-item me-3 me-lg-0">
            <a class="nav-link" href="#!">
              <i class="fas fa-shopping-cart"></i>
            </a>
          </li>
          <li class="nav-item me-3 me-lg-0">
            <a class="nav-link" href="#!">
              <i class="fab fa-twitter"></i>
            </a>
          </li>
          <li class="nav-item me-3 me-lg-0">
            <a class="nav-link" href="#!">
              <i class="fab fa-instagram"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
<br><br><br>
      <div class="container">
  <div class="outer">
    <div class="inner">


        <h2 style="text-align: center;">Информация</h2>
        <p>
          И так, данная страничка предназначена чтобы помочь в определенных аспектах игры, например такие как работа артифактов, система классов и другое... Это ускорит ваш прогресс в игре и понимание! А если вы запутаетесь в квесте, то в определенном разделе вы найдете способы решения той или иной загадки в квесте или же всю сюжетную линию квеста...
        </p>
        <br>

          <ul class="list_info">
                <li><a href="first_stepsua.php">Что делать в начале?</a></li>
                <li><a href="classesua.php">Классы</a></li>
                <li><a href="">Артефакты</a></li>
                <li><a href="">Задачи</a></li>
                <li><a href="">Прокачка</a></li>
                <li><a href="">Репутация</a></li>
                <li><a href="">Монстры</a></li>
                <li><a href="">Животные</a></li>
                <li><a href="">Боссы</a></li>
                <li><a href="">Класс дилеры</a></li>
                <li><a href="">Экономика</a></li>
                <li><a href="">Дроп</a></li>
          </ul>

      <style>
              .list_info {
      list-style: none;
      padding: 0;
      }
      .list_info li {
      font-family: "Trebuchet MS", "Lucida Sans";
      padding: 7px 20px;
      margin-bottom: 10px;
      border-radius: 5px;
      border-left: 10px solid #A90600;
      box-shadow: 2px -2px 5px 0 rgba(0,0,0,.1),
           -2px -2px 5px 0 rgba(0,0,0,.1),
          2px 2px 5px 0 rgba(0,0,0,.1),
          -2px 2px 5px 0 rgba(0,0,0,.1);
      font-size: 20px;
      letter-spacing: 2px;
      transition: 0.3s all linear;
      }
      .list_info a{
        color: black;
        text-decoration: none;
      }

      .list_info li:nth-child(2){border-color: #A94600;}
      .list_info li:nth-child(3){border-color: #A97900;}
      .list_info li:nth-child(4){border-color: #98A900;}
      .list_info li:nth-child(5){border-color: #00A952;}
      .list_info li:nth-child(6){border-color: #00A99B;}
      .list_info li:nth-child(7){border-color: #005AA9;}
      .list_info li:nth-child(8){border-color: #3800A9;}
      .list_info li:nth-child(9){border-color: #6000A9;}
      .list_info li:nth-child(10){border-color: #8400A9;}
      .list_info li:nth-child(11){border-color: #A90090;}
      .list_info li:nth-child(12){border-color: #A90351;}
      .list_info li:hover {border-left: 10px solid transparent;}
      .list_info li:nth-child(1):hover {border-right: 10px solid #A90600;}
      .list_info li:nth-child(2):hover {border-right: 10px solid #A94600;}
      .list_info li:nth-child(3):hover {border-right: 10px solid #A97900;}
      .list_info li:nth-child(4):hover {border-right: 10px solid #98A900;}
      .list_info li:nth-child(5):hover {border-right: 10px solid #00A952;}
      .list_info li:nth-child(6):hover {border-right: 10px solid #00A99B;}
      .list_info li:nth-child(7):hover {border-right: 10px solid #005AA9;}
      .list_info li:nth-child(8):hover {border-right: 10px solid #3800A9;}
      .list_info li:nth-child(9):hover {border-right: 10px solid #6000A9;}
      .list_info li:nth-child(10):hover {border-right: 10px solid #8400A9;}
      .list_info li:nth-child(11):hover {border-right: 10px solid #A90090;}
      .list_info li:nth-child(12):hover {border-right: 10px solid #A90351;}
      </style>




    </div>
  </div>
      <div class="container-grad" >
        <br><br>
      </div>
    </div>



    <style>
      #shado {
        background: rgba(102, 102, 102, 0.5);
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        display: none;
      }
      .window {
        width: 300px;
        height: 50px;
        text-align: center;
        padding: 15px;
        border: 3px solid gray;
        border-radius: 10px;
        color: #000;
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        margin: auto;
        background: #fff;
      }
      #shado:target {display: block;}
      .close {
        display: inline-block;
        border: 1px solid gray;
        color: #000;
        padding: 0 12px;
        margin: 10px;
        text-decoration: none;
        background: #f2f2f2;
        font-size: 14pt;
        cursor:pointer;
      }
      .close:hover {background: #e6e6ff;}
    </style>

<footer class="text-center text-lg-start bg-light text-muted">
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <div class="me-5 d-none d-lg-block">
    </div>
  </section>
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <div class="row mt-3">
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3">Проект:</i>
          </h6>
          <p>
            "Magic Irresistible RPG"
          </p>
        </div>
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <h6 class="text-uppercase fw-bold mb-4">
            Настройки пользователя
          </h6>
          <p>
            <a href="#!" class="text-reset">Регистрация</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Авторизация</a>
          </p>
          <p>
                <div id="shado">
      <div class="window">
        <a href="informua.php" class="text-reset">Український</a><br>
        <a href="#" class="close">Закрыть окно</a>
      </div>
    </div>

    <a href="#shado" class="text-reset">Язык</a>
          </p>
        </div>
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <h6 class="text-uppercase fw-bold mb-4">Контакты</h6>
          <p><i class="fas fa-home me-3"></i> Украина, Днепр</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            Почта: fdt78730@gmail.com
          </p>
        </div>
      </div>
    </div>
  </section>
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2023 Copyright
  </div>
</footer>

 <script src="../js/script.js"></script>
</body>
</html>
