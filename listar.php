<?php

include("conexao.php");

$sql = "select * from tabela";
$query = $mysqli->query($sql);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Lista de Dados</title>
</head>

<body>
<?php
if(mysqli_fetch_array($query) < 1) {
	$mysqli->close();
}
?>
<table width="500" border="1" align="center">
  <tr>
    <th>ID</th>
    <th>NOME</th>
    <th>SOBRENOME</th>
    <th>EMAIL</th>
    <th>SEXO</th>
    <th>EDITAR/EXCLUIR</th>
  </tr>
<?php
while($L = mysqli_fetch_array($query)) {
	$id        = $L["id_tabela"];
	$nome      = $L["nome"];
	$sobrenome = $L["sobrenome"];
	$email     = $L["email"];
	$sexo      = $L["sexo"] == "M" ? "Masculino" : "Feminino";
	
	echo"
  <tr>
    <td>$id</td>
    <td>$nome</td>
    <td>$sobrenome</td>
    <td>$email</td>
    <td>$sexo</td>
    <td><a href=\"editar.php?id=$id\">[Editar]</a> | <a href=\"excluir.php?id=$id\">[Excluir]</a></td>
  </tr>\n";
}  
?>  
</table>
</body>
</html>
