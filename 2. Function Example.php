<?php
// Probleme Functii
// .............. 1 ...........
/*
    Sa se scrie o functie in care se va afisa urmatoarele:
    echo "**********************************************";
    echo "<br> title <br>";
    echo "**********************************************";
    echo "<br> Some text <br>";
    echo "**********************************************";
*/

    // function stars(){
    //     echo "**********************************************<br>";
    // }
    // stars();
    // echo "title <br>";
    // stars();
    // echo "Some text";

// ............. 2 ...........
/*
    Sa se scrie o functie in care se va afisa urmatoarele:
    echo "************************************ Belgrade **************************************";
    echo "<br>Text about Belgrade<br>";
    echo "************************************* Paris ****************************************";
    echo "<br>Text about Paris<br>";
    echo "************************************* London **************************************";
    echo "<br>Text about London<br>";
*/

    // function stars( $cityName ){
    // for( $i=0; $i<35; $i++ )
    //     echo "*";
    //     echo " " . $cityName . " ";
    //     for( $x= ( $i + 2 ) + strlen ( $cityName ); $x < 90; $x++ ){
    //         echo "*";
    //     }
    // }
    // stars( "Belgrade" );
    // echo "<br> Text about Belgrade <br>";
    // stars( "Paris" );
    // echo "<br> Text about Paris <br>";
    // stars( "London" );
    // echo "<br> Text about London <br>";

// .............. 3 ...........
/*
    Exemplu de concatenare a 2 nume (firstName / lastName)
*/

    // function concat_name($fname, $lname){
    //    global $completName;
    //     $completName = $fname . ' - ' . $lname;
    // }

    // concat_name('Andrei', 'Alexandru');
    // echo $completName;

// .............. 4 ........... anonymous
/*
    Adunarea a doua numere
*/

    // $addNumber = function($num1, $num2){
    //     global $total;
    //     $total = $num1 + $num2;
    // };

    // $addNumber(2, 6);
    // echo $total;

// .............. 5 ........... dynamic
/*
    PHP ne permite să atribuim variabilei denumirea funcţiei ca string, iar
    apoi variabila respectivă se poate utiliza pentru apelarea funcţiei.
*/

    // function message(){
    //     echo 'Hello Stranger';
    // }

    // $dispayMessage = "message";
    // $dispayMessage();

// ............. 6 .............
/*
    Trebuie creată o funcţie care acceptă un string şi returnează
    caracterele lui în ordine inversă (de exemplu, stringul “my string”
    devine “gnirts ym”).
*/

    // function str_reverse($str){
    //     $rez = "";
    //     for($i = strlen($str)-1; $i >= 0; $i--){
    //         $rez .= $str[$i];
    //     }
    //     return $rez;
    // }
    // $text = "my string";
    // echo str_reverse($text);

// ............. 6 .............
/*
    Există următoarea intrare în aplicaţie:
    define( "SQUARE", 0 );
    define( "RECTANGLE", 1 );
    define( "CIRCLE", 2 );
    define( "PI", 3.14 );
    Trebuie să se creeze o funcție care va accepta ca parametri tipul cu
    formă geometrică (pătrat, dreptunghi sau cerc) și valorile a și b. În
    funcție de forma geometrică, se calculează aria sa și se returnează
    rezultatul.
    Este necesară testarea funcției.
*/

    // define("SQUARE", 0);
    // define("RECTANGLE", 1);
    // define("CIRCLE", 2);
    // define("PI", 3.14);

    // function area($type, $a, $b = 0){

    //      $rez = 0;
    //      switch($type){
    //          case SQUARE:
    //              $rez = pow($a, 2);
    //          break;
    //          case RECTANGLE:
    //              $rez = $a * $b;
    //          break;
    //          case CIRCLE:
    //              $rez = pow($a, 2) * PI;
    //          break;
    //      }
    //      return $rez;
    // }
    // echo area(CIRCLE, 4);

?>