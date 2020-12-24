<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v4.12.3, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.12.3, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="../../../assets/images/kampepen.jpg" type="image/x-icon">
  <meta name="description" content="Web Builder Description">
  
  
  <title>ubicacion</title>
  <link rel="stylesheet" href="../../../assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="../../../assets/facebook-plugin/style.css">
  <link rel="stylesheet" href="../../../assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../../assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="../../../assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="../../../assets/tether/tether.min.css">
  <link rel="stylesheet" href="../../../assets/socicon/css/styles.css">
  <link rel="stylesheet" href="../../../assets/animatecss/animate.min.css">
  <link rel="stylesheet" href="../../../assets/dropdown/css/style.css">
  <link rel="stylesheet" href="../../../assets/theme/css/style.css">
  <link rel="preload" as="style" href="../../../assets/mobirise/css/mbr-additional.css">
  <link rel="stylesheet" href="../../../assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
  <section class="menu cid-qTkzRZLJNu" once="menu" id="menu1-h">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="../../../Main_app/Admin/admin.php">
                         <img src="../../../assets/images/kampepen.jpg" alt="Kampepen" title="Logo" style="height: 3.8rem;">
                    </a>
                </span>
                
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
        <li class="nav-item">
                    <a class="nav-link link text-danger display-4" href="../../../inicio.php"><span class="mbri-home mbr-iconfont mbr-iconfont-btn" style="font-size: 25px;"></span>
                        Inicio</a>
                </li>
                <li class="nav-item">
                <a class="nav-link link text-danger display-4" href="../../../Main_app/Admin/proyectos.php"><span class="mbri-briefcase mbr-iconfont mbr-iconfont-btn" style="font-size: 25px;"></span>
                        Proyectos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-danger display-4" href="../../../Main_app/Admin/ubicaciones.php"><span class="mbri-delivery mbr-iconfont mbr-iconfont-btn" style="font-size: 35px;"></span>
                        Contactos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-danger display-4" href="../../../Main_app/Admin/productos.php"><span class="mbri-shopping-bag mbr-iconfont mbr-iconfont-btn" style="font-size: 25px;"></span>
                    Productos</a>   
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-danger display-4" href="../../../index.php"><span class="mbri-users mbr-iconfont mbr-iconfont-btn" style="font-size: 25px;"></span>
                    Cerrar</a>
                </li>
                
        </ul>
            
        </div>
    </nav>
</section>

<section class="engine"><a href="https://mobirise.info/w">free html5 templates</a></section><section class="mbr-section contacts1 cid-rYllJmgZXi mbr-parallax-background" id="contacts1-i">
    <!---->
    
    <!---->
    <!--Overlay-->
    <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(239, 239, 239);">
    </div>
    <!--Container-->
    <div class="container">
        <div class="row">
            <!--Titles-->

            <div class="title col-12">
                <h2 class="align-left mbr-fonts-style display-1">
                    Nuestro Contactos</h2> 
                    <?php
                    include("../../../conexiones/cone_ubicaciones.php");
                    $seleccionar = "SELECT * FROM lugar";
                    $guardar = $conexion -> query($seleccionar);
                    $ver = $guardar -> fetch_assoc();
                    ?>
                <form action="../../../assets/basedatos/ubicaciones/guar_ubi.php" method="post">
                <h3 class="align-left mbr-fonts-style m-0 display-5">
                Escribe aqui el nombre del lugar <br>
                <input type="text" name="nombreubi" id="nombreubi" required autocomplete="off" >
                
                </h3>
            </div>
            <!--Left-->
            <div class="col-12 col-md-6">
                <div class="left-block wrapper">
                    <div class="b b-adress">
                        <h5 class="align-left mbr-fonts-style m-0 display-5">Escribe aqui la dirección: <br>
                        </h5>
                        <p class="mbr-text align-left mbr-fonts-style display-7">
                        <input type="text" name="direubi" id="direubi" required autocomplete="off">
                        </p>
                    </div>
                    <div class="b b-phone">
                        <h5 class="align-left mbr-fonts-style m-0 display-5">
                            Escribe aqui el numero telefonico:
                        </h5>
                        <p class="mbr-text align-left mbr-fonts-style display-7">
                            <input type="tel" name="teleubi" id="teleubi" required autocomplete="off">
                        </p>
                    </div>
                    <div class="b b-mail">
                        <h5 class="align-left mbr-fonts-style m-0 display-5">
                            Escribe aqui el correo electronico:
                        </h5>
                        <p class="mbr-text align-left mbr-fonts-style display-7">
                        <input type="email" name="correubi" id="correubi" required autocomplete="off">
                        </p>
                    </div>
                </div>
            </div>
            <!--Right-->
            <!--Aqui Editas-->

            <div class="col-12 col-md-6">
                <div class="google-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14916.286081238723!2d-89.65782803403425!3d20.828818215306402!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f566c4304dc84a3%3A0x185e3ced44b94e1c!2sKampepen%2C%20Yuc.!5e0!3m2!1ses!2smx!4v1588890732253!5m2!1ses!2smx" allowfullscreen=""></iframe></div>
                <br>
                <div>Escribe aqui la ubicacion:</div>
                <textarea class="form-control" id="exampleFormControlTextarea1" required rows="3" name="ubi"></textarea>
            </div>

            <input type="submit" value="Agregar ubicación" class="btn btn-outline-primary">
            </form>

            <?php
                    
            ?>
            <!--Aqui Termina-->
            
        </div>
    </div>
