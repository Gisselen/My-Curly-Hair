<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My Curly Hair</title>
<link href="produtos.css" rel="stylesheet" type="text/css" />
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
       	             <img class="foto" src="img/banner.jpg" width="920" height="450"/>     	           
       	             <img class="foto" src="imgsalon/banner06.jpg" width="920" height="450" />
       	             <img class="foto" src="img/bannerprodutos1.jpg" width="920" height="450" />
       	             <img class="foto" src="imgsalon/ricino.jpg" width="920" height="450" />



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
           
        </div></div>
		
		<div id="conteudo">
		
   
			</div>
		
		    
        <div id="box1"><div class="zoom">
        <img src="imgsalon/img4.jpg" width=200 height=214 class="img-responsive"/>
        <center><h4>Kit Salon Line de Coco <h4></center><br>
		<center><p>R$ 120,50<p></center>
		<?php
      require("conexao.php");
       $sql = "SELECT * FROM produtos where id=86";
        $query = $mysqli->query($sql);
      while($ln =mysqli_fetch_array($query)){
         echo '<a href="carrinho.php?acao=add&id='.$ln['id'].'"><center><img src=img/botao.png  width=100 height=35></center></a>';
         
      }
      ?>
		
        </div></div>
        
        <div id="box2"><div class="zoom">	
        <img src="imgsalon/img7.jpg" width=200 height=214 class="img-responsive"/>
        <center><h4>Kit SOS Bomba de Vitaminas<h4></center><br>
		<center><p>R$ 75,90<p></center>
		<?php
      require("conexao.php");
       $sql = "SELECT * FROM produtos where id=87";
        $query = $mysqli->query($sql);
      while($ln =mysqli_fetch_array($query)){
         echo '<a href="carrinho.php?acao=add&id='.$ln['id'].'"><center><img src=img/botao.png  width=100 height=35></center></a>';
         
      }
      ?>
        </div></div>
	
		<div id="box3"><div class="zoom">	
        <img src="imgsalon/img8.jpg" width=200 height=214 class="img-responsive"/>
        <center><h4>Kit SOS Bomba de Vitaminas<h4></center><br>
		<center><p>R$ 120,50<p></center>
		<?php
      require("conexao.php");
       $sql = "SELECT * FROM produtos where id=88";
        $query = $mysqli->query($sql);
      while($ln =mysqli_fetch_array($query)){
         echo '<a href="carrinho.php?acao=add&id='.$ln['id'].'"><center><img src=img/botao.png  width=100 height=35></center></a>';
         
      }
      ?>
		
		</div></div>
			
		<div id="box4"><div class="zoom">	
        <img src="imgsalon/img19.jpg" width=200 height=214 class="img-responsive"/>
        <center><h4>Kit Transição Capilar<h4></center><br>
		<center><p>R$ 120,90<p></center>
		<?php
      require("conexao.php");
       $sql = "SELECT * FROM produtos where id=89";
        $query = $mysqli->query($sql);
      while($ln =mysqli_fetch_array($query)){
         echo '<a href="carrinho.php?acao=add&id='.$ln['id'].'"><center><img src=img/botao.png  width=100 height=35></center></a>';
         
      }
      ?>
		</div></div>
			
        <div id="box5"><div class="zoom">	
        <img src="imgsalon/img33.jpg" width=200 height=214 class="img-responsive"/>
        <center><h4>Kit Salon Line SOS Cachos Kids<h4></center><br>
		<center><p>R$ 120,90<p></center>
		<?php
      require("conexao.php");
       $sql = "SELECT * FROM produtos where id=90";
        $query = $mysqli->query($sql);
      while($ln =mysqli_fetch_array($query)){
         echo '<a href="carrinho.php?acao=add&id='.$ln['id'].'"><center><img src=img/botao.png  width=100 height=35></center></a>';
         
      }
      ?>
		</div></div>
			
		<div id="box6"><div class="zoom">	
        <img src="imgsalon/img37.jpg" width=200 height=214 class="img-responsive"/>
        <center><h4>Kit Tratamento Para Abalar!<h4><br><br></center>
		<center><p>R$ 75,90<p></center>
		<?php
      require("conexao.php");
       $sql = "SELECT * FROM produtos where id=91";
        $query = $mysqli->query($sql);
      while($ln =mysqli_fetch_array($query)){
         echo '<a href="carrinho.php?acao=add&id='.$ln['id'].'"><center><img src=img/botao.png  width=100 height=35></center></a>';
         
      }
      ?>
		</div></div>
			
		<div id="box7"><div class="zoom">	
        <img src="imgsalon/img38.jpg" width=200 height=214 class="img-responsive"/>
        <center><h4>Kit SOS Bomba de Vitaminas Liberado<h4></center><br>
        <center><p>R$ 75,90<p></center>
        <?php
      require("conexao.php");
       $sql = "SELECT * FROM produtos where id=92";
        $query = $mysqli->query($sql);
      while($ln =mysqli_fetch_array($query)){
         echo '<a href="carrinho.php?acao=add&id='.$ln['id'].'"><center><img src=img/botao.png  width=100 height=35></center></a>';
         
      }
      ?>		
	    </div></div>
		
		<div id="box8"><div class="zoom">	
        <img src="imgsalon/img39.jpg" width=200 height=214 class="img-responsive"/>
        <center><h4>Kit Salon Line Mãe e Filha<h4><br><br></center>
        <center><p>R$ 120,90<p></center>
        <?php
      require("conexao.php");
       $sql = "SELECT * FROM produtos where id=93";
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