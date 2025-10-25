<form action = exc10.php method="post">
    <input type="number" name="numeros">
    <button type="submit">Enviar</button>
</form>
<?php
$numeros = range(1, 10);

foreach ($numeros as $numero) {
    echo $numero . "<br>";
}
?>