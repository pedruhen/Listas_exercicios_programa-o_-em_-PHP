<form action="ex7.php" method="GET">
  <input type="text" name="letra">
 <button type="submit">Enviar</button>
</form>
<?php
switch (@$_REQUEST['letra']) {
    case 'a':
        print("é uma vogal"); 
        break;
    case 'e':
        print("é uma vogal"); 
        break;
    case 'i':
        print("é uma vogal"); 
        break;
    case 'o':
        print("é uma vogal");
        break; 
    case 'u':
        print("é uma vogal");        
        break;
    
    default:
        print("é uma consoante");
        break;
}