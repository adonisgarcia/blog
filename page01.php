<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang=''>
    <head>
        <title>blog</title>
        <link rel="shortcut icon" href="darth_vader-128.png" /> 
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" type="text/css" href="test.css"/>
        <link rel="stylesheet" type="text/css" href="screen.css"/>
        <link rel="stylesheet" type="text/css" href="styles1.css"/>
        <link rel="stylesheet" type="text/css" href="jquery-ui-1.11.1/jquery-ui.css"  />
        <link rel="stylesheet" type="text/css" href="jquery-ui-1.11.1/jquery.jTimepicker.css"  />
        <script type="text/javascript" src="jquery-1.11.1.js"></script>
        <script type="text/javascript" src="jquery-ui-1.11.1/jquery-ui.js"></script>
        <script type="text/javascript" src="jquery-ui-1.11.1/jquery.jTimepicker.js"></script>
        <script type="text/javascript" src="scripts.js"></script>   
        <script src="script3.js"></script>
   
    </head>
    <body  background="SpaceWarfare-SWGMB.jpg" >

<div id='cssmenu'>
<ul>
    <li><a href='page03.php'>Home</a></li>
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
    
        
        <div id="coluna" >
            <div id="usuario">
                <p><font color="#EEC900">Login</font></p>
                
                <div id="lista">
                    
                 
                </div>
                    
                    
                
                
                <form name="usuario" action="list.php" method="post">           
                    <div class="line">
                        <div class="label">Nome:</div>
                        <input type="text" id="nome" name="nome" />
                    </div>

                    <div class="line">
                        <div class="label">Senha:</div>
                        <input type="password" id="senha" name="senha" />
                    </div>

                   <div class="line2">
				<input type="button" id="ok" style="background:url(ok.ico)no-repeat; width:36px; height:36px;" />						
                    </div>

                </form>
            </div>
        </div>
        <div id="coluna">
            <div id="usuario">
                <p><font color="#EEC900">Cadastro</font></p>
                <form name="usuario2" action="list1.php" method="post">           
                    <div class="line">
                        <div class="label">Nome:</div>
                            <input type="text" id="nome1" name="nome1" />                        
                    </div>

                    <div class="line">
                        <div class="label">Senha:</div>
                            <input type="password" id="senha1" name="senha1" />                        
                    </div>

                    <div class="line">
                        <div class="label">Confirma:</div>
                            <input type="password" id="confirma" name="confirma" />                        
                    </div>

                    <div class="line">
                        <div class="label">E-mail:</div>
                            <input type="text" id="email" name="email" />                        
                    </div>

                    <div class="line2">
                        <input type="button" id="confirmar"  style="background:url(ok.ico)no-repeat; width:36px; height:36px;" />					
                    </div>
                </form>
            </div>
        </div>
        <div id="datepicker"></div>        
        <script>
            $("#datepicker").datepicker();
        </script>
    </body>
</html>
