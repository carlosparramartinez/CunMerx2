<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CUNMERX</title>

    <!-- FUENTE GOOGLE FONTS : Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- ICONS: Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

    <!-- ICONS: Line Awesome -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <!-- Animaciones AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">


    <!-- Mis Estilos -->
    <!-- <link rel="stylesheet" href="/css/estilopantallapri.css"> -->
    <link rel="stylesheet" href="css/estilosubir.css">
    
</head>


<body>

    <div class="hm-wrapper">

<!--imagen Panel menu-->
        <div class="hm-header">

            <div class="container">
                <div class="header-menu">

                    <div class="hm-logo">
                        <a href="pantallapri.php">
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
<!--Menu navegacion-->
                    <nav class="hm-menu">
                        <ul>
                        <li><a href="">MI CUENTA</a></li>
                            <li><a href="./productos.php">PRODUCTOS</a></li>
                            <li><a href="./agrepro.php">PUBLICAR</a></li>
                            <li><a href="./index.php">INGRESAR</a></li>
                        </ul>

<!--Carrito de compras-->
                      
<!--Icono menu-->
                        <div class="icon-menu">
                            <button type="button"><i class="fas fa-bars"></i></button>
                        </div>

                    </nav>

                </div>
            </div>

        </div>

        <!-- =================================
           HEADER MENU Movil-->
           <div class="header-menu-movil">
            <button class="cerrar-menu"><i class="fas fa-times"></i></button>
            <ul>
                <li><a href="#">Productos</a></li>
                <li><a href="#">Campañas</a></li>
                <li><a href="#">Nosotros</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </div>
       
         <!--seccion productos destacados -->
        <div class="hm-page-block bg-fondo">

            <div class="container">

                <div class="header-title" data-aos="fade-up">
                    <h1>NUEVO PRODUCTO!!!! </h1>
                </div>

                <!-- menu de la seccion de productos populares -->
                <ul class="hm-tabs" data-aos="fade-up">
                    <li class="hm-tab-link">
                        Venta
                    </li>

                    <li class="hm-tab-link ">
                        Alquilar
                    </li>

                    <!-- <li class="hm-tab-link ative">
                        En oferta
                    </li> -->

                </ul>

                <!-- contenido de la seccion de productos populares -->
                <!-- vendta -->
                
               <div class="tabs-content" data-aos="fade-up">

<div class="grid-product">
<form action="php/registro_productos.php" method="post" class="formulario__login">
<div class="p-portada">
            <!-- <a href="">
                <img src="img/phimetro.jpg" alt="">
            </a> -->
            
            <form method="post" enctype="multipart/form-data" >
                <div class="form-group">
                <input type="file" name="imagenpro" accept="image/png, image/jpeg">
                echo "(imagenpro) ";
                <img src="imagenpro">
            
                    </div>
                </form>
                
        </div>
        <!-- <div class= "b-subirf">
        <button> Subir imagen2 </button>
        
       </div> -->
    <div class="product-item">
        
                            
                            <div class="p-info">
                                <!-- <input type ="submit" value="casilla de filtros" onclick="mostrar_ocultar()"/> -->
                          
                            <input type="text" placeholder="Nombre del producto" name="nombrepro" required="required">
                        <input type="number" placeholder="calificacion" name="cantidadu" required="required">
                        <input type="number"placeholder="precio del producto" min="50" step="50"name="precio" required="required" />
                        <div className="App">
                        <input type="text" placeholder="decripcion del objeto" name="descrip" required="required">
                           
                        <h2>cuadro de Filtros<h2>
                                 <p>acontinuacion elije las etiquetas que llevara tu producto</p>       
                    </div>
                      
                     
                         <div className = "cajafiltro" id="caja" opacity="0">         
                        <h2>categoria</h2><br>
                         <label>sistemas<input type="checkbox" id="cbox4" value="first_checkbox"> </label></br>
                         <label>ambiental<input type="checkbox" id="cbox2" value="first_checkbox"> </label><br>
                         <label>agronomia<input type="checkbox" id="cbox3" value="first_checkbox"> </label><br>
                         <label>psicologia<input type="checkbox" id="cbox4" value="first_checkbox"> </label><br>
                         <label>contaduria<input type="checkbox" id="cbox4" value="first_checkbox"> </label><br>
                         <label>administracion<input type="checkbox" id="cbox4" value="first_checkbox"> </label><br>
                         <label>otros<input type="checkbox" id="cbox4" value="first_checkbox"> </label><br>
                        
                        </div>
                        
                            <div class="p-info2">
                            <button>subir </button>
                            </form>
                            </div>
                        </div>
                    </div>
               </div>          
