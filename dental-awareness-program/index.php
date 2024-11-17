<?php require '../text.php'; ?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?> : Photo Gallery</title>
    <link rel="icon" type="image/png" href="../<?php echo $logo_src; ?>">
    <link rel="manifest" href="../images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../<?php echo $logo_src; ?>">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <meta name="title" content="Best Dentist in Faridabad | Dental Care | Crown Dental, Faridabad">
    <meta name="description" content="Visit Crown Dental, Faridabad for comprehensive dental care services including dentures, fixed teeth, metal-free caps, emergency dentistry, and more. Schedule an appointment today!">
    <meta name="keywords" content="Dentist, Dentures, Fixed teeth, Metal-free caps, Dental care, Emergency dentistry, Family dentistry, Cosmetic dentistry, Teeth whitening, Braces, Dental implants, Pediatric dentistry, Oral health, Gum disease treatment, Affordable dentistry, Faridabad, Crown Dental.">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="revisit-after" content="3 days">
    <meta name="author" content="Ruby Shah Garg"><!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-BJBWSJHKZC"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-BJBWSJHKZC');
    </script>
</head>

<body>
    <div class="preloader"><span></span></div>
    <div class="page-wrapper">
        <section class="topbar-one">
            <div class="container">
                <div class="topbar-one__left-text"><i class="fa fa-map-marker"></i> <?php echo $address; ?></div>
                <div class="topbar-one__left-text"><i class="fa fa-clock-o"></i> Mon to Sat 10:00 AM - 8:00 PM</div>
                <div class="topbar-one__right-content">
                    <div class="topbar-one__social">
                        <a href="https://www.facebook.com/crowndentalimplants/" target="blank"><i class="fa fa-facebook-f"></i></a>
                        <a href="#"><i class="fa fa-twitter" target="blank"></i></a>
                        <a href="#"><i class="fa fa-instagram" target="blank"></i></a>
                        <a href="#"><i class="fa fa-linkedin" target="blank"></i></a>
                    </div><!-- /.topbar-one__social -->
                    <a href="../booking/" class="topbar-one__btn">Book an Appointment</a>
                </div><!-- /.right-content -->
            </div><!-- /.container -->
        </section><!-- /.topbar-one -->
        <header class="site-header header-one">
            <nav class="navbar navbar-expand-lg navbar-light header-navigation stricky">
                <div class="container clearfix">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="logo-box clearfix">
                        <a class="navbar-brand" href="<?php echo $url; ?>">
                            <img src="<?php echo $logo_src; ?>" class="main-logo" alt="<?php echo $name; ?>" />
                            <img src="<?php echo $logo_src; ?>" class="stick-logo" alt="<?php echo $name; ?>" />
                        </a>
                        <button class="menu-toggler" data-target=".main-navigation">
                            <span class="fa fa-bars"></span>
                        </button>
                    </div><!-- /.logo-box -->
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="main-navigation">
                        <ul class=" navigation-box">
                            <li>
                                <a href="../index.php">Home</a>
                            </li>
                            <li>
                                <a href="../about/">About</a>
                                <ul class="submenu">
                                    <li><a href="../meet-the-doctors/">Meet The Doctors</a></li>
                                    <li><a href="../awards-and-recognition/">Awards & Recognition</a></li>
                                </ul><!-- /.submenu -->
                            </li>
                            <li>
                                <a href="../specialities/">Specialities</a>
                                <ul class="submenu">
                                    <li><a href="../specialities/denstures-and-crowns/">Dentures and Crowns</a></li>
                                    <li><a href="../specialities/implant-dentistry/">Implant Dentistry</a></li>
                                    <li><a href="../specialities/painless-root-canal-treatment/">Painless Root Canal Treatment</a></li>
                                    <li><a href="../specialities/orthodontics-braces/">Invisible Braces</a></li>
                                    <li><a href="../specialities/children-dentistry/">Children Dentistry</a></li>
                                    <li><a href="../specialities/cosmetic-dentistry">Cosmetic Dentistry</a></li>
                                    <li><a href="../specialities/bleeching-teeth-whitening/">Teeth Whitening / Bleaching</a></li>
                                    <li><a href="../specialities/oral-surgical-procedures/">Oral Surgical Procedures</a></li>
                                    <li><a href="../specialities/general-dentistry/">General Dentistry</a></li>
                                </ul><!-- /.submenu -->
                            </li>
                            <li>
                                <a href="../photo-gallery">Photo Gallery</a>
                                <ul class="submenu">
                                    <li><a href="../dental-awareness-program/">Dental Awareness Program</a></li>
                                    <li><a href="../testimonial/">Testimonial</a></li>
                                </ul><!-- /.submenu -->
                            </li>
                            <li><a href="../medical-tourism/">Medical Tourism</a></li>
                            <li><a href="../contact-us/">Contact Us</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                    <div class="right-side-box">
                        <a href="tel:<?php echo $phone; ?>" class="header-one__cta">
                            <span class="header-one__cta-icon">
                                <i class="dentallox-icon-call-answer"></i>
                            </span>
                            <span class="header-one__cta-content">
                                <span class="header-one__cta-text">Call Us for query:</span>
                                <span class="header-one__cta-number"><?php echo $phone; ?></span>
                            </span>
                        </a>
                    </div><!-- /.right-side-box -->
                </div>
                <!-- /.container -->
            </nav>
        </header><!-- /.header-one -->
        <section class="inner-banner">
            <div class="container">
                <h2 class="inner-banner__title">Dental Awareness Program</h2><!-- /.inner-banner__title -->
                <ul class="thm-breadcrumb">
                    <li class="thm-breadcrumb__item"><a class="thm-breadcrumb__link" href="../">Home</a></li>
                    <li class="thm-breadcrumb__item current"><a class="thm-breadcrumb__link" href="../dental-awareness-program/">Dental Awareness Program</a></li>
                </ul><!-- /.thm-breadcrumb -->
            </div><!-- /.container -->
        </section><!-- /.inner-banner -->
        <section class="gallery-one gallery-one__page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="gallery-one__single">
                            <div class="gallery-one__image">
                                <img src="<?php echo $url; ?>/img/Medical Emergency Kit1.JPG" alt="<?php echo $name; ?>" />
                            </div><!-- /.gallery-one__image -->
                            <div class="gallery-one__content">
                                <a href="<?php echo $url; ?>/img/Medical Emergency Kit1.JPG" class="gallery-one__popup img-popup"><i class="icon icon-Search"></i></a>
                            </div><!-- /.gallery-one__content -->
                        </div><!-- /.gallery-one__single -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <div class="gallery-one__single">
                            <div class="gallery-one__image">
                                <img src="<?php echo $url; ?>/img/medical emergency kit2.JPG" alt="<?php echo $name; ?>" />
                            </div><!-- /.gallery-one__image -->
                            <div class="gallery-one__content">
                                <a href="<?php echo $url; ?>/img/medical emergency kit2.JPG" class="gallery-one__popup img-popup"><i class="icon icon-Search"></i></a>
                            </div><!-- /.gallery-one__content -->
                        </div><!-- /.gallery-one__single -->
                    </div><!-- /.col-lg-4 -->

                    <div class="col-lg-4">
                        <div class="gallery-one__single">
                            <div class="gallery-one__image">
                                <img src="<?php echo $url; ?>/img/badoli1.jpg" alt="<?php echo $name; ?>" />
                            </div><!-- /.gallery-one__image -->
                            <div class="gallery-one__content">
                                <a href="<?php echo $url; ?>/img/badoli1.jpg" class="gallery-one__popup img-popup"><i class="icon icon-Search"></i></a>
                            </div><!-- /.gallery-one__content -->
                        </div><!-- /.gallery-one__single -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <div class="gallery-one__single">
                            <div class="gallery-one__image">
                                <img src="<?php echo $url; ?>/img/badoli2.jpg" alt="<?php echo $name; ?>" />
                            </div><!-- /.gallery-one__image -->
                            <div class="gallery-one__content">
                                <a href="<?php echo $url; ?>/img/badoli2.jpg" class="gallery-one__popup img-popup"><i class="icon icon-Search"></i></a>
                            </div><!-- /.gallery-one__content -->
                        </div><!-- /.gallery-one__single -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-3">
                        <div class="gallery-one__single">
                            <div class="gallery-one__image">
                                <img src="<?php echo $url; ?>/img/dcmodel1.jpg" alt="<?php echo $name; ?>" />
                            </div><!-- /.gallery-one__image -->
                            <div class="gallery-one__content">
                                <a href="<?php echo $url; ?>/img/dcmodel1.jpg" class="gallery-one__popup img-popup"><i class="icon icon-Search"></i></a>
                            </div><!-- /.gallery-one__content -->
                        </div><!-- /.gallery-one__single -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <div class="gallery-one__single">
                            <div class="gallery-one__image">
                                <img src="<?php echo $url; ?>/img/dcmodel2.jpg" alt="<?php echo $name; ?>" />
                            </div><!-- /.gallery-one__image -->
                            <div class="gallery-one__content">
                                <a href="<?php echo $url; ?>/img/dcmodel2.jpg" class="gallery-one__popup img-popup"><i class="icon icon-Search"></i></a>
                            </div><!-- /.gallery-one__content -->
                        </div><!-- /.gallery-one__single -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <div class="gallery-one__single">
                            <div class="gallery-one__image">
                                <img src="<?php echo $url; ?>/img/dcmodel3.jpg" alt="<?php echo $name; ?>" />
                            </div><!-- /.gallery-one__image -->
                            <div class="gallery-one__content">
                                <a href="<?php echo $url; ?>/img/dcmodel3.jpg" class="gallery-one__popup img-popup"><i class="icon icon-Search"></i></a>
                            </div><!-- /.gallery-one__content -->
                        </div><!-- /.gallery-one__single -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <div class="gallery-one__single">
                            <div class="gallery-one__image">
                                <img src="<?php echo $url; ?>/img/dcmodel4.jpg" alt="<?php echo $name; ?>" />
                            </div><!-- /.gallery-one__image -->
                            <div class="gallery-one__content">
                                <a href="<?php echo $url; ?>/img/dcmodel4.jpg" class="gallery-one__popup img-popup"><i class="icon icon-Search"></i></a>
                            </div><!-- /.gallery-one__content -->
                        </div><!-- /.gallery-one__single -->
                    </div><!-- /.col-lg-4 -->

                    <div class="col-lg-4">
                        <div class="gallery-one__single">
                            <div class="gallery-one__image">
                                <img src="<?php echo $url; ?>/img/emerald1.jpg" alt="<?php echo $name; ?>" />
                            </div><!-- /.gallery-one__image -->
                            <div class="gallery-one__content">
                                <a href="<?php echo $url; ?>/img/emerald1.jpg" class="gallery-one__popup img-popup"><i class="icon icon-Search"></i></a>
                            </div><!-- /.gallery-one__content -->
                        </div><!-- /.gallery-one__single -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <div class="gallery-one__single">
                            <div class="gallery-one__image">
                                <img src="<?php echo $url; ?>/img/emerald2.jpg" alt="<?php echo $name; ?>" />
                            </div><!-- /.gallery-one__image -->
                            <div class="gallery-one__content">
                                <a href="<?php echo $url; ?>/img/emerald2.jpg" class="gallery-one__popup img-popup"><i class="icon icon-Search"></i></a>
                            </div><!-- /.gallery-one__content -->
                        </div><!-- /.gallery-one__single -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <div class="gallery-one__single">
                            <div class="gallery-one__image">
                                <img src="<?php echo $url; ?>/img/emerald3.jpg" alt="<?php echo $name; ?>" />
                            </div><!-- /.gallery-one__image -->
                            <div class="gallery-one__content">
                                <a href="<?php echo $url; ?>/img/emerald3.jpg" class="gallery-one__popup img-popup"><i class="icon icon-Search"></i></a>
                            </div><!-- /.gallery-one__content -->
                        </div><!-- /.gallery-one__single -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <div class="gallery-one__single">
                            <div class="gallery-one__image">
                                <img src="<?php echo $url; ?>/img/emerald4.jpg" alt="<?php echo $name; ?>" />
                            </div><!-- /.gallery-one__image -->
                            <div class="gallery-one__content">
                                <a href="<?php echo $url; ?>/img/emerald4.jpg" class="gallery-one__popup img-popup"><i class="icon icon-Search"></i></a>
                            </div><!-- /.gallery-one__content -->
                        </div><!-- /.gallery-one__single -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <div class="gallery-one__single">
                            <div class="gallery-one__image">
                                <img src="<?php echo $url; ?>/img/emerald5.jpg" alt="<?php echo $name; ?>" />
                            </div><!-- /.gallery-one__image -->
                            <div class="gallery-one__content">
                                <a href="<?php echo $url; ?>/img/emerald5.jpg" class="gallery-one__popup img-popup"><i class="icon icon-Search"></i></a>
                            </div><!-- /.gallery-one__content -->
                        </div><!-- /.gallery-one__single -->
                    </div><!-- /.col-lg-4 -->


                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.gallery-one -->
        <section class="cta-two">
            <div class="container">
                <h2 class="cta-two__title">Have a Dental Problem : Call us at <a href="tel:<?php echo $phone; ?>" class="cta-two__highlight"><?php echo $phone; ?></a> or make an <a href="../booking" class="cta-two__highlight cta-two__link">Appointment</a></h2><!-- /.cta-two__title -->
            </div><!-- /.container -->
        </section><!-- /.cta-two -->

        <footer class="site-footer">
            <div class="container ">
                <div class="footer-col">
                    <div class="footer-widget footer-widget__about">
                        <a class="footer-widget__logo" href="<?php echo $url; ?>"><img src="<?php echo $url; ?>/images/resources/logo-1-2.png" alt="Awesome Image" /></a>
                        <p class="footer-widget__text">Crown Dental provides high-level dental services,
                            offers comprehensive solutions for the treatment of any dental disease.</p>
                        <a href="../about/" class="footer-widget__link">Know more...</a>
                    </div><!-- /.footer-widget -->
                    <div class="footer-widget">
                        <h3 class="footer-widget__title">
                            Useful Links
                        </h3>
                        <ul class="footer-widget__links-list">
                            <li class="footer-widget__links-list-item"> <a href="../index.php">Home</a> </li><!-- /.footer-widget__links-list-item -->
                            <li class="footer-widget__links-list-item"> <a href="../about/">About Us</a> </li><!-- /.footer-widget__links-list-item -->
                            <li class="footer-widget__links-list-item"> <a href="../specialities/">Specialities</a> </li>
                            <li class="footer-widget__links-list-item"> <a href="../booking">Book an Appointment</a> </li><!-- /.footer-widget__links-list-item -->
                            <li class="footer-widget__time-list-item"> <a href="../medical-tourism/">Medical Tourism</a></li><!-- /.footer-widget__time-list-item -->
                            <li class="footer-widget__links-list-item"> <a href="../photo-gallery">Photo Gallery</a> </li><!-- /.footer-widget__links-list-item -->
                            <li class="footer-widget__links-list-item"> <a href="../contact-us">Contact Us</a> </li>
                        </ul><!-- /.footer-widget__links-list -->
                    </div><!-- /.footer-widget -->
                    <div class="footer-widget">
                        <h3 class="footer-widget__title">
                            Time Schedule
                        </h3>
                        <ul class="footer-widget__time-list">
                            <li class="footer-widget__time-list-item">Monday 10:00 am – 8:00 pm </li><!-- /.footer-widget__time-list-item -->
                            <li class="footer-widget__time-list-item">Tuesday 10:00 am – 8:00 pm </li><!-- /.footer-widget__time-list-item -->
                            <li class="footer-widget__time-list-item">Wednesday 10:00 am – 8:00 pm </li><!-- /.footer-widget__time-list-item -->
                            <li class="footer-widget__time-list-item">Thursday 10:00 am – 8:00 pm </li><!-- /.footer-widget__time-list-item -->
                            <li class="footer-widget__time-list-item">Friday 10:00 am – 8:00 pm</li>
                            <li class="footer-widget__time-list-item">Saturday 10:00 am – 8:00 pm</li><!-- /.footer-widget__time-list-item -->
                            <li class="footer-widget__time-list-item">Sunday : Prior Appointments</li><!-- /.footer-widget__time-list-item -->
                        </ul><!-- /.footer-widget__time-list -->
                    </div><!-- /.footer-widget -->
                    <div class="footer-widget">
                        <h3 class="footer-widget__title">
                            Get In Touch
                        </h3>
                        <ul class="footer-widget__time-list no-margin">
                            <li class="footer-widget__time-list-item"><?php echo $address; ?> Haryana - 121006 India.</li><!-- /.footer-widget__time-list-item -->
                            <!-- /.footer-widget__time-list-item -->
                            <li class="footer-widget__time-list-item">Phone : <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></li><!-- /.footer-widget__time-list-item -->
                            <li class="footer-widget__time-list-item">Email : <a href="mailto:<?php echo $email_id; ?>"><?php echo $email_id; ?></a></li><!-- /.footer-widget__time-list-item -->
                        </ul><!-- /.footer-widget__time-list -->
                        <div class="footer-widget__social">
                            <a href="https://www.facebook.com/crowndentalimplants/" target="blank"><i class="fa fa-facebook-f"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </div><!-- /.footer-widget__social -->
                    </div><!-- /.footer-widget -->
                </div><!-- /.footer-col -->
            </div><!-- /.container -->
            <div class="bottom-footer">
                <div class="container">
                    <hr class="bottom-footer__line">
                    <div class="bottom-footer__wrap">
                        <p class="bottom-footer__text">&copy; Copyright <?php echo $name; ?> - <?php echo date("Y"); ?> . All right reserved.</p><!-- /.bottom-footer__text -->
                        <p class="bottom-footer__text">Managed By <a href="https://gauravsinghigc.tech" target="_blank">GAURAVSINGHIGC</a></p><!-- /.bottom-footer__text -->
                    </div><!-- /.bottom-footer__wrap -->
                </div><!-- /.container -->
            </div><!-- /.bottom-footer -->
        </footer><!-- /.site-footer -->
    </div><!-- /.page-wrapper -->
    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>
    <!-- /.scroll-to-top -->
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/bootstrap-select.min.js"></script>
    <script src="../js/bootstrap-datepicker.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/theme.js"></script>
</body>

</html>