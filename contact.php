<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="propeller" content="00da901f5ef44df7a2467670e23088db">
        <link rel="icon" href="img/1.png" type="image/png">
        <title>ECOR S.A.S - ECORECUPERAMOS</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <style>
            .google-maps {
                position: relative;
                padding-bottom: 75%;
                height: 0;
                overflow: hidden;
            }
            
            .google-maps iframe { 
                position: absolute;
                top: 0;
                left: 0;
                width: 100% !important;
                height: 100% !important;
        </style>
    </head>
    <body>


        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="main_menu">
               <nav class="navbar navbar-expand-lg navbar-light">
               <div class="container box_1620">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <a class="navbar-brand logo_h" href="index.html"><img src="img/logo-6.png" alt=""></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                  </button>
                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                     <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="index.html">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="about-us.html">Nosotros</a></li>
                        <li class="nav-item"><a class="nav-link" href="service.html">Servicios</a>
                        <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">De Tu Interes</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="form-pqr.php">PQR</a></li> 
                                    <li class="nav-item"><a class="nav-link" href="docs/BROCHURE ECORECUPERAMOS ACTUALIZADO 3.pdf">Brochure</a></li> 
                                    <li class="nav-item"><a class="nav-link" href="ccu.html">Contrato de Condiciones Uniformes</a></li>
                                    <li class="nav-item"><a class="nav-link" href="ruta.php">Rutas de Recoleccion</a></li>
                                    <li class="nav-item"><a class="nav-link" href="ppservicios.html">Programas de Prestacion de Serevicios</a></li>
                                    </ul>
                                    
                            </li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contacto</a></li>
                                <li class="nav-item"><a class="nav-link" target="_blanck" href="login.php">Iniciar Sesion</a></li>
                     </ul>
                  </div>
               </div>
               </nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->

        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Contactanos</h2>
						<div class="page_link">
							<a href="index.html">Inicio</a>
							<a href="contact.php">Contacto</a>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->

        <!--================Contact Area =================-->

        <section class="contact_area p_120">
            <div class="container">
                <div class="google-maps">
                <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1iw4_IrMyMGBW6ndQ2KtHCWd9JzwaQ5zl"width="1110" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>--
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="contact_info">
                            <br>
                            <div class="info_item">

                                <i class="lnr lnr-home"></i>
                                <h6>Malambo - Atlantico, Colombia</h6>
                                <p>Calle 20a #13-102 Villa Esther</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-phone-handset"></i>
                                <h6><a href="#">(5)395 7484 - 310 8993638</a></h6>
                                <p>Lunes a Sabado 9 a.m. a 6 p.m.</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-envelope"></i>
                                <h6><a href="#">ecorsas@ecorecuperamos.com</a></h6>
                                <p>&iexcl;Envienos su consulta en cualquier momento!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <br>
                        <form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Nombre">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Correo Electronico" required="Email Incorrecto">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Asunto">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" id="message" rows="1" placeholder="Mensaje"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 text-right">
                                <button type="submit" value="" name="btn" class="btn submit_btn">Enviar Mensaje</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        




        <!--================Contact Area =================-->
        <!--================ start footer Area  =================-->
        <footer class="footer-area p_120">
            <div class="container">

                            <div class="mt-10 info"></d iv>
                        </form>
                    </div>
                </div>
                <div class="footer-bottom footer_copy">
                    <p class="footer-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | This template is made with</i>  <a href="https://colorlib.com" target="_blank">Colorlib</a> And <a href="#" target="">Aetiru</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
<p class="footer-text">
                        <a href="form-pqr.php" target="_blank">Peticiones - Quejas - Reclamos</a>
                    </p>
                    <p class="footer-text">
                        <a href="docs/BROCHURE ECORECUPERAMOS ACTUALIZADO 3.pdf" target="_blank">Brochure Ecorecuperamos S.A.S</a>
                    </p>
                    <div class="footer-social">
                        <a href="https://www.facebook.com/Ecor-SAS-103756228011719/?view_public_for=103756228011719" target="_blank">
                            <i class="fa fa-facebook"></i></a>
                        
                        <a href="https://twitter.com/ecor_s" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.instagram.com/ecorecuperamos/" target="_blank"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </footer>
		<!--================ End footer Area  =================-->
<div id="success" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>&iexcl;Muchas Gracias!</h2>
                        <p>Tu mensaje se ha enviado correctamente.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modals error -->

        <div id="error" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>&iexcl;Lo sentimos!</h2>
                        <p> Error al enviar el mensaje </p>
                    </div>
                </div>
            </div>
        </div>
        


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope-min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/scroll/jquery.nicescroll.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        
        <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.min.js"></script>
        <script src="vendors/popup/jquery.magnific-popup.min.js"></script>
        <!--contact js -->
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/contact2.js"></script>
        <!-- gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="js/gmaps.min.js"></script>
        <script src="js/theme.js"></script>
        
    </body>
</html>