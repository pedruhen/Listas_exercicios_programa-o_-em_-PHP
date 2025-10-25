<form action="EX3.php" method="get">
    <textarea id="mensagem" name="mensagem" rows="4" cols="50" placeholder="digite o texto."></textarea>
    <button type="submit">ENVIAR</button>
</form>
<?php
$mensagem = $_REQUEST['mensagem'];

print " o texto possui".str_word_count($mensagem)."<br>";
print " o texto possui"." ".strlen($mensagem)." ". "caracteres";