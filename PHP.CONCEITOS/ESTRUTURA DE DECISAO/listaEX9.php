<form  action=listaEX9.php method="GET">
    txt 1 <input type="text" name="palavra1">
    txt 2 <input type="text" name="palavra2">
    <button type="submit">Enviar</button>
</form>

<?php
$palavra1 =@$_REQUEST['palavra1'];
$palavra2 =@$_REQUEST['palavra2'];

if ($palavra1 == $palavra2) {
    print "As palavras são iguais.";
} else {
    $tamanho1 = strlen($palavra1);
    $tamanho2 = strlen($palavra2);

    if ($tamanho1 > $tamanho2) {
        print "As palavras são diferentes. A primeira palavra ('$palavra1') é maior com $tamanho1 caracteres.";
    } elseif ($tamanho2 > $tamanho1) {
        print "As palavras são diferentes. A segunda palavra ('$palavra2') é maior com $tamanho2 caracteres.";
    } else {
        print "As palavras são diferentes, mas têm o mesmo número de caracteres ($tamanho1).";
    }
}
?>
