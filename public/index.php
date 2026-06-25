<?php

echo "<h1 style='color:red;'>Estructuras de control</h1>";


//1. Estructura condicional if y else//
echo "<h2>1. Estructura condicional if y else</h2>";
echo "<br>";

$edad = 18;

if($edad >= 18){
    echo "Es mayor de edad";
}else{
     echo "Es menor de edad";
}
echo "<br>";
echo "<br>";



//2. Operadores lógicos (&&, ||, !)//
echo "<h2>2. Operadores lógicos (&&, ||, !)</h2>";
echo "<br>";

$usuario = "admin";
$clave = "1234";
 
if($usuario == "admin" && $clave == "1234"){
   echo "Acceso permitido";
}else{
   echo "Acceso denegado";
}
echo "<br>";
echo "<br>";



//3. Valores booleanos (true y false)//
echo "<h2>3. Valores booleanos (true y false)</h2>";
echo "<br>";

$encendido = true;

if($encendido){
   echo "El sistema está encendido";
}else{
   echo "El sistema está apagado";
}
echo "<br>";
echo "<br>";



//4. Uso de var_dump()//
echo "<h2>4. Uso de var_dump()</h2>";
echo "<br>";

$nombre = "Carlos";
$edad = 20;

var_dump($nombre);
var_dump($edad);

echo "<br>";
echo "<br>";



//5. Comparación simple (==)//
echo "<h2>5. Comparación simple (==)</h2>";
echo "<br>";

$numero1 = 10;
$numero2 = "10";

if($numero1 == $numero2){
   echo "Los números son iguales";
}else{
   echo "Los números son diferentes";
}
echo "<br>";
echo "<br>";



//6. Comparación estricta (===)//
echo "<h2>6. Comparación estricta (===)</h2>";
echo "<br>";

$numero1 = 10;
$numero2 = "10";

if($numero1 === $numero2){
   echo "Son identicos";
}else{
   echo "No son identicos";
}

// ==========================================
// PARTE 5 - VALIDACIONES BÁSICAS EN PHP

echo "<h1 style='color:red;'>PARTE 5 - VALIDACIONES BÁSICAS EN PHP</h1>";
// ==========================================

// Ejercicio 17: Validar nota
$nota = 3.5;

echo "<h2>Ejercicio 17: Validar nota</h2>";

if ($nota >= 3.0) {
    echo "Resultado: Aprobó";
} else {
    echo "Resultado: Reprobó";
}
echo "<br><br>";


// Ejercicio 18: Validación de mayoría de edad
$edad_usuario = 17;

echo "<h2>Ejercicio 18: Validación de mayoría de edad</h2>";

if ($edad_usuario >= 18) {
    echo "Edad: " . $edad_usuario . " años. <br>";
    echo "Resultado: El usuario es mayor de edad.";
} else {
    echo "Edad: " . $edad_usuario . " años. <br>";
    echo "Resultado: El usuario es menor de edad.";
}
echo "<br><br>";


// Ejercicio 19: Descuento por compra mayor a $200000
$valorCompra = 250000;

echo "<h2>Ejercicio 19: Descuento por compra mayor a $200000</h2>";

if ($valorCompra > 200000) {
    $descuento = $valorCompra * 0.10;
    $total = $valorCompra - $descuento;
    echo "¡Tienes un descuento! Total a pagar: $" . $total;
} else {
    echo "Total a pagar: $" . $valorCompra;
}
echo "<br><br>";


// Ejercicio 20: Producto agotado o disponible
$cantidadDisponible = 0;

echo "<h2>Ejercicio 20: Producto agotado o disponible</h2>";

if ($cantidadDisponible > 0) {
    echo "Estado: Producto disponible (" . $cantidadDisponible . " unidades)";
} else {
    echo "Estado: Producto agotado";
}
?>