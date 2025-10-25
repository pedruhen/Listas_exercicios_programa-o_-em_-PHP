<!--LISTA EXERCICIO IF / ELSEIF E ELSE DIA 11/09-->

<form action="listaEX1.php" method="post">
    <input type="number" name="num">
    <button type="submit">Enviar</button>
</form>
<?php
$num = @$_REQUEST['num'];

if ($num > 0){
    print "numero positivo";

}else{
    print "numero negativo";
}

