<?php
    include "cabecera.inc.php";
?>

<br>
<select  name="fondo" id="fondo" onchange="cambiaFondo(this)">
    <option value="green">verde</option>
    <option value="red">rojo</option>
    <option value="orange">naranja</option>
    <option value="blue">azul</option>
</select>

<?php
    include "pie.inc.php";
?>