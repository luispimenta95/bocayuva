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
                    <li><a href="#hero" class="active">Home</a></li>
                    <li><a href="#about">Quem somos</a></li>
                    <li><a href="#services">Serviços</a></li>
                    <li><a href="#portfolio">Marcas parceiras</a></li>
                    <li><a href="#team">Nossos clientes</a></li>
                    <li><a href="#instagram">Nosso Instagram</a></li>

                    <li><a href="#contact">Contato</a></li>
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
            <img src="{{URL('img/logos/logo.png')}}" alt="" data-aos="fade-in" />
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <h2 data-aos="fade-up" data-aos-delay="100">Welcome to Our Website</h2>
                        <p data-aos="fade-up" data-aos-delay="200">We are team of talented designers making websites with Bootstrap</p>
                    </div>

                </div>

            </div>


        </section>
        <!-- End Hero Section -->



        <!-- Serviços Section - Dashboard Page -->
        <section id="about" class="services">
            <!--  Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Quem somos</h2>
                <p>
                    Conheça um pouco da nossa história
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
        <!-- Stats Section - Dashboard Page -->
        <section id="stats" class="stats">
            <img src="{{URL('img/logos/nome-vermelho.png')}}" alt="" data-aos="fade-in" />

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

        <!-- Serviços Section - Dashboard Page -->
        <section id="services" class="services">
            <!--  Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Serviços</h2>
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


                    <div id="produtos"> </div>
                    <!-- End Portfolio Container -->
                </div>
            </div>
        </section>
        <!-- End Portfolio Section -->



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
                <h2>Entre em contato</h2>
                <!-- <p>
                    Necessitatibus eius consequatur ex aliquid fuga eum quidem sint
                    consectetur velit
                </p> -->
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
                                    <p> <a href="https://wa.link/cb4pu6" target="_blank"> <img class="btn-wpp" src="/img/util/whatsapp.png" class="img-responsive" alt="" /> (61) 99942-8137</p></a>
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
                                    <p> <a href="https://wa.link/hs63sq" target="_blank"> <img class="btn-wpp" src="/img/util/whatsapp.png" class="img-responsive" alt="" /> (61) 99942-8138</p></a>
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
                                    <p> <a href="https://wa.link/ixnqi6" target="_blank"> <img class="btn-wpp" src="/img/util/whatsapp.png" class="img-responsive" alt="" /> (61) 3631-3355</p></a>
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
    <a href="#contact" class="scroll-top d-flex align-items-center justify-content-center btn-whatsapp"> <img src="/img/util/whatsapp.png" class="img-fluid" alt="" /></a>

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