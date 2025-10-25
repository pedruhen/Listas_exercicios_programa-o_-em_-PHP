<form action = listaEX4.php method="post">
    Digite um nome: <input type="text" name="nome">
    <input type="submit" value="Verificar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = trim($_POST["nome"]);

    if ($nome !== "") {
        $primeiraLetra = substr($nome, 0, 1); 

    
        if ($primeiraLetra === 'A' || $primeiraLetra === 'a') {
            print "O nome começa com A.";
        } else {
            print "O nome não começa com A.";
        }
    } else {
        print "Por favor, digite um nome válido.";
    }
}
?>
