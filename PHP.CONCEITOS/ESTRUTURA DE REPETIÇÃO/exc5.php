<form action = exc5.php method="post">
    <input type="password" name="senha">
    <button type="submit">Enviar</button>
</form>
<?php
session_start();

if (!isset($_SESSION['autenticado'])) {
    $_SESSION['autenticado'] = false;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $senha = $_POST["senha"];
    do {
        if ($senha === "1234") {
            $_SESSION['autenticado'] = true;
            print "Senha correta! Acesso permitido.";
            break;
        } else {
            print "Senha incorreta. Tente novamente.";
            break;
        }
    } while (true);
}

if ($_SESSION['autenticado']) {
    // Conteúdo protegido aqui
}
?>