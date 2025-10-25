<form action = ex10.php  method="post">
    Digite o número do mês (1 a 12): <input type="number" name="mes" min="1" max="12" required>
    <button type="submit">Verificar Dias</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["mes"])) {
    $mes = (int)$_POST["mes"];
    switch ($mes) {
        case 2:
            print "Fevereiro: 28 ou 29 dias.";
            break;
        case 4:
        case 6:
        case 9:
        case 11:
            print "Este mês tem 30 dias.";
            break;
        case 1:
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 12:
            print "Este mês tem 31 dias.";
            break;
        default:
            print "Mês inválido.";
    }
}
?>