</div>
                <!-- Alquilar -->
                <div class="tabs-content" data-aos="fade-up">

<div class="grid-product">
<form action="php/registro_productos.php" method="post" class="formulario__login">
<div class="p-portada">
            <!-- <a href="">
                <img src="img/phimetro.jpg" alt="">
            </a> -->
            
            <form method="post" enctype="multipart/form-data" >
                <div class="form-group">
                <input type="file" name="imagenpro" accept="image/png, image/jpeg">
                echo "(imagenpro) ";
                <img src="imagenpro">
            
                    </div>
                </form>
                
        </div>
        <!-- <div class= "b-subirf">
        <button> Subir imagen2 </button>
        
       </div> -->
    <div class="product-item">
        
                            
                            <div class="p-info">
                                <!-- <input type ="submit" value="casilla de filtros" onclick="mostrar_ocultar()"/> -->
                          
                            <input type="text" placeholder="Nombre del producto" name="nombrepro" required="required">
                        <input type="number" placeholder="Cantidad del producto(por Hora)" name="cantidadu" required="required">
                        <input type="number"placeholder="precio del producto" min="50" step="50"name="precio" required="required" />
                        <div className="App">
                        <input type="text" placeholder="decripcion del objeto" name="descrip" required="required">
                           
                        <h2>cuadro de Filtros<h2>
                                 <p>acontinuacion elije las etiquetas que llevara tu producto</p>       
                    </div>
                      
                     
                         <div className = "cajafiltro" id="caja" opacity="0">         
                        <h2>ingenieria sistemas</h2><br>
                         <label>computacion<input type="checkbox" id="cbox1" value="first_checkbox"> </label><br>
                         <label>circuitos<input type="checkbox" id="cbox2" value="first_checkbox"> </label><br>
                         <label>sensores<input type="checkbox" id="cbox3" value="first_checkbox"> </label><br>
                         <label>actuadores<input type="checkbox" id="cbox4" value="first_checkbox"> </label><br>
                         <h2 > otros </h2><br>
                         <label>libros<input type="checkbox" id="cbox4" value="first_checkbox"> </label><br>
                         <label>cartografia<input type="checkbox" id="cbox4" value="first_checkbox"> </label><br>
                         <label>utiles<input type="checkbox" id="cbox4" value="first_checkbox"> </label><br>
                         <label>actuadores<input type="checkbox" id="cbox4" value="first_checkbox"> </label><br>
                        </div>
                        
                            <div class="p-info2">
                            <button>subir </button>
                            </form>
                            </div>
                        </div>
                    </div>
               </div>          
</div>
                

<!--pie de pagina-->
        <div class="foo-copy">
            <div class="container">
                <p>CUNMERX © 2022 Todos los derechos reservados.| Codificado por ...</p>
                
            </div>
        </div>

    </div>
    
    <!-- Animaciones : AOS-->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <!-- Mi Script -->
    <script src="./js/scriptpantallapri.js"></script>
    <script src="./js/scriptagrego.js"></script>

    <script>
    
        AOS.init({
            duration: 1200,
        })


    </script>

</body>
</html>