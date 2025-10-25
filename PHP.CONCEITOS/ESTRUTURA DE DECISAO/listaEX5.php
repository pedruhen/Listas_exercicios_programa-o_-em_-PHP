<form action="listaEX5.php" method="post">
    <input type="number" name="numero">
    <button type="submit">Enviar</button>
</form>
<?php

$numero = $_REQUEST['numero'];

if($numero % 2 ==0){
    print "esse numero é par";
}else{
    print " esse numero é impar";
}