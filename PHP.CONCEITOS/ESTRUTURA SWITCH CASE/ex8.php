<form action="ex8.php" method="GET">
  <input type="text" name="cor">
 <button type="submit">Enviar</button>
</form>
<?php
switch ($_REQUEST['cor']) {
    case 'vermelho':
        print("A cor digitada foi vermelho");
        break;
         case 'verde':
        print("A cor digitada foi verde");
        break;
         case 'azul':
        print("A cor digitada foi azul");
        break;
    
}