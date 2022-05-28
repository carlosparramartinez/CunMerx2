<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Register </title>
   
    <link rel="stylesheet" href="css/estiloinicio.css">

</head>
<body>
  
        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para acceder a la pagina</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                  
                   <form action="php/login_usuario.php" method="post" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" placeholder="Usuario" name="usuario" required="required">
                        <input type="password" placeholder="Contraseña" name="contrasena" required="required">
                        <button>Entrar</button><br />
                        <br />
                        <span class="text-footer">Recuperar contraseña
                            <a href="./php/index_rec.php">Recuperar</a>
                        </span>
                    </form>
                 


                    <!--Register-->
                    <form action="php/registro_usuario_bd.php" method="post" class="formulario__register">
                       
                        <h2>Regístrarse</h2>
                        <input type="text" placeholder="Nombre " name="nombre" required="required" >
                        <input type="email" placeholder="Correo Electronico" name="correo"required="required">
                        <input type="text" placeholder="Usuario " name="usuario"required="required"> 
                        <input type="password" placeholder="Contraseña" name="contrasena"required="required">
                        <button>Regístrarse </button>
                    
                       
                    </form>
                </div>
              
               
            </div>

        </main>
    
        <script src="js/script.js"></script>
</body>
</html>