<?php

include("connect.php");

$nome = $_POST['Nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$senha = $_POST['Senha'];
$Data_nascimento = $_POST['data'];


echo $email , $senha , $nome , $cpf , $Data_nascimento;

$sql = "INSERT INTO usuario VALUES ('$email','$senha','$nome','$cpf','$Data_nascimento')";



