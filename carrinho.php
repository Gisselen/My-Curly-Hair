




<?php
      session_start();
       
      if(!isset($_SESSION['carrinho'])){
         $_SESSION['carrinho'] = array();
      }
       
      //adiciona produto
       
      if(isset($_GET['acao'])){
          
         //ADICIONAR CARRINHO
         if($_GET['acao'] == 'add'){
            $id = intval($_GET['id']);
            if(!isset($_SESSION['carrinho'][$id])){
               $_SESSION['carrinho'][$id] = 1;
            }else{
               $_SESSION['carrinho'][$id] += 1;
            }
         }
          
         //REMOVER CARRINHO
         if($_GET['acao'] == 'del'){
            $id = intval($_GET['id']);
            if(isset($_SESSION['carrinho'][$id])){
               unset($_SESSION['carrinho'][$id]);
            }
         }
          
         //ALTERAR QUANTIDADE
         if($_GET['acao'] == 'up'){
            if(is_array($_POST['prod'])){
               foreach($_POST['prod'] as $id => $qtd){
                  $id  = intval($id);
                  $qtd = intval($qtd);
                  if(!empty($qtd) || $qtd <> 0){
                     $_SESSION['carrinho'][$id] = $qtd;
                  }else{
                     unset($_SESSION['carrinho'][$id]);
                  }
               }
            }
         }
       
      }
       
       
?>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My Curly Hair</title>
<link href="compra.css" rel="stylesheet" type="text/css" />
</head>
 
<body>
<div id="total">
	
    <div id="topo">
    	
        <div id="logo">
         <a href="index.html"><img src="img/logopreta.png" width=560 height=200 /></a>
        </div><br><br>
		
		<br><br><br><br><br>
   <center><img src="img/seucarrinho.jpg" width="930" height="50"></center>  
<div id="container">	
<center><table>
<div class=login-page>
    <caption>Seu Carrinho</caption>
    <thead>
          <tr>
            <th width="244">Produto</th>
            <th width="79">Quantidade</th>
            <th width="89">Pre&ccedil;o</th>
            <th width="100">SubTotal</th>
            <th width="64">Remover</th>
          </tr>
    </thead>
            <form action="?acao=up" method="post">
    <tfoot>
           <tr>
            <td colspan="5"><input type="submit" value="Atualizar Carrinho" /></td>
            <tr>
            <td colspan="5"><a href="index.php" input type= "submit">Continuar Comprando</a></td>
    </tfoot>
      
    <tbody>
               <?php
                     if(count($_SESSION['carrinho']) == 0){
                        echo '<tr><td colspan="5">Não há produto no carrinho</td></tr>';
                     }else{
                        require("conexao.php");
                                                               $total = 0;
                        foreach($_SESSION['carrinho'] as $id => $qtd){
                              $sql   = "SELECT *  FROM produtos WHERE id= '$id'";
							  $query = $mysqli->query($sql)or die(mysql_error());

                              $ln = mysqli_fetch_array($query);
                               
                              $nome  = $ln['nome'];
                              $preco = number_format($ln['preco'], 2, ',', '.');
                              $sub   = number_format($ln['preco'] * $qtd, 2, ',', '.');
                               
                              $total += $ln['preco'] * $qtd;
                            
                           echo '<tr>       
                                 <td>'.$nome.'</td>
                                 <td><input type="text" size="3" name="prod['.$id.']" value="'.$qtd.'" /></td>
                                 <td>R$ '.$preco.'</td>
                                 <td>R$ '.$sub.'</td>
                                 <td><a href="?acao=del&id='.$id.'">Remove</a></td>
                              </tr>';
                        }
                           $total = number_format($total, 2, ',', '.');
                           echo '<tr>
                                    <td colspan="4">Total</td>
                                    <td>R$ '.$total.'</td>
                              </tr>';
                     }
               ?>

               
    
     </tbody>
        </form>
</table>
</div>
</div>

</body>
</html>