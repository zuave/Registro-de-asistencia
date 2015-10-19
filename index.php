<?php
$usr= $_GET['usuario'];
$pass= $_GET['contraseña'];
$usrValido=false;
$PassValido=false;
/*declaramos los arrgloes usuarios y passwords*/
$usuarios=array("kary", "path", "Rich", "Pamela", "Alex", "Monica", "Perla",
"uriel", "aura", "Alejandra", "zuave", "RCTORR");
$passwords=array("ko123ri", "00012path", "ric577152", "P-12345", "Juanson12",
 "M1234nk", "5c5unodos3", "Brauriel2", "10AVr2", "Aleeli-03", "Z1986zu", "12357Tor");

 foreach ($usuarios as &$valor) {

     if($valor==$usr){
        foreach($passwords as &$valor2){
          if($valor2==$pass){
            $usrValido=true;
            $PassValido=true;
            break;
          }else{
            $PassValido=false;
          }
        }
        break;
      }
     else{
       $usrValido=false;
     }
   }

?>
<!DOCTYPE html>
<html>
<head>
    <title>login</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/main.css" />
</head>
<body>
  <header>TDW 2.0</header>
  <div id="login"><!--  login -->
  <?php
  if($usrValido && $PassValido){
    include('registro.php');
  }else{
    include('usuario-incorrecto.html');//aca va la parte de Suave
  }
  ?>
 </div><!--Termina div login-->
  <footer>Padas</footer>
</body>
</html>
