<?php

include("conexao.php");
$nome      = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$usuario =   $_POST["usuario"];
$senha =   $_POST["senha"];
$email     = $_POST["email"];
$sexo      = $_POST["sexo"]; 

$sql = "INSERT INTO usuarios ( id , nome , sobrenome,usuario , senha , email,sexo )
			VALUES ( NULL , '$nome', '$sobrenome','$usuario', '$senha', '$email' , '$sexo')";
$query = $mysqli->query($sql);
		
$mysqli->close();
echo "Guardado com sucesso<br />";
header("Location:index.html");
?>

