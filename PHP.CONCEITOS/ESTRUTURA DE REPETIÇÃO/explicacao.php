<!--EXPLICAÇÃO DE WHILE-->
<?php
$i = 1;

while ($i <= 5) {
    print $i. " ";
    $i++;
}


#EXPLICA DE DO WHILE
$j = 1;
do{
    print $j. " ";
    $j++;
}while ($j <= 5);

#EXPLICAÇÃO DE FOR
for ($x=1; $x <= 5 ; $x++) {
    print $x. " ";
}

#explicação foreach

$fruteira = array ('abacaxi', 'banana', 'caju','damasco', 'embauba', 'framboesa', 'goiaba');

foreach ($fruteira as $fruta) {
   print $fruta."<br>";
}
#--------------------
$alfabeto = range("A", "Z"); #pode usar letras e numeros

foreach($alfabeto as $letra){
    print $letra. " ";
}