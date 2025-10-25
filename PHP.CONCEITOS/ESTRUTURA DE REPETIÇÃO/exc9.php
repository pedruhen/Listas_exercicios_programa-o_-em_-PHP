<form action = exc9.php method="post">
    <input type="number" name="numero">
    <button type="submit">Enviar</button>
</form>
<?php
for ($i = 1; $i <= 10; $i++) {
    $quadrado = $i * $i;
    echo "O quadrado de $i é $quadrado<br>";
}
?>