<form action="ex4.php" method="GET">
  num1 <input type="number" name="num1">
  num2 <input type="number" name="num2">
  operacao <input type="text" name="operacao">
 <button type="submit">Enviar</button>
</form>
<?php
$num1 = @$_REQUEST['num1'];
$num2 = @$_REQUEST['num2'];

switch (@$_REQUEST['operacao']) {
    case '+':
        print "$num1 + $num2 =".$num1 + $num2 ;  
        break;
        case '-':
        print "$num1 - $num2 =".$num1 - $num2 ;
        break;
        case '/':
        print "$num1 / $num2 =".$num1 / $num2 ; 
        break;
        case '*':
       print "$num1 * $num2 =".$num1 * $num2 ; 
        break;
  }