<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Dashboard - Append Bootstrap Template</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Favicons -->
    <link href="{{ asset('img/favicon.png')}}" rel="icon" />
    <link href="{{ asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet" />
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('vendor/aos/aos.css')}}" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="{{ asset('css/main.css')}}" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="container-fluid d-flex align-items-center justify-content-between">
            <!-- Nav Menu -->
            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Dashboard</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="#instagram">Nosso Instagram</a></li>

                    <li><a href="#contact">Contact</a></li>
                </ul>

                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
            <!-- End Nav Menu -->
        </div>
    </header>
    <!-- End Header -->

    <main id="main">
        <!-- Hero Section - Dashboard Page -->
        <section id="hero" class="hero">
            <img src=" {{URL('img/hero-bg.jpg')}}" alt="" data-aos="fade-in" />
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <h2 data-aos="fade-up" data-aos-delay="100">Welcome to Our Website</h2>
                        <p data-aos="fade-up" data-aos-delay="200">We are team of talented designers making websites with Bootstrap</p>
                    </div>
                    <div class="col-lg-5">
                        <a href="#contact"> <button type="submit" class="bi bi-whatsapp"></button>
                        </a>
                    </div>
                </div>
            </div>


        </section>
        <!-- End Hero Section -->

        <!-- Clients Section - Dashboard Page -->
        <section id="clients" class="clients">
            <div class="container-fluid" data-aos="fade-up">
                <div class="row gy-4">
                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src=" {{URL('img/clients/client-1.png')}}" class="img-fluid" alt="" />
                    </div>
                    <!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src=" {{URL('img/clients/client-2.png')}}" class="img-fluid" alt="" />
                    </div>
                    <!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src=" {{URL('img/clients/client-3.png')}}" class="img-fluid" alt="" />
                    </div>
                    <!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src=" {{URL('img/clients/client-4.png')}}" class="img-fluid" alt="" />
                    </div>
                    <!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src=" {{URL('img/clients/client-5.png')}}" class="img-fluid" alt="" />
                    </div>
                    <!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src=" {{URL('img/clients/client-6.png')}}" class="img-fluid" alt="" />
                    </div>
                    <!-- End Client Item -->
                </div>
            </div>
        </section>
        <!-- End Clients Section -->

        <!-- About Section - Dashboard Page -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row align-items-xl-center gy-5">
                    <div class="col-xl-5 content">
                        <h3>About Us</h3>
                        <h2>Ducimus rerum libero reprehenderit cumque</h2>
                        <p>
                            Ipsa sint sit. Quis ducimus tempore dolores impedit et dolor
                            cumque alias maxime. Enim reiciendis minus et rerum hic non.
                            Dicta quas cum quia maiores iure. Quidem nulla qui assumenda
                            incidunt voluptatem tempora deleniti soluta.
                        </p>
                        <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                    </div>

                    <div class="col-xl-7">
                        <div class="row gy-4 icon-boxes">
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                                <div class="icon-box">
                                    <i class="bi bi-buildings"></i>
                                    <h3>Eius provident</h3>
                                    <p>
                                        Magni repellendus vel ullam hic officia accusantium ipsa
                                        dolor omnis dolor voluptatem
                                    </p>
                                </div>
                            </div>
                            <!-- End Icon Box -->

                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                                <div class="icon-box">
                                    <i class="bi bi-clipboard-pulse"></i>
                                    <h3>Rerum aperiam</h3>
                                    <p>
                                        Autem saepe animi et aut aspernatur culpa facere. Rerum
                                        saepe rerum voluptates quia
                                    </p>
                                </div>
                            </div>
                            <!-- End Icon Box -->

                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                                <div class="icon-box">
                                    <i class="bi bi-command"></i>
                                    <h3>Veniam omnis</h3>
                                    <p>
                                        Omnis perferendis molestias culpa sed. Recusandae quas
                                        possimus. Quod consequatur corrupti
                                    </p>
                                </div>
                            </div>
                            <!-- End Icon Box -->

                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                                <div class="icon-box">
                                    <i class="bi bi-graph-up-arrow"></i>
                                    <h3>Delares sapiente</h3>
                                    <p>
                                        Sint et dolor voluptas minus possimus nostrum. Reiciendis
                                        commodi eligendi omnis quideme lorenda
                                    </p>
                                </div>
                            </div>
                            <!-- End Icon Box -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->

        <!-- Stats Section - Dashboard Page -->
        <section id="stats" class="stats">
            <img src="{{URL('img/stats-bg.jpg')}}" alt="" data-aos="fade-in" />

            <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">
                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Clients</p>
                        </div>
                    </div>
                    <!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Projects</p>
                        </div>
                    </div>
                    <!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Hours Of Support</p>
                        </div>
                    </div>
                    <!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Workers</p>
                        </div>
                    </div>
                    <!-- End Stats Item -->
                </div>
            </div>
        </section>
        <!-- End Stats Section -->

        <!-- Services Section - Dashboard Page -->
        <section id="services" class="services">
            <!--  Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Services</h2>
                <p>
                    Necessitatibus eius consequatur ex aliquid fuga eum quidem sint
                    consectetur velit
                </p>
            </div>
            <!-- End Section Title -->

            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0">
                                <i class="bi bi-briefcase"></i>
                            </div>
                            <div>
                                <h4 class="title">
                                    <a href="services-details.html" class="stretched-link">Lorem Ipsum</a>
                                </h4>
                                <p class="description">
                                    Voluptatum deleniti atque corrupti quos dolores et quas
                                    molestias excepturi sint occaecati cupiditate non provident
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0">
                                <i class="bi bi-card-checklist"></i>
                            </div>
                            <div>
                                <h4 class="title">
                                    <a href="services-details.html" class="stretched-link">Dolor Sitema</a>
                                </h4>
                                <p class="description">
                                    Minim veniam, quis nostrud exercitation ullamco laboris nisi
                                    ut aliquip ex ea commodo consequat tarad limino ata
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0">
                                <i class="bi bi-bar-chart"></i>
                            </div>
                            <div>
                                <h4 class="title">
                                    <a href="services-details.html" class="stretched-link">Sed ut perspiciatis</a>
                                </h4>
                                <p class="description">
                                    Duis aute irure dolor in reprehenderit in voluptate velit
                                    esse cillum dolore eu fugiat nulla pariatur
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0">
                                <i class="bi bi-binoculars"></i>
                            </div>
                            <div>
                                <h4 class="title">
                                    <a href="services-details.html" class="stretched-link">Magni Dolores</a>
                                </h4>
                                <p class="description">
                                    Excepteur sint occaecat cupidatat non proident, sunt in
                                    culpa qui officia deserunt mollit anim id est laborum
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0">
                                <i class="bi bi-brightness-high"></i>
                            </div>
                            <div>
                                <h4 class="title">
                                    <a href="services-details.html" class="stretched-link">Nemo Enim</a>
                                </h4>
                                <p class="description">
                                    At vero eos et accusamus et iusto odio dignissimos ducimus
                                    qui blanditiis praesentium voluptatum deleniti atque
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0">
                                <i class="bi bi-calendar4-week"></i>
                            </div>
                            <div>
                                <h4 class="title">
                                    <a href="services-details.html" class="stretched-link">Eiusmod Tempor</a>
                                </h4>
                                <p class="description">
                                    Et harum quidem rerum facilis est et expedita distinctio.
                                    Nam libero tempore, cum soluta nobis est eligendi
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Item -->
                </div>
            </div>
        </section>
        <!-- End Services Section -->

        <!-- Features Section - Dashboard Page -->
        <section id="features" class="features">
            <!--  Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Features</h2>
                <p>
                    Necessitatibus eius consequatur ex aliquid fuga eum quidem sint
                    consectetur velit
                </p>
            </div>
            <!-- End Section Title -->

            <div class="container">
                <div class="row gy-4 align-items-center features-item">
                    <div class="col-lg-5 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                        <h3>Corporis temporibus maiores provident</h3>
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                            aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat non proident.
                        </p>
                        <a href="#" class="btn btn-get-started">Get Started</a>
                    </div>
                    <div class="col-lg-7 order-1 order-lg-2 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                        <div class="image-stack">
                            <img src=" {{URL('img/features-light-1.jpg')}}" alt="" class="stack-front" />
                            <img src=" {{URL('img/features-light-2.jpg')}}" alt="" class="stack-back" />
                        </div>
                    </div>
                </div>
                <!-- Features Item -->

                <div class="row gy-4 align-items-stretch justify-content-between features-item">
                    <div class="col-lg-6 d-flex align-items-center features-img-bg" data-aos="zoom-out">
                        <img src=" {{URL('img/features-light-3.jpg')}}" class="img-fluid" alt="" />
                    </div>
                    <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
                        <h3>Sunt consequatur ad ut est nulla</h3>
                        <p>
                            Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus
                            quia minima quod. Sunt saepe odit aut quia voluptatem hic
                            voluptas dolor doloremque.
                        </p>
                        <ul>
                            <li>
                                <i class="bi bi-check"></i>
                                <span>Ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</span>
                            </li>
                            <li>
                                <i class="bi bi-check"></i><span>
                                    Duis aute irure dolor in reprehenderit in voluptate
                                    velit.</span>
                            </li>
                            <li>
                                <i class="bi bi-check"></i>
                                <span>Facilis ut et voluptatem aperiam. Autem soluta ad
                                    fugiat</span>.
                            </li>
                        </ul>
                        <a href="#" class="btn btn-get-started align-self-start">Get Started</a>
                    </div>
                </div>
                <!-- Features Item -->
            </div>
        </section>
        <!-- End Features Section -->

        <!-- Portfolio Section - Dashboard Page -->
        <section id="portfolio" class="portfolio">
            <!--  Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Marcas parceiras</h2>
                <p>Conheça nossas marcas parceiras</p>
            </div>
            <!-- End Section Title -->

            <div class="container">
                <div class="isotope-layout" data-default-filter="<?php echo '.' . $dados['categoriaPrincipal'] ?>" data-layout="masonry" data-sort="original-order">
                    <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                        <?php
                        $classe = 'filtros ';
                        foreach ($dados['categorias'] as $categoria) {
                            if ($categoria->nome_categoria == $dados['categoriaPrincipal']) {
                                $classe .= ' filter-active';
                            } else {
                                $classe = 'filtros ';
                            } ?>
                            <li id="<?php echo $categoria->id ?>" onclick="clickCircle(this)" data-filter=" <?php echo '.' . $categoria->nome_categoria ?>" class=" <?php echo $classe ?>"><?php echo $categoria->nome_categoria ?></li>

                        <?php } ?>
                    </ul>
                    <!-- End Portfolio Filters -->


                    <div id="produtos" class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                        <!--    <div class="col-lg-4 col-md-6 portfolio-item isotope-item Teste">
                            <img src=" {{URL('img/masonry-portfolio/masonry-portfolio-1.jpg')}}" class="img-fluid" alt="" />
                            <div class="portfolio-info">
                                <h4>App 1</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="{{URL('img/masonry-portfolio/masonry-portfolio-1.jpg')}}" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                        !-->
                        <!-- End Portfolio Item -->


                        <!--

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item Teste">
                            <img src="{{URL('img/masonry-portfolio/masonry-portfolio-4.jpg')}}" class="img-fluid" alt="" />
                            <div class="portfolio-info">
                                <h4>App 2</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="{{URL('img/masonry-portfolio/masonry-portfolio-4.jpg')}}" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                        -->
                        <!-- End Portfolio Item -->
                        <!--
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item Teste">
                        <img src="{{URL('img/masonry-portfolio/masonry-portfolio-8.jpg')}}" class="img-fluid" alt="" />
                        <div class="portfolio-info">
                            <h4>App 3</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="{{URL('img/masonry-portfolio/masonry-portfolio-8.jpg')}}" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                    !-->
                        <!-- End Portfolio Item -->

                    </div>
                    <!-- End Portfolio Container -->
                </div>
            </div>
        </section>
        <!-- End Portfolio Section -->

        <!-- Pricing Section - Dashboard Page -->
        <section id=" pricing" class="pricing">
            <!--  Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Pricing</h2>
                <p>
                    Necessitatibus eius consequatur ex aliquid fuga eum quidem sint
                    consectetur velit
                </p>
            </div>
            <!-- End Section Title -->

            <div class="container" data-aos="zoom-in" data-aos-delay="100">
                <div class="row g-4">
                    <div class="col-lg-4">
                        <div class="pricing-item">
                            <h3>Free Plan</h3>
                            <div class="icon">
                                <i class="bi bi-box"></i>
                            </div>
                            <h4><sup>$</sup>0<span> / month</span></h4>
                            <ul>
                                <li>
                                    <i class="bi bi-check"></i>
                                    <span>Quam adipiscing vitae proin</span>
                                </li>
                                <li>
                                    <i class="bi bi-check"></i>
                                    <span>Nec feugiat nisl pretium</span>
                                </li>
                                <li>
                                    <i class="bi bi-check"></i>
                                    <span>Nulla at volutpat diam uteera</span>
                                </li>
                                <li class="na">
                                    <i class="bi bi-x"></i>
                                    <span>Pharetra massa massa ultricies</span>
                                </li>
                                <li class="na">
                                    <i class="bi bi-x"></i>
                                    <span>Massa ultricies mi quis hendrerit</span>
                                </li>
                            </ul>
                            <div class="text-center">
                                <a href="#" class="buy-btn">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Pricing Item -->

                    <div class="col-lg-4">
                        <div class="pricing-item featured">
                            <h3>Business Plan</h3>
                            <div class="icon">
                                <i class="bi bi-rocket"></i>
                            </div>

                            <h4><sup>$</sup>29<span> / month</span></h4>
                            <ul>
                                <li>
                                    <i class="bi bi-check"></i>
                                    <span>Quam adipiscing vitae proin</span>
                                </li>
                                <li>
                                    <i class="bi bi-check"></i>
                                    <span>Nec feugiat nisl pretium</span>
                                </li>
                                <li>
                                    <i class="bi bi-check"></i>
                                    <span>Nulla at volutpat diam uteera</span>
                                </li>
                                <li>
                                    <i class="bi bi-check"></i>
                                    <span>Pharetra massa massa ultricies</span>
                                </li>
                                <li>
                                    <i class="bi bi-check"></i>
                                    <span>Massa ultricies mi quis hendrerit</span>
                                </li>
                            </ul>
                            <div class="text-center">
                                <a href="#" class="buy-btn">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Pricing Item -->

                    <div class="col-lg-4">
                        <div class="pricing-item">
                            <h3>Developer Plan</h3>
                            <div class="icon">
                                <i class="bi bi-send"></i>
                            </div>
                            <h4><sup>$</sup>49<span> / month</span></h4>
                            <ul>
                                <li>
                                    <i class="bi bi-check"></i>
                                    <span>Quam adipiscing vitae proin</span>
                                </li>
                                <li>
                                    <i class="bi bi-check"></i>
                                    <span>Nec feugiat nisl pretium</span>
                                </li>
                                <li>
                                    <i class="bi bi-check"></i>
                                    <span>Nulla at volutpat diam uteera</span>
                                </li>
                                <li>
                                    <i class="bi bi-check"></i>
                                    <span>Pharetra massa massa ultricies</span>
                                </li>
                                <li>
                                    <i class="bi bi-check"></i>
                                    <span>Massa ultricies mi quis hendrerit</span>
                                </li>
                            </ul>
                            <div class="text-center">
                                <a href="#" class="buy-btn">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Pricing Item -->
                </div>
            </div>
        </section>
        <!-- End Pricing Section -->

        <!-- Faq Section - Dashboard Page -->
        <section id="faq" class="faq">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="content px-xl-5">
                            <h3>
                                <span>Frequently Asked </span><strong>Questions</strong>
                            </h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Duis aute irure dolor in reprehenderit
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                        <div class="faq-container">
                            <div class="faq-item faq-active">
                                <h3>
                                    <span class="num">1.</span>
                                    <span>Non consectetur a erat nam at lectus urna duis?</span>
                                </h3>
                                <div class="faq-content">
                                    <p>
                                        Feugiat pretium nibh ipsum consequat. Tempus iaculis urna
                                        id volutpat lacus laoreet non curabitur gravida. Venenatis
                                        lectus magna fringilla urna porttitor rhoncus dolor purus
                                        non.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>
                            <!-- End Faq item-->

                            <div class="faq-item">
                                <h3>
                                    <span class="num">2.</span>
                                    <span>Feugiat scelerisque varius morbi enim nunc faucibus a
                                        pellentesque?</span>
                                </h3>
                                <div class="faq-content">
                                    <p>
                                        Dolor sit amet consectetur adipiscing elit pellentesque
                                        habitant morbi. Id interdum velit laoreet id donec
                                        ultrices. Fringilla phasellus faucibus scelerisque
                                        eleifend donec pretium. Est pellentesque elit ullamcorper
                                        dignissim. Mauris ultrices eros in cursus turpis massa
                                        tincidunt dui.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>
                            <!-- End Faq item-->

                            <div class="faq-item">
                                <h3>
                                    <span class="num">3.</span>
                                    <span>Dolor sit amet consectetur adipiscing elit
                                        pellentesque?</span>
                                </h3>
                                <div class="faq-content">
                                    <p>
                                        Eleifend mi in nulla posuere sollicitudin aliquam ultrices
                                        sagittis orci. Faucibus pulvinar elementum integer enim.
                                        Sem nulla pharetra diam sit amet nisl suscipit. Rutrum
                                        tellus pellentesque eu tincidunt. Lectus urna duis
                                        convallis convallis tellus. Urna molestie at elementum eu
                                        facilisis sed odio morbi quis
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>
                            <!-- End Faq item-->

                            <div class="faq-item">
                                <h3>
                                    <span class="num">4.</span>
                                    <span>Ac odio tempor orci dapibus. Aliquam eleifend mi in
                                        nulla?</span>
                                </h3>
                                <div class="faq-content">
                                    <p>
                                        Dolor sit amet consectetur adipiscing elit pellentesque
                                        habitant morbi. Id interdum velit laoreet id donec
                                        ultrices. Fringilla phasellus faucibus scelerisque
                                        eleifend donec pretium. Est pellentesque elit ullamcorper
                                        dignissim. Mauris ultrices eros in cursus turpis massa
                                        tincidunt dui.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>
                            <!-- End Faq item-->

                            <div class="faq-item">
                                <h3>
                                    <span class="num">5.</span>
                                    <span>Tempus quam pellentesque nec nam aliquam sem et tortor
                                        consequat?</span>
                                </h3>
                                <div class="faq-content">
                                    <p>
                                        Molestie a iaculis at erat pellentesque adipiscing
                                        commodo. Dignissim suspendisse in est ante in. Nunc vel
                                        risus commodo viverra maecenas accumsan. Sit amet nisl
                                        suscipit adipiscing bibendum est. Purus gravida quis
                                        blandit turpis cursus in
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>
                            <!-- End Faq item-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Faq Section -->

        <!-- Team Section - Dashboard Page -->
        <section id="team" class="team">
            <!--  Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Nossos Clientes</h2>
                <p>
                    Necessitatibus eius consequatur ex aliquid fuga eum quidem sint
                    consectetur velit
                </p>
            </div>
            <!-- End Section Title -->

            <div class="container">
                <div class="row gy-5">

                    <?php foreach ($dados['reformas'] as $reforma) { ?>
                        <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="200">
                            <div class="member-img">
                                <img id="imgReforma" src="/img/reformas/{{ $reforma->imagem }}" class="img-fluid" alt="" />
                                <div class="social">
                                    <a id="btnImg"><i class="bi bi-card-image"></i></a>

                                </div>
                            </div>
                            <div class="member-info text-center">
                                <h4><?php echo $reforma->propietario ?></h4>
                                <p>
                                    <?php echo $reforma->descricao ?>
                                </p>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- End Team Member -->
                </div>
            </div>
        </section>

        <section id="instagram" class="team">
            <!--  Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Nossas postagens</h2>
                <p>
                    Acompanhe nosso Instagram
                </p>
            </div>
            <!-- End Section Title -->

            <div class="container">
                <div class="row gy-5">

                    <?php foreach ($dados['posts'] as $post) { ?>
                        <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="200">
                            <div class="member-img">
                                <img id="imgReforma" src="/img/posts/{{ $post->imagem }}" class="img-fluid" alt="" />
                                <div class="social">
                                    <a href="<?php echo $post->link ?>" target="_blank" id="btnImg"><i class="bi bi-card-image"></i></a>

                                </div>
                            </div>

                        </div>
                    <?php } ?>
                    <!-- End Team Member -->
                </div>
            </div>
        </section>
        <!-- End Team Section -->

        <!-- Call-to-action Section - Dashboard Page -->

        <!-- End Call-to-action Section -->



        <!-- Contact Section - Dashboard Page -->
        <section id="contact" class="contact">
            <!--  Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <p>
                    Necessitatibus eius consequatur ex aliquid fuga eum quidem sint
                    consectetur velit
                </p>
            </div>
            <!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-12">
                    <div class="col-lg-12">
                        <div class="row gy-4">
                            <div class="col-md-4">
                                <div class="info-item" data-aos="fade" data-aos-delay="200">
                                    <h3 class="text-center">Bocayuva Tintas Planaltina</h3>
                                    <p> <i class="bi bi-house-door-fill"></i> Sof Conjunto D, Lotes 26/28, Setor Norte, Setor de Oficinas</p>
                                    <br><br>
                                    <p> <i class="bi bi-geo-alt"></i> Planaltina-DF, 73.340-040</p>
                                    <br><br>
                                    <p> <i class="bi bi-telephone"></i> (61) 99999-0000</p>
                                </div>
                            </div>
                            <!-- End Info Item -->

                            <div class="col-md-4">
                                <div class="info-item" data-aos="fade" data-aos-delay="300">
                                    <h3 class="text-center">Bocayuva Tintas Arapoangas</h3>
                                    <p> <i class="bi bi-house-door-fill"></i>Quadra 07, Conjunto D, Lote 01, Loja 01</p>
                                    <br><br>
                                    <p> <i class="bi bi-geo-alt"></i> Arapoangas-DF, 73.368-074</p>
                                    <br><br>
                                    <p> <i class="bi bi-telephone"></i> (61) 99999-0000</p>
                                </div>
                            </div>
                            <!-- End Info Item -->

                            <div class="col-md-4">
                                <div class="info-item" data-aos="fade" data-aos-delay="400">
                                    <h3 class="text-center">Bocayuva Tintas Formosa</h3>
                                    <p> <i class="bi bi-house-door-fill"></i>Avenida Maestro João Luiz do Espírito Santo, N° 212, Bairro Formosinha</p>
                                    <br><br>
                                    <p> <i class="bi bi-geo-alt"></i> Formosa-GO, 73.813-120</p>
                                    <br><br>
                                    <p> <i class="bi bi-telephone"></i> (61) 99999-0000</p>
                                </div>
                            </div>
                            <!-- End Info Item -->


                            <!-- End Info Item -->
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!-- End Contact Section -->
    </main>

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">


        <div class="container copyright text-center mt-4">
            <p>
                &copy; <span>Cópia não autorizada</span> <strong class="px-1">Bocayuva Tintas <?php echo date("Y"); ?> - <?php echo date('Y', strtotime("+2 years", strtotime(now()))); ?></strong>
                <span>Todos os direitos reservados</span>

        </div>
    </footer>
    <!-- End Footer -->

    <!-- Scroll Top Button -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/reformas/script.js') }}" defer></script>
    <script src="{{ asset('js/index/index.js') }}" defer></script>


</body>

</html>