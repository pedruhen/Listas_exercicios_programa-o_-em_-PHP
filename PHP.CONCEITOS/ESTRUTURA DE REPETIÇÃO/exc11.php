<form action = exc11.php method="post">
    <input type="number" name="numero">
    <button type="submit">Enviar</button>
</form>
<?php
$alunos = [
    "Ana" => 8.5,
    "Bruno" => 7.2,
    "Carla" => 9.0,
    "Daniel" => 6.8,
    "Eduarda" => 8.9
];

foreach ($alunos as $nome => $nota) {
    print "Aluno: $nome - Nota: $nota<br>";
}
?>