<form action = listaEX7.php method="post">
    <label for="data">Escolha uma data:</label>
    <input type="date" name="data" id="data" required>
    <input type="submit" value="Verificar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $data = $_POST["data"];

    if ($data) {
        $numeroDia = date("N", strtotime($data));


        $diasSemana = [
            1 => "Segunda-feira",
            2 => "Terça-feira",
            3 => "Quarta-feira",
            4 => "Quinta-feira",
            5 => "Sexta-feira",
            6 => "Sábado",
            7 => "Domingo"
        ];

        $nomeDia = $diasSemana[$numeroDia];

        echo "Você selecionou: <strong>$data</strong> - <strong>$nomeDia</strong>";

        if ($numeroDia == 6 || $numeroDia == 7) {
            print "Hoje é fim de semana.";
        } else {
            print "Hoje é dia útil.";
        }
    } else {
        print "Por favor, selecione uma data válida.";
    }
}
?>