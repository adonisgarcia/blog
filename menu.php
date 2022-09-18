<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Menu Flutuante com jQuery</title>
 
<script src="http://www.shiguenori.com/jquery/jquery-1.3.1.js"></script>
<script language="javascript">
$(document).ready(function(){
    var y_fixo = $("#menu").offset().top;
    $(window).scroll(function () {
        $("#menu").animate({
            top: y_fixo+$(document).scrollTop()+"px"
            },{duration:500,queue:false}
        );
    });
});
</script>
 
<style type="text/css">
#menu {
    left:0px;
    margin:0;
    padding:0;
    position:absolute;
    top:100px;
    width:150px;
}
#menu ul {
    list-style:none;
    margin:0;
    padding:0;
}
#menu ul li {
    margin-bottom:2px;
}
#menu ul li a {
    background-color:#333;
    border:1px solid #999;
    color:#FFF;
    display:block;
    padding:5px 5px 5px 15px;
    text-decoration:none;
}
#menu ul li a:hover {
    background-color:#ccc;
    color:#333;
}
</style>
</head>
<body>
 
<h2>Exemplo de menu flutuante simples</h2>
 
<p style="height:2000px;">
Este efeito só será visível quando houver barra de rolagem. Quando utlizarem a rolagem para navegação, o menu irá acompanhar a área vísivel.
</p>
 
<div id="menu">
  <ul class="menu">
    <li><a href="#" onclick="return false;"> Menu 1 </a></li>
    <li><a href="#" onclick="return false;"> Menu 2 </a></li>
    <li><a href="#" onclick="return false;"> Menu 3 </a></li>
    <li><a href="#" onclick="return false;"> Menu 4 </a></li>
    <li><a href="#" onclick="return false;"> Menu 5 </a></li>
  </ul>
</div>
 
</body>
</html>