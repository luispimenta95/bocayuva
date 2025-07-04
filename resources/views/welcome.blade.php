<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZYGTSXSDJ0"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-ZYGTSXSDJ0');
    </script>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Bocayuva Tintas</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Favicons -->
    <link href="{{ asset('img/logo.png')}}" rel="icon" />
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
        <section id="hero">
            <img class="img-fluid" src="{{URL('img/util/capa.png')}}" alt="" data-aos="fade-in" />

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
                <div class="row ">
                    <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <?php
                                $classeBtn = "";
                                for ($i = 1; $i <= $dados['qtdImgSlides']; $i++) {
                                    if ($i == 1) {
                                        $classeBtn = "active";
                                    } else {
                                        $classeBtn = "";
                                    }
                                ?>

                                    <li data-target="#myCarousel" data-slide-to="<?php echo $i ?>" class=<?php echo $classeBtn ?>>
                                    <?php } ?>
                            </ol>
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="quem-somos" src="{{URL('img/slide/1.jpg')}}">
                                </div>
                                <?php for ($i = 2; $i <= $dados['qtdImgSlides']; $i++) { ?>
                                    <div class="item">

                                        <img class="quem-somos" src="{{ URL('img/slide/' . $i . '.jpg') }}" alt="Image {{ $i }}">
                                    </div>
                                <?php } ?>

                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <!-- End Service Item -->
                    <div class="col-lg-12" data-aos="fade-up" data-aos-delay="200">
                        <p class="description text-justify">
                            <br><br>
                            A Bocayuva Tintas nasceu em 1990, fruto do sonho de quatro filhos de Seu Zé, passando pelos desafios típicos de uma empresa familiar até se consolidar. Reaberta em 1996, em Planaltina/GO, com os sócios Renato e Luciano, a empresa expandiu para Planaltina/DF, onde a loja cresceu e se estabeleceu no endereço atual. Após a separação dos sócios, Renato fundou as unidades do Arapoanga/DF e de Formosa/GO. Em 2022, com sua partida, sua esposa Scheila e as filhas Julia e Mariana assumiram a gestão, mantendo viva a missão de oferecer atendimento personalizado, com condições acessíveis, e a visão de ser referência em tintas, guiados por princípios de ética, inovação, responsabilidade ambiental, compromisso social e orgulho do que fazem.                        </p>
                        </p>
                    </div>
                    <!-- End Service Item -->




                    <!-- End Service Item -->
                </div>
            </div>
        </section>
        <!-- Stats Section - Dashboard Page -->


        <!-- Serviços Section - Dashboard Page -->
        <section id="services" class="services">
            <!--  Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>PINTOR PARCEIRO</h2>
                <p>
                    Conheça o programa PINTOR PARCEIRO da Bocayuva Tintas
                </p>
            </div>
            <!-- End Section Title -->

            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0">
                                <i class="bi bi-check"></i>
                            </div>
                            <div>
                                <h4 class="title">
                                    O QUE É O PROGRAMA PINTOR PARCEIRO?
                                </h4>
                                <p class="description">
                                    É o programa fidelidade em que o pintor cadastrado pode acumular pontos e trocá-los por descontos em produtos. Além disso, o pintor parceiro tem acesso a cursos gratuitos oferecidos pelos fornecedores parceiros da Bocayuva Tintas.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0">
                                <i class="bi bi-check"></i>
                            </div>
                            <div>
                                <h4 class="title">
                                    Quais são as regras?
                                </h4>
                                <p class="description">
                                    O pintor parceiro deve se cadastrar em pelo menos uma de nossas lojas. A cada compra efetuada que for indicada por ele, o pintor pode acumular pontos baseado em um percentual da compra. O resgate dos pontos só pode ser feito na loja em que o pintor é cadastrado, mas pode se cadastrar em mais de uma loja.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0">
                                <i class="bi bi-check"></i>
                            </div>
                            <div>
                                <h4 class="title">
                                    Como faço para me cadastrar?
                                </h4>
                                <p class="description">
                                    É simples! Pode cadastrar pelo formulário no <a target="_blank" href="https://forms.gle/ni9N9R8DTFoaxbtb9">link</a> ou se dirigir a uma de nossas lojas e solicitar o cadastro aos nossos vendedores.

                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0">
                                <i class="bi bi-check"></i>
                            </div>
                            <div>
                                <h4 class="title">
                                    4. E se eu tiver mais dúvidas? </h4>
                                <p class="description">
                                    <a href="{{ asset('docs/regulamento.pdf')}}" download="regulamento.pdf">Consulte nosso regulamento</a>
                                    ou <a href="#contact">entre em contato com a gente!</a>
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
                <?php foreach ($dados['marcas'] as $key => $val) {
                    $img = $val["img"];
                    $link = $val["link"];

                ?>
                    <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="200">
                        <div class="member-img">
                            <a href="<?php echo $link ?>" target="_blank" id="btnImg">
                                <img id="imgReforma" src="{{$img }}" class="img-fluid" alt="" />
                            </a>
                        </div>

                    </div>
                <?php } ?>
            </div>
        </section>
        <!-- End Portfolio Section -->
