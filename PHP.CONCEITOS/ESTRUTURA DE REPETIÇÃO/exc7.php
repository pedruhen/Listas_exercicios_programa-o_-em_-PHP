<form action = exc7.php method="post">
    <input type="number" name="numero">
    <button type="submit">Enviar</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    print "Números pares de 1 a 50:<br>";
    for ($i = 2; $i <= 50; $i += 2) {
        print $i . " ";
    }
}
?>