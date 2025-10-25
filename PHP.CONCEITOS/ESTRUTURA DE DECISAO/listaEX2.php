<form action="listaEX2.php" method="post">
    <input type="number" name="idade">
    <button type="submit">Enviar</button>
</form>
<?php
$idade = @$_REQUEST['idade'];

if($idade < 12){
    print "Criança";

}elseif($idade >= 12 && $idade <= 17){
    print "Adolescente";

}else{
    print "Adulto";
}