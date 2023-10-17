<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //1) create a function in which we create an array with 10 elements of numbers
                        //random between 1 and 30
                        function nuevoArray (){
                            $array = array();
                            for($i = 0; $i < 10; $i++){
                                $array[] = rand(1, 30);
                            }
                            
                            return $array;
                                    
                        }
                        //2) Print all values ​​of the array
                        function mostrarArray($array){
                            echo "El array es: ".implode(", ", $array)."<br>";
                        }
                        
                        
                        //3) Calculate the average value of the array values
                        function mediaArray($array){
                            $suma = array_sum($array);
                            $media = $suma / count($array);
                            
                            return $media;
                        }
                        
                        //4) Show the calculated average value
                        function mostrarMedia($array){
                            $media = mediaArray($array);
                            echo "La media del array es: ".$media."<br>";
                        }
                        
                        
                        //5) Show the 3 maximum values ​​of the array
                        function valorMax ($array){
                            rsort($array);
                            $max = array_slice($array, 0, 3); 
                            echo "Los 3 valores máximos del array son: ".implode(", ", $max)."<br>";
                        }
                        
                        
                        //6) Show the 3 minimum values ​​of the array
                        function valorMin ($array){
                            sort($array);
                            $min = array_slice($array, 0, 3); 
                            echo "Los 3 valores mínimos del array son: ".implode(", ", $min);
                        }
                        
                        // Create the array
                        $array = nuevoArray();
                        
                        // Call functions to perform operations
                        mostrarArray($array);
                        mostrarMedia($array);
                        valorMax($array);
                        valorMin($array);
        ?>
    </body>
</html>
