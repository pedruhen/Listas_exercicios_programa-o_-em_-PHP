<form action="ex6.php" method="GET">
  <input type="text" name="faixa">
 <button type="submit">Enviar</button>
</form>
<?php
switch (@$_REQUEST['faixa']) {
    case 'criança':
        print "entre 1 e 10 anos";  
        break;
        case 'adolescente':
        print "entre 11 e 18 anos ";
        break;
        case 'adulto':
        print "entre 18 e 50 anos"; 
        break;
        case 'idoso':
        print "entre 50 até morrer"; 
        break;
  }