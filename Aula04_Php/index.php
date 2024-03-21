<h2>Aula 04 - For, While, DoWhile</h2>

<?php

    echo "<h3>FOR</h3>";
    
    for($i = 0; $i < 6; $i++){
        echo "<br> Meu for funciona !!! {$i}";
    }

    echo "<br><br>";
    for ($i=0; $i < 4; $i++) { 
        echo "<br> Linha {$i}";
        for ($j=0; $j < 10; $j++) { 
            echo "| Coluna {$j} |";
        }
    }

    
    
?>

<br></br>
<h3> While </h3>

<?php
    $var = 5;
    while($var < 10){
        echo '- legal -';
        $var += 1;        
    }

?>

<br></br>
<h3> DoWhile </h3>

<?php
    $a = 90;
    do{
        echo "outra coisa - {$a}";
        $a += 2;
    }while($a < 100);

?>