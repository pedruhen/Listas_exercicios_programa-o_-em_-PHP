<form action="ex9.php"method="post">
    Digite uma nota (0 a 10): <input type="number" name="nota" min="0" max="10" required>
    <button type="submit">Classificar</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nota = intval($_POST["nota"]);
    switch ($nota) {
        case 10:
            $classificacao = "Perfeito";
            break;
        case 9:
        case 8:
            $classificacao = "Muito bom";
            break;
        case 7:
        case 6:
            $classificacao = "Aprovado";
            break;
        case 5:
        case 4:
            $classificacao = "Recuperação";
            break;
        case 3:
        case 2:
        case 1:
        case 0:
            $classificacao = "Reprovado";
            break;
        default:
            $classificacao = "Nota inválida";
    }
    echo "<p>Classificação: <strong>$classificacao</strong></p>";
}
?>

