<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>CodePen - Sticky responsive sidenav</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap'>
  <link rel="stylesheet" href="navbar.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <style>
    /* pequenos ajustes */
    .navbar-item-inner {
      display: flex;
      align-items: center;
    }
    .navbar-item-inner .material-icons {
      margin-right: 8px;
      color: #757575; /* Cor cinza */
    }
    .link-text {
      color: #757575; /* Cor cinza para os textos */
    }

    /* Ajuste para o tamanho da imagem do logo */
    .navbar-logo {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-bottom: 20px; /* Espaçamento abaixo do logo */
    }

    .navbar-logo img {
      width: 50px; /* Defina o tamanho desejado */
      height: auto; /* Mantenha a proporção */
    }
  </style>
</head>
<body>
<!-- Navbar -->
<nav id="navbar">
  <ul class="navbar-items flexbox-col">
    <li class="navbar-logo flexbox-left">
      <a class="navbar-item-inner flexbox" href="menu.php">
        <!-- logo -->
        <img src="img/logo.png">
      </a>
    </li>
    <li class="navbar-item flexbox-left">
      <a class="navbar-item-inner flexbox-left" href="#">
        <i class="material-icons">list_alt</i> <!--todos os ""<1>" sao icones da google-->
        <span class="link-text">Registros</span>
      </a>
    </li>
    <li class="navbar-item flexbox-left">
      <a class="navbar-item-inner flexbox-left" href="#">
        <i class="material-icons">note_add</i>
        <span class="link-text">Fazer registro</span>
      </a>
    </li>
    <li class="navbar-item flexbox-left">
      <a class="navbar-item-inner flexbox-left" href="#">
        <i class="material-icons">message</i>
        <span class="link-text">Mensagens</span>
      </a>
    </li>
    <li class="navbar-item flexbox-left">
      <a class="navbar-item-inner flexbox-left" href="#">
        <i class="material-icons">dashboard</i>
        <span class="link-text">Dashboard</span>
      </a>
    </li>
    <li class="navbar-item flexbox-left">
      <a class="navbar-item-inner flexbox-left" href="#">
        <i class="material-icons">person</i>
        <span class="link-text">Perfil</span>
      </a>
    </li>
    <li class="navbar-item flexbox-left">
      <a class="navbar-item-inner flexbox-left" href="#">
        <i class="material-icons">settings</i>
        <span class="link-text">Configurações</span>
      </a>
    </li>
  </ul>
</nav>

<!-- Main Content -->
<main id="main" class="flexbox-col">
  <h2>Lorem ipsum!</h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum corporis, rerum doloremque iste sed voluptates omnis molestias molestiae animi recusandae labore sit amet delectus ad necessitatibus laudantium qui! Magni quisquam illum quaerat necessitatibus sint quibusdam perferendis! Aut ipsam cumque deleniti error perspiciatis iusto accusamus consequuntur assumenda. Obcaecati minima sed natus?</p>
</main>
</body>
</html>
