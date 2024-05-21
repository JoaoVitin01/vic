<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Navbar com Dropdown Menu Linear</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<nav class="navbar">
    <div class="container">
        <div class="logo">
            <a href="#">bibloteca</a>
        </div>
        <div class="menu">
            <ul>
                <li><a href="#">Página Inicial</a></li>
                <li class="dropdown">
                    <a href="#" class="dropbtn">Produtos</a>
                    <div class="dropdown-content">
                        <a href="#">Produto 1</a>
                        <a href="#">Produto 2</a>
                        <a href="#">Produto 3</a>
                    </div>
                </li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </div>
    </div>
</nav>

<style>
    body {
    margin: 0;
    font-family: Arial, sans-serif;
}

.navbar {
    background-color: #333;
    padding: 10px 0;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo a {
    color: white;
    font-size: 24px;
    text-decoration: none;
}

.menu ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

.menu ul li {
    display: inline;
}

.menu ul li a {
    display: inline-block;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
}

.menu ul li a:hover {
    background-color: #555;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #333;
    min-width: 160px;
    z-index: 1;
}

.dropdown-content a {
    color: white;
    padding: 12px 16px;
    display: block;
    text-decoration: none;
}

.dropdown-content a:hover {
    background-color: #555;
}

.dropdown:hover .dropdown-content {
    display: block;
}

</style>
</body>
</html>
