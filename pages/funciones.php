<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>FUNCIONES</title>
    </head>
    <body>
        <?php
            //EXERCIESE 2
            //create a function with three parameters
            function inicializar_array($numero_de_elementos, $min, $max) {
                //if the number of elements is less than 0 or the minimum number is greater than the maximum
                //do not return anything because it cannot be done
                if ($numero_de_elementos < 0 || $min > $max) {
                   return null;
                }
                //creamos un array vacio
                $array = array();
                //se establece el array con los numeros de elementos que haya dicho el usuario
                //con numeros aleatorios entre un numero minimo y otro maximo que se haya establecido
                for ($i = 0; $i < $numero_de_elementos; $i++) {
                    $array[] = rand($min, $max);
                }

                return $array;
            }

            //create a function to display the formatted array
            function mostrar_array($array) {
                echo implode(", ", $array)."<br>";
            }
            
            //EXERCIESE 3
            //create a function that we pass a parameter to it
            function calcular_media($array) {
                //create the sum variable that is assigned the sum of the numbers in the array
                $suma = array_sum($array);
                //create the middle variable that stores the sum divided by the number of elements of the array
                $media = $suma / count($array);
                //devuelve el resultado de media
                return $media;
            }
            function mostrar_media($array){
                $mediaNueva = calcular_media($array);
                echo "La media es: ".$mediaNueva."<br>";
            }
            
            
            //Show the 3 maximum values ​​of the array
            function valorMax($array) {
                rsort($array);
                $max = array_slice($array, 0, 3);
                echo "Los 3 valores máximos del array son: " . implode(", ", $max) . "<br>";
            }

            //6) Show the 3 minimum values ​​of the array
            function valorMin($array) {
                sort($array);
                $min = array_slice($array, 0, 3);
                echo "Los 3 valores mínimos del array son: " . implode(", ", $min);
            }
            
            //EXERCIESE 4
            //create a function and pass it a parameter
            function calcular_maximo($array) {
                //create the maximum variable in which we store the maximum value of the array
                $maximo = max($array);
                //return the value that is stored in the maximum variable
                return $maximo;
            }
            
            //EXERCIESE 5
            //create a function and pass it a parameter
            function calcular_minimo($array) {
                //create the minimum variable in which we store the minimum value of the array
                $minimo = min($array);
                //return the value that is stored in the minimum variable
                return $minimo;
            }

        //EXERCIESE 6
            //create a function and pass it a parameter
            function imprimir_array($array) {
                //creamos una tabla con dos columnas
                echo "<table class='table'>";
                echo "<tr><th>Posición</th><th>Valor</th></tr>";
                //do a forEach to go through the array and show each position and
                //value that that array has and show it in the table
                foreach ($array as $posicion => $valor) {
                    echo "<tr>";
                    echo "<td>$posicion</td>";
                    echo "<td>$valor</td>";
                    echo "</tr>";
                }

                echo "</table>";
            }
        ?>
    </body>
</html>