</section>

<section class="cid-rYlBmFPleK mbr-reveal" id="footer1-z">

    
    

    <div class="container">
        <div class="media-container-row content text-white">
            <div class="col-12 col-md-3">
                <div class="media-wrap">
                    <a href="inicio.php">
                        <img src="../../../assets/images/kampepen.ico" alt="Kampepen" title="" style="height: 20rem;">
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">Dirección</h5>
                <p class="mbr-text">
                    1234 Street Name
                    <br>City, AA 99999
                </p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">Contactos</h5>
                <p class="mbr-text">Correo: kampepen.s@gmail.com &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br>Phone: +1 (0) 000 0000 001
<br></p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Links
                </h5>
                <p class="mbr-text">Instagram: kampepenofficial&nbsp;<br>Facebook:<br>kampepen<br></p>
            </div>
        </div>
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-sm-12">
                    <hr>
                </div>
            </div>
            <div class="media-container-row mbr-white">
                <div class="col-sm-6 copyright">
                    <p class="mbr-text mbr-fonts-style display-7">
                        © Copyright 2020 Kampepen.</p>
                </div>
                <div class="col-md-6">
                    <div class="social-list align-right">
                        <div class="soc-item">
                            <a href="https://twitter.com/mobirise" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-facebook socicon" style="color: rgb(15, 118, 153); fill: rgb(15, 118, 153); font-size: 40px;"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.facebook.com/kampepen" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-whatsapp socicon" style="color: rgb(51, 185, 55); fill: rgb(51, 185, 55); font-size: 40px;"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.youtube.com/c/mobirise" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-instagram socicon" style="color: rgb(255, 127, 159); fill: rgb(255, 127, 159); font-size: 40px;"></span>
                            </a>
                        </div>
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


  <script src="../../../assets/web/assets/jquery/jquery.min.js"></script>
  <script src="../../../assets/popper/popper.min.js"></script>
  <script src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5"></script>
  <script src="https://apis.google.com/js/plusone.js"></script>
  <script src="../../../assets/facebook-plugin/facebook-script.js"></script>
  <script src="../../../assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="../../../assets/smoothscroll/smooth-scroll.js"></script>
  <script src="../../../assets/tether/tether.min.js"></script>
  <script src="../../../assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="../../../assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="../../../assets/parallax/jarallax.min.js"></script>
  <script src="../../../assets/dropdown/js/nav-dropdown.js"></script>
  <script src="../../../assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="../../../assets/theme/js/script.js"></script>
  
  
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
    <input name="animation" type="hidden">
  </body>
</html>