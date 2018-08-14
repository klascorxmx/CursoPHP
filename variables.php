<?php

$a = 20;
$b = "30";

if ($a!=$b) {
	echo "a y b son iguales";
}else{
	echo "a y b son diferente";
}
/*            OPERADORESD DE ASIGNACION - OPERADORES DE COMPARACION

					  =                    ==   IGUAL
					  +=                   ===  IGUAL DEL MISMO TIPO 
					  -=				   !=   DIFERENTE QUE
					  *=			       <>
					  /=				   <    MENOR QUE
					  %=				   >    MAYOR QUE
					  					   <=   MENOR O IGUAL QUE
					  					   >=   MAYOR O IGUAL QUE
					  					   <=> NAVE ESPACIAL
					  					   ?   TERNARIO
					  					   ??  FISION NULL
$a = 40;
$a += 20;
echo "<h1>$a</h1>";
/*     EJEMPLO DE CONCATENACION Y OPERADORES ARICMETICOS
$a =30;
$b = 50;
$c = 40;
$d = $a + $c;
echo "<h1>".($a + $b) * ($c + $d)."</h1>";
*/


/*               VERSION DE PHP
echo PHP_VERSION;
*/

/*                      DECLARAR UNA CONSTANTE 
define("PI",3.141516);

echo PI*2;
*/
/*                  FORZAR VARIABLES int-string-float-array-object

$a = 125.5;

$b = (string)$a;

echo var_dump($b);
*/

//string : cadena de texto se recomienda usar comillas simples pra declarar variables de tipo string
// $nombre = 'Franklin';

// integer: nomeros enteros
// $mensaje = 'te va a mandar a la intrnet';

// float cuando son de 32 bit y double cuando son de 64 bit: numeros con decimales

//$edad = 34.5;
// gettype muestra que tipo de variable es
//var_dump esta funcion muestra que tipo de variale es y adicional muestra su valor  y su contenido

// echo var_dump($nombre)
//echo "<a href='http://google.com'>".$nombre. "</a>".$mensaje;
 /*
CONDICIONALES IF  Y ELSE
 $num = 10;

 if ($num <= 9) {
 	echo "ES MENOR";
 	# code...
 } else {
 	echo "ES MAYO QUE 9";
 }*/

 ?>
 