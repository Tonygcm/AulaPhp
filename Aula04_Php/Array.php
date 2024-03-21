<?php
echo "<h2>Arrays</h2>";

// $comidas = ["Batata];
$comidas = array("Batata", "Miojo", "Polenta");
echo print_r($comidas);
echo "<br>";

$comidas[3] = "Arroz";
$comidas[] = "Feijão";
$comidas[] = 30.4;
$comidas[] = true;

echo print_r($comidas);
//echo var_dump($comidas);

$totalComidas = count($comidas);
echo "<br> Total de comidas: {$totalComidas}";

echo "<br></br>Lista de compras: ";
for ($i = 0; $i < count($comidas); $i++) {
    echo "<li> Item: - " . $comidas[$i];
}

// Para cada $comida dentro do array $comidas faça:
// comidas[$i] => %comida
foreach ($comidas as $comida) {
    echo "<li> Item: - " . $comida;
}

?>