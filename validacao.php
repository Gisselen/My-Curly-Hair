<?php
// Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
if (!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha']))) {
	header("Location: index.php"); exit;
}
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'projeto';
// Conecta-se ao banco de dados MySQL
$mysqli = new mysqli($servidor, $usuario, $senha, $banco);
// Caso algo tenha dado errado, exibe uma mensagem de erro
if (mysqli_connect_error()) trigger_error(mysqli_connect_error());

$usuario =($_POST['usuario']);
$senha = ($_POST['senha']);

// Validação do usuário/senha digitados
$sql = "SELECT `id`, `nome`, `nivel` FROM `usuarios` WHERE (`usuario` = '". $usuario ."') 
AND (`senha` = '". ($senha) ."') AND (`ativo` = 1) LIMIT 1";
$query = $mysqli->query($sql);
if (mysqli_num_rows($query) != 1) {
	// Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
	echo "Login inválido!"; exit;
} else {
	// Salva os dados encontados na variável $resultado
	$resultado = mysqli_fetch_assoc($query);
}
	// Se a sessão não existir, inicia uma
	if (!isset($_SESSION)) session_start();{

	// Salva os dados encontrados na sessão
	$_SESSION['UsuarioID'] = $resultado['id'];
	$_SESSION['UsuarioNome'] = $resultado['nome'];
	$_SESSION['UsuarioNivel'] = $resultado['nivel'];
}
	if ($_SESSION['UsuarioNivel'] == 1)  {
	
	// Redireciona o visitante
	header("Location: index.php"); exit;
}
			if ($_SESSION['UsuarioNivel']  == 2) {
			// Redireciona o visitante
			header("Location: index.php"); exit;

	}	
// Verifica se não há a variável da sessão que identifica o usuário
if (!isset($_SESSION['UsuarioID']) OR ($_SESSION['UsuarioNivel'] < $nivel_necessario)) 
	// Destrói a sessão por segurança
	session_destroy();
	// Redireciona o visitante de volta pro login
	header("Location: index.php"); exit;

	
//$mysqli->close();
?>


