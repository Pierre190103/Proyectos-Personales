

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>MultiShop - Online Shop Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free HTML Templates" name="keywords">
        <meta content="Free HTML Templates" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  

        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <div class="container-fluid">
            <div class="row bg-secondary py-1 px-xl-5">
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="d-inline-flex align-items-center h-100">
                        <a class="text-body mr-3" href="">Acerca de</a>
                        <a class="text-body mr-3" href="">Contacto</a>
                        <a class="text-body mr-3" href="">Ayuda</a>
                        <a class="text-body mr-3" href="">Preguntas frecuentes</a>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Mi Cuenta</button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <button class="dropdown-item" type="button">Iniciar sesión</button>
                                <button class="dropdown-item" type="button">Inscribirse</button>
                            </div>
                        </div>
                        <div class="btn-group mx-2">
                            <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Moneda</button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <button class="dropdown-item" type="button">Dolares</button>
                                <button class="dropdown-item" type="button">Soles</button>
                            </div>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Idioma</button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <button class="dropdown-item" type="button">Español</button>
                                <button class="dropdown-item" type="button">Ingles</button>
                            </div>
                        </div>
                    </div>
                    <div class="d-inline-flex align-items-center d-block d-lg-none">
                        <a href="" class="btn px-0 ml-2">
                            <i class="fas fa-heart text-dark"></i>
                            <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                        </a>
                        <a href="" class="btn px-0 ml-2">
                            <i class="fas fa-shopping-cart text-dark"></i>
                            <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
                <div class="col-lg-4">
                    <a href="" class="text-decoration-none">
                        <span class="h1 text-uppercase text-primary bg-dark px-2">Servi</span>
                        <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">U</span>
                    </a>
                </div>
                <div class="col-lg-4 col-6 text-left">
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for products">
                            <div class="input-group-append">
                                <span class="input-group-text bg-transparent text-primary">
                                    <i class="fa fa-search"></i>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 col-6 text-right">
                    <p class="m-0">Contactanos</p>
                    <h5 class="m-0">+51 923566379</h5>
                </div>
            </div>
        </div>

        <?php include 'Header.php'; ?> 

        <div class="container-fluid mb-3">
            <div class="row px-xl-5">
                <div class="col-lg-8">
                    <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#header-carousel" data-slide-to="1"></li>
                            <li data-target="#header-carousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item position-relative active" style="height: 430px;">
                                <img class="position-absolute w-100 h-100" src="img/Informacion/Tutorías_personalizadas.png" style="object-fit: cover;">
                                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                    <div class="p-3" style="max-width: 700px;">
                                        <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Tutorías personalizadas</h1>
                                        <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Contamos con un equipo de tutores expertos en diversas materias que están listos para ayudarte a comprender conceptos difíciles, resolver problemas y prepararte para exámenes importantes.</p>
                                        <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Detalles</a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item position-relative" style="height: 430px;">
                                <img class="position-absolute w-100 h-100" src="img/Informacion/Ayuda_con_tareas_y_proyectos.png" style="object-fit: cover;">
                                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                    <div class="p-3" style="max-width: 700px;">
                                        <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Ayuda con tareas y proyectos</h1>
                                        <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Desde matemáticas hasta ciencias sociales, estamos aquí para ayudarte con cualquier tarea o proyecto que puedas tener, asegurándonos de que recibas la ayuda que necesitas para tener éxito en tus cursos.</p>
                                        <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Detalles</a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item position-relative" style="height: 430px;">
                                <img class="position-absolute w-100 h-100" src="img/Informacion/Servicios_de_redacción_y_edición.png" style="object-fit: cover;">
                                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                    <div class="p-3" style="max-width: 700px;">
                                        <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Servicios de redacción y edición</h1>
                                        <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Ya sea que necesites ayuda para redactar un ensayo, revisar un trabajo de investigación o mejorar tus habilidades de escritura, nuestros expertos en redacción y edición están disponibles para brindarte el apoyo que necesitas.</p>
                                        <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Detalles</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="product-offer mb-30" style="height: 200px;">
                        <img class="img-fluid" src="img/Informacion/Preparación_para_exámenes.png" alt="">
                        <div class="offer-text">
                            <h6 class="text-white text-uppercase">Save 20%</h6>
                            <h3 class="text-white mb-3">Preparación para exámenes</h3>
                            <a href="" class="btn btn-primary">Detalles</a>
                        </div>
                    </div>
                    <div class="product-offer mb-30" style="height: 200px;">
                        <img class="img-fluid" src="img/Informacion/Desarrollo_de_habilidades_de_estudio.png" alt="">
                        <div class="offer-text">
                            <h6 class="text-white text-uppercase">Save 20%</h6>
                            <h3 class="text-white mb-3">Desarrollo de habilidades</h3>
                            <a href="" class="btn btn-primary">Detalles</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid pt-5">
            <div class="row px-xl-5 pb-3">
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                        <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                        <h5 class="font-weight-semi-bold m-0">Producto de calidad</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                        <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                        <h5 class="font-weight-semi-bold m-0">Envío gratis</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                        <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                        <h5 class="font-weight-semi-bold m-0">Pagos seguros</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                        <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                        <h5 class="font-weight-semi-bold m-0">Soporte 24/7</h5>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid pt-5">
            <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Categorias</span></h2>
            <div class="row px-xl-5 pb-3">
                <?php
                include 'config.php'; // Incluye el archivo config.php que contiene las variables de conexión
