<form action="listaEX10.php" method="post">
    <input type="number" name="hora">
    <button type="submit">Enviar</button>
</form>
<?php
$hora = $_REQUEST['hora'];

if($hora >=6 && $hora <=11){
    print "Bom dia ";
}elseif($hora >=12 && $hora <=17){
    print "boa tarde";
}elseif($hora >=18 && $hora <=23){
    print " Boa noite";
}else{
    print " madrugada";
}