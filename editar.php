<?php
include("conexao.php");
$id = $_GET["id"];
settype($id, "integer");

$sql = "select * from tabela where id_tabela = $id";
$query = $mysqli->query($sql);
$dados  = mysqli_fetch_array($query);
if($dados["sexo"] == "M") {
	$checkedM   = "checked=\"checked\"";
	$checkedF   = "";
} else {
	$checkedM   = "";
	$checkedF   = "checked=\"checked\"";
}	
$mysqli->close();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Cadastro</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="salvar_edicao.php">
<input type="hidden" name="id" id="id" value="<?php echo $id;?>" />
  <h2 align="center"><strong>Edição de Cadastro PHP/MYSQL </strong></h2>
  <table width="390" border="1" align="center">
    <tr>
      <td width="165">Nome</td>
      <td width="209"><input name="nome" type="text" id="nome" value="<?php echo $dados["nome"];?>" /></td>
    </tr>
    <tr>
      <td>Sobrenome</td>
      <td><input name="sobrenome" type="text" id="sobrenome" value="<?php echo $dados["sobrenome"];?>" /></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><input name="email" type="text" id="email" value="<?php echo $dados["email"];?>" /></td>
    </tr>    
    <tr>
      <td>Sexo</td>
      <td><input name="sexo" type="radio" value="M" <?php echo $checkedM;?> /> 
        Masculino 
        <input name="sexo" type="radio" value="F" <?php echo $checkedF;?> /> 
        Feminino </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Gravar" style="cursor:pointer"/></td>
    </tr>
  </table>
</form>
</body>
</html>
