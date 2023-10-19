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
        <link rel="stylesheet" href="./css/index.css">

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
                      <a class="nav-link active" aria-current="page" href="./index.php">Ejercicio 1</a>
                    </li>
                    
                    <!-- List item with class 'nav-item' and a link to 'Ejercicio 2' -->
                    <li class="nav-item">
                      <a class="nav-link" href="./pages/ejercicio2.php">Ejercicio 2</a>
                    </li>

                    <!-- List item with class 'nav-item' and a link to 'Ejercicio 3' -->
                    <li class="nav-item">
                      <a class="nav-link" href="./pages/ejercicio3.php">Ejercicio 3</a>
                    </li>

                    <!-- List item with class 'nav-item' and a link to 'Ejercicio 4' -->
                    <li class="nav-item">
                      <a class="nav-link" href="./pages/ejercicio4.php">Ejercicio 4</a>
                    </li>
                    
                    <!-- List item with class 'nav-item' and a link to 'Ejercicio 5' -->
                    <li class="nav-item">
                      <a class="nav-link" href="./pages/ejercicio5.php">Ejercicio 5</a>
                    </li>
                    
                    <!-- List item with class 'nav-item' and a link to 'Ejercicio 6' -->
                    <li class="nav-item">
                      <a class="nav-link" href="./pages/ejercicio6.php">Ejercicio 6</a>
                    </li>
                    
                    <!-- List item with class 'nav-item' and a link to 'Ejercicio 7' -->
                    <li class="nav-item">
                      <a class="nav-link" href="./pages/ejercicio7.php">Ejercicio 7</a>
                    </li>
                    
                    <!-- List item with class 'nav-item' and a link to 'Ejercicio 9' -->
                    <li class="nav-item">
                      <a class="nav-link" href="./pages/ejercicio9.php">Ejercicio 9</a>
                    </li>
                </ul>
                <h3 class="h3">Ejercicio 1</h3>
                <div class="section">
                    <?php
                        echo "APARTADO A) <br>";
                        //Create 5 variables and assign random values ​​to each one
                        $num1 = rand(1,50);
                        $num2 = rand(1,50);
                        $num3 = rand(1,50);
                        $num4 = rand(1,50);
                        $num5 = rand(1,50); 
                        //Create the sum function
                        function sumar ($num1, $num2, $num3, $num4, $num5){
                            $resultado = $num1 + $num2 + $num3 + $num4 + $num5;
                            
                            return $resultado;
                        }
                        //Call the function
                        $result = sumar($num1, $num2, $num3, $num4, $num5);
                        echo "El resultado de la suma es: ".$result."<br><br>";
                        
                        echo "APARTADO B) <br>";
                        //Create the function to divide random numbers
                        function dividirNumerosAleatorios($numeros) {
                            try {
                                // Choose two random numbers for division
                                $indiceNum1 = rand(0, 4);
                                $indiceNum2 = rand(0, 4);

                                while ($indiceNum2 == $indiceNum1) {
                                    $indiceNum2 = rand(0, 4);
                                }

                                // Perform the division
                                $numero1 = $numeros[$indiceNum1];
                                $numero2 = $numeros[$indiceNum2];

                                if ($numero2 == 0) {
                                    //Create an exception in case it is divided by 0
                                    throw new Exception("Error: División por cero");
                                }

                                $resultado = $numero1 / $numero2;
                                return $resultado;
                                
                            } catch (Exception $e) {
                                return $e->getMessage();
                            }
                        }

                        // Generates five random integers between 0 and 9
                        $numerosAleatorios = array();
                        for ($i = 0; $i < 5; $i++) {
                            $numerosAleatorios[] = rand(0, 9);
                        }

                        // Call the function to perform the division
                        $tmp = dividirNumerosAleatorios($numerosAleatorios);

                        // Shows the value of the variable $tmp
                        echo "Resultado de la división: " . $tmp."<br><br>";
                        
                        
                        echo "APARTADO C) <br>";
                        //Create the function to calculate the volume of the cylinder
                        function volumenCilindro ($radio, $altura){
                            $numeroPi = 3.1416;
                            
                            $resultado = $numeroPi * $radio * $radio * $altura;
                            return $resultado;
                            
                        }
                        //Call the function to know the result
                        $result = volumenCilindro($num1, $num2);
                        echo "El resultado del volumen del cilindro es: ".$result;
                        
                    ?>
                </div>
            </main>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>
