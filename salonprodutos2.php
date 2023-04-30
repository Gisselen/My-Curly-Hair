<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My Curly Hair</title>
<link href="salon.css" rel="stylesheet" type="text/css" />
<style>
*{
	margin: 0px;
	padding: 0px;
}
 .galeria{
    width: 920px;
    height: 450px;
    position: relative;
    overflow: hidden;
}

.foto{
	position: absolute;
	opacity: 0;
	animation-name: animacao;
	animation-duration: 25s;
	animation-iteration-count: infinite;
}

@keyframes animacao{
	25%{
		opacity: 1;
		
	}
	50%{
        opacity: 0;  
	}
}
.foto:nth-child(1){	
}
.foto:nth-child(2){
      animation-delay: 5s;
}
.foto:nth-child(3){
	animation-delay: 10s;
}

.foto:nth-child(4){
  animation-delay: 15s;
}
.foto:nth-child(5){
  animation-delay: 20s;
}
.foto:nth-child(6){
  animation-delay: 25s;
}


	


</style>
</head>

<body>

	<div id="total">
	
    <div id="topo">
    	
        <div id="logo">
        	<a href="index.html"><img src="img/logopreta.png" width=500 height=160 /></a>
        </div>
        <div id="form">
		
		</form>
		</div>
        <div id="menu">
        	<a href="index.html">Inicio</a>
            <a href="produtos.html">Produtos!</a>
            <a href="cadastro.html">Cadastre-se</a>
            <a href="contato.html">Contato</a>
			<a href="tipos.html">Tipos de Cabelo</a>
      
        </div>
        <img src="imgsalon/salonline.jpg" height="40" width="920">
    
    </div>
    
    <div id="container">

    	<section class="galeria">
       	            <img class="foto" src="imgsalon/imagem1.jpg" width="920" height="450"/>
                     <img class="foto" src="imgsalon/imagem2.jpg" width="920" height="450" />
                     <img class="foto" src="imgsalon/imagem3.jpg" width="920" height="450" />
                     <img class="foto" src="imgsalon/imagem3.jpg" width="920" height="450" />
                     <img class="foto" src="imgsalon/imagem4.png" width="920" height="450" />
                     <img class="foto" src="imgsalon/imagem5.png" width="920" height="450" />


       </section>
	
    	
       
		
		<div id="conteudo">
 <div id="menu2">
        	<a href="produtos.html">Produtos</a>
          <a href="novex.html">Novex</a>
            <a href="salonline.html">Salon Line</a>
            <a href="hidratacao.html">Hidratação</a>
            <a href="kits.html">Kits</a>
            <a href="assesorios.html">Assesórios</a>      
      <a href="lola.html">Lola</a>
            
        </div>
			</div>
		
		
        <div id="img1">
       <a href="salonprodutos1.html"><img src="imgsalon/salonimg1.jpg" width="300" height="190" /> </a>
       </div>

       <div id="img2">
	   <a href="salonprodutos2.html"><img src="imgsalon/salonimg2.jpg" width="300" height="190" /> </a>
	   </div>

       <div id="img3">
	   <a href="salonprodutos3.html"><img src="imgsalon/salonimg3.jpg" width="295" height="190" /> </a>
       </div>


        <div id="box1"><div class="zoom">
        <img src="imgsalon/img34.jpg" width=200 height=214 class="img-responsive"/>
        <center><h4>Kit - Cachos SOS<h4></center><br>
		<center><p>R$ 19,90<p></center>
	<?php
      require("conexao.php");
      $sql = "SELECT * FROM produtos where id=62";
      $query = $mysqli->query($sql);
      while($ln =mysqli_fetch_array($query)){
         echo '<a href="carrinho.php?acao=add&id='.$ln['id'].'"><center><img src=img/botao.png  width=100 height=35></center></a>';
         
        }
        ?>		
        </div></div>
        
        <div id="box2"><div class="zoom">	
        <img src="imgsalon/img40.jpg" width=200 height=214 class="img-responsive"/>
        <center><h4>Kit - Cachos SOS de Coco<h4></center><br>
		<center><p>R$ 19,90<p></center>
		<?php
      require("conexao.php");
      $sql = "SELECT * FROM produtos where id=63";
      $query = $mysqli->query($sql);
      while($ln =mysqli_fetch_array($query)){
         echo '<a href="carrinho.php?acao=add&id='.$ln['id'].'"><center><img src=img/botao.png  width=100 height=35></center></a>';
         
        }
        ?>
        </div></div>
	
		<div id="box3"><div class="zoom">	
        <img src="imgsalon/img41.jpg" width=200 height=214 class="img-responsive"/>
        <center><h4>Kit - Transição Capilar<h4></center><br>
		<center><p>R$ 19,90<p></center>
		<?php
      require("conexao.php");
      $sql = "SELECT * FROM produtos where id=64";
      $query = $mysqli->query($sql);
      while($ln =mysqli_fetch_array($query)){
         echo '<a href="carrinho.php?acao=add&id='.$ln['id'].'"><center><img src=img/botao.png  width=100 height=35></center></a>';
         
        }
        ?>		
		</div></div>
			
		<div id="box4"><div class="zoom">	
        <img src="imgsalon/img42.jpg" width=200 height=214 class="img-responsive"/>
        <center><h4>Kit - Show de Limpeza!<h4></center><br>
		<center><p>R$ 19,90<p></center>
		<?php
      require("conexao.php");
      $sql = "SELECT * FROM produtos where id=65";
      $query = $mysqli->query($sql);
      while($ln =mysqli_fetch_array($query)){
         echo '<a href="carrinho.php?acao=add&id='.$ln['id'].'"><center><img src=img/botao.png  width=100 height=35></center></a>';
         
        }
        ?>
		</div></div>
			
        <div id="box5"><div class="zoom">	
        <img src="imgsalon/img43.jpg" width=200 height=214 class="img-responsive"/>
        <center><h4>Kit - Explosão de Crescimento  <h4></center><br>
		<center><p>R$ 11,90<p></center>
		<?php
      require("conexao.php");
      $sql = "SELECT * FROM produtos where id=66";
      $query = $mysqli->query($sql);
      while($ln =mysqli_fetch_array($query)){
         echo '<a href="carrinho.php?acao=add&id='.$ln['id'].'"><center><img src=img/botao.png  width=100 height=35></center></a>';
         
        }
        ?>
		</div></div>
			
		<div id="box6"><div class="zoom">	
        <img src="imgsalon/img44.jpg" width=200 height=214 class="img-responsive"/>
        <center><h4>Kit-Ressecados Jamais e Desmaia Cachos<h4></center><br>
		<center><p>R$ 11,90<p></center>
		<?php
      require("conexao.php");
      $sql = "SELECT * FROM produtos where id=67";
      $query = $mysqli->query($sql);
      while($ln =mysqli_fetch_array($query)){
         echo '<a href="carrinho.php?acao=add&id='.$ln['id'].'"><center><img src=img/botao.png  width=100 height=35></center></a>';
         
        }
        ?>
		</div></div>
			
		<div id="box7"><div class="zoom">	
        <img src="imgsalon/img48.jpg" width=200 height=214 class="img-responsive"/>
        <center><h4>Kit - Explosão de Crescimento  <h4></center><br>
        <center><p>R$11,90<p></center>
        <?php
      require("conexao.php");
      $sql = "SELECT * FROM produtos where id=68";
      $query = $mysqli->query($sql);
      while($ln =mysqli_fetch_array($query)){
         echo '<a href="carrinho.php?acao=add&id='.$ln['id'].'"><center><img src=img/botao.png  width=100 height=35></center></a>';
         
        }
        ?>		
	    </div></div>

	    <div id="box8"><div class="zoom">	
        <img src="imgsalon/img49.jpg" width=200 height=214 class="img-responsive"/>
        <center><h4>Kit - Salon Line Babosa<h4><br><br></center>
        <center><p>R$11,90<p></center>
       <?php
      require("conexao.php");
      $sql = "SELECT * FROM produtos where id=69";
      $query = $mysqli->query($sql);
      while($ln =mysqli_fetch_array($query)){
         echo '<a href="carrinho.php?acao=add&id='.$ln['id'].'"><center><img src=img/botao.png  width=100 height=35></center></a>';
         
        }
        ?>		
	    </div></div>
        

			
		
	        <div id="rodape">
	        	<img src="img/rodapeimg.jpg" height="40" width="920">

            
        </div>
    


</body>
</html>