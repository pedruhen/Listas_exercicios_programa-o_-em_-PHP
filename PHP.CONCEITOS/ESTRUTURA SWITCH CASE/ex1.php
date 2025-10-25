<form action="ex1.php" method="GET">
    Dia <input type="number" name="dia" min="1" max="7">
    <button type="submit">Enviar</button>
</form>
<?php
switch (@$_REQUEST['dia']){
    case 1:
        print "Domingo";  
        break;
        case 2:
        print "Segunda-feira";
        break;
        case 3:
        print "Terça-feira"; 
        break;
        case 4:
       print "Quarta-feira"; 
        break;
        case 5:
        print "Quinta-feira"; 
        break;
        case 6:
        print "Sexta-feira"; 
        break;
        case 7:
        print "Sabado"; 
        break;
    }