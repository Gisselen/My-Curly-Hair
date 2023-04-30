<?php
//conecta ao servidor mysql
include("conexao.php");


//clausula sql
$sql = "SELECT id, nome, preco FROM produtos";
$result = $mysqli->query($sql);


echo "<select name=\"produtos\" id=\"produtos\">";

//faz o loop para preencher o campo criado com os valores retornados na consulta
while($dados = mysqli_fetch_array($result))
{
    echo "<option value='".$dados['id']."'>".$dados['nome']."</option>";
}

//fecha o campo select
echo "</select>";


?>