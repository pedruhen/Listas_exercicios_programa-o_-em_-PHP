<form action="ex2.php" method="GET">
  <input type="text" name="letra">
 <button type="submit">Enviar</button>
</form>
<?php
switch (@$_REQUEST['letra']) {
    case 'A':
        print "Excelente";  
        break;
        case 'B':
        print "Bom";
        break;
        case 'C':
        print "Regular"; 
        break;
        case 'D':
       print "Insuficiente"; 
        break;
        case'F':
        print "Reprovado"; 
        break;
  }