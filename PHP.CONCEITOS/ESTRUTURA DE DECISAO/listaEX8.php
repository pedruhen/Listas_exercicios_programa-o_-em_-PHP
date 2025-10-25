<form  action=listaEX8.php method="post">
    <input type="number" name="data">
    <button type="submit">Enviar</button>
</form>

<?php
$ano =@$_REQUEST['data'] ;

if (date("L", strtotime("$ano-01-01"))) {
    print "O ano $ano é bissexto.";
} else {
    print "O ano $ano não é bissexto.";
}
?>
