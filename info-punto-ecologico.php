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
<!doctype html>
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
        
        <!--================Blog Area =================-->
        <section class="blog_area single-post-area p_120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 posts-list">
                        <div class="single-post row">
                            <div class="col-lg-12">
                                <div class="feature-img">
                                    <img class="img-fluid" src="img/blog/ecologico/info-p-e.jpg" alt="">
                                </div>									
                            </div>
                            <div class="col-lg-3  col-md-3">
                                <div class="blog_info text-right">
                                        <div class="post_tag">
                                            <a class="active"href="#">Ecor,</a>
                                            <a class="active"href="#">Punto Ecologico,</a>
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
                            <div class="col-lg-9 col-md-9 blog_details">
                            <h2>Punto Ecologico Ecor S.A.S.</h2>
                                <p class="excert">
                                Un Punto Ecológico esta compuesto por una estructura metálica donde se ubican de una a cinco Canecas de Reciclaje por Colores, con el objetivo de que los usuarios depositen los residuos que generen en cada una de ellas, de acuerdo con  la codificación que se haya establecido; Por lo general la más utilizada en los Puntos Ecológicos es la de: Caneca de Reciclaje verde,gris y azul, para residuos ordinarios, papel y cartón y plástico respectivamente.
                                </p>
                                <!--<p>
                                    Boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually sit through a self-imposed
                                </p>
                                <p>
                                    Boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually sit through a self-imposed
                                </p>-->
                            </div>
                            <div class="col-lg-12">
                                <div class="quotes">
                                La zona de punto ecológico reemplaza notablemente a las demás canecas y cuenta con la ventaja de clasificar cada elemento. Esto facilita el depósito con tranquilidad de cualquiera de los residuos según su categoría. Para facilitar su uso los tres recipientes cuentan con un color diferente y una breve descripción, donde se indica con claridad donde se debe ubicar cada residuo.										
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <img class="img-fluid" src="img/blog/ecologico/info-punto.jpg" alt="">
                                    </div>
                                    <div class="col-6">
                                        <img class="img-fluid" src="img/blog/ecologico/info-punto-1.jpg" alt="">
                                    </div>	
                                    <div class="col-lg-12 mt-25 quotes">
                                        <p>
                                        Azul: Esta caneca es para plásticos, como botellas de gaseosa y agua, bolsas para empacar, vasos de yogures, empaques de productos de limpieza, bolsas de leche, tuberías y bolsas de detergente en polvo.
                                        </p>
                                        <p>
                                        Gris: En este recipiente debe ir el cartón y el papel en un estado seco y limpio. Los elementos que puedes depositar son cuadernos, periódicos y cajas.
                                        </p>
                                        <P>
                                        Verde: Este es para residuos orgánicos, puedes depositar restos de comida, icopor, colillas de cigarrillo, cerámicas y vidrios sucios.
                                        </P>									
                                        <P>
                                        Blanco: En este color debes depositar los vidrios como botellas y frascos. No se debe echar vidrios planos como espejos o ventanas.
                                        </P>
                                        <p>
                                        Rojo: Los residuos que impliquen un riesgo biológico no deben ser depositados, por normatividad,  en una caneca de tipo vaivén como las que solemos encontrar en los puntos ecológicos, estos residuos se deben depositar en una caneca que no implique que el usuario la toque con sus manos o sea que debe ser de tipo pedal, y cuando los residuos impliquen riesgo de cortarse u chuzarse con los mismos como en el caso de agujas o cuchillas se deben depositar en un recipiente tipo guardián que imposibilita que el usuario tenga contacto con los mismos.
                                        </p>		
                                    </div>									
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="feature-img">
                                    <img class="img-fluid" src="img/blog/ecologico/Colores_basura.jpeg" alt="">
                                </div>		
                                <div class="quotes">
                                    <ul>
                                        <li>El Ministerio de Ambiente y Desarrollo Sostenible, en conjunto con el Ministerio de Vivienda, Ciudad y Territorio, mediante Resolución, establecieron un código de colores unificado para la separación de residuos en la fuente, que deberá adoptarse en todo el territorio nacional a partir del primero de enero de 2021.</li>
                                        <li> Los colores para la presentación de residuos sólidos en bolsas u otros recipientes, serán verde (residuos orgánicos aprovechables), blanco (residuos aprovechables) y negro (residuos no aprovechables).</li>
                                    </ul>
                                    <a href="https://www.minambiente.gov.co/index.php/noticias/4595-gobierno-unifica-el-codigo-de-colores-para-la-separacion-de-residuos-en-la-fuente-a-nivel-nacional">Mas informacion</a>

                                </div>							
                            </div>
                        </div>
                        <div class="navigation-area">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                    <div class="thumb">
                                        <a href="#"><img class="img-fluid" src="img/blog/prev.jpg" alt=""></a>
                                    </div>
                                    <div class="arrow">
                                        <a href="#"><span class="lnr text-white lnr-arrow-left"></span></a>
                                    </div>
                                    <div class="detials">
                                        <p>Post Anterior</p>
                                        <a href="single-blog.php"><h4>Zona de aprovechamiento</h4></a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                    <div class="detials">
                                        <p>Siguiente Post</p>
                                        <a href="info-charla.php"><h4>Socializacion de proyecto de gestion</h4></a>
                                    </div>
                                    <div class="arrow">
                                        <a href="#"><span class="lnr text-white lnr-arrow-right"></span></a>
                                    </div>
                                    <div class="thumb">
                                        <a href="#"><img class="img-fluid" src="img/blog/next.jpg" alt=""></a>
                                    </div>										
                                </div>									
                            </div>
                        </div>
                        <div class="comments-area">
                            <h4>05 Comentarios</h4>
                            <div class="comment-list">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="img/blog/c1.jpg" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5><a href="#">Emilly Blunt</a></h5>
                                            <p class="date">December 4, 2017 at 3:12 pm </p>
                                            <p class="comment">
                                                Never say goodbye till the end comes!
                                            </p>
                                        </div>
                                    </div>
                                    <div class="reply-btn">
                                           <a href="" class="btn-reply text-uppercase">reply</a> 
                                    </div>
                                </div>
                            </div>	
                            <div class="comment-list left-padding">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="img/blog/c2.jpg" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5><a href="#">Elsie Cunningham</a></h5>
                                            <p class="date">December 4, 2017 at 3:12 pm </p>
                                            <p class="comment">
                                                Never say goodbye till the end comes!
                                            </p>
                                        </div>
                                    </div>
                                    <div class="reply-btn">
                                           <a href="" class="btn-reply text-uppercase">reply</a> 
                                    </div>
                                </div>
                            </div>	
                            <div class="comment-list left-padding">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="img/blog/c3.jpg" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5><a href="#">Annie Stephens</a></h5>
                                            <p class="date">December 4, 2017 at 3:12 pm </p>
                                            <p class="comment">
                                                Never say goodbye till the end comes!
                                            </p>
                                        </div>
                                    </div>
                                    <div class="reply-btn">
                                           <a href="" class="btn-reply text-uppercase">reply</a> 
                                    </div>
                                </div>
                            </div>	
                            <div class="comment-list">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="img/blog/c4.jpg" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5><a href="#">Maria Luna</a></h5>
                                            <p class="date">December 4, 2017 at 3:12 pm </p>
                                            <p class="comment">
                                                Never say goodbye till the end comes!
                                            </p>
                                        </div>
                                    </div>
                                    <div class="reply-btn">
                                           <a href="" class="btn-reply text-uppercase">reply</a> 
                                    </div>
                                </div>
                            </div>	
                            <div class="comment-list">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="img/blog/c5.jpg" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5><a href="#">Ina Hayes</a></h5>
                                            <p class="date">December 4, 2017 at 3:12 pm </p>
                                            <p class="comment">
                                                Never say goodbye till the end comes!
                                            </p>
                                        </div>
                                    </div>
                                    <div class="reply-btn">
                                           <a href="" class="btn-reply text-uppercase">reply</a> 
                                    </div>
                                </div>
                            </div>	                                             				
                        </div>
                       <!--<div class="comment-form">
                            <h4>Leave a Reply</h4>
                            <form>
                                <div class="form-group form-inline">
                                  <div class="form-group col-lg-6 col-md-6 name">
                                    <input type="text" class="form-control" id="name" placeholder="Enter Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'">
                                  </div>
                                  <div class="form-group col-lg-6 col-md-6 email">
                                    <input type="email" class="form-control" id="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
                                  </div>										
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control mb-10" rows="5" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                                </div>
                                <a href="#" class="primary-btn submit_btn">Post Comment</a>	
                            </form>
                        </div>-->
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget search_widget">
                                <div class="input-group">
                                    <!--<input type="text" class="form-control" placeholder="Search Posts">-->
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="lnr lnr-magnifier"></i></button>
                                    </span>
                                </div><!-- /input-group -->
                                <!--<div class="br"></div>-->
                            </aside>
                            <aside class="single_sidebar_widget author_widget">
                                <img class="author_img rounded-circle" src="img/testimonials/mena-1.png" alt="">
                                <h4>Julio Cesar Mena Martinez</h4>
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
                            <aside class="single_sidebar_widget ads_widget">
                                <a href="#"><img class="img-fluid" src="img/blog/add.jpg" alt=""></a>
                                <div class="br"></div>
                            </aside>
                            <aside class="single_sidebar_widget post_category_widget">
                                <h4 class="widget_title">Posts Categorias</h4>
                                <ul class="list cat-list">
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Ecor</p>
                                            <p>20</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Charla sobre conciencia ambiental</p>
                                            <p>15</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Punto Ecologico</p>
                                            <p>41</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Productos</p>
                                            <p>10</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Zona de aprovechamiento</p>
                                            <p>8</p>
                                        </a>
                                    </li>										
                                </ul>
                                <div class="br"></div>
                            </aside>
                            
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