<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sticky Responsive Sidenav with Carousel</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap'>
  <link rel="stylesheet" href="navbar.css">
  <link rel="stylesheet" href="cardsmenu.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <style>
    /* Estilo para o carrossel */
    .carousel-container {
      width: 75%; /* Ajuste a largura conforme necessário */
      margin: 30px auto; /* Centraliza o carrossel */
      overflow: hidden;
      position: relative;
    }

    .carousel-slide {
      display: flex;
      transition: transform 0.5s ease;
    }

    .carousel-slide img {
      width: 100%;
      max-width: 100%;
      height: auto;
      object-fit: cover;
      /* Achatando as imagens um pouco */
      transform: scale(1, 0.8); /* Ajuste o valor vertical conforme necessário */
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
      margin: 20px auto; /* Centraliza o main */
      box-sizing: border-box; /* Inclui padding e border no tamanho total do elemento */
    }

    /* Ajuste para o menu ficar na frente do carrossel */
    #navbar {
      z-index: 1100; /* Ajuste o z-index para que o menu fique na frente das imagens do carrossel */
    }

    h2 {
      margin-top: 0;
    }


    /* Estilo para os ícones dos cards */
    .material-icons {
      color: gray; /* Altera a cor dos ícones para cinza */
    }

    /* Estilo para os cards */
    .article-body p {
      color: #333; /* Altera a cor do texto do card */
    }

    /* Estilo para tornar a imagem do card responsiva */
    .article-wrapper figure {
      margin: 0;
    }

    .article-wrapper figure img {
      width: 100%;
      height: auto;
    }

    /* Estilo para tornar os links do card cinza */
    .article-body a {
      color: gray;
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
  
  <!-- cards -->

  <section class="articles">
  <article>
    <div class="article-wrapper">
      <figure>
        <img src="img/cad1.jpg" alt="" />
      </figure>
      <div class="article-body">
        <h2>Benefícios de Ler:</h2>
        <p>
        Livros ampliam horizontes, apresentando novas ideias, culturas e perspectivas.
        A leitura regular ajuda a aumentar a capacidade de foco e concentração.
        Ler é uma ótima forma de relaxar e aliviar o estresse do dia a dia.
        </p>
        <a href="#" class="read-more">
          Leia <span class="sr-only"></span>
          <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </a>
      </div>
    </div>
  </article>
  <article>

    <div class="article-wrapper">
      <figure>
      <img src="img/cad2.jpg" alt="" />
      </figure>
      <div class="article-body">
        <h2>Leitura e Café:</h2>
        <p>
        O aroma e o sabor do café podem ajudar a criar um ambiente relaxante e propício para a leitura, enquanto a cafeína melhora a concentração.
        
        </p>
        <a href="#" class="read-more">
          Estude <span class="sr-only"></span>
          <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </a>
      </div>
    </div>
  </article>
  <article>

    <div class="article-wrapper">
      <figure>
      <img src="img/cad3.jpg" alt="" />
      </figure>
      <div class="article-body">
        <h2>Riacho dos Livros: </h2>
        <p>
        Um riacho serpenteante atravessa uma paisagem exuberante, com árvores antigas e flores coloridas nas margens, onde livros empilhados criam o cenário perfeito para leitura ao ar livre.
        </p>
        <a href="#" class="read-more">
          Conquiste <span class="sr-only"></span>
          <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </a>
      </div>
    </div>
  </article>
</section>
 
  <!-- Carrossel de imagens -->
  <div class="carousel-container">
    <div class="carousel-slide">
      <img src="img/1.jpg" alt="Imagem 1">
      <img src="img/2.jpg" alt="Imagem 2">
      <img src="img/3.jpg" alt="Imagem 3">
      <img src="img/4.jpg" alt="Imagem 4">
      <img src="img/5.jpg" alt="Imagem 5">
      <img src="img/6.jpg" alt="Imagem 6">
      <img src="img/7.jpg" alt="Imagem 7">
      <img src="img/8.jpg" alt="Imagem 8">
      <img src="img/9.jpg" alt="Imagem 9">
      <img src="img/10.jpg" alt="Imagem 10">
      <img src="img/11.jpg" alt="Imagem 11">
    </div>
    <div class="carousel-btn prev" onclick="prevSlide()">&#10094;</div>
    <div class="carousel-btn next" onclick="nextSlide()">&#10095;</div>
  </div>
  

<h6>Vic Higt-Tech</h6>
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
  setInterval(showSlides, 15000); // Altere o valor para controlar a velocidade de transição
</script>

</body>
</html>
