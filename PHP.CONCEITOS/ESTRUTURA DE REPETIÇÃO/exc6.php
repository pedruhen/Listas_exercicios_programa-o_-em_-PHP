<form action = exc6.php method="post">
    <input type="number" name="numero">
    <button type="submit">Enviar</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = intval($_POST["numero"]);
    print "<p>Contagem regressiva:</p>";
    do {
        print $numero . "<br>";
        $numero--;
    } while ($numero >= 0);
}
?>