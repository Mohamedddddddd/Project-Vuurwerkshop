<html>
<head>
<script type="text/javascript">
<!-- Javascript waarmee alles geladen wordt. !->
<!-- Asynchronous JavaScript And XML (*j*x) !->

function maakXMLObj()
{
   var objXml = false; 
   try
   {
    // Firefox, Opera 8.0+, Safari
    objXml = new XMLHttpRequest();
   }
   catch (e)
   {
    // Internet Explorer
     try
     {
       objXml = new ActiveXObject("Msxml2.XMLHTTP");
     }
     catch (e)
     {
       try
       {
         objXml = new ActiveXObject("Microsoft.XMLHTTP");
       }
         catch (e)
       {
         alert("Je browser ondersteund geen *j*x!");
         return false;
       }
     }
   }
   return objXml;
}
 
function VeranderContent ( target, content ) {
  var xmlHttp = maakXMLObj();
 
  xmlHttp.open ( "GET", content, true );
  xmlHttp.onreadystatechange = function () {
    if ( xmlHttp.readyState == 4 && xmlHttp.status == 200 ) {
      document.getElementById(target).innerHTML = xmlHttp.responseText;
    }
  }
  xmlHttp.send(null);
}
 
</script>
<title> Project Wigmans </title>
<style>
body {background-color: Aqua;}
<table border="0">
</style>
<body>
<h1> Project Wigmans website</h1>
<div id="menu">
<br>
<h2> Menu </h2>
<a href="#" title="Pagina A" id="A" OnClick="VeranderContent('content', 'Contactwigmans.html')">Contact</a> <br />
<a href="#" title="Pagina A" id="A" OnClick="VeranderContent('content', '4.php')">Afspraken</a> <br />

 </div><br/>
<div id="content">
<br>
<br>

<h2> Dit is mijn website waar je afspraken kunt maken.</h2>

</body>



</html