<!--
        <section id="instagram" class="team">
            <div class="container section-title" data-aos="fade-up">
                <h2>Nossas postagens</h2>
                <p>
                    Acompanhe nosso Instagram
                </p>
            </div>

            <div class="container">
                <div class="row">

                    <?php 
                    /*
                    foreach ($dados['posts'] as $post) {

                        $caption = $post["caption"];
                        $permalink = $post["permalink"];
                        $media_type = $post["media_type"];

                        if ($media_type == "VIDEO") {
                            $media_url = $post["thumbnail_url"];
                        } else {
                            $media_url = $post["media_url"];
                        }
                    ?>
                        <div class="col-md-4">
                            <a href="<?php echo $permalink ?>" target="_blank">

                                <div class="thumbnail">

                                    <img src="<?php echo $media_url; ?>" loading="lazy" alt="<?php echo $caption; ?>">
                                    <div class="caption">
                                        <p><?php echo $caption; ?></p>
                                    </div>
                            </a>
                        </div>
                </div>
            <?php }*/ ?>
            </div>
            </div>
        </section>



                -->
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
                                    <br>
                                    <p> <a href="https://maps.app.goo.gl/7hteyiKajCRLDaYG6?g_st=iw" target="_blank"><i class="bi bi-geo-alt"></i> SOF CONJUNTO D, LOTE 26, SETOR NORTE PLANALTINA-DF</p></a>

                                    <br>
                                    <p> <a href="https://wa.link/cb4pu6" target="_blank"> <img class="btn-wpp" src="/img/util/whatsapp.png" class="img-responsive" alt="" /> (61) 99942-8137</p></a>
                                </div>
                            </div>
                            <!-- End Info Item -->

                            <div class="col-md-4">
                                <div class="info-item" data-aos="fade" data-aos-delay="300">
                                    <h3 class="text-center">Bocayuva Tintas Arapoanga</h3>
                                    <br>
                                    <p class="text-uppercase"><a href="https://maps.app.goo.gl/4ie5SfJWRjGas9PV8?g_st=iw" target="_blank"> <i class="bi bi-geo-alt"></i>Quadra 07, Conjunto D, Lote 01, Loja 01 Arapoanga-DF</p></a>

                                    <br>
                                    <p> <a href="https://wa.link/hs63sq" target="_blank"> <img src="/img/util/whatsapp.png" class="btn-wpp" alt="" /> (61) 99942-8138</p></a>
                                </div>
                            </div>
                            <!-- End Info Item -->

                            <div class="col-md-4">
                                <div class="info-item" data-aos="fade" data-aos-delay="400">
                                    <h3 class="text-center">Bocayuva Tintas Formosa</h3>
                                    <br>
                                    <p class="text-uppercase"><a href="https://maps.app.goo.gl/G2cEVMAgr9Ak1Jox8?g_st=iw" target="_blank"> <i class="bi bi-geo-alt"></i>Avenida Maestro João Luiz do Espírito Santo, N° 212, Bairro Formosinha Formosa-GO</p></a>

                                    <br>
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
        <div class="modal" id="startModal">
            <div class="modal-dialog">
                <div class="modal-content">



                    <!-- Modal body -->
                    <div class="modal-header">
                        <button type="button" class="btn-close btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                            <a id="btnModal" href="#contact"> <img class="img-fluid" src="img/util/img-modal.png" alt="" />
                            </a>
                        </p>
                    </div>

                    <!-- Modal footer -->


                </div>
            </div>

            <div class="container copyright text-center mt-4">
                <p>
                    &copy; <span>Cópia não autorizada</span> <strong class="px-1">Bocayuva Tintas <?php echo date("Y"); ?> - <?php echo date('Y', strtotime("+2 years", strtotime(now()))); ?></strong>
                    <span>Todos os direitos reservados</span>

            </div>
    </footer>
    <!-- End Footer -->

    <!-- Scroll Top Button -->
    <a title="This is my tooltip" href="#contact" class="scroll-top d-flex align-items-center justify-content-center btn-whatsapp"> <img src="/img/util/whatsapp.png" class="img-fluid" alt="" /></a>

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