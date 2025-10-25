 <form action="EX5.php" method="POST">
    <textarea id="mensagem" name="mensagem" rows="4" cols="50" placeholder="digite o texto."></textarea>
    <button type="submit">Enviar</button>
 </form>
 <?php
   $mensagem =  $_REQUEST['mensagem']; 
    print ucwords(strrev($mensagem));