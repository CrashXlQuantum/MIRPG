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
<body style="background-image: url('../img/background_creen.jpg'); background-size: cover; background-position: center; background-attachment: fixed;">

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

<style>

</style>

      <div class="container">
  <div class="outer">
    <div class="inner">
      <img src="../img/screen1.png" alt="" style="width: 60%; border: 2px solid black;">
      <img src="../img/screen2.png" alt="" style="width: 60%; border: 2px solid black; margin: 2% 0 0 30%;">




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

    </div>

  </div>
      <div class="container-grad" >
        <br><br>
      </div>
    </div>

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
        <a href="screenua.php" class="text-reset">Український</a><br>
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
