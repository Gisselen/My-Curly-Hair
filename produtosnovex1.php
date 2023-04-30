<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My Curly Hair</title>
<link href="novex.css" rel="stylesheet" type="text/css" />
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
      <div id="form">
          <?php

         if (!isset($_SESSION)) session_start();
     echo "Olá, ". $_SESSION['UsuarioNome'];

?>        <a href="logout.php"> sair</a>
       </div>
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
      <a href="assesorios.html">Assesórios</a>      
      <a href="lola.html">Lola</a>
        </div>
    
    </div>
    
    <div id="container">

      <section class="galeria">
                     <img class="foto" src="imgnovex/imagem2.jpg" width="920" height="450" />
                     <img class="foto" src="imgnovex/banner.jpg" width="920" height="450"/>
                     <img class="foto" src="imgnovex/imagem4.jpg" width="920" height="450"/>
                     <img class="foto" src="imgnovex/bambu.jpg" width="920" height="450" />
                     <img class="foto" src="imgnovex/banner7.jpg" width="920" height="450" />
                     <img class="foto" src="imgnovex/banner8.jpg" width="920" height="450" />



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
        <img src="imgnovex/novexbor.jpg" height="40" width="920" >
      </div>

    <div id="img1">
       <a href="produtosnovex1.html"><img src="imgnovex/produtos.jpg" width="300" height="190" /> </a>
       </div>

       <div id="img2">
     <a href="produtosnovex2.html"><img src="imgnovex/produtos2.jpg" width="300" height="190" /> </a>
     </div>

       <div id="img3">
     <a href="produtosnovex3.html"><img src="imgnovex/produtos3.jpg" width="295" height="190" /> </a>
       </div>

    
    <div id="conteudo">
   
      </div>
    
        
        <div id="box1"><div class="zoom">
        <img src="imgnovex/img14.png" width=200 height=214 class="img-responsive"/>
        <center><h4>Novex Nutrire - Óleo de Argan 300ml <h4></center><br>
    <center><p>R$ 11,90<p></center>
    <?php
      require("conexao.php");
       $sql = "SELECT * FROM produtos where id=24";
        $query = $mysqli->query($sql);
      while($ln =mysqli_fetch_array($query)){
         echo '<a href="carrinho.php?acao=add&id='.$ln['id'].'"><center><img src=img/botao.png  width=100 height=35></center></a>';
         
      }
      ?>
    
        </div></div>
        
        <div id="box2"><div class="zoom"> 
        <img src="imgnovex/img22.jpg" width=200 height=214 class="img-responsive" />
        <center><h4>Novex Nutrire - Meus Cachos Soltos com Proteção Solar 300ml<h4></center><br>
    <center><p>R$ 11,90<p></center>
    <?php
      require("conexao.php");
       $sql = "SELECT * FROM produtos where id=25";
        $query = $mysqli->query($sql);
      while($ln =mysqli_fetch_array($query)){
         echo '<a href="carrinho.php?acao=add&id='.$ln['id'].'"><center><img src=img/botao.png  width=100 height=35></center></a>';
         
      }
      ?>
        </div></div>
  
    <div id="box3"><div class="zoom"> 
        <img src="imgnovex/img24.jpg" width=200 height=214 class="img-responsive"/>
        <center><h4>Novex Nutrire - Meus Cachos Naturais 2A,2B,2C 300ml<h4></center><br>
    <center><p>R$ 11,90<p></center>
    <?php
      require("conexao.php");
       $sql = "SELECT * FROM produtos where id=26";
        $query = $mysqli->query($sql);
      while($ln =mysqli_fetch_array($query)){
         echo '<a href="carrinho.php?acao=add&id='.$ln['id'].'"><center><img src=img/botao.png  width=100 height=35></center></a>';
         
      }
      ?>
    
    </div></div>
      
    <div id="box4"> <div class="zoom">
        <img src="imgnovex/img32.jpg" width=200 height=214 class="img-responsive"/>
        <center><h4>Novex Socorro Todos os Cachos - Seu Poder de Volta 500ml<h4></center><br>
    <center><p>R$ 11,90<p></center>
    <?php
      require("conexao.php");
       $sql = "SELECT * FROM produtos where id=27";
        $query = $mysqli->query($sql);
      while($ln =mysqli_fetch_array($query)){
         echo '<a href="carrinho.php?acao=add&id='.$ln['id'].'"><center><img src=img/botao.png  width=100 height=35></center></a>';
         
      }
      ?>
    </div></div>
      
        <div id="box5"> <div class="zoom">
        <img src="imgnovex/img42.jpg" width=200 height=214 class="img-responsive"/>
        <center><h4>Novex Nutrire - Leave-In Meus Cachos Soltos 500g<h4></center><br>
    <center><p>R$ 11,90<p></center>
    <?php
      require("conexao.php");
       $sql = "SELECT * FROM produtos where id=30";
        $query = $mysqli->query($sql);
      while($ln =mysqli_fetch_array($query)){
         echo '<a href="carrinho.php?acao=add&id='.$ln['id'].'"><center><img src=img/botao.png width=100 height=35></center></a>';
         
      }
      ?>
    </div></div>
      
    <div id="box6"> <div class="zoom">
        <img src="imgnovex/img43.jpg" width=200 height=214 class="img-responsive"/>
        <center><h4>Novex Nutrire - Leave-In Meus Cachos Suaves 500g<h4></center><br>
    <center><p>R$ 11,90<p></center>
     <?php
      require("conexao.php");
       $sql = "SELECT * FROM produtos where id=31";
        $query = $mysqli->query($sql);
      while($ln =mysqli_fetch_array($query)){
         echo '<a href="carrinho.php?acao=add&id='.$ln['id'].'"><center><img src=img/botao.png width=100 height=35></center></a>';
         
      }
      ?>
    </div></div>
      
    <div id="box7"><div class="zoom"> 
        <img src="imgnovex/img31.jpg" width=200 height=214 class="img-responsive"/>
        <center><h4>Novex Nutrire-Creme de Peantear Restaura que eu Gamo 700g<h4></center><br>
        <center><p>R$11,90<p></center>
        <?php
      require("conexao.php");
       $sql = "SELECT * FROM produtos where id=32";
        $query = $mysqli->query($sql);
      while($ln =mysqli_fetch_array($query)){
         echo '<a href="carrinho.php?acao=add&id='.$ln['id'].'"><center><img src=img/botao.png width=100 height=35></center></a>';
         
      }
      ?>   
      </div></div>

      <div id="box8"><div class="zoom"> 
        <img src="imgnovex/img33.jpg" width=200 height=214 class="img-responsive"/>
        <center><h4><h4></center><br>
        <center><p>R$11,90<p></center>
        <?php
      require("conexao.php");
       $sql = "SELECT * FROM produtos where id=33";
        $query = $mysqli->query($sql);
      while($ln =mysqli_fetch_array($query)){
         echo '<a href="carrinho.php?acao=add&id='.$ln['id'].'"><center><img src=img/botao.png width=100 height=35></center></a>';
         
      }
      ?>  
      </div></div>
        
          <div id="rodape">
      <img src="img/rodapeimg.jpg" height="40" width="920" ></div>

            
        </div>
    
</div>

</body>
</html>