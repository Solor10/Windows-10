<!DOCTYPE html>
<html lang="es">
<head>
  <!-- Site made with Mobirise Website Builder v4.12.3, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Kampepen, kampepen.com.mx">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="../../assets/images/kampepen.jpg" type="image/x-icon">
  <meta name="description" content="Productos de kampepen">
  <meta name="author" content="www.Kampepen.com.mx">
  <meta name="keywords" content="Productos realizados 100% Organicos">
  
  
  <title>Productos</title>
  <link rel="stylesheet" href="../../assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="../../assets/facebook-plugin/style.css">
  <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="../../assets/tether/tether.min.css">
  <link rel="stylesheet" href="../../assets/socicon/css/styles.css">
  <link rel="stylesheet" href="../../assets/animatecss/animate.min.css">
  <link rel="stylesheet" href="../../assets/dropdown/css/style.css">
  <link rel="stylesheet" href="../../assets/theme/css/style.css">
  <link rel="preload" as="style" href="../../assets/mobirise/css/mbr-additional.css">
  <link rel="stylesheet" href="../../assets/mobirise/css/mbr-additional.css" type="text/css">

  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet"> 
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../../css/estilos.css">

  <link rel="stylesheet" href="../../AlertifyJS/css/alertify.min.css" />
	<link rel="stylesheet" href="../../AlertifyJS/css/themes/semantic.min.css" />
    <script src="../../AlertifyJS/alertify.min.js"></script>
    
  
  
</head>
<body>
<section class="menu cid-qTkzRZLJNu" once="menu" id="menu1-m">

    

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
                <a href="inicio.php">
                     <img src="../../assets/images/kampepen.jpg" alt="kampepen" title="Logo" style="height: 3.8rem;">
                </a>
            </span>
            
        </div>
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
    <li class="nav-item">
                <a class="nav-link link text-danger display-4" href="../../Main_app/Admin/inicio.php"><span class="mbri-home mbr-iconfont mbr-iconfont-btn" style="font-size: 25px;"></span>
                    Inicio</a>
            </li>
            <li class="nav-item">
            <a class="nav-link link text-danger display-4" href="../../Main_app/Admin/proyectos.php"><span class="mbri-briefcase mbr-iconfont mbr-iconfont-btn" style="font-size: 25px;"></span>
                    Proyectos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link link text-danger display-4" href="../../Main_app/Admin/ubicaciones.php"><span class="mbri-delivery mbr-iconfont mbr-iconfont-btn" style="font-size: 35px;"></span>
                    Contactos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link link text-danger display-4" href="../../Main_app/Admin/productos.php"><span class="mbri-shopping-bag mbr-iconfont mbr-iconfont-btn" style="font-size: 25px;"></span>
                Productos</a>   
            </li>
            <li class="nav-item">
                <a class="nav-link link text-danger display-4" href="../../index.php"><span class="mbri-users mbr-iconfont mbr-iconfont-btn" style="font-size: 25px;"></span>
                Cerrar</a>
</li>
                
            </ul>

                    
        
    </div>
</nav>
<section class="services1 cid-rYlB2VW8pD" id="services1-y">
    <!---->
    <?php
    include("../../conexiones/cone_productos.php");
    $id = $_REQUEST["id"];
    $seleccionar = "SELECT * FROM venta WHERE id='$id'";
    $resul = $conexion -> query($seleccionar);
    $almacena = $resul -> fetch_assoc();

    ?>
    <!---->
    <!--Overlay-->
    
    <!--Container-->
    <div class="container">
        <div class="row justify-content-center">
            <!--Titles-->
            <div class="title pb-5 col-12">
                <h2 class="align-left pb-3 mbr-fonts-style display-1">Producto Nuevo</h2>
                
            </div>
            
            <!--Card-1-->
            <div class="card col-12 col-md-6 p-3 col-lg-4">
                <div class="card-wrapper">
                    <div class="card-img">
                    <form action="../../assets/basedatos/productos/actua_pro.php?id=<?php echo $almacena['id']; ?>" method="post" enctype="multipart/form-data">
                        <img src="data:image/jpg;base64, <?php echo base64_encode($almacena['imagen']); ?>" alt="Kampepen">
                        <input type="file" name="imagepro" required id="imagepro">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style display-5">
                            Cambiar aqui el nombre del producto.
                            <input type="text" name="nombrepro" id="nombrepro" autocomplete="off" value="<?php echo $almacena["nombre"]; ?>">
                        </h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                        <div class="form-group">
                                <label for="exampleFormControlTextarea1">Cambiar aquí la descripción</label>
                                <input type="text" class="form-control" id="exampleFormControlTextarea1" rows="3" name="despro" value="<?php echo $almacena["descripcion"]; ?>">    
                            </div>
                        </p>
                        <div class="form-group">
                                <label for="exampleFormControlTextarea2">Cambiar aquí el presio.</label>
                                <input type="text" name="prepro" id="prepro" autocomplete="off" value="<?php echo $almacena["presio"]; ?>">
                        </div>
                        
                        <!--Btn-->
                        <div class="mbr-section-btn align-left">
                            <a class="btn btn-secondary-outline display-4">
                            <input type="submit" value="Actualizar producto" class="btn btn-warning-outline display-4" onclick="confirmar()">
                            </a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
           
            <!--Card-2-->
            <!--Card-4-->
            
        </div>
    </div>
</section>
<section class="cid-rYlBmFPleK mbr-reveal" id="footer1-z">

    
    

    <div class="container">
        <div class="media-container-row content text-white">
            <div class="col-12 col-md-3">
                <div class="media-wrap">
                    <a href="inicio.php">
                        <img src="../../assets/images/kampepen.ico" alt="Kampepen" title="" style="height: 20rem;">
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


  <script src="../../assets/web/assets/jquery/jquery.min.js"></script>
  <script src="../../assets/popper/popper.min.js"></script>
  <script src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5"></script>
  <script src="https://apis.google.com/js/plusone.js"></script>
  <script src="../../assets/facebook-plugin/facebook-script.js"></script>
  <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="../../assets/smoothscroll/smooth-scroll.js"></script>
  <script src="../../assets/tether/tether.min.js"></script>
  <script src="../../assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="../../assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="../../assets/countdown/jquery.countdown.min.js"></script>
  <script src="../../assets/dropdown/js/nav-dropdown.js"></script>
  <script src="../../assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="../../assets/theme/js/script.js"></script>
  
  
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
    <input name="animation" type="hidden">

    <script src="../../js/mainosculo.js"></script>
    <script src="../../js/alertas.js"> </script>
  </body>
</html>