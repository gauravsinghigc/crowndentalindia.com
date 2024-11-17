<?php require '../text.php'; ?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?> : Medical Tourism</title>
    <link rel="icon" type="image/png" href="../<?php echo $logo_src; ?>">
    <link rel="manifest" href="../images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo $url; ?>/<?php echo $logo_src; ?>">
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
                <h2 class="inner-banner__title">Medical Tourism</h2><!-- /.inner-banner__title -->
                <ul class="thm-breadcrumb">
                    <li class="thm-breadcrumb__item"><a class="thm-breadcrumb__link" href="../">Home</a></li>
                    <li class="thm-breadcrumb__item current"><a class="thm-breadcrumb__link" href="../medical-tourism">Medical Tourism</a></li>
                </ul><!-- /.thm-breadcrumb -->
            </div><!-- /.container -->
        </section><!-- /.inner-banner -->
        <section class="about-two about-two__about-page">
            <div class="container">
                <div class="block-title text-left">
                    <h2 class="block-title__title">Medical Tourism with <?php echo $name; ?> in India</h2><!-- /.block-title__title -->
                    <p class="block-title__text" style="text-align: justify;">India is recognized worldwide for its excellence in the medical sector. Medical Tourism in India has boosted significantly in past years and has also attained remarkable results. Offering quality healthcare at a reasonable cost, India’s medical tourism sector is growing at a fast pace. Innumerable people from diverse and remote corners of the world have benefited from the medical services provided in India. Interestingly, the count is still on!<br><br>

                        Making an effort in the noble cause of serving mankind, <?php echo $name; ?> India is a one-stop portal offering a wide range of medical treatments in India. Unbeatable expertise, world-class doctors, numerous years’ of experience and best hospitals help us to lead in the field of medical tourism in India. <?php echo $name; ?> India offers pocket-friendly treatment packages in India to the patient. Besides this, it is also ensured that the patient and accompanying person enjoy a comfortable stay in India that helps them to recuperate fast.<br> <br>

                        We are the preferred choice of the patients traveling to India to seek medical treatments. Our endeavors to deal with a large number of travelers and the services we provide have gained us the trust of the patients and our esteemed clients. We follow a customized approach to treat our visitors with utmost care. Be it any kind of treatment in India, you can simply rely upon us for complete healing solutions and quick recovery.<br><br>

                    <h4>Reasons to Visit India for Medical Tourism</h4>
                    India is the leader when it comes to medical tourism and that is without cause. Economic costs, better services, experienced medical experts, alternative treatments and many contribute towards the lure of India for medical purposes. Here are some points that state why one must visit India for medical tourism:<br><br>

                    <b>Lower cost treatments</b>:
                    The economic cost of medical treatments in India, in comparison to most other countries of the world is a major reason for growing medical tourism. In fact, you can generally expect to save at least 50% while receiving medical aid in India as compared to that in other countries.<br>

                    The medical treatment comprise the actual medical bills as well as travel expenses like airfares, hotel, food and other services. In fact, some treatments in India cost as less as 10% of the cost available in the developed countries of the world. While the medical care is of top quality, the prices are not very steep.<br><br>

                    <b>Medical Visa Availability:</b>
                    In India, Medical Visa is a special visa for all the medical tourists in the country. The 'M' Visa is easily available. In comparison to other developed countries, visas in India are given out in a rather short period of time. With the patient, two family members can also make the trip for treatment.<br>

                    The Indian government strives hard to make visa available to patient as soon as possible. To travel to India for medical purposes, visa is available in 72-100 hours. In addition, priority is given to the patients with the most life-threatening conditions and medical complications. Therefore, a long waiting period for most life-altering or life-saving procedures are almost non-existent. The initial duration of the visa is up to a year or the period of the treatment, whichever is less. Also, a maximum of three visits are valid in one year.<br><br>

                    <b>Immediate Medical Treatments:</b>
                    Moving on another major point to visit India for medical tourism is the availability of immediate treatments. Compared to the developed nations where patients have to wait weeks or months for treatments, let alone appointments for checkup; India prioritizes treatments and there is a non-existing waiting duration.<br>

                    For faster treatments in India, you must pay a visit. You can easily avail appointment for the specialists, get the procedure done as well as recuperate from the illness as soon as possible.<br><br>
                    <b>
                        World-class services & care:</b>
                    When it comes to health care, India has world class services. Hospitals provide premium care to each of their patients. One feels right at home with the hospitable care. The typical Western-style accommodations, custom-made dining, language translators, personal assistance and more excellent services are a part of medical treatments in India.<br><br>
                    <b>
                        Alternative Treatments:</b>
                    While medical tourism in India relies not juts of one form of medicine, they are open to alternative treatments. Natural holistic treatments in the country have for centuries lured tourists in huge numbers and till date they are true for health and wellness.<br>

                    India is the world's capital of Yoga and Ayurveda. Both of these ancient science of health and wellness are more than 5000 years old but still have fascinating solutions for many of the health problems. Though, it must be noted that these alternative treatments work best with medical treatment.
                    <br>
                    Ayurveda helps in rejuvenation of body, mind and soul that further speeds up your recovery. With use of herbs, oils and massages, Ayurveda works like magic for a health. Also, Yoga teaches a comprehensive way of overall health and wellness.
                    <br><br>

                    <h4>FAQs Medical India Tourism</h4>

                    <b>
                        Ques:</b> Why India is best for Medical Tourism?<br>
                    <b>Ans:</b> India has become one of the top medical tourism destinations in the world for many good reasons. India's healthcare tourism is growing at a huge scale due to the lower cost of medical treatments in India. The major surgery cost in India is almost 50% from countries like the UK, the USA, and other western countries. Hospitals in India offer the best medical practices and world-class services to the patients.<br><br>
                    <b>
                        Ques:</b> How to get a medical visa for India?<br>
                    <b>Ans:</b> The medical visa to India has become easier than ever as the government has introduced a visa for medical treatment in India for foreigners. Indian medical visa requirements and waiting period or the medical visa in India become non-existent as they give priority to patients with life-threatening diseases. You can apply for an E-medical visa India with <?php echo $name; ?> India.<br><br>
                    <b>
                        Ques:</b> What are the medical treatments offered in India?<br>
                    <b>Ans:</b> The medical treatments in India has a list of several well-planned treatment packages. The surgery cost in India is very less as compared to the western counties. The surgeries such as Kidney transplant, Liver transplant, Cancer treatment, organ transplant, cosmetic surgery and many more can be done at a much cheaper price. <?php echo $name; ?> India can help you to plan a detailed program with the pre and post-operative meetings with the doctors as well as your stay in India.
                    <br><br><b>
                        Ques: </b>Which are the top cities for Medical tourism in India?<br>
                    <b>Ans:</b> The top cities for Medical tourism in India are New Delhi, Gurgaon, Chennai, Mumbai, Hyderabad, etc. as these cities comprise some of the top hospitals of India that offers world-class facilities to the patients from all over the world. <?php echo $name; ?> India keeps company with some of the best hospitals in India which are equipped with advanced infrastructure and provide world-class facilities.<br><br>
                    <b>
                        Ques:</b> What are all treatment packages offered by <?php echo $name; ?> India?<br>
                    <b>Ans:</b> <?php echo $name; ?> India is linked with the top hospitals in India which are equipped with state-of-art medical equipment and provide the best medical treatment in India. </p><!-- /.block-title__text -->
                </div><!-- /.block-title -->


            </div><!-- /.container -->
        </section><!-- /.about-two -->
        <section class="about-three about-three__border-top">

            <div class="container">
                <hr>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="about-three__content">
                            <h2 class="about-three__title">Our Mission</h2>
                            <p class="about-three__text">We know there is more to good dental care than just the doctor. The support team and the facility make important contributions to each patient’s sense of comfort and well-being. We place enormous value on the entire experience - from the first contact through your new smile and beyond. We understand that folks often feel anxious when “going to the dentist”. Every member of our team is committed to making your experience with us as easy, secure and relaxed as possible.</p><!-- /.about-three__text -->
                        </div><!-- /.about-three__content -->
                    </div><!-- /.col-lg-12 -->

                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.about-three -->
        <section class="cta-two">
            <div class="container">
                <h2 class="cta-two__title">Have a Dental Problem : Call us at <a href="tel:<?php echo $phone; ?>" class="cta-two__highlight"><?php echo $phone; ?></a> or make an <a href="../booking" class="cta-two__highlight cta-two__link">Appointment</a></h2>
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
    <script src="../js/jquery.validate.min.js"></script>
    <script src="../js/theme.js"></script>
</body>

</html>