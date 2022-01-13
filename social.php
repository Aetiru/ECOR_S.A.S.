<?php
    
@session_save_path();
@session_start();
    //Si existe la sesion "email"..., la guardamos en una variable.
    if (isset($_SESSION['email'])) {
        $cliente = $_SESSION['email'];
    }else{
        header('Location: index.html');//Aqui lo redireccionamos al lugar que queremos
        die();
    }
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
    </head>
    <body>
        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="main_menu">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container box_1620">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href=""><img src="img/logo-6.png" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item submenu dropdown">
									<a href="cerrar_sesion.php" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo "Bienvenido  ".$cliente; ?></a>
									<ul class="dropdown-menu">
            
                                        <li class="nav-item"><a class="nav-link" href="#">Mi Perfil</a></li>
                                        
										<li class="nav-item"><a class="nav-link" href="cerrar_sesion.php">Cerrar Sesion</a></li>
									</ul>
								</li>
								<!--<li class="nav-item"><a class="nav-link" href="contact.php">Contacto</a></li>-->
							</ul>
						</div>
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->


        <!--================Home Banner Area =================-->
        <section class="home_banner_area blog_banner">
            <div class="banner_inner d-flex align-items-center">
                <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
                <div class="container">
                    <div class="blog_b_text text-center">
                        <!--<h2>Dude You?re Getting <br /> a Telescope</h2>
                        <p>There is a moment in the life of any aspiring astronomer that it is time to buy that first</p>
                        <a class="white_bg_btn" href="#">View More</a>-->
                    </div>
                </div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->

        <!--================Blog Categorie Area =================-->
        <section class="blog_categorie_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="categories_post">
                            <img src="img/blog/cat-post/a1.jpg" alt="post">
                            <div class="categories_details">
                                <div class="categories_text">
                                    <a href="#"><h5>Nuestros Productos</h5></a>
                                    <div class="border_line"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="categories_post">
                            <img src="img/blog/cat-post/a2.jpg" alt="post">
                            <div class="categories_details">
                                <div class="categories_text">
                                    <a href="#"><h5>Puntos Ecologicos</h5></a>
                                    <div class="border_line"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="categories_post">
                            <img src="img/blog/cat-post/a1.jpg" alt="post">
                            <div class="categories_details">
                                <div class="categories_text">
                                    <a href="#"><h5>Sede</h5></a>
                                    <div class="border_line"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Blog Categorie Area =================-->

        <!--================Blog Area =================-->
        <section class="blog_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog_left_sidebar">
                            <article class="row blog_item ">
                               <div class="col-md-3">
                                   <div class="blog_info text-right">
                                        <div class="post_tag">
                                            <a class="active"href="#">Ecor,</a>
                                            <a class="active"href="#">Charla,</a>
                                            <a class="active" href="#">Ambiental.</a>
                                            <a href="#"></a>
                                            <a href="#"></a>
                                        </div>
                                        <ul class="blog_meta list">
                                            <li><a href="#">Visitas<i class="lnr lnr-user"></i></a></li>
                                            <li><a href="#">12 Dec, 2019<i class="lnr lnr-calendar-full"></i></a></li>
                                            <li><a href="#">2K Visitas<i class="lnr lnr-eye"></i></a></li>
                                            <li><a href="#">06 Comentarios<i class="lnr lnr-bubble"></i></a></li>
                                        </ul>
                                    </div>
                               </div>
                                <div class="col-md-9">
                                    <div class="blog_post">
                                        <img src="img/blog/main-blog/ecor5.jpg" alt="">
                                        <div class="blog_details">
                                            <a href="#"><h2>Socializaci&oacute;n  del proyecto de gesti&oacute;n de manejos de residuos solidos.</h2></a>
                                            <p>Charla general sobre procesos formativos, praes procedas y praus, temas de recoleccion y clasificacion en la fuente de materiales aprovechables, con la finalidad de preservar el medio ambiente y mitigar la contaminación que provocan los residuos que generamos en casa que son dispuestos al relleno sanitario.</p>
                                            <a href="info-charla.php" class="blog_btn ">Ver Mas</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="row blog_item">
                               <div class="col-md-3">
                                   <div class="blog_info text-right">
                                        <div class="post_tag">
                                            <a href="#">Ecor,</a>
                                            <a class="active" href="#">Charla,</a>
                                            <!--<a href="#">Ecologia,</a>-->
                                            <a href="#">Reciclaje.</a>
                                        </div>
                                        <ul class="blog_meta list">
                                            <li><a href="#">Vistas<i class="lnr lnr-user"></i></a></li>
                                            <li><a href="#">12 Jun, 2019<i class="lnr lnr-calendar-full"></i></a></li>
                                            <li><a href="#">1k Vistas<i class="lnr lnr-eye"></i></a></li>
                                            <li><a href="#">10 Comentarios<i class="lnr lnr-bubble"></i></a></li>
                                        </ul>
                                    </div>
                               </div>
                                <div class="col-md-9">
                                    <div class="blog_post">
                                        <img src="img/blog/main-blog/ecor1.jpg" alt="">
                                        <div class="blog_details">
                                            <a href="#"><h2>Socializaci&oacute;n  del proyecto de gesti&oacute;n de manejos de residuos solidos.</h2></a>
                                            <p>Charla general sobre procesos formativos, praes procedas y praus, temas de recoleccion y clasificacion en la fuente de materiales aprovechables, con la finalidad de preservar el medio ambiente y mitigar la contaminación que provocan los residuos que generamos en casa que son dispuestos al relleno sanitario.</p>
                                            <a href="info-charla.php" class="blog_btn">Ver Mas</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="row blog_item">
                               <div class="col-md-3">
                                   <div class="blog_info text-right">
                                        <div class="post_tag">
 					    <a class="active"href="#">Ecor,</a>                                       
                                            <a href="#" class="active">Charla, </a>
                                            <a class="active" href="#">Conciencia Ambiental,</a>
                                            <!--<a href="#">Politics,</a>
                                            <a href="#">Lifestyle</a>-->
                                        </div>
                                        <ul class="blog_meta list">
                                            <li><a href="#">Vistas<i class="lnr lnr-user"></i></a></li>
                                            <li><a href="#">20Jul, 2017<i class="lnr lnr-calendar-full"></i></a></li>
                                            <li><a href="#">5k Vistas<i class="lnr lnr-eye"></i></a></li>
                                            <li><a href="#">08 Comentarios<i class="lnr lnr-bubble"></i></a></li>
                                        </ul>
                                    </div>
                               </div>
                                <div class="col-md-9">
                                    <div class="blog_post">
                                        <img src="img/blog/main-blog/ecor3.jpg" alt="">
                                        <div class="blog_details">
                                            <a href="#"><h2>Socializaci&oacute;n  del proyecto de gesti&oacute;n de manejos de residuos solidos.</h2></a>
                                            <p>Charla general sobre procesos formativos, praes procedas y praus, temas de recoleccion y clasificacion en la fuente de materiales aprovechables, con la finalidad de preservar el medio ambiente y mitigar la contaminaci&oacute;n que provocan los residuos que generamos en casa que son dispuestos al relleno sanitario.</p>
                                            <a href="info-charla.php" class="blog_btn">Ver Mas</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="row blog_item ">
                               <div class="col-md-3">
                                   <div class="blog_info text-right">
                                        <div class="post_tag">
                                            <a class="active"href="#">Ecor,</a>
                                            <a class="active"href="#">Charla,</a>
                                            <a class="" href="#">Reciclaje.</a>
                                            <!--<a href="#">Politics,</a>
                                            <a href="#">Lifestyle</a>-->
                                        </div>
                                        <ul class="blog_meta list">
                                            <li><a href="#">Vistas<i class="lnr lnr-user"></i></a></li>
                                            <li><a href="#">21 Enero, 2020<i class="lnr lnr-calendar-full"></i></a></li>
                                            <li><a href="#">300 Vistas<i class="lnr lnr-eye"></i></a></li>
                                            <li><a href="#">06 Comentarios<i class="lnr lnr-bubble"></i></a></li>
                                        </ul>
                                    </div>
                               </div>
                                <div class="col-md-9">
                                    <div class="blog_post">
                                        <img src="img/blog/main-blog/ecor4.jpg" alt="">
                                        <div class="blog_details">
                                            <a href="#"><h2>Socializaci&oacute;n  del proyecto de gesti&oacute;n de manejos de residuos solidos.</h2></a>
                                            <p>Charla general sobre procesos formativos, praes procedas y praus, temas de recoleccion y clasificacion en la fuente de materiales aprovechables, con la finalidad de preservar el medio ambiente y mitigar la contaminación que provocan los residuos que generamos en casa que son dispuestos al relleno sanitario.</p>

                                            <a href="info-charla.php" class="blog_btn">Ver Mas</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!--<article class="row blog_item">
                               <div class="col-md-3">
                                   <div class="blog_info text-right">
                                        <div class="post_tag">
                                            <a href="#">Food,</a>
                                            <a class="active" href="#">Technology,</a>
                                            <a href="#">Politics,</a>
                                            <a href="#">Lifestyle</a>
                                        </div>
                                        <ul class="blog_meta list">
                                            <li><a href="#">Mark wiens<i class="lnr lnr-user"></i></a></li>
                                            <li><a href="#">12 Dec, 2017<i class="lnr lnr-calendar-full"></i></a></li>
                                            <li><a href="#">1.2M Views<i class="lnr lnr-eye"></i></a></li>
                                            <li><a href="#">06 Comments<i class="lnr lnr-bubble"></i></a></li>
                                        </ul>
                                    </div>
                               </div>
                                <div class="col-md-9">
                                    <div class="blog_post">
                                        <img src="img/blog/main-blog/ecorsas4.jpg" alt="">
                                        <div class="blog_details">
                                            <a href="#"><h2>Charla sobre conciencia ambiental</h2></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                            <a href="#" class="blog_btn">Ver Mas</a>
                                        </div>
                                    </div>
                                </div>
                            </article>-->
                            <nav class="blog-pagination justify-content-center d-flex">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a href="#" class="page-link" aria-label="Previous">
                                            <span aria-hidden="true">
                                                <span class="lnr lnr-chevron-left"></span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="page-item active"><a href="social.php" class="page-link">1</a></li>
                                    <li class="page-item "><a href="social2.php" class="page-link">2</a></li>
                                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                                    <li class="page-item">
                                        <a href="#" class="page-link" aria-label="Next">
                                            <span aria-hidden="true">
                                                <span class="lnr lnr-chevron-right"></span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-4 ">
                        <div class="blog_right_sidebar ">
                            <aside class="single_sidebar_widget search_widget">
                                <div class="input-group">
                                    <!--<input type="text" class="form-control" placeholder="Search Posts">-->
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="lnr lnr-magnifier"></i></button>
                                    </span>
                                </div><!-- /input-group -->
                                <!--<div class="br"></div>-->
                            </aside>
                            <aside class="single_sidebar_widget author_widget ">
                                <img class="author_img rounded-circle" src="img/testimonials/mena-1.png" alt="">
                                <h4>JULIO CESAR MENA MARTINEZ</h4>
                                <p>CEO</p>
                                <div class="social_icon">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                                <p>Especialista en procesos industriales y ambientales. trabajando por el medio ambiente desde hace 10 A&ntilde;os.</p>
                                <div class="br"></div>
                            </aside>
                            <aside class="single_sidebar_widget author_widget ">
                                <img class="author_img rounded-circle" src="img/testimonials/circle.png" alt="">
                                <h4>Eric Barrera</h4>
                                <p>Jefe de Produccion y Mantenimiento</p>
                                <div class="social_icon">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                                <p>Especialista en procesos industriales y ambientales. trabajando por el medio ambiente desde hace 10 A&ntilde;os.</p>
                                <div class="br"></div>
                            </aside>
                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title">Posts Populares</h3>
                                <div class="media post_item">
                                    <img src="img/blog/popular-post/ecor5.jpg" alt="post">
                                    <div class="media-body">
                                        <a href="#"><h3>Socializacion </h3></a>
                                        <p>Charla general</p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="img/blog/popular-post/Punto_Ecologico-1.jpg" alt="post">
                                    <div class="media-body">
                                        <a href="#"><h3>Punto Ecologico </h3></a>
                                        <p>Punto Ecologico Ecor S.A.S. </p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="img/blog/popular-post/post6.jpg" alt="post">
                                    <div class="media-body">
                                        <a href="#"><h3>Capacitacion </h3></a>
                                        <p>Charla general </p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="img/blog/popular-post/p-eco.jpg" alt="post">
                                    <div class="media-body">
                                        <a href="#"><h3>Zona de aprovechamiento </h3></a>
                                        <p>Centro de acopio</p>
                                    </div>
                                </div>
                                <div class="br"></div>
                            </aside>
                            <!--<aside class="single_sidebar_widget ads_widget">
                                <a href="#"><img class="img-fluid" src="img/blog/add.jpg" alt=""></a>
                                <div class="br"></div>
                            </aside>
                            <aside class="single_sidebar_widget post_category_widget">
                                <h4 class="widget_title">Post Catgories</h4>
                                <ul class="list cat-list">
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Technology</p>
                                            <p>37</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Lifestyle</p>
                                            <p>24</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Fashion</p>
                                            <p>59</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Art</p>
                                            <p>29</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Food</p>
                                            <p>15</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Architecture</p>
                                            <p>09</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Adventure</p>
                                            <p>44</p>
                                        </a>
                                    </li>
                                </ul>
                                <div class="br"></div>
                            </aside>
                            <aside class="single-sidebar-widget newsletter_widget">
                                <h4 class="widget_title">Newsletter</h4>
                                <p>
                                Here, I focus on a range of items and features that we use in life without
                                giving them a second thought.
                                </p>
                                <div class="form-group d-flex flex-row">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'">
                                    </div>
                                    <a href="#" class="bbtns">Subcribe</a>
                                </div>
                                <p class="text-bottom">You can unsubscribe at any time</p>
                                <div class="br"></div>
                            </aside>
                            <aside class="single-sidebar-widget tag_cloud_widget">
                                <h4 class="widget_title">Tag Clouds</h4>
                                <ul class="list">
                                    <li><a href="#">Technology</a></li>
                                    <li><a href="#">Fashion</a></li>
                                    <li><a href="#">Architecture</a></li>
                                    <li><a href="#">Fashion</a></li>
                                    <li><a href="#">Food</a></li>
                                    <li><a href="#">Technology</a></li>
                                    <li><a href="#">Lifestyle</a></li>
                                    <li><a href="#">Art</a></li>
                                    <li><a href="#">Adventure</a></li>
                                    <li><a href="#">Food</a></li>
                                    <li><a href="#">Lifestyle</a></li>
                                    <li><a href="#">Adventure</a></li>
                                </ul>
                            </aside>-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Blog Area =================-->

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
                    <div class="footer-social">
                        <a href="https://www.facebook.com/Ecor-SAS-103756228011719/?view_public_for=103756228011719" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.instagram.com/ecorecuperamos/" target="_blank"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </footer>
        <!--================ End footer Area  =================-->




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
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="vendors/popup/jquery.magnific-popup.min.js"></script>
        <script src="vendors/scroll/jquery.nicescroll.min.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>