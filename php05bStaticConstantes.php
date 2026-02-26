<?php
//Este procedimiento lo que hace es sumar los resultados
function miFuncion() {
   static $x = 0; //Declaro la variable local estática iniciada a 0. Comprueba quitando static
    echo " $x |"; //Muestro el valor.
    $x++; //Le sumo uno al valor anterior
    } // al terminar  la funcion no se borran las variables locales

/* SECUENCIAL */
echo 2==2 && 6<=9," | ";
   miFuncion();
   miFuncion();
   miFuncion();
   
   define("texto", "No por mucho madrugar amanece más temprano");
   echo texto; // No lleva $
   echo "<HR>";
   define("dato", 45.09);
   print "<p>El valor de dato es " . dato . "</p>"; 
   const PI = 3.14;
   const saludo = "¿Cómo estas?";
   echo PI*2;
   echo "<p>".saludo."</p>";
   echo "<HR>";

  
echo ("<pre>");
#print_r(get_defined_constants());
echo ("</pre>");


 ?>