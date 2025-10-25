<form action="ex5.php" method="GET">
  <input type="number" name="menu">
 <button type="submit">Enviar</button>
</form>
<?php
switch (@$_REQUEST['menu']) {
    case 1:
        print "Cadastrar usuário";  
        break;
        case 2:
        print "Listar usuário";
        break;
        case 3:
        print "Sair"; 
        break;
  }