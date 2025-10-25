<form action="listaEX6.php" method="post">
    <input type="text" name="admin">
    <input type="password" name="senha">
    <button type="submit">Enviar</button>
</form>
<?php
$login = @$_REQUEST['admin'];
$senha = @$_REQUEST['senha'];

if($login == 'admin' and $senha == 1234 ){
    print("sua senha está correta");

}else{
    print("sua senha está incorreta");
}

