<!--EXPLICAÇÃO DE WHILE EXERCICIO 1-->
<form action="exc1.php" method="GET">
     <input type="number" name="numero">
    <button type="submit">Enviar</button>
</form>
<?php
$numero = 1;

while ($numero <= 10) {
    print $numero. "<br> ";
    $numero++;
    
}
