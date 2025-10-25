<form action="EX1.php" method="GET">
    nome <input type="text" name="nome">
    ano <input type="number" name="ano">
    <button type="submit">ENVIAR</button>
</form>
<?php
$nome = $_REQUEST['nome'];
$ano = $_REQUEST['ano'];
$idade = date("Y") - $ano;

print "meu nome é $nome e tenho $idade";