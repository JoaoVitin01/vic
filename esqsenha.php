<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
</head>
<body>

<div class="container">
    <div class="row">
      <div class="col">

<!--<img src="img/bibli.jpg">-->
<ul class="menu">

      <li title="home"><a href="#" class="menu-button home">menu</a></li>
      
      <li title="search"><a href="#" class="search">search</a></li>
      <li title="pencil"><a href="#" class="pencil">pencil</a></li>
      <li title="about"><a href="#" class="active about">about</a></li>
      <li title="archive"><a href="#" class="archive">archive</a></li>
      <li title="contact"><a href="#" class="contact">contact</a></li>
    </ul>
    
    <ul class="menu-bar">
        <li><a href="#" class="menu-button">Menu</a></li>
        <li><a href="#">Home</a></li>
        <li><a href="#">Profile</a></li>
        <li><a href="#">Editorial</a></li>
        <li><a href="#">About</a></li>
    </ul>
       
    </div>
    </div>
  </div>
  

    <script src="navbar.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</div>
</body>
</html>
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        td {
            vertical-align: middle;
        }

        .btn {
            display: inline-block;
            padding: 8px 16px;
            margin-right: 5px;
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            border-radius: 4px;
            font-size: 14px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .btn-info {
            background-color: #17a2b8;
        }

        .btn-info:hover {
            background-color: #117a8b;
        }

        .btn-danger {
            background-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #bd2130;
        }

        p {
            margin-top: 0;
            text-align: center;
        }

        .search-form {
            margin-bottom: 20px;
            text-align: center;
        }

        .search-input {
            padding: 8px;
            width: 60%;
            max-width: 400px;
            border-radius: 4px;
            border: 1px solid #ddd;
        }

        .search-button {
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        .search-button:hover {
            background-color: #0056b3;
        }
    </style>




 <!-- <li class="navbar-item flexbox-left"> 
      <a class="navbar-item-inner flexbox-left" href="#">
        <i class="material-icons">dashboard</i>
        <span class="link-text">Dashboard</span>
      </a>
    </li>
    <li class="navbar-item flexbox-left">
      <a class="navbar-item-inner flexbox-left" href="perfil.php">
        <i class="material-icons">person</i>
        <span class="link-text">Perfil</span>
      </a>
    </li>
    <li class="navbar-item flexbox-left">
      <a class="navbar-item-inner flexbox-left" href="#">
        <i class="material-icons">settings</i>
        <span class="link-text">Configurações</span>
      </a>
     </li> -->

     <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 1300px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        td {
            vertical-align: middle;
        }

        .btn {
            display: inline-block;
            padding: 8px 16px;
            margin-right: 5px;
            text-decoration: none;
            color: #333;
            background-color: #007bff;
            border-radius: 4px;
            font-size: 14px;
            transition: background-color 0.3s;
            min-width: 100px;
            line-height: 25px;
            text-align: center;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .btn-info {
            background-color: #17a2b8;
        }

        .btn-info:hover {
            background-color: #117a8b;
        }

        .btn-success {
            background-color: bisque;
        }

        .btn-success:hover {
            background-color: blanchedalmond;
        }

        .btn-danger {
            background-color: rgb(238, 44, 44);
        }

        .btn-danger:hover {
            background-color: rgb(219, 64, 64);
        }

        .modal-close.btn {
            background-color: bisque;
            border-color: #ddd;
        }

        /* Estilo para o modal */
        .modal {
            max-width: 90%;
        }

        .modal-content {
            padding: 20px;
        }

        .modal-footer {
            padding: 10px 20px;
            justify-content: flex-end;
        }

        .modal-close.btn:hover {
            background-color: antiquewhite;
        }

        p {
            margin-top: 0;
            text-align: center;
        }

        .search-form {
            margin-bottom: 20px;
            text-align: center;
        }

        .search-input {
            padding: 8px;
            width: 60%;
            max-width: 400px;
            border-radius: 4px;
            border: 1px solid #ddd;
        }

        .search-button {
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            background-color: bisque;
            color: #333;
            cursor: pointer;
        }

        .search-button:hover {
            background-color: antiquewhite;
        }

        @media only screen and (max-width: 600px) {
            .container {
                max-width: 95%;
            }

            .search-input {
                width: 100%;
                max-width: none;
            }

            .btn {
                padding: 6px 12px;
                font-size: 12px;
            }

            h1 {
                font-size: 20px;
            }
        }
    </style>