<!-- HTML document declaration -->
<!DOCTYPE html>

<!-- Start of HTML document with the 'en' (English) language attribute -->
<html lang="en">
    <head>
        <!-- Metadata section with character encoding specification -->
        <meta charset="UTF-8">

        <!-- Title of the webpage -->
        <title>Ejercicios Funciones y Excepciones</title>

        <!-- Link to an external stylesheet located in the './css' directory -->
        <link rel="stylesheet" href="../css/index.css">

        <!-- Link to Bootstrap CSS library hosted on a CDN with integrity and crossorigin attributes -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <!-- Start of the main content container with class 'contenedor' -->
        <div class="contenedor">
            <!-- Main content area with class 'main' -->
            <main class="main">
                <!-- Main heading with class 'main__h1' -->
                <h1 class="main__h1">Ejercicios UT3_3 - Funciones y Excepciones</h1>

                <!-- Author information paragraphs with class 'main__text' -->
                <p class="main__text"><strong>Nombre:</strong> Diego Rubio Serrano</p>
                <p class="main__text"><strong>Curso:</strong> 2º DAW</p>
                <p class="main__text"><strong>Módulo:</strong> Desarrollo Web en Entorno Servidor (DWES)</p>

                <!-- Unordered list with Bootstrap's 'nav' and 'nav-tabs' classes -->
                <ul class="nav nav-tabs">

                    <!-- List item with class 'nav-item' and a link to 'Ejercicio 2' -->
                    <li class="nav-item">
                      <a class="nav-link" href="../index.php">Ejercicio 2</a>
                    </li>

                    <!-- List item with class 'nav-item' and a link to 'Ejercicio 3' -->
                    <li class="nav-item">
                      <a class="nav-link" href="../pages/ejercicio3.php">Ejercicio 3</a>
                    </li>

                    <!-- List item with class 'nav-item' and a link to 'Ejercicio 4' -->
                    <li class="nav-item">
                      <a class="nav-link" href="../pages/ejercicio4.php">Ejercicio 4</a>
                    </li>
                    
                    <!-- List item with class 'nav-item' and a link to 'Ejercicio 5' -->
                    <li class="nav-item">
                      <a class="nav-link" href="../pages/ejercicio5.php">Ejercicio 5</a>
                    </li>
                    
                    <!-- List item with class 'nav-item' and a link to 'Ejercicio 6' -->
                    <li class="nav-item">
                      <a class="nav-link" href="../pages/ejercicio6.php">Ejercicio 6</a>
                    </li>
                    
                    <!-- List item with class 'nav-item' and a link to 'Ejercicio 7' -->
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="../pages/ejercicio7.php">Ejercicio 7</a>
                    </li>
                    
                    <!-- List item with class 'nav-item' and a link to 'Ejercicio 8' -->
                    <li class="nav-item">
                      <a class="nav-link" href="../pages/ejercicio8.php">Ejercicio 8</a>
                    </li>
                </ul>
                <h3 class="h3">Ejercicio 7</h3>
                <div class="section">
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
                </div>
            </main>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>

