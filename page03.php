<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include("config.php");

?>
<html lang=''>
    <head>
        <title>blog</title>
        <link rel="shortcut icon" href="death_star-128.png" /> 
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" type="text/css" href="test.css"/>
        <link rel="stylesheet" type="text/css" href="screen.css"/>
        <link rel="stylesheet" type="text/css" href="styles1.css"/>
        <link rel="stylesheet" type="text/css" href="jquery-ui-1.11.1/jquery-ui.css"  />
        <link rel="stylesheet" type="text/css" href="jquery-ui-1.11.1/jquery.jTimepicker.css"  />
        <script type="text/javascript" src="jquery-1.11.1.js"></script>
        <script type="text/javascript" src="jquery-ui-1.11.1/jquery-ui.js"></script>
        <script type="text/javascript" src="jquery-ui-1.11.1/jquery.jTimepicker.js"></script>
        <script src="script3.js"></script>
    </head>
    <body background="41644-endor_teaser.jpg">

<div id='cssmenu' >
<ul>
   <li><a href='#'>Home</a></li>
   <li class='active has-sub'><a href='#'>Products</a>
      <ul>
         <li class='has-sub'><a href='#'>Product 1</a>
            <ul>
               <li><a href='#'>Sub Product</a></li>
               <li><a href='#'>Sub Product</a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'>Product 2</a>
            <ul>
               <li><a href='#'>Sub Product</a></li>
               <li><a href='#'>Sub Product</a></li>
            </ul>
         </li>
      </ul>
   </li>
   <li><a href='#'>About</a></li>
   <li><a href='#'>Contact</a></li>
   <li><a href='page01.php'>Login</a></li>   
   <li><a href="http://pt.wikipedia.org/wiki/Guerra_nas_Estrelas"><img src="wikipedia-death-star.png" alt="Wikipedia"
                width="42" height="42"  title="Wikipedia"></a> </li>
   <li><a href="https://www.gmail.com/intl/pt-BR/mail/help/about-b.html?utm_expid=1737704-7.lSwVrFzhQTCnexlJa01Dcg.1&utm_referrer=https%3A%2F%2Fwww.google.com.br%2F">
                <img src="gmail-logo-square2-webtreatsetc.png" alt="E-mail" width="42" height="42"  title="E-mail"></a> </li>
   <li> <a href="https://www.facebook.com"><img src="icon_facebook_black.png_tn.png" alt="Facebook" width="42" height="42" title="Facebook"></a> </li>
   <li><a href="https://twitter.com/"><img src="127764-simple-black-square-icon-social-media-logos-twitter-bird3-square.png" alt="Twitter"
                width="42" height="42"  title="Twitter"></a></li>
   <li><a href="https://www.youtube.com/"><img src="Button-YouTube.png" alt="You Tube"
                width="42" height="42"  title="You Tube"></a> </li>
   <li><a href="https://www.tumblr.com/"><img src="tumblr_Social-Media-Icons-Buttons-Modern_black_Ctrl-Alt-Design_001.png" alt="Tumblr"
                width="42" height="42"  title="Tumblr"></a> </li>
		
</ul>
</div>
    <div class="margem">
                <div id="coluna1">
            <div id="usuario"><p>Veja os comentarios:</p><div style="height:auto; width:auto; overflow:auto; background-color: 
                                    #FFFFCC; text-align: justify;padding: 2px; margin:5px ">
            <div style="width:auto">


                <?php
                    $result = mysql_query("SELECT  * FROM post");

                 while($rg=mysql_fetch_array($result)){
                 printf("<br> comentario na data %s", $rg[1]);
                 printf("<br>  %s", $rg[2]);
                 printf("<br>___________***______***__________");
                 printf("<br>________________________________"); 
                }
            ?>
    
    </div> </div>
        </div>
            </div>
        
    <div id="coluna2">    
        <div id="usuario">
            <h1>Star Wars</h1>
 
 <p>A s??rie teve in??cio com Star Wars, lan??ado em 25 de maio de 1977. 
A seguir vieram duas sequ??ncias, The Empire Strikes Back, lan??ada em 21 de maio de 1980,
 e Return of The Jedi, lan??ada em 25 de maio de 1983. 
A sequ??ncia de abertura das sequ??ncias revelou que elas foram numeradas como "Epis??dio V" e
 "Epis??dio VI" respectivamente, apesar dos filmes terem sido em geral divulgados 
somente atrav??s de seus subt??tulos. O primeiro filme foi intitulado simplesmente Star Wars,
 mas ganhou mais tarde o subt??tulo Episode IV - A New Hope para diferenci??-lo dos demais. </p>
<div id = "picture"><img src="starwars.jpg" alt="Star Wars" height="200" width = "210" /></div>
</div>
</div>
    <div id="coluna2">
        <div id="usuario">
<p>Em 1997, para comemorar o 20?? anivers??rio de Star Wars, Lucas lan??ou "Edi????es Especiais" 
dos tr??s filmes no cinema. Os relan??amentos apresentavam modifica????es nos filmes originais, 
motivadas primariamente pelo avan??o do CGI e outras tecnologias de efeitos especiais, o que 
permitira a realiza????o de cenas imposs??veis de serem feitas na ??poca das filmagens. 
Lucas continuou a modificar a trilogia original em relan??amentos subsequentes, como por 
exemplo para seu primeiro lan??amento em DVD em 21 de setembro de 2004.
    </p></div>
        </div>
    <div id="coluna2"><p>
          <div id="usuario">  
 Mais de duas d??cadas depois do lan??amento do Star Wars original, a s??rie ganhou uma
 aguardada continua????o, consistindo dos epis??dios I - The Phantom Menace, lan??ado em
 19 de maio de 1999; II - Attack of The Clones, lan??ado em 16 de maio de 2002; e III -
 Revenge of The Sith, lan??ado em 19 de maio de 2005. 
<p>Em 2012 a Disney Comprou a Lucasfilm e assim anunciou o lan??amento do Episodio VII.</p>
        </div>
        <div id="datepicker"> <script>
            $("#datepicker").datepicker();
        </script></div>
    </div>
        
  </div>
        
</body>
</html>


