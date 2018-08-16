<?php

$x = "siclo while para hacer una tabla de multiplicar usando "


/*     OPERADORES LOGICOS and - && 
						  
						  ||	
 /*        TABLA DE ULTIPLICAR   

$a = 0;
define("tabla",5);
$r = 0;
while ($a <= 10) {
	echo "<h3>".$a.' x 5 ='.$r."</h3><br>";
	$a++;
	$r = $a * tabla;

}

*/
 $x = "OPERADOR TERNIARIO ?";
/*
ESTE OPERADOR DE COMPARACION SE LLAMA TERNARIO Y ES UN --> ? FUNCIONA PARECIDO AL if y al else pero 
resumido 

$y = 20;
$x = 2;              if            else 
                      |             |
echo $y == $x ? "es igual" : " es diferente";

*/


$X = "OPERADOR NAVE ESPACIAL ";

/*    ESTE OPERADOR DE COMPRACION SE LLAMA NAVE ESPACIAL Y COMPARA SI
      A ES MENOR QUE B NOS DA -1
      A ES IGUAL QUE B NOS DA 0
      A ES MAYOR QUE B NOS DA 1
$a = 35;
$b = 30;

echo $a <=> $b;

*/




$X = " OPERADOR DE IGUALDA DEL MISMO TIPO Y VALOR"
/*
if ($a===$b) {
	echo "<h1>a y b son iguales</h1>";
}else{
	echo "<h1>a y b son diferente</h1>";
} */



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
 