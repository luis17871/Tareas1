<?php
// Declaración de Variables
$integerVar = 10;           // Variable de tipo integer
$floatVar = 20.5;           // Variable de tipo float
$stringVar = "Hola, mundo"; // Variable de tipo string
$booleanVar = true;         // Variable de tipo boolean
$arrayVar = array(1, 2, 3, 4, 5); // Variable de tipo array

// Mostrar valores de las variables
echo "Integer: $integerVar<br>";
echo "Float: $floatVar<br>";
echo "String: $stringVar<br>";
echo "Boolean: " . ($booleanVar ? 'true' : 'false') . "<br>";
echo "Array: ";
print_r($arrayVar);
echo "<br>";

// b. Operaciones Aritméticas
$sum = $integerVar + $floatVar;
$product = $integerVar * $floatVar;
echo "Suma: $sum<br>";
echo "Producto: $product<br>";

// c. Manipulación de Cadenas
$cadena1 = "Hola";
$cadena2 = "Mundo";
$concatenacion = $cadena1 . " " . $cadena2;
$longitud = strlen($concatenacion);
echo "Concatenación: $concatenacion<br>";
echo "Longitud: $longitud<br>";

// d. Uso de Condicionales
if ($booleanVar) {
    echo "La variable booleana es true<br>";
} else {
    echo "La variable booleana es false<br>";
}

// e. Creación de un Array
echo "Elemento del arreglo en el índice 2: " . $arrayVar[2] . "<br>";
?>
