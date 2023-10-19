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
                    
                    <!-- List item with class 'nav-item' and a link to 'Ejercicio 1' -->
                    <li class="nav-item">
                      <a class="nav-link" href="../index.php">Ejercicio 1</a>
                    </li>
                    
                    <!-- List item with class 'nav-item' and a link to 'Ejercicio 2' -->
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="../pages/ejercicio2.php">Ejercicio 2</a>
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
                      <a class="nav-link" href="../pages/ejercicio7.php">Ejercicio 7</a>
                    </li>
                    
                    <!-- List item with class 'nav-item' and a link to 'Ejercicio 8' -->
                    <li class="nav-item">
                      <a class="nav-link" href="../public_html/index.php">Ejercicio 8</a>
                    </li>
                    
                    <!-- List item with class 'nav-item' and a link to 'Ejercicio 9' -->
                    <li class="nav-item">
                      <a class="nav-link" href="../pages/ejercicio9.php">Ejercicio 9</a>
                    </li>
                </ul>
                <h3 class="h3">Ejercicio 2</h3>
                <div class="section">
                    <?php
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
                            echo implode(", ", $array);
                        }
                        
                        //choose how many elements the array should have
                        $numero_de_elementos = 10;
                        //min number of array
                        $min_valor = 1;
                        //max number of array
                        $max_valor = 100;
                        //call the function to generate the array
                        $mi_array = inicializar_array($numero_de_elementos, $min_valor, $max_valor);

                        //Show the generated array
                        mostrar_array($mi_array);
                    ?>
                </div>
            </main>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>
