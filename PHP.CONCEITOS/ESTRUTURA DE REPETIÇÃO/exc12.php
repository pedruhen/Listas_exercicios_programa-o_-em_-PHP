<form action = exc12.php method="post">
    <input type="number" name="numero">
    <button type="submit">Enviar</button>
</form>
<?php
$palavras = ["maçã", "banana", "laranja", "uva", "abacaxi"];

foreach ($palavras as $fruta) {
    print "Palavra: $fruta - Caracteres: " . strlen($fruta) . "<br>";
}
?>