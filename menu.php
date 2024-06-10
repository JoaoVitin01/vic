<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sticky Responsive Sidenav with Carousel</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap'>
  <link rel="stylesheet" href="navbar.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <style>
    /* Estilo para o carrossel */
    .carousel-container {
      width: 80%; /* Ajuste a largura conforme necessário */
      margin: 20px auto; /* Centraliza o carrossel */
      overflow: hidden;
      position: relative;
    }

    .carousel-slide {
      display: flex;
      transition: transform 0.5s ease;
    }

    .carousel-slide img {
      width: 100%;
      height: auto;
      object-fit: cover; /* Mantém a proporção e preenche o contêiner */
    }

    /* Botões de navegação */
    .carousel-btn {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background: rgba(0, 0, 0, 0.5);
      color: white;
      padding: 10px;
      cursor: pointer;
      z-index: 1000;
    }

    .carousel-btn.prev {
      left: 0;
    }

    .carousel-btn.next {
      right: 0;
    }

    /* Estilo para o conteúdo principal */
    #main {
      padding: 20px;
      background-color: #f9f9f9;
      width: calc(100% - 250px); /* Ajuste conforme necessário para sua barra lateral */
      margin-left: 130px; /* Ajuste conforme necessário para sua barra lateral */
      box-sizing: border-box; /* Inclui padding e border no tamanho total do elemento */
    }

    h2 {
      margin-top: 0;
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
      <a class="navbar-item-inner flexbox-left" href="pesquisa.php">
        <i class="material-icons">list_alt</i> <!--todos os ""<i>" sao icones da google-->
        <span class="link-text">Registros</span>
      </a>
    </li>
    <li class="navbar-item flexbox-left">
      <a class="navbar-item-inner flexbox-left" href="registro-cad.php">
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
  </ul>
</nav>

<!-- Main Content -->
<main id="main" class="flexbox-col">

  <!-- Carrossel de imagens -->
  <div class="carousel-container">
    <div class="carousel-slide">
      <img src="img/1.jpg" alt="Imagem 1">
      <img src="img/2.jpg" alt="Imagem 2">
      <img src="img/3.jpg" alt="Imagem 3">
    </div>
    <div class="carousel-btn prev" onclick="prevSlide()">&#10094;</div>
    <div class="carousel-btn next" onclick="nextSlide()">&#10095;</div>
  </div>
</main>

<script>
  let slideIndex = 0;
  const slides = document.querySelectorAll('.carousel-slide img');

  function showSlides() {
    if (slideIndex >= slides.length) { slideIndex = 0 }
    if (slideIndex < 0) { slideIndex = slides.length - 1 }
    for (let i = 0; i < slides.length; i++) {
      slides[i].style.display = 'none';
    }
    slides[slideIndex].style.display = 'block';
    slideIndex++;
  }

  function prevSlide() {
    slideIndex -= 2; // Retroceder dois índices porque a função showSlides incrementa o índice
    showSlides();
  }

  function nextSlide() {
    showSlides();
  }

  // Iniciar o carrossel
  showSlides();
  setInterval(showSlides, 3000); // Altere o valor para controlar a velocidade de transição
</script>

</body>
</html>
