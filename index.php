<?php

    
    session_start();

    if(isset($_SESSION['user'])){
        header("location: TrainOfTrainers.php");
    }
//cambio para git...
?> 

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AVA Draft</title>
    <!-- load CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                  <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="fontawesome/css/fontawesome-all.min.css">                <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>                       <!-- http://kenwheeler.github.io/slick/ -->
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" href="css/tooplate-style.css">                               <!-- Templatemo style -->

    <script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this in a modern browser such as latest version of Chrome or Microsoft Edge.");</script>
    
</head>

<body>
    <div id="tm-bg"></div>
    <div id="tm-wrap">
        <div class="tm-main-content">
            <div class="container tm-site-header-container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6 col-md-col-xl-6 mb-md-0 mb-sm-4 mb-4 tm-site-header-col">
                        <div class="tm-site-header">
                            <h1 class="mb-4">Ava Draft</h1>
                            <img src="img/underline.png" class="img-fluid mb-4">
                            <h3>Certificación y entrenamiento en manuales de atributos para inspección en línea</h3>        
                        </div>                        
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="content">
                            <div class="grid">
                                <div class="grid__item" id="home-link">
                                    <div class="product">
                                        <div class="tm-nav-link">
                                            <i class="fas fa-home fa-3x tm-nav-icon"></i>
                                            <span class="tm-nav-text">Train Of Trainers</span>
                                            <div class="product__bg"></div>        
                                        </div>                                    
                                        <div class="product__description">
                                            <div class="col-12">
                                                <h2 class="tm-page-title">Bienvenido al Train Of Trainers</h2>
                                                <p></p>
                                                <h3 class="tm-page-subtitle">Ingrese su usuario y contraseña para continuar</h3>  
                                                <p></p>      
                                            </div>
                                            <form action="php/login_admin_be.php" method="POST" class="login-form" id="formulario">
                                                <div class="form-group" id="grupo usuario">
                                                    <div class="formulario__grupo-input">
                                                        <input type="user" class="login-username" name="Usuario" id ="Usuario" autofocus="true" required="true" placeholder="Usuario" />
                                                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                                    </div>
                                                    <p class="formulario__input-error">No puede contener numeros el usuario</p>
                                                </div>

                                                <div class="form-group" id="grupo password">
                                                    <div class="formulario__grupo-input">
                                                        <input type="password" class="login-password" name="password" id="password" required="true" placeholder="Contraseña" />
                                                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                                    </div>
                                                    <p class="formulario__input-error">Contraseña maxima de 10 digitos.</p>
                                                </div>

                                                <div class="formulario__mensaje" id="formulario__mensaje">
                                                    <p><i class="fas fa-exclamation-circle"></i> <b>Error: </b> Rellene los campos vacios.</p>
                                                </div>

                                                <input type="submit" name="Login" value="Ingresar" class="login-submit" />

                                            </form>

                                        </div>
                                    </div>
                                </div>

                                <div class="grid__item" id="team-link">
                                    <div class="product">
                                        <div class="tm-nav-link">
                                            <i class="fas fa-users fa-3x tm-nav-icon"></i>
                                            <span class="tm-nav-text">Inspector</span>
                                            <div class="product__bg"></div>            
                                        </div>                                     
                                        <div class="product__description">
                                            <div class="p-sm-4 p-2">
                                                <div class="row mb-3">
                                                    <div class="col-12">
                                                        <h2 class="tm-page-title">Bienvenido a la evaluación de Inspector</h2>        
                                                    </div>
                                                </div>
                                                <form action="php/login_user_be.php" method="POST" class="login-form" id="formulario">
                                                    <div class="form-group" id="grupo usuario">
                                                        <div class="formulario__grupo-input">
                                                            <input type="user" class="login-username" name="Usuario" id ="Usuario" autofocus="true" required="true" placeholder="Usuario" />
                                                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                                        </div>
                                                        <p class="formulario__input-error">No puede contener numeros el usuario</p>
                                                    </div>
    
                                                    <div class="form-group" id="grupo password">
                                                        <div class="formulario__grupo-input">
                                                            <input type="password" class="login-password" name="password" id="password" required="true" placeholder="Contraseña" />
                                                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                                        </div>
                                                        <p class="formulario__input-error">Contraseña maxima de 10 digitos.</p>
                                                    </div>
    
                                                    <div class="formulario__mensaje" id="formulario__mensaje">
                                                        <p><i class="fas fa-exclamation-circle"></i> <b>Error: </b> Rellene los campos vacios.</p>
                                                    </div>

                                                    <p>Area de entrenamiento y certificación: </p>
                                                    <select name="Course" id="Course" method="POST" class="select" required="true">
                                                        <option value="AFC">AFC</option>
                                                        <option value="BCC">BCC</option>
                                                        <option value="BCC CD PANT">BCC CD PANT</option>
                                                    </select>
    
                                                    <input type="submit" name="Login" value="Ingresar" class="login-submit" />
    
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid__item">
                                    <div class="product">
                                        <div class="tm-nav-link">
                                            <i class="fas fa-handshake fa-3x tm-nav-icon"></i>
                                            <span class="tm-nav-text">Operador</span>
                                            <div class="product__bg"></div>             
                                        </div>                                                                 
                                        <div class="product__description">
                                            <div class="p-sm-4 p-2">
                                                <div class="row mb-3">
                                                    <div class="col-12">
                                                        <h2 class="tm-page-title">Bienvenido a la evaluación de Operador</h2>        
                                                    </div>
                                                </div>
                                                <form action="php/login_user_be.php" method="POST" class="login-form" id="formulario">
                                                    <div class="form-group" id="grupo usuario">
                                                        <div class="formulario__grupo-input">
                                                            <input type="user" class="login-username" name="Usuario" id ="Usuario" autofocus="true" required="true" placeholder="Usuario" />
                                                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                                        </div>
                                                        <p class="formulario__input-error">No puede contener numeros el usuario</p>
                                                    </div>
    
                                                    <div class="form-group" id="grupo password">
                                                        <div class="formulario__grupo-input">
                                                            <input type="password" class="login-password" name="password" id="password" required="true" placeholder="Contraseña" />
                                                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                                        </div>
                                                        <p class="formulario__input-error">Contraseña maxima de 10 digitos.</p>
                                                    </div>
    
                                                    <div class="formulario__mensaje" id="formulario__mensaje">
                                                        <p><i class="fas fa-exclamation-circle"></i> <b>Error: </b> Rellene los campos vacios.</p>
                                                    </div>

                                                    <p>Area de entrenamiento y certificación: </p>
                                                    <select name="Cursos" id="Course" class="select" required="true">
                                                        <option value="AFC">AFC</option>
                                                        <option value="BCC">BCC</option>
                                                        <option value="BCC CD PANT">BCC CD PANT</option>
                                                    </select>
    
                                                    <input type="submit" name="Login" value="Ingresar" class="login-submit" />
    
                                                </form>

                                            </div>
                                        </div>       
                                    </div>
                                </div>

                                <div class="grid__item">
                                    <div class="product">
                                        <div class="tm-nav-link">
                                            <i class="fas fa-comments fa-3x tm-nav-icon"></i>
                                            <span class="tm-nav-text">Contact</span>
                                            <div class="product__bg"></div>             
                                        </div>                                                              
                                        <div class="product__description">
                                            <div class="pt-sm-4 pb-sm-4 pl-sm-5 pr-sm-5 pt-2 pb-2 pl-3 pr-3">
                                                <div class="row mb-3">
                                                    <div class="col-12">
                                                        <h2 class="tm-page-title">Contact Us</h2>        
                                                    </div>
                                                </div>
                                                <div class="row mb-4">
                                                    <div class="col-12">
                                                        <p>Lorem ipsum dolor site amet, consectetur adipiscing elit. Aliquam interdum, nisl sed faucibus tempor, massa velit laoreet ipsum, et faucibus sapien magna at enim. Suspendisse a dictum tortor, vel rhoncus libero.</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <form action="index.html" method="post" class="contact-form">
                                                            <div class="row">
                                                                <div class="form-group col-md-6 col-lg-6 col-xl-6">
                                                                  <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name"  required/>
                                                                </div>
                                                                <div class="form-group col-md-6 col-lg-6 col-xl-6 tm-col-email">
                                                                  <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email"  required/>
                                                                </div>
                                                            </div>                                                        
                                                            <div class="form-group">
                                                              <textarea id="contact_message" name="contact_message" class="form-control" rows="9" placeholder="Message" required></textarea>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary tm-btn-submit">Submit</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>                                            
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>                       
                    </div>
                </div>                
            </div>
            <footer>
                <p class="small tm-copyright-text">Copyright &copy; <span class="tm-current-year">2021</span> AVA Draft</p>
            </footer>
        </div> <!-- .tm-main-content -->  
    </div>
    <!-- load JS -->
    <script src="js/jquery-3.2.1.slim.min.js"></script>         <!-- https://jquery.com/ -->    
    <script src="slick/slick.min.js"></script>                  <!-- http://kenwheeler.github.io/slick/ -->  
    <script src="js/anime.min.js"></script>                     <!-- http://animejs.com/ -->
    <script src="js/main.js"></script>
    <script src="js/formulario.js"></script>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>  

    <script>      

        function setupFooter() {
            var pageHeight = $('.tm-site-header-container').height() + $('footer').height() + 100;

            var main = $('.tm-main-content');

            if($(window).height() < pageHeight) {
                main.addClass('tm-footer-relative');
            }
            else {
                main.removeClass('tm-footer-relative');   
            }
        }

        /* DOM is ready
        ------------------------------------------------*/
        $(function(){

            setupFooter();

            $(window).resize(function(){
                setupFooter();
            });

            $('.tm-current-year').text(new Date().getFullYear());  // Update year in copyright           
        });

    </script>             

</body>
</html>