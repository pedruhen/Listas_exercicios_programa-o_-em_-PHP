<!--EXPLICAÇÃO DE WHILE EXERCICIO 2-->
<form action="exc2.php" method="GET">
     <input type="number" name="num">
    <button type="submit">Enviar</button>
</form>
<?php
$num = 1;
$final = @$_REQUEST['num'];

while ($num <=$final){
    print $num. " ";
    $num++;
}