<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My Curly Hair</title>
<link href="hidratacao.css" rel="stylesheet" type="text/css" />
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
	animation-duration: 20s;
	animation-iteration-count: infinite;
}

@keyframes animacao{
	25%{
		opacity: 1;
		transform:scale(1.1,1.1);
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
    
    </div>
    
    <div id="container">

    	<section class="galeria">
       	             <img class="foto" src="image/banner1.jpg"width="920" height="450"/>     	           
       	             <img class="foto" src="image/banner.jpg" width="920" height="450" />
       	             <img class="foto" src="image/banner2.jpg" width="920" height="450" />
       	             <img class="foto" src="image/banner3.jpg" width="920" height="450" />
       	            



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
		
		<div id="conteudo">
		<img src="img/vendidos.jpg" height="40" width="920" >
   
			</div>
		
		    
        <div id="box1"><div class="zoom">
        <img src="image/creme10.jpg"width=200 height=214 class="img-responsive">
        <center><h4>Crescenew-Máscara Afro-pós progressiva 500g<h4></center><br>	
		<center><p>R$ 52,90<p></center>
		 <?php
      require("conexao.php");
       $sql = "SELECT * FROM produtos where id=78";
        $query = $mysqli->query($sql);
      while($ln =mysqli_fetch_array($query)){
         echo '<a href="carrinho.php?acao=add&id='.$ln['id'].'"><center><img src=img/botao.png  width=100 height=35></center></a>';
         
      }
      ?>
		
        </div></div>
        
        <div id="box2"><div class="zoom">
        <img src="image/creme2.jpg"width=200 height=214 class="img-responsive">
        <center><h4>Ámavia Cacho Sublime-Oléo de Argan+Colagéno 370g<h4></center><br>	
		<center><p>R$ 64,83<p></center>
		<?php
      require("conexao.php");
       $sql = "SELECT * FROM produtos where id=79";
        $query = $mysqli->query($sql);
      while($ln =mysqli_fetch_array($query)){
         echo '<a href="carrinho.php?acao=add&id='.$ln['id'].'"><center><img src=img/botao.png  width=100 height=35></center></a>';
         
      }
      ?>
	    </div></div>
		
	
		<div id="box3"><div class="zoom">	
        <img src="image/creme3.jpg" width=200 height=214 class="img-responsive"/>
        <center><h4>ForeverLiss-Cachos Máscara Antifrizz+Definição 250g<h4></center><br>       	
		<center><p>R$ 22,90<p></center>
		<?php
      require("conexao.php");
       $sql = "SELECT * FROM produtos where id=80";
        $query = $mysqli->query($sql);
      while($ln =mysqli_fetch_array($query)){
         echo '<a href="carrinho.php?acao=add&id='.$ln['id'].'"><center><img src=img/botao.png  width=100 height=35></center></a>';
         
      }
      ?>
		
		</div></div>
			
		<div id="box4"><div class="zoom">	
        <img src="image/creme4.jpg" width=200 height=214 class="img-responsive"/>
        <center><h4>HidraBell - Cachos Perfeitos Óleo de Coco<h4></center><br>
		<center><p>R$ 35,49<p></center>
		<?php
      require("conexao.php");
       $sql = "SELECT * FROM produtos where id=81";
        $query = $mysqli->query($sql);
      while($ln =mysqli_fetch_array($query)){
         echo '<a href="carrinho.php?acao=add&id='.$ln['id'].'"><center><img src=img/botao.png  width=100 height=35></center></a>';
         
      }
      ?>
		</div></div>
			
        <div id="box5"><div class="zoom">	
        <img src="image/creme11.jpg" width=200 height=214 class="img-responsive"/>
        <center><h4>HidraBell-Máscara de reparação Divino Cachos 500ml<h4></center><br>
		<center><p>R$ 37,99<p></center>
		<?php
      require("conexao.php");
       $sql = "SELECT * FROM produtos where id=82";
        $query = $mysqli->query($sql);
      while($ln =mysqli_fetch_array($query)){
         echo '<a href="carrinho.php?acao=add&id='.$ln['id'].'"><center><img src=img/botao.png  width=100 height=35></center></a>';
         
      }
      ?>
		</div></div>
			
		<div id="box6"><div class="zoom">	
        <img src="image/creme6.jpg" width=200 height=214 class="img-responsive"/>
        <center><h4>Lola Cosméticos - Meu Cacho Minha Vida 330g<h4><br><br></center>
        <center><p>R$ 39,90<p></center>
		<?php
      require("conexao.php");
       $sql = "SELECT * FROM produtos where id=83";
        $query = $mysqli->query($sql);
      while($ln =mysqli_fetch_array($query)){
         echo '<a href="carrinho.php?acao=add&id='.$ln['id'].'"><center><img src=img/botao.png  width=100 height=35></center></a>';
         
      }
      ?>
		</div></div>
			
		<div id="box7"><div class="zoom">	
       <img src="image/creme7.jpg" width=200 height=214 class="img-responsive"/>
        <center><h4>Salon Line - Máscara Hidratação Milagrosa! 500g<h4><br><br></center>
        	<center><p>R$ 15,99<p></center>
        <?php
      require("conexao.php");
       $sql = "SELECT * FROM produtos where id=84";
        $query = $mysqli->query($sql);
      while($ln =mysqli_fetch_array($query)){
         echo '<a href="carrinho.php?acao=add&id='.$ln['id'].'"><center><img src=img/botao.png  width=100 height=35></center></a>';
         
      }
      ?>		
	    </div></div>

	    <div id="box8"><div class="zoom">	
        <img src="image/creme8.jpg" width=200 height=214 class="img-responsive"/>
        <center><h4>Silicon Mix - Tratamento Bambu Hidratação Nutritiva 225g<h4></center><br>
        	<center><p>R$ 35,90<p></center>
       <?php
      require("conexao.php");
       $sql = "SELECT * FROM produtos where id=85";
        $query = $mysqli->query($sql);
      while($ln =mysqli_fetch_array($query)){
         echo '<a href="carrinho.php?acao=add&id='.$ln['id'].'"><center><img src=img/botao.png  width=100 height=35></center></a>';
         
      }
      ?>		
	    </div></div>
				
	        <div id="rodape">
			<img src="img/rodapeimg.jpg" height="40" width="920" ></div>

            
        </div>
    
</div>

</body>
</html>