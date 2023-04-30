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
        <img src="utilitarios/bord.jpg" height="40" width="920" >
    
    </div>
    
    <div id="container">

    	<section class="galeria">
       	             <img class="foto" src="img/banner.jpg" width="920" height="450"/>
                     <img class="foto" src="utilitarios/banner.jpg" width="920" height="450" />                  
                     <img class="foto" src="img/bannerproduto.jpg" width="920" height="450" />
                     <img class="foto" src="img/download.png" width="920" height="450" />
       	             



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
        <img src="utilitarios/img4.jpg" width=200 height=214 class="img-responsive"/>
        <center><h4>Tangle Teezer Rosa <h4></center><br>
		<center><p>R$ 65,50<p></center>
		<?php
      require("conexao.php");
       $sql = "SELECT * FROM produtos where id=94";
        $query = $mysqli->query($sql);
      while($ln =mysqli_fetch_array($query)){
         echo '<a href="carrinho.php?acao=add&id='.$ln['id'].'"><center><img src=img/botao.png  width=100 height=35></center></a>';
         
      }
      ?>
		
        </div></div>
        
        <div id="box2"><div class="zoom">	
        <img src="utilitarios/img15.jpg" width=200 height=214 class="img-responsive"/>
        <center><h4>Tangle Teezer Rosa Claro<h4></center><br>
		<center><p>R$ 65,50<p></center>
		<?php
      require("conexao.php");
       $sql = "SELECT * FROM produtos where id=95";
        $query = $mysqli->query($sql);
      while($ln =mysqli_fetch_array($query)){
         echo '<a href="carrinho.php?acao=add&id='.$ln['id'].'"><center><img src=img/botao.png  width=100 height=35></center></a>';
         
      }
      ?>
        </div></div>
	
		<div id="box3"><div class="zoom">	
        <img src="utilitarios/img11.jpg" width=200 height=214 class="img-responsive"/>
        <center><h4>Tangle Teezer Lilás<h4></center><br>
		<center><p>R$ 65,50<p></center>
		<?php
      require("conexao.php");
       $sql = "SELECT * FROM produtos where id=96";
        $query = $mysqli->query($sql);
      while($ln =mysqli_fetch_array($query)){
         echo '<a href="carrinho.php?acao=add&id='.$ln['id'].'"><center><img src=img/botao.png  width=100 height=35></center></a>';
         
      }
      ?>
		
		</div></div>
			
		<div id="box4"><div class="zoom">	
        <img src="utilitarios/img13.jpg" width=200 height=214 class="img-responsive"/>
        <center><h4>Tangle Teezer Roxa <h4></center><br>
		<center><p>R$ 65,50<p></center>
		<?php
      require("conexao.php");
       $sql = "SELECT * FROM produtos where id=97";
        $query = $mysqli->query($sql);
      while($ln =mysqli_fetch_array($query)){
         echo '<a href="carrinho.php?acao=add&id='.$ln['id'].'"><center><img src=img/botao.png  width=100 height=35></center></a>';
         
      }
      ?>
		</div></div>
			
        <div id="box5"><div class="zoom">	
        <img src="utilitarios/img14.jpg" width=200 height=214 class="img-responsive"/>
        <center><h4>Tangle Teezer Preta<h4><br><br><br></center>
		<center><p>R$ 65,50<p></center>
		<?php
      require("conexao.php");
       $sql = "SELECT * FROM produtos where id=98";
        $query = $mysqli->query($sql);
      while($ln =mysqli_fetch_array($query)){
         echo '<a href="carrinho.php?acao=add&id='.$ln['id'].'"><center><img src=img/botao.png  width=100 height=35></center></a>';
         
      }
      ?>
		</div></div>
			
		<div id="box6"><div class="zoom">	
        <img src="utilitarios/img16.jpg" width=200 height=214 class="img-responsive"/>
        <center><h4>Tangle Teezer The Ultimate cor Rosa<h4><br><br></center>
		<center><p>R$ 102,90<p></center>
		<?php
      require("conexao.php");
       $sql = "SELECT * FROM produtos where id=99";
        $query = $mysqli->query($sql);
      while($ln =mysqli_fetch_array($query)){
         echo '<a href="carrinho.php?acao=add&id='.$ln['id'].'"><center><img src=img/botao.png  width=100 height=35></center></a>';
         
      }
      ?>
		</div></div>
			
		<div id="box7"><div class="zoom">	
        <img src="utilitarios/img17.jpg" width=200 height=214 class="img-responsive"/>
        <center><h4>Tangle Teezer The Ultimate cor Preta<h4><br><br></center>
        <center><p>R$ 102,90<p></center>
        <?php
      require("conexao.php");
       $sql = "SELECT * FROM produtos where id=100";
        $query = $mysqli->query($sql);
      while($ln =mysqli_fetch_array($query)){
         echo '<a href="carrinho.php?acao=add&id='.$ln['id'].'"><center><img src=img/botao.png  width=100 height=35></center></a>';
         
      }
      ?>
	    </div></div>
		
		<div id="box8"><div class="zoom">	
        <img src="utilitarios/img7.jpg" width=200 height=214 class="img-responsive"/>
        <center><h4>Pente Garfo Santa Clara<h4><br><br><br></center>
        <center><p>R$ 4,66<p></center>
        <?php
      require("conexao.php");
       $sql = "SELECT * FROM produtos where id=101";
        $query = $mysqli->query($sql);
      while($ln =mysqli_fetch_array($query)){
         echo '<a href="carrinho.php?acao=add&id='.$ln['id'].'"><center><img src=img/botao.png  width=100 height=35></center></a>';
         
      }
      ?>
	    </div></div>

	    <div id="box9"><div class="zoom">	
        <img src="utilitarios/img18.png" width=200 height=214 class="img-responsive"/>
        <center><h4>Pente Garfo de Madeira Anti-estático<h4><br><br></center>
        <center><p>R$ 4,66<p></center>
        <?php
      require("conexao.php");
       $sql = "SELECT * FROM produtos where id=102";
        $query = $mysqli->query($sql);
      while($ln =mysqli_fetch_array($query)){
         echo '<a href="carrinho.php?acao=add&id='.$ln['id'].'"><center><img src=img/botao.png  width=100 height=35></center></a>';
         
      }
      ?>		
	    </div></div>

	    <div id="box3"><div class="zoom">	
        <img src="utilitarios/img1.jpg" width=200 height=214 class="img-responsive"/>
        <center><h4>Esponja Modeladora para Nudreds <h4><br><br></center>
        <center><p>R$ 25,90<p></center>
        <?php
      require("conexao.php");
       $sql = "SELECT * FROM produtos where id=103";
        $query = $mysqli->query($sql);
      while($ln =mysqli_fetch_array($query)){
         echo '<a href="carrinho.php?acao=add&id='.$ln['id'].'"><center><img src=img/botao.png  width=100 height=35></center></a>';
         
      }
      ?>	
	    </div></div>

	    <div id="box3"><div class="zoom">	
        <img src="utilitarios/img9.jpg" width=200 height=214 class="img-responsive"/>
        <center><h4>Pomada Capilar + Pente Garfo <h4><br><br></center>
        <center><p>R$ 45,90<p></center>
       <?php
      require("conexao.php");
       $sql = "SELECT * FROM produtos where id=104";
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