// Ahora puedes usar $servername, $username, $password y $database en este script
                $conn = new mysqli($servername, $username, $password, $database);
                $sql = "SELECT c.nombre AS nombre_categoria, c.imagen AS imagen_categoria, COUNT(p.id) AS cantidad_productos
        FROM categorias c
        LEFT JOIN productos p ON c.id = p.categoria_id
        GROUP BY c.id";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="col-lg-3 col-md-4 col-sm-6 pb-1">';
                        echo '    <a class="text-decoration-none" href="">';
                        echo '        <div class="cat-item d-flex align-items-center mb-4">';
                        echo '            <div class="overflow-hidden" style="width: 100px; height: 100px;">';
                        echo '                <img class="img-fluid" src="' . $row["imagen_categoria"] . '" alt="' . $row["nombre_categoria"] . '">';

                        echo '            </div>';
                        echo '            <div class="flex-fill pl-3">';
                        echo '                <h6>' . $row["nombre_categoria"] . '</h6>';
                        echo '                <small class="text-body">' . $row["cantidad_productos"] . ' Productos</small>';
                        echo '            </div>';
                        echo '        </div>';
                        echo '    </a>';
                        echo '</div>';
                    }
                } else {
                    echo "0 resultados";
                }
                $conn->close();
                ?>

            </div>
        </div>


        <div class="container-fluid pt-5 pb-3">
            <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">PRODUCTOS DESTACADOS</span></h2>
            <div class="row px-xl-5">
                <?php
                include 'config.php'; // Incluye el archivo config.php que contiene las variables de conexión
// Ahora puedes usar $servername, $username, $password y $database en este script
                $conn = new mysqli($servername, $username, $password, $database);
                if ($conn->connect_error) {
                    die("Conexión fallida: " . $conn->connect_error);
                }

// Consulta para obtener todos los productos
                $sql = "SELECT * FROM productos ORDER BY cantidad_resenas DESC LIMIT 9;";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="col-lg-3 col-md-4 col-sm-6 pb-1">';
                        echo '    <div class="product-item bg-light mb-4">';
                        echo '        <div class="product-img position-relative overflow-hidden">';
                        echo '            <img class="img-fluid w-100" src="' . $row["imagen"] . '" alt="' . $row["nombre"] . '">';
                        echo '            <div class="product-action">';
                        echo '                <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>';
                        echo '                <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>';
                        echo '                <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>';
                        echo '                <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>';
                        echo '            </div>';
                        echo '        </div>';
                        echo '        <div class="text-center py-4">';
                        echo '            <a class="h6 text-decoration-none text-truncate" href="">' . $row["nombre"] . '</a>';
                        echo '            <div class="d-flex align-items-center justify-content-center mt-2">';
                        echo '                <h5>s/ ' . $row["precio"] . '</h5><h6 class="text-muted ml-2"><del>s/ ' . $row["precio_descuento"] . '</del></h6>';
                        echo '            </div>';
                        echo '            <div class="d-flex align-items-center justify-content-center mb-1">';
                        echo '                <small class="fa fa-star text-primary mr-1"></small>';
                        echo '                <small class="fa fa-star text-primary mr-1"></small>';
                        echo '                <small class="fa fa-star text-primary mr-1"></small>';
                        echo '                <small class="fa fa-star text-primary mr-1"></small>';
                        echo '                <small class="fa fa-star text-primary mr-1"></small>';
                        echo '                <small>(' . $row["cantidad_resenas"] . ')</small>';
                        echo '            </div>';
                        echo '        </div>';
                        echo '    </div>';
                        echo '</div>';
                    }
                } else {
                    echo "0 resultados";
                }
                $conn->close();
                ?>

            </div>
        </div>


        <div class="container-fluid pt-5 pb-3">
            <div class="row px-xl-5">
                <div class="col-md-6">
                    <div class="product-offer mb-30" style="height: 300px;">
                        <img class="img-fluid" src="img/Informacion/Preparación_para_exámenes.png" alt="">
                        <div class="offer-text">
                            <h6 class="text-white text-uppercase">Save 20%</h6>
                            <h3 class="text-white mb-3">Preparación para exámenes</h3>
                            <a href="" class="btn btn-primary">Detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product-offer mb-30" style="height: 300px;">
                        <img class="img-fluid" src="img/Informacion/Desarrollo_de_habilidades_de_estudio.png" alt="">
                        <div class="offer-text">
                            <h6 class="text-white text-uppercase">Save 20%</h6>
                            <h3 class="text-white mb-3">Desarrollo de habilidades</h3>
                            <a href="" class="btn btn-primary">Detalles</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid pt-5 pb-3">
            <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Productos Recientes</span></h2>
            <div class="row px-xl-5">
                <?php
                include 'config.php'; // Incluye el archivo config.php que contiene las variables de conexión
