<?php

date_default_timezone_set('UTC');
date_default_timezone_set("America/Mexico_City");
$registro=date('d-M-Y');
$registroHora=date('H:i a');
?>
<div id="mensaje_incorrecto">
<article>
  <h1>Perfecto</h1>
<?php
echo "Tú asistencia fue registrada con exito</br>";
echo "Usuario: $usr</br>";
echo "Fecha: $registro</br>";
echo "Hora: $registroHora</br>";
?>
    <div id="reintentar" >
      <a href="index.html"><h2>Nuevo registro</h2></a>
    </div>
  <article>
</div><!-- termina mensaje-->
