<form action = exc3.php method="post">
    Digite um número: <input type="number" name="numero" min="1" required>
    <input type="submit" value="Mostrar Tabuada">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["numero"])) {
    $numero = intval($_POST["numero"]);
    $i = 1;
    print "Tabuada de $numero: ";
    while ($i <= 10) {
        $resultado = $numero * $i;
        print "$numero x $i = $resultado";
        $i++;
    }
}
?>