// Ahora puedes usar $servername, $username, $password y $database en este script
                $conn = new mysqli($servername, $username, $password, $database);
                if ($conn->connect_error) {
                    die("Conexión fallida: " . $conn->connect_error);
                }

// Consulta para obtener todos los productos
                $sql = "SELECT * 
FROM productos ORDER BY fecha_creacion ASC LIMIT 4;";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="col-lg-3 col-md-4 col-sm-6 pb-1">';
                        echo '    <div class="product-item bg-light mb-4">';
                        echo '        <div class="product-img position-relative overflow-hidden">';
                        echo '            <img class="img-fluid w-100" src="' . $row["imagen"] . '" alt="' . $row["nombre"] . '">';
                        echo '            <div class="product-action">';
                        echo '                <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>';
                        echo '                <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>';
                        echo '                <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>';
                        echo '                <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>';
                        echo '            </div>';
                        echo '        </div>';
                        echo '        <div class="text-center py-4">';
                        echo '            <a class="h6 text-decoration-none text-truncate" href="">' . $row["nombre"] . '</a>';
                        echo '            <div class="d-flex align-items-center justify-content-center mt-2">';
                        echo '                <h5>s/ ' . $row["precio"] . '</h5><h6 class="text-muted ml-2"><del>s/ ' . $row["precio_descuento"] . '</del></h6>';
                        echo '            </div>';
                        echo '            <div class="d-flex align-items-center justify-content-center mb-1">';
                        echo '                <small class="fa fa-star text-primary mr-1"></small>';
                        echo '                <small class="fa fa-star text-primary mr-1"></small>';
                        echo '                <small class="fa fa-star text-primary mr-1"></small>';
                        echo '                <small class="fa fa-star text-primary mr-1"></small>';
                        echo '                <small class="fa fa-star text-primary mr-1"></small>';
                        echo '                <small>(' . $row["cantidad_resenas"] . ')</small>';
                        echo '            </div>';
                        echo '        </div>';
                        echo '    </div>';
                        echo '</div>';
                    }
                } else {
                    echo "0 resultados";
                }
                $conn->close();
                ?>
            </div>
        </div>
        <!-- Products End -->

        <!-- Vendor Start -->
        <div class="container-fluid py-5">
            <div class="row px-xl-5">
                <div class="col">
                    <div class="owl-carousel vendor-carousel">
                        <?php
                        include 'config.php'; // Incluye el archivo config.php que contiene las variables de conexión
// Ahora puedes usar $servername, $username, $password y $database en este script
                        $conn = new mysqli($servername, $username, $password, $database);
                        if ($conn->connect_error) {
                            die("Conexión fallida: " . $conn->connect_error);
                        }

// Consulta para obtener todos los productos
                        $sql = "SELECT imagen FROM marcas";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // Output data of each row
                            while ($row = $result->fetch_assoc()) {
                                echo '        <div class="bg-light p-4">';
                                echo '                    <img src="' . $row["imagen"] . '" alt="">';
                                echo '            </div>';
                            }
                        } else {
                            echo "0 resultados";
                        }
                        $conn->close();
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Vendor End -->

        <?php include 'Fooder.php'; ?> <!-- Esto incluirá el pie de página -->



        <!-- Back to Top -->
        <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>

</html>