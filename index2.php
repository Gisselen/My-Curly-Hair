<meta charset="UTF-8">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Hello!</title>
</head>

<body>
	<?php

if (!isset($_SESSION)) session_start();
  echo "Usuario: ". $_SESSION['UsuarioNome'];

?>

Nivel 2
        <a href="logout.php">sair</a>

</body>

</html>
