<?php

include("connect.php");

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$Data_nascimento = $_POST['data'];


echo $email , $senha , $nome , $cpf , $Data_nascimento;

$sql = "INSERT INTO usuario(nome, cpf, email, senha, Data_nascimento)
         VALUES ('$email','$senha','$nome','$cpf','$Data_nascimento')";

$query = mysqli_query($conn, $sql);





