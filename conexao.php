<?php 
$host ="localhost";
$user="root";
$senha="";
$banco ="bibliotech";

if($conexao = mysqli_connect($host,$user,$senha,$banco)){
    //echo"conectado com sucesso";
} else{
    echo"erro ao se comunicar com a base de dados";
}



?>