<form action="listaEX3.php" method="post">
    <input type="text" name="tx">
    <button type="submit">Enviar</button>
</form>
<?Php
$tx = $_REQUEST['tx'];

if ($tx ==strtoupper($tx)){
    print "Todas as letras sao maiuscula";

}else {
    print "Todas as letras sao minusculas";
}
