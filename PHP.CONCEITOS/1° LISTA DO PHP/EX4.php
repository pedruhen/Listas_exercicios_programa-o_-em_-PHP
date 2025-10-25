 <form action="EX4.php" method="POST">
    nome <input type="text" name="nome">
    dt_nasc <input type="number" name="dt_nasc">
    <button type="submit">Enviar</button>
 </form>
 <?php
 $nome = $_REQUEST['nome'];
$dt_nasc = $_REQUEST['dt_nasc'];
$senha = $nome.$dt_nasc;
$senha = str_shuffle($senha);
$senha = substr($senha,0, 8);

print "minha senha é <b>$senha</b>";
