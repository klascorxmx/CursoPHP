<?php










/*
   MATRIZ O ARREGLO BIDIMENCIONAL 
$prueba = [
	[10,20,20,40],
	["perro","gato","loro","culebra"],
	["lunes","martes","miercoles","jueves"]
];

echo $prueba[1][2]."<br>".$prueba[2][0];




ARRAY CON INDICE ASOCIATIVO 


$dia["uno"] = "lunes";
$dia["dos"] = "martes";
$dia["tres"] = "miercoles";
$dia["cuatro"] = "jueves";
$dia["cinco"] = "viernes";


$semana = array ("uno"=>"lunes","dos"=>"martes","tres"=>"miercoles","cuatro"=>"jueves","cinco"=>"viernes");

$semana1 = ["uno"=>"lunes","dos"=>"martes","tres"=>"miercoles","cuatro"=>"jueves","cinco"=>"viernes"];


echo $semana1["cuatro"];		





 ARRAY CON INDICE PREDEFINIDO POR EL SISTEMA

$dia[] = "lunes";
$dia[] = "martes";
$dia[] = "miercoles";
$dia[] = "jueves";
$dia[] = "viernes";


$semana = array ("lunes","martes","miercoles","jueves","viernes");

$semana1 = ["lunes","martes","miercoles","jueves","viernes"];

echo $semana1[2];  */




$x = "ESTRUCTURA DE CONTROL REPETITIVAS";

/*
while   ANALISA Y REPITE
do while EJECUTA ANALISA Y REPITE 
for ANALISA Y REPITE ES MUY ÀRECIDO AL WHILE 

$a =1 ;

while ($a <= 10) {
	echo $a."<br>";
	$a++;
};

echo "---------------------------------------------------<br>";

for ($a=0; $a <= 20 ; $a++) { 
	echo $a."<br>";
};

echo "--------------------------------------------------------<br>";
do{
	echo $a."<br>";
	$a++;
}while ($a <= 10);

*/		









/*
$x = ESTRUCTURA DE CONTROL CONDICINALES ;
/*
if
if-else
if-elseif
if-elseif-else
switch 
$a = 3;

switch ($a){
	case '1':
		echo "es la opcion 1";
		break;
	case '2':
		echo "es la opcion 2";
		break;
		default: echo "es la opcion incorrecta";
		break;
}

*/



/*
$a = 100;
if ($a != 100) {
	echo "la variable a es igual a 100";
}





$x = "siclo while para hacer una tabla de multiplicar usando ";

/*
$a = 20;
$b = 10;

if ($a==20 && $b==10) {
	echo "esto es correcto";
}else{
	echo "es incorrecto";
}

       OPERADORES LOGICOS and - &&  = y LAS DOS CONDICIONES TIENEN SE TIENE UE CUMPLIR PARA QUE SE A TRUE
						  xor   =   SE TIENE QUE CUMPLIR UNO DE LOS DOS, PERO  NO LOS DOS PARA SER TRUE
						  
						  || - OR   = O AQUI UNA DE LAS DOS CONDICIONES SE TIENE QUE CUMPLIR PARA SER TRUE	
						  !  este operador logico dice que no existe 	
						  */
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
 