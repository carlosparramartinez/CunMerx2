<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>CUNMERX</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>

</head>

<body>

    <!--  ★´･ｪ･`★´･ｪ･`★´･ｪ･`★´･ｪ･`★´  INICIO HEADER ★´･ｪ･`★´･ｪ･`★´･ｪ･`★´･ｪ･`★´ -->

    <header class="header theme-sky-dark in-line" id="header">

        <!-- inicia marca del header -->

        <div class="in-line">
        <a href="pantallapri.php">
                            <img src="img/logo.png" alt=""width="500" height="100">
                        </a>
        </div>

        <!-- finaliza marca del header-->

        <!-- inicia boton cart-->

        <div>
            <button type="button"
                    class=" btn-cart in-line button button-simple-empty"
                    aria-label="Mostrar productos agregados al carrito">
                <i class="fas fa-shopping-cart cart-icon"
                   aria-hidden="true"
                   aria-live="polite"></i>
                <div class= "cart-text">
                    <p>Carrito (<span class="cart-qty">0</span>ítems)</p>
                </div>
                
            </button>
        </div>
        <!--finaliza boton cart-->
    </header>


       
        
    </section>-->

    <!--  ★´･ｪ･`★´･ｪ･`★´･ｪ･`★´･ｪ･ FIN BANNER  ★´･ｪ･`★´･ｪ･`★´･ｪ･`★´･ｪ･`★´ -->


    <!--  ★´･ｪ･`★´･ｪ･`★´･ｪ･`★´･ｪ･ INICIO CATALOGO ★´･ｪ･`★´･ｪ･`★´･ｪ･`★´･ｪ･`★´ -->

    <main id="shop">
        <!-- ♪:;;;:♪:;;;:♪:;;Inicio Filtros ;:♪:;;;:♪:;;;:♪:;;;: -->

        <section class="filters-container in-line"
                 aria-labelledby="filters-title">
                    
            <aside class= "filters-aside">
                <button
                type="button"
                class="close-filters-btn is-hidden"
                aria-label="Cerrar filtros">
                <i class="fas fa-times" aria-hidden="true"></i>
                </button>
                <!--inicia Header Filtro-->
                <div class="filters-heading-container in-line">

                    <div class="filters-title">
                        <h2 aria-label= "Agilice la búsqueda del producto utilizando:">
                            FILTROS</h2>
                    </div>

                    <div class="filters-clear-btn-container">
                        <button type="button" class="clear-btn in-line"
                                aria-label="¿Desea quitar los filtros seleccionados?">
                            <i class="fas fa-trash-alt" aria-hidden="true"></i>
                            <h3 class="clear-title">
                                Limpiar
                            </h3>
                        </button>
                    </div>

                </div>
                <!-- fin Header Filtro -->

                <!-- Inicia Busqueda -->
                <form>
                    <div class="filters-search-container">
                        <div>
                            <h3>BUSQUEDA</h3>
                        </div>
                        <label for="input-search" 
                            class="input-search-container in-line">
                            <input type="text"
                                id="input-search"
                                placeholder="¿Qué está buscando?"
                                aria-label="Escriba el nombre del producto que busca">
                            </input>
                            <i class="fas fa-search search-icon"
                            aria-hidden="true">
                            </i>
                        </label>
                    </div>
                <!-- fin Busqueda -->

                <!-- Inicio Filtro category -->
                    <fieldset class="filters-category-container ">
                        <legend>
                            <h3 aria-label="Filtre los productos 
                                por la categoria a la que pertenecen">
                                CATEGORIA
                            </h3>
                        </legend>

                        <div class="checkboxes-container input-category-container">
                            <label for= "SISTEMAS" class="input-category in-line">
                                <input type="checkbox"
                                    class=" filter filter-category"
                                    name="category"
                                    value="SISTEMAS"
                                    id= "SISTEMAS">
                                </input>
                                <h4>SISTEMAS</h4>
                            </label>

                            <label for= "AMBIENTAL" class="input-category in-line">
                                <input type="checkbox"
                                    class="filter filter-category"
                                    name="category" 
                                    value="AMBIENTAL"
                                    id= "AMBIENTAL">
                                </input>
                                <h4>AMBIENTAL</h4>
                            </label>

                            <label for= "AGRONOMIA" class="input-category in-line">
                                <input type="checkbox"
                                    class="filter filter-category"
                                    name="category"
                                    value="AGRONOMIA"
                                    id= "AGRONOMIA">
                                </input>
                                <h4>AGRONOMIA</h4>
                            </label>

                            <label for ="PSICOLOGIA" class="input-category in-line">
                                <input type="checkbox"
                                    class="filter filter-category"
                                    name="category"
                                    value="PSICOLOGIA"
                                    id= "PSICOLOGIA">
                                </input>
                                <h4>PSICOLOGIA</h4>
                            </label>

                            <label for= "CONTADURIA" class="input-category in-line">
                                <input type="checkbox"
                                    class="filter filter-category"
                                    name="category"
                                    value="CONTADURIA"
                                    id= "CONTADURIA">
                                </input>
                                <h4>CONTADURIA</h4>
                            </label>  
                            
                            <label for= "ADMINISTRACION" class="input-category in-line">
                                <input type="checkbox"
                                    class="filter filter-category"
                                    name="category"
                                    value="ADMINISTRACION"
                                    id= "ADMINISTRACION">
                                </input>
                                <h4>ADMINISTRACION</h4>
                            </label>

                            <label for= "OTROS" class="input-category in-line">
                                <input type="checkbox"
                                    class="filter filter-category"
                                    name="category"
                                    value="OTROS"
                                    id= "OTROS">
                                </input>
                                <h4>OTROS</h4>
                            </label>
                        </fieldset>
                <!-- fin Filtro categoria -->

                <!-- Inicio Filtro review -->

                    <fieldset class="filters-review-container">
                        <legend>
                            <h3 aria-label="Filtre los productos
                            por su cantidad de estrellas de una a cinco">
                            PUNTAJE
                            </h3>
                        <legend>

                        <div class="filters-review">
                            <label for="cinco" 
                                   class="input-review in-line">
                                <input type="checkbox"
                                    name="review"
                                    class="filter filter-review"
                                    value="5"
                                    id="cinco"
                                    aria-label="Cantidad de estrellas:">
                                <i class="fas fa-star"  aria-hidden="true"></i>
                                <i class="fas fa-star"  aria-hidden="true"></i>
                                <i class="fas fa-star"  aria-hidden="true"></i>
                                <i class="fas fa-star"  aria-hidden="true"></i>
                                <i class="fas fa-star"  aria-hidden="true"></i>
                                <h4>(5)</h4>
                                </input>
                            </label>

                            <label for="cuatro" 
                                   class="input-review in-line">
                                <input type="checkbox"
                                    name="review" 
                                    class="filter filter-review"
                                    value="4"
                                    id="cuatro"
                                    aria-label="Cantidad de estrellas:">
                                <i class="fas fa-star"  aria-hidden="true"></i>
                                <i class="fas fa-star"  aria-hidden="true"></i>
                                <i class="fas fa-star"  aria-hidden="true"></i>
                                <i class="fas fa-star"  aria-hidden="true"></i>
                                <i class="far fa-star"  aria-hidden="true"></i>
                                <h4>(4)</h4>
                                </input>
                            </label>

                            <label for= "tres"
                                   class="input-review in-line">
                                <input type="checkbox"
                                    name="review"
                                    class="filter filter-review"
                                    value="3"
                                    id="tres"
                                    aria-label="Cantidad de estrellas:">
                                <i class="fas fa-star"  aria-hidden="true"></i>
                                <i class="fas fa-star"  aria-hidden="true"></i>
                                <i class="fas fa-star"  aria-hidden="true"></i>
                                <i class="far fa-star"  aria-hidden="true"></i>
                                <i class="far fa-star"  aria-hidden="true"></i>
                                <h4>(3)</h4>
                                </input>
                            </label>

                            <label for="dos"
                                   class="input-review in-line">
                                <input type="checkbox"
                                    name="review"
                                    class="filter filter-review"
                                    value="2"
                                    id="dos"
                                    aria-label="Cantidad de estrellas:">
                                <i class="fas fa-star"  aria-hidden="true"></i>
                                <i class="fas fa-star"  aria-hidden="true"></i>
                                <i class="far fa-star"  aria-hidden="true"></i>
                                <i class="far fa-star"  aria-hidden="true"></i>
                                <i class="far fa-star"  aria-hidden="true"></i>
                                <h4>(2)</h4>
                                </input>
                            </label>

                            <label for="uno" class="input-review in-line">
                                <input type="checkbox"
                                    name="review"
                                    class="filter filter-review" 
                                    value="1"
                                    id="uno"
                                    aria-label="Cantidad de estrellas:">
                                <i class="fas fa-star"  aria-hidden="true"></i>
                                <i class="far fa-star"  aria-hidden="true"></i>
                                <i class="far fa-star"  aria-hidden="true"></i>
                                <i class="far fa-star"  aria-hidden="true"></i>
                                <i class="far fa-star"  aria-hidden="true"></i>
                                <h4>(1)</h>
                                    </input>
                            </label>
                        </fieldset>
                        <!-- Fin Filtro review -->
                    </div>
            </aside>
            <!-- ♪:;;;:♪:;;;:♪:;; Fin Filtros ;:♪:;;;:♪:;;;:♪:;;;: -->

            <!-- ♪:;;;:♪:;;;:♪:;; Inicio Catalogo de Productos ;:♪:;;;:♪:;;;:♪:;;;: -->

            <section class="products-container ">

                <!--  Inicia header de productos  -->
                <header class="products-header in-line theme-sky">
                    <div>
                        <p id="products-qty"
                           aria-live="polite">Mostrando 12 producto(s) de 12</p>
                    </div>
                    <div class="view-buttons-container in-line ">
                        <div>
                            <p aria-label="Modificar la vista de la lista de productos">
                                Ver como</p>
                        </div>
                        <div id="view-button-grid">
                            <button type="button">
                                <i class="fas fa-th"
                                   aria-hidden="true"
                                   title="Mosaico"></i>
                            </button>
                        </div>
                        <div id="view-button-list">
                            <button type="button">
                                <i class="fas fa-list" 
                                   aria-hidden="true"
                                   title="Lista"></i>
                            </button>
                        </div>
                    </div>
                    <button
                    type="button"
                    class="open-filters-btn button button-simple-empty is-hidden"
                    aria-label="Abrir filtros">
                    <i class="fas fa-filter" aria-hidden="true"></i>
                    <span class= "filter-text">Filtros</span>
                   </button>
                </header>
                <!--  fin header de productos  -->

                <!--  Inicia listado Productos  -->

                <div class="products-list in-grid">


                    <article class="product"
                             data-id="0"
                             data-name="Celular Xiaomi" 
                             data-category="AMBIENTAL"
                             data-price="22499"
                             data-image="img/humedad.jpg" 
                             data-review="3">

                        <div class="product-img-container in-line">
                            <img src="images/xiaomi.jpg"
                                 alt="Smartphone con Pantalla de 6.3 pulgadas
                                      color negro "
                                 class="product-img" />
                        </div>

                        <div class="product-content in-stack">
                            <h2 class="product-name">Celular Xiaomi</h2>
                            <p class="product-price"
                               aria-label="Precio:">
                               $ 22499</p>
                            <div class="review filters-review"
                                 aria-label= "Puntaje 5">
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="far fa-star" aria-hidden="true"></i>
                                <i class="far fa-star" aria-hidden="true"></i>
                            </div>
                            <div>
                                <button type="button"
                                        class="button button-simple-solid button-add-to-cart"
                                        id= "0">
                                        AÑADIR
                                </button>
                                                            
                            </div>
                        </div>
                        <div class="product-description is-hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Officiis quae quibusdam ad recusandae repellat aliquid delectus rem, provident,
                            exercitationem iste fugiat porro autem! Deserunt qui libero repudiandae, voluptates vitae
                            nihil.
                            Quisquam, architecto earum accusantium velit veniam pariatur eveniet deleniti fugit vero
                            quia quidem nesciunt minus dolore? Est, vero maiores. Saepe nam quibusdam ipsa non sit.
                            Voluptate quos delectus dolor nihil?
                            </div>
                    </article>

                    
                    <article class="product"
                             data-id="2" 
                             data-name="Cámara Nikon" 
                             data-category="SISTEMAS"
                             data-price="54999" 
                             data-image="images/nikon.jpg" data-review="2">
                        <div class="product-img-container in-line">
                            <img src="images/nikon.jpg"
                                 alt="Cámara reflex profesional. Dimensiones: 14.3 centímetros
                                  de ancho por 11.2 centímetros de alto y 8.3 centimetros de profundidad.
                                  Peso aproximado: 760 gramos. Color del producto: negro"
                                 class="product-img" />
                        </div>

                        <div class="product-content in-stack">
                            <h2 class="product-name">Cámara Nikon</h2>
                            <p class="product-price"
                               aria-label="Precio:">$ 54999</p>
                            <div class="review filters-review" aria-label= "Puntaje 2">
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="far fa-star" aria-hidden="true"></i>
                                <i class="far fa-star" aria-hidden="true"></i>
                                <i class="far fa-star" aria-hidden="true"></i>
                            </div>

                            <div>
                                <button type="button"
                                        class="button button-simple-solid button-add-to-cart"
                                        id= "2">
                                        AÑADIR
                                </button>
                            </div>
                        </div>
                        <div class="product-description is-hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Officiis quae quibusdam ad recusandae repellat aliquid delectus rem, provident,
                            exercitationem iste fugiat porro autem! Deserunt qui libero repudiandae, voluptates vitae
                            nihil.
                            Quisquam, architecto earum accusantium velit veniam pariatur eveniet deleniti fugit vero
                            quia quidem nesciunt minus dolore? Est, vero maiores. Saepe nam quibusdam ipsa non sit.
                            Voluptate quos delectus dolor nihil?
                            </div>
                    </article>
                    <article class="product"
                             data-id="3" 
                             data-name="Headphones Sony" 
                             data-category="AGRONOMIA"
                             data-price="24999" 
                             data-image="images/sony.png" data-review="3">
                        <div class="product-img-container in-line">
                            <img src="images/sony.png"
                                 alt="Auricular tipo vincha con almohadillas acolchadas.
                                 Color del producto: negro y metalizado"
                                 class="product-img" />
                        </div>

                        <div class="product-content in-stack">
                            <h2 class="product-name">Headphones Sony</h2>
                            <p class="product-price"
                               aria-label="Precio:">$ 24999</p>
                            <div class="review filters-review"
                                 aria-label= "Puntaje 3">
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="far fa-star" aria-hidden="true"></i>
                                <i class="far fa-star" aria-hidden="true"></i>
                            </div>

                            <div>
                                <button type="button" 
                                        class="button button-simple-solid button-add-to-cart"
                                        id= "3">
                                        AÑADIR
                                </button>
                            </div>
                        </div>
                        <div class="product-description is-hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Officiis quae quibusdam ad recusandae repellat aliquid delectus rem, provident,
                            exercitationem iste fugiat porro autem! Deserunt qui libero repudiandae, voluptates vitae
                            nihil.
                            Quisquam, architecto earum accusantium velit veniam pariatur eveniet deleniti fugit vero
                            quia quidem nesciunt minus dolore? Est, vero maiores. Saepe nam quibusdam ipsa non sit.
                            Voluptate quos delectus dolor nihil?
                            </div>
                    </article>
                    <article class="product"
                             data-id="4" 
                             data-name="Nintendo Switch" 
                             data-category="OTROS"
                             data-price="46999" 
                             data-image="images/switch.jpg" 
                             data-review="5">
                        <div class="product-img-container in-line">
                            <img src="images/switch.jpg"
                                 alt="Consola de dimensiones: 10 centimetros de alto
                                 23.8 centimetros de ancho y 1.4 centimetro de profundidad.
                                 Peso aproximado:300 gramos.
                                 color del producto: negro."
                                 class="product-img" />
                        </div>

                        <div class="product-content in-stack">
                            <h2 class="product-name">Nintendo Switch</h2>
                            <p class="product-price"
                               aria-label="Precio:">$ 46999</p>
                            <div class="review filters-review" 
                                 aria-label= "Puntaje 5">
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="fas fa-star" aria-hidden="true"></i>
                            </div>

                            <div>
                                <button type="button"
                                        class="button button-simple-solid button-add-to-cart"
                                        id= "4">
                                        AÑADIR
                                </button>
                            </div>
                            
                        </div>
                        <div class="product-description is-hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Officiis quae quibusdam ad recusandae repellat aliquid delectus rem, provident,
                            exercitationem iste fugiat porro autem! Deserunt qui libero repudiandae, voluptates vitae
                            nihil.
                            Quisquam, architecto earum accusantium velit veniam pariatur eveniet deleniti fugit vero
                            quia quidem nesciunt minus dolore? Est, vero maiores. Saepe nam quibusdam ipsa non sit.
                            Voluptate quos delectus dolor nihil?
                            </div>
                    </article>
                    <article class="product" 
                             data-id="5" 
                             data-name="Notebook Asus" 
                             data-category="ADMINISTRACION"
                             data-price="32999" 
                             data-image="img/arduino.jpg" 
                             data-review="1">
                        <div class="product-img-container in-line">
                            <img src="images/asus.png"
                                 alt="Notebook con pantalla de 14.6 pulgadas y
                                 teclado numerico incluído. Color del producto: negro"
                                 class="product-img" />
                        </div>

                        <div class="product-content in-stack">
                            <h2 class="product-name">Notebook Asus</h2>
                            <p class="product-price"
                               aria-label="Precio:">$ 32999</p>
                            <div class="review filters-review" aria-label= "Puntaje 1">
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="far fa-star" aria-hidden="true"></i>
                                <i class="far fa-star" aria-hidden="true"></i>
                                <i class="far fa-star" aria-hidden="true"></i>
                                <i class="far fa-star" aria-hidden="true"></i>
                            </div>

                            <div>
                                <button type="button"
                                        class="button button-simple-solid button-add-to-cart"
                                        id= "5">
                                        AÑADIR
                                </button>
                            </div>
                            
                        </div>
                        <div class="product-description is-hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Officiis quae quibusdam ad recusandae repellat aliquid delectus rem, provident,
                            exercitationem iste fugiat porro autem! Deserunt qui libero repudiandae, voluptates vitae
                            nihil.
                            Quisquam, architecto earum accusantium velit veniam pariatur eveniet deleniti fugit vero
                            quia quidem nesciunt minus dolore? Est, vero maiores. Saepe nam quibusdam ipsa non sit.
                            Voluptate quos delectus dolor nihil?
                            </div>
                    </article>
                    <article class="product"
                             data-id="6" 
                             data-name="Notebook MSI" 
                             data-category="CONTADURIA"
                             data-price="37999" 
                             data-image="images/msi.png" 
                             data-review="3">
                        <div class="product-img-container in-line">
                            <img src="images/msi.png"
                                 alt="Notebook gamer con pantalla de 17 pulgadas.
                                 Color del producto: negro y rojo"
                                 class="product-img" />
                        </div>

                        <div class="product-content in-stack">
                            <h2 class="product-name">Notebook MSI</h2>
                            <p class="product-price"
                               aria-label="Precio:">$ 37999</p>
                            <div class="review filters-review"
                                 aria-label= "Puntaje 3">
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="far fa-star" aria-hidden="true"></i>
                                <i class="far fa-star" aria-hidden="true"></i>
                            </div>

                            <div>
                                <button type="button"
                                        class="button button-simple-solid button-add-to-cart"
                                        id= "6">
                                        AÑADIR
                                </button>
                            </div>
                        </div>
                        <div class="product-description is-hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Officiis quae quibusdam ad recusandae repellat aliquid delectus rem, provident,
                            exercitationem iste fugiat porro autem! Deserunt qui libero repudiandae, voluptates vitae
                            nihil.
                            Quisquam, architecto earum accusantium velit veniam pariatur eveniet deleniti fugit vero
                            quia quidem nesciunt minus dolore? Est, vero maiores. Saepe nam quibusdam ipsa non sit.
                            Voluptate quos delectus dolor nihil?
                            </div>
                    </article>
                    <article class="product" 
                             data-id="7" 
                             data-name="Headphones Philips"
                             data-category="ADMINISTRACION" 
                             data-price="11999" 
                             data-image="images/headphones.png"
                             data-review="2">
                        <div class="product-img-container in-line">
                            <img src="images/headphones.png"
                                 alt="Auricular tipo vincha con almohadillas acolchadas.
                                 Color del producto: negro."
                                 class="product-img" />
                        </div>

                        <div class="product-content in-stack">
                            <h2 class="product-name">Headphones Philips</h2>
                            <p class="product-price"
                               aria-label="Precio:">$ 11999</p>
                            <div class="review filters-review"
                                 aria-label= "Puntaje 2">
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="far fa-star" aria-hidden="true"></i>
                                <i class="far fa-star" aria-hidden="true"></i>
                                <i class="far fa-star" aria-hidden="true"></i>
                            </div>

                            <div>
                                <button type="button"
                                        class="button button-simple-solid button-add-to-cart"
                                        id= "7">
                                        AÑADIR
                                </button>
                            </div>
                        </div>
                        <div class="product-description is-hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Officiis quae quibusdam ad recusandae repellat aliquid delectus rem, provident,
                            exercitationem iste fugiat porro autem! Deserunt qui libero repudiandae, voluptates vitae
                            nihil.
                            Quisquam, architecto earum accusantium velit veniam pariatur eveniet deleniti fugit vero
                            quia quidem nesciunt minus dolore? Est, vero maiores. Saepe nam quibusdam ipsa non sit.
                            Voluptate quos delectus dolor nihil?
                            </div>
                    </article>
                    <article class="product" 
                             data-id="8" 
                             data-name="Macbook" 
                             data-category="OTROS"
                             data-price="119999" 
                             data-image="images/macbook.png" data-review="4">
                        <div class="product-img-container in-line">
                            <img src="images/macbook.png"
                                 alt="Notebook con pantalla de 15 pulgadas.
                                 Peso aproximado: 300 gramos.
                                 Color del producto: negro."
                                 class="product-img" />
                        </div>

                        <div class="product-content in-stack">
                            <h2 class="product-name">Macbook</h2>
                            <p class="product-price"
                               aria-label="Precio:">$ 119999</p>
                            <div class="review filters-review"
                                 aria-label= "Puntaje 4">
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="far fa-star" aria-hidden="true"></i>
                            </div>

                            <div>
                                <button type="button"
                                        class="button button-simple-solid button-add-to-cart"
                                        id= "8">
                                        AÑADIR
                                </button>
                            </div>
                        </div>
                        <div class="product-description is-hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Officiis quae quibusdam ad recusandae repellat aliquid delectus rem, provident,
                            exercitationem iste fugiat porro autem! Deserunt qui libero repudiandae, voluptates vitae
                            nihil.
                            Quisquam, architecto earum accusantium velit veniam pariatur eveniet deleniti fugit vero
                            quia quidem nesciunt minus dolore? Est, vero maiores. Saepe nam quibusdam ipsa non sit.
                            Voluptate quos delectus dolor nihil?
                            </div>
                    </article>
                    <article class="product" 
                             data-id="9" 
                             data-name="iPhone" 
                             data-category="SISTEMAS"
                             data-price="79999" 
                             data-image="images/iphone.jpeg" data-review="3">
                        <div class="product-img-container in-line">
                            <img src="images/iphone.jpeg"
                                 alt="Smartphonde con pantalla de 4.7 pulgadas,
                                 con cristal ultra resistente. Color del producto:
                                 blanco. "
                                 class="product-img" />
                        </div>

                        <div class="product-content in-stack">
                            <h2 class="product-name">iPhone</h2>
                            <p class="product-price"
                               aria-label="Precio:">$ 79999</p>
                            <div class="review filters-review"
                                 aria-label= "Puntaje 3">
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="far fa-star" aria-hidden="true"></i>
                                <i class="far fa-star" aria-hidden="true"></i>
                            </div>

                            <div>
                                <button type="button"
                                        class="button button-simple-solid button-add-to-cart"
                                        id= "9">
                                        AÑADIR
                                </button>
                            </div>
                        </div>
                        <div class="product-description is-hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Officiis quae quibusdam ad recusandae repellat aliquid delectus rem, provident,
                            exercitationem iste fugiat porro autem! Deserunt qui libero repudiandae, voluptates vitae
                            nihil.
                            Quisquam, architecto earum accusantium velit veniam pariatur eveniet deleniti fugit vero
                            quia quidem nesciunt minus dolore? Est, vero maiores. Saepe nam quibusdam ipsa non sit.
                            Voluptate quos delectus dolor nihil?
                            </div>
                    </article>
                    <article class="product" 
                             data-id="10" 
                             data-name="Xbox One" 
                             data-category="PSICOLOGIA"
                             data-price="69999" 
                             data-image="images/xbox.jpg" 
                             data-review="4">
                        <div class="product-img-container in-line">
                            <img src="images/xbox.jpg"
                                 alt="Consola de dimensiones: 15 centimetros de alto
                                 23.8 centimetros de ancho y 1.8 centimetro de profundidad.
                                 Peso aproximado:380 gramos.
                                 color del producto: blanco." 
                                 class="product-img" />
                        </div>

                        <div class="product-content in-stack">
                            <h2 class="product-name">Xbox One</h2>
                            <p class="product-price"
                               aria-label="Precio:">$ 69999</p>
                            <div class="review filters-review"
                                 aria-label= "Puntaje 4">
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="far fa-star" aria-hidden="true"></i>
                            </div>

                            <div>
                                <button type="button"
                                        class="button button-simple-solid button-add-to-cart"
                                        id= "10">
                                        AÑADIR
                                </button>
                            </div>
                        </div>
                        <div class="product-description is-hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Officiis quae quibusdam ad recusandae repellat aliquid delectus rem, provident,
                            exercitationem iste fugiat porro autem! Deserunt qui libero repudiandae, voluptates vitae
                            nihil.
                            Quisquam, architecto earum accusantium velit veniam pariatur eveniet deleniti fugit vero
                            quia quidem nesciunt minus dolore? Est, vero maiores. Saepe nam quibusdam ipsa non sit.
                            Voluptate quos delectus dolor nihil?
                            </div>
                    </article>
                    <article class="product" 
                             data-id="11" 
                             data-name="Mouse Gamer" 
                             data-category="SISTEMAS"
                             data-price="4999" 
                             data-image="images/mouse.jpg" data-review="5">
                        <div class="product-img-container in-line">
                            <img src="images/mouse.jpg" 
                                 alt="Mouse ergonómico, con luces led rojas
                                 y azules. Peso aproximado: 50 gramos.
                                 Color del producto: negro." 
                                 class="product-img" />
                        </div>

                        <div class="product-content in-stack">
                            <h2 class="product-name">Mouse Gamer</h2>
                            <p class="product-price"
                               aria-label="Precio:">$ 4999</p>
                            <div class="review filters-review"
                                 aria-label= "Puntaje 5">
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="fas fa-star" aria-hidden="true"></i>
                            </div>

                            <div>
                                <button type="button" class="button button-simple-solid button-add-to-cart"
                                id= "11">
                                    AÑADIR
                                </button>
                            </div>
                        </div>
                        <div class="product-description is-hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Officiis quae quibusdam ad recusandae repellat aliquid delectus rem, provident,
                            exercitationem iste fugiat porro autem! Deserunt qui libero repudiandae, voluptates vitae
                            nihil.
                            Quisquam, architecto earum accusantium velit veniam pariatur eveniet deleniti fugit vero
                            quia quidem nesciunt minus dolore? Est, vero maiores. Saepe nam quibusdam ipsa non sit.
                            Voluptate quos delectus dolor nihil?
                            </div>
                    </article>
                    <article class="product" 
                             data-id="1" 
                             data-name="PlayStation 4" 
                             data-category="PSICOLOGIA"
                             data-price="59999" 
                             data-image="images/ps4.jpg" 
                             data-review="5">

                        <div class="product-img-container in-line">
                            <img src="images/ps4.jpg"
                                 alt="Consola de videojuegos de tamaño: 35cm de alto
                                 y 25 de ancho, que puede colocarse en posición vertical
                                 que termina en forma de dos aletas en la parte superior.
                                 El interior del cuerpo está iluminado con una luz azul 
                                 y tiene dos joystick. Color del producto: blanco" 
                                 class="product-img" />
                        </div>

                        <div class="product-content in-stack">
                            <h2 class="product-name">PS4</h2>
                            <p class="product-price"
                               aria-label="Precio:">$ 800000</p>
                            <div class="review filters-review" 
                                 aria-label= "Puntaje 5">
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="fas fa-star" aria-hidden="true"></i>
                            </div>

                            <div>
                                <button type="button"
                                        class="button button-simple-solid  button-add-to-cart"
                                        id= "1">
                                        AÑADIR
                                </button>
                            </div>
                        </div>
                        <div class="product-description is-hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Officiis quae quibusdam ad recusandae repellat aliquid delectus rem, provident,
                            exercitationem iste fugiat porro autem! Deserunt qui libero repudiandae, voluptates vitae
                            nihil.
                            Quisquam, architecto earum accusantium velit veniam pariatur eveniet deleniti fugit vero
                            quia quidem nesciunt minus dolore? Est, vero maiores. Saepe nam quibusdam ipsa non sit.
                            Voluptate quos delectus dolor nihil?
                            </div>
                    </article>
                    <!--  fin listado Productos  -->
            </section>

    </main>

    <!--  ★´･ｪ･`★´･ｪ･`★´･ｪ･`★´･ｪ･ FIN CATALOGO ★´･ｪ･`★´･ｪ･`★´･ｪ･`★´･ｪ･`★´ -->



    <!--  ★´･ｪ･`★´･ｪ･`★´･ｪ･`★´･ｪ･ INICIO FOOTER ★´･ｪ･`★´･ｪ･`★´･ｪ･`★´･ｪ･`★´ -->
    <footer class="footer-main in-line theme-sky-dark">
        <div class="logo-container in-line">
            <img src="img/logo.png" 
                
                 class="logo" />
            
        </div>
    </footer>
    <!--  ★´･ｪ･`★´･ｪ･`★´･ｪ･`★´･ｪ･ FIN FOOTER★´･ｪ･`★´･ｪ･`★´･ｪ･`★´･ｪ･`★´ -->

    <!--  ★´･ｪ･`★´･ｪ･`★´･ｪ･`★´･ｪ･`★´  INICIO MENU CARRITO ★´･ｪ･`★´･ｪ･`★´･ｪ･`★´･ｪ･`★´ -->

    <div class="header-menu-add-to-card theme-sky-dark menu-add-to-card-hidde is-hidden ">
        <div class="cart-container in-stack">
            <div class="cart-title-container in-line">
                <h2>CARRITO</h2>
                <button type="button" class="btn-close">
                    <i class="far fa-window-close"></i>
                </button>
            </div>
            <div class= "cart-full"> 
                <div class="in-line">
                <p><span class="cart-qty">0</span> producto(s) agregado(s)</p>
            </div>
            <div class="cart-products-added">

            </div>
            <div class="subtotal-container in-line">
                <p> Subtotal $ <span class="cart-subtotal-value">0</span></p>
            </div>
            <div class=" add-to-card-buttons in-stack">
                <button type="button" class="btn-buy  in-line button
                button-simple-solid-reverse">
                    AÑADIR
                </button>
                
                <button type="button" class="btn-empty-cart in-line button
                button-simple-empty ">
                    VACIAR
                </button>   
            </div>     
        </div>
        <!--  MENSAGE DE CARRITO VACÍO -->
            <div class="cart-empty is-hidden">
                <p class="cart-empty-msg ">
                    No tienes productos en el carrito, ¡Agrega algunos!
                </p>
            </div>      
        </div>
    </div>
    <!--  ★´･ｪ･`★´･ｪ･`★´･ｪ･`★´･ｪ･`★´  FIN MENU CARRITO ★´･ｪ･`★´･ｪ･`★´･ｪ･`★´･ｪ･`★´ -->

    <!--  ★´･ｪ･`★´･ｪ･`★´･ｪ･`★´･ｪ･`★´  INICIO CONFIRMACION DE COMPRA★´･ｪ･`★´･ｪ･`★´･ｪ･`★´･ｪ･`★´ -->
    <div class="menu-checkout in-stack is-hidden">
        <h2 class="checkout-title">Checkout</h2>
        <div class= "checkout-container in-line">
            <div class= "form-container">
                <form>
                    <fieldset class="checkout-info in-stack">             
                        <div class="checkout-personal-info">
                            <legend class="info-title">Datos Personales</legend>
                            <div class="checkout-personal-info-inputs ">
                                <label for= "nameAndSurname">
                                    Nombre y apellido *
                                    <input type="text" 
                                        
                                        name="Nombre y Apellido" required 
                                        id="nameAndSurname" />
                                </label>
                                <label for="email">
                                    Email *
                                    <input type="email" 
                                        placeholder="p. ej.: ada.lovelace@gmail.com" required
                                        id="email" />
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <!-- *** [ Comiezo Opciones de Pago ] *** -->
                    <fieldset class="checkout-payment in-stack">
                        <div class="checkout-section-container in-stack">
                            <legend class="info-title">Opciones de pago</legend>
                            <label for="cash-debit">
                                <input type="radio" 
                                       class= "pay-option"
                                       name="payment" 
                                       value="cash-debit" 
                                       checked 
                                       id="cash-debit"/>
                                       Efectivo 
                                </input>
                            </label>
                    
                            <label for="discount">
                                <input type="checkbox" 
                                       class= "pay-option"
                                       name="discount" 
                                       id="discount"/> 
                                       pago electronico
                            </label>
                        </div>
                    </fieldset>
                </form>
            </div>
            <!-- *** [ Fin Opciones de Pago ] *** -->

            <!-- *** [ Comienzo Subtotales ] *** -->
            <div class="cart-totals in-stack">
                <h3 class="info-title">Resumen</h3>
                <div>
                    <p class="cart-subtotal">
                        Subtotal $ <span class="cart-subtotal-value">0</span>
                    </p>
                    <p class="cart-tax is-hidden">
                        Recargo $<span class="cart-tax-value">0</span>
                    </p>
                    <p class="cart-discount is-hidden">
                        Descuento 10% $<span class="cart-discount-value">0</span>
                    </p>
                    <p class="cart-delivery is-hidden">
                        Envío $<span class="cart-delivery-value">0</span>
                    </p>
                    <p class="cart-total">
                        Total: $ <span class="cart-total-value">0</span>
                    </p>
                </div>
            </div>
        </div>
        <!-- *** [ Fin Subtotales ] *** -->

        <footer class="footer-checkout in-line">
            <button type="button" class="btn-cancel-buy button button-simple-solid">
                Seguir comprando
            </button>
            <button type="button" class="btn-finish-buy button button-simple-solid-reverse">
                Finalizar
            </button>
        </footer>
    </div>

    <!--  ★´･ｪ･`★´･ｪ･`★´･ｪ･`★´･ｪ･`★´  FIN CONFIRMACION DE COMPRA ★´･ｪ･`★´･ｪ･`★´･ｪ･`★´･ｪ･`★´ -->

    <!--  ★´･ｪ･`★´･ｪ･`★´･ｪ･`★´･ｪ･`★´  INICIO MODAL VACIAR CARRITO ★´･ｪ･`★´･ｪ･`★´･ｪ･`★´･ｪ･`★´ -->
    
    <div class="modal-empty-cart in-stack is-hidden"  
         aria-role="dialog"
         aria-modal="true"
         aria-describedby="empty-cart-description"
         aria-hidden="true">

        <p class="modal-message" id="empty-cart-description">
            Estás por vaciar el carrito, ¿quieres continuar?
        </p>
        <footer class="modal-btn-container">
            <button type="button" class="button button-simple-solid-reverse cancel-empty-cart-btn">
                Cancelar
            </button>
            <button type="button" class="button button-simple-solid confirm-cart-empty-btn">
                Vaciar
            </button>
        </footer>
    </div>
    <div class="overlay is-hidden" id="overlay"></div>
        <!--  ★´･ｪ･`★´･ｪ･`★´･ｪ･`★´･ｪ･`★´ FIN MODAL VACIAR CARRITO ★´･ｪ･`★´･ｪ･`★´･ｪ･`★´･ｪ･`★´ -->
        <script src="js/index.js"></script>

</body>

</html>