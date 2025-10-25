<form action = exc4.php method="post">
    <input type="number" name="numero">
    <button type="submit">Enviar</button>
</form>
<?php
$secreto = 10; // Defina o número secreto
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tentativa = $_POST["numero"];
    do {
        if ($tentativa == $secreto) {
            print "Parabéns! Você acertou o número secreto.";
            break;
        } else {
            print "Errado! Tente novamente.<br>";
            exit;
        }
    } while ($tentativa != $secreto);
}