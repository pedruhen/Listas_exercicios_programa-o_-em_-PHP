<form action = exc8.php method="post">
    <input type="number" name="numero">
    <button type="submit">Enviar</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = intval($_POST["numero"]);
    $fatorial = 1;
    for ($i = 1; $i <= $numero; $i++) {
        $fatorial *= $i;
    }
    print "O fatorial de $numero é $fatorial.";
}
?>