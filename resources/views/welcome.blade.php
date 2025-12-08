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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
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
                    <li><a href="#simulador">Simulador</a></li>
                    <li><a href="#contact">Contato</a></li>
                    @auth
                        <li><a href="{{ route('admin.dashboard') }}" style="color: #ffd700; font-weight: bold;">
                            <i class="bi bi-gear"></i> Admin
                        </a></li>
                    @else
                        <li><a href="{{ route('login') }}" style="color: #ccc; font-size: 0.9em;">
                            <i class="bi bi-lock"></i> Login
                        </a></li>
                    @endauth
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
            @if($banners->count() > 0)
                @if($banners->count() == 1)
                    {{-- Banner único --}}
                    @php $activeBanner = $banners->first(); @endphp
                    @if($activeBanner->link_url)
                        <a href="{{ $activeBanner->link_url }}" target="_blank">
                            <img class="img-fluid auto-mode" src="{{ asset('storage/' . $activeBanner->image_path) }}" alt="{{ $activeBanner->title ?? 'Banner' }}" data-aos="fade-in" />
                        </a>
                    @else
                        <img class="img-fluid auto-mode" src="{{ asset('storage/' . $activeBanner->image_path) }}" alt="{{ $activeBanner->title ?? 'Banner' }}" data-aos="fade-in" />
                    @endif
                @else
                    {{-- Múltiplos banners com carousel --}}
                    <div id="bannerCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
                        <div class="carousel-inner">
                            @foreach($banners as $index => $banner)
                                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                    @if($banner->link_url)
                                        <a href="{{ $banner->link_url }}" target="_blank">
                                            <img class="d-block w-100 img-fluid auto-mode" src="{{ asset('storage/' . $banner->image_path) }}" alt="{{ $banner->title ?? 'Banner' }}" data-aos="fade-in" />
                                        </a>
                                    @else
                                        <img class="d-block w-100 img-fluid auto-mode" src="{{ asset('storage/' . $banner->image_path) }}" alt="{{ $banner->title ?? 'Banner' }}" data-aos="fade-in" />
                                    @endif
                                </div>
                            @endforeach
                        </div>
                        
                        @if($banners->count() > 1)
                            <!-- Indicadores do carousel -->
                            <div class="carousel-indicators">
                                @foreach($banners as $index => $banner)
                                    <button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}" aria-current="{{ $index == 0 ? 'true' : 'false' }}" aria-label="Banner {{ $index + 1 }}"></button>
                                @endforeach
                            </div>
                            
                            <!-- Controles do carousel -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#bannerCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Anterior</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#bannerCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Próximo</span>
                            </button>
                        @endif
                    </div>
                @endif
            @else
                {{-- Fallback para o banner padrão caso não haja banners cadastrados --}}
                <a href="https://wa.link/cb4pu6" target="_blank">
                    <img class="img-fluid" src="{{URL('img/util/banner.png')}}" alt="Banner Padrão" data-aos="fade-in" />
                </a>
            @endif
        </section>
        <!-- End Hero Section -->

        <!-- Diferenciais Section -->
        <section id="diferenciais" class="diferenciais-section">
            <div class="container">
                <div class="section-title text-center" data-aos="fade-up">
                    <h2>Diferenciais Bocayuva Tintas</h2>
                </div>
                
                <div class="row gy-4">
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="diferencial-item text-center">
                            <div class="diferencial-icon">
                                <i class="bi bi-truck"></i>
                            </div>
                            <h4>Entrega rápida</h4>
                            <p>Nosso compromisso em trazer a mercadoria dentro do prazo</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="diferencial-item text-center">
                            <div class="diferencial-icon">
                                <i class="bi bi-hand-thumbs-up"></i>
                            </div>
                            <h4>Qualidade</h4>
                            <p>Trabalhamos com as melhores marcas e produtos do mercado</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="diferencial-item text-center">
                            <div class="diferencial-icon">
                                <i class="bi bi-list-ul"></i>
                            </div>
                            <h4>Variedade</h4>
                            <p>Variedade de produtos de pintura e revestimento para o seu projeto</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="diferencial-item text-center">
                            <div class="diferencial-icon">
                                <i class="bi bi-star"></i>
                            </div>
                            <h4>Preços e Condições</h4>
                            <p>Variedade de produtos de pintura e revestimento para o seu projeto</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

          <section id="portfolio" class="portfolio">
            <!--  Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Marcas parceiras</h2>
                <p>Conheça nossas marcas parceiras</p>
            </div>
            <!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper marcas-swiper">
                    <div class="swiper-wrapper">
                        @foreach($marcas as $key => $marca)
                            <div class="swiper-slide">
                                <div class="marca-item text-center">
                                    <a href="{{ $marca['link'] }}" target="_blank">
                                        <img src="{{ $marca['img'] }}" class="img-fluid marca-logo" alt="Logo {{ $key }}" />
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                    <!-- Add Navigation -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </section>
        <!-- End Diferenciais Section -->

        <!-- Serviços Section - Dashboard Page -->
        <section id="about" class="services">
            <!--  Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2 class="titulo-pincel-verde">Quem somos</h2>
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
                                @foreach($slides as $index => $slide)
                                <li data-target="#myCarousel" data-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}"></li>
                                @endforeach
                            </ol>
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                @foreach($slides as $index => $slide)
                                <div class="item {{ $index == 0 ? 'active' : '' }}">
                                    <img class="quem-somos" src="{{ asset('storage/' . $slide) }}" alt="Slide {{ $index + 1 }}">
                                </div>
                                @endforeach
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
                            <br /><br />
                            A Bocayuva Tintas nasceu em 1990, fruto do sonho de quatro filhos de Seu Zé, passando pelos desafios típicos de uma empresa familiar até se consolidar. Reaberta em 1996, em Planaltina/GO, com os sócios Renato e Luciano, a empresa expandiu para Planaltina/DF, onde a loja cresceu e se estabeleceu no endereço atual. Após a separação dos sócios, Renato fundou as unidades do Arapoanga/DF e de Formosa/GO. Em 2022, com sua partida, sua esposa Scheila e as filhas Julia e Mariana assumiram a gestão, mantendo viva a missão de oferecer atendimento personalizado, com condições acessíveis, e a visão de ser referência em tintas, guiados por princípios de ética, inovação, responsabilidade ambiental, compromisso social e orgulho do que fazem.
                        </p>
                    </div>
                    <!-- End Service Item -->
                </div>
            </div>
        </section>
        <!-- Stats Section - Dashboard Page -->

        <!-- Serviços Section - Dashboard Page -->
        <section id="services" class="services">
            <!--  Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2 class="titulo-pincel-verde">PINTOR PARCEIRO</h2>
                <p>
                    Conheça o programa PINTOR PARCEIRO da Bocayuva Tintas
                </p>
            </div>
            <!-- End Section Title -->

   
                    
                    <!-- Conteúdo à direita -->
                    <div class="col-lg-12" data-aos="fade-left" data-aos-delay="200">
                        <div class="pintor-parceiro-content">
                            <div class="row gy-4">
                                <div class="col-12">
                                    <div class="service-item d-flex">
                                        <div class="icon flex-shrink-0">
                                            <div class="numero-destaque">1</div>
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

                                <div class="col-12">
                                    <div class="service-item d-flex">
                                        <div class="icon flex-shrink-0">
                                            <div class="numero-destaque">2</div>
                                        </div>
                                        <div>
                                            <h4 class="title">
                                                QUAIS SÃO AS REGRAS?
                                            </h4>
                                            <p class="description">
                                                O pintor parceiro deve se cadastrar em pelo menos uma de nossas lojas. A cada compra efetuada que for indicada por ele, o pintor pode acumular pontos baseado em um percentual da compra. O resgate dos pontos só pode ser feito na loja em que o pintor é cadastrado, mas pode se cadastrar em mais de uma loja.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Service Item -->

                                <div class="col-12">
                                    <div class="service-item d-flex">
                                        <div class="icon flex-shrink-0">
                                            <div class="numero-destaque">3</div>
                                        </div>
                                        <div>
                                            <h4 class="title">
                                                COMO FAÇO PARA ME CADASTRAR?
                                            </h4>
                                            <p class="description">
                                                É simples! Pode cadastrar pelo formulário no <a target="_blank" href="https://forms.gle/ni9N9R8DTFoaxbtb9" class="link-destaque">link</a> ou se dirigir a uma de nossas lojas e solicitar o cadastro aos nossos vendedores.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Service Item -->

                                <div class="col-12">
                                    <div class="service-item d-flex">
                                        <div class="icon flex-shrink-0">
                                            <div class="numero-destaque">4</div>
                                        </div>
                                        <div>
                                            <h4 class="title">
                                                E SE EU TIVER MAIS DÚVIDAS?
                                            </h4>
                                            <p class="description">
                                                <a href="{{ asset('docs/regulamento.pdf')}}" download="regulamento.pdf" class="link-destaque">Consulte nosso regulamento</a>
                                                ou <a href="#contact" class="link-destaque">entre em contato com a gente!</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Service Item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Services Section -->

        <!-- End Features Section -->

        <!-- Portfolio Section - Dashboard Page -->
      
        <!-- End Portfolio Section -->

        <!-- Simulador de Cores Section -->
        <section id="simulador" class="services">
            <div class="container section-title" data-aos="fade-up">
                <h2>Simulador de Cores</h2>
                <p>Visualize como as cores ficarão em um ambiente</p>
            </div>

            <div class="container simulador-container" data-aos="fade-up" data-aos-delay="100">
                <div class="simulador-colors">
                    <label><strong>Escolha uma cor:</strong></label><br>
                    @foreach ($cores as $cor)
                        <button class="btn-cor" data-hex="{{ $cor['hex'] }}" title="{{ $cor['nome'] }}" style="background: {{ $cor['hex'] }};"></button>
                    @endforeach
                </div>

                <div class="simulador-canvas-wrapper">
                    <canvas id="canvas" width="1000" height="666" class="simulador-canvas"></canvas>
                </div>
            </div>

            <script>
                $(document).ready(function() {
                    var canvas = document.getElementById('canvas');
                    var ctx = canvas.getContext('2d');
                    var img = new Image();
                    img.src = "{{ asset('img/ambiente.jpg') }}";
                    img.onload = function() {
                        var aspectRatio = img.width / img.height;
                        canvas.height = canvas.width / aspectRatio;
                        ctx.drawImage(img, 0, 0, canvas.width, canvas.height);
                    };

                    $('.btn-cor').on('click', function() {
                        var cor = $(this).data('hex');
                        ctx.drawImage(img, 0, 0, canvas.width, canvas.height);
                        var x = canvas.width * 0.15;
                        var y = canvas.height * 0.25;
                        var w = canvas.width * 0.7;
                        var h = canvas.height * 0.4;
                        ctx.fillStyle = cor + '88';
                        ctx.fillRect(x, y, w, h);
                    });
                });
            </script>
        </section>

        <!-- End Contact Section -->
    </main>

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer-bocayuva">
        <div class="container">
            <div class="row align-items-center">
                <!-- Logo à esquerda -->
                <div class="col-lg-4 col-md-6">
                    <div class="footer-logo">
                        <img src="{{ asset('img/logo.png') }}" alt="Bocayuva Tintas" class="img-fluid">
                        <p class="footer-slogan">DE TODOS OS TIPOS DE TODAS AS CORES</p>
                    </div>
                </div>
                
                <!-- Informações de contato à direita -->
                <div class="col-lg-8 col-md-6">
                    <div class="footer-contact">
                        <div class="contact-item">
                            <h4>Bocayuva Tintas Planaltina</h4>
                            <p>SOF CONJUNTO D, LOTE 26, SETOR NORTE<br>PLANALTINA-DF</p>
                            <div class="contact-phone">
                                <img src="/img/util/whatsapp.png" alt="WhatsApp" class="whatsapp-icon">
                                <a href="https://wa.link/cb4pu6" target="_blank">(61) 99942-8137</a>
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <h4>Bocayuva Tintas Arapoanga</h4>
                            <p>Quadra 07, Conjunto D, Lote 01, Loja 01 Arapoanga-DF</p>
                            <div class="contact-phone">
                                <img src="/img/util/whatsapp.png" alt="WhatsApp" class="whatsapp-icon">
                                <a href="https://wa.link/hs63sq" target="_blank">(61) 99942-8138</a>
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <h4>Bocayuva Tintas Formosa</h4>
                            <p>Avenida Maestro João Luiz do Espírito Santo, N° 212,<br>Bairro Formosinha Formosa-GO</p>
                            <div class="contact-phone">
                                <img src="/img/util/whatsapp.png" alt="WhatsApp" class="whatsapp-icon">
                                <a href="https://wa.link/ixnqi6" target="_blank">(61) 3631-3355</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Modal existente mantido -->
        <div class="modal" id="startModal">
            <div class="modal-dialog">
                <div class="modal-content">
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
                </div>
            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>
                &copy; <span>Cópia não autorizada</span> <strong class="px-1">Bocayuva Tintas <?php echo date("Y"); ?> - <?php echo date('Y', strtotime("+2 years", strtotime(now()))); ?></strong>
                <span>Todos os direitos reservados</span>
            </p>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Scroll Top Button -->
    <a title="This is my tooltip" href="#contact" class="scroll-top d-flex align-items-center justify-content-center btn-whatsapp"> <img
            src="/img/util/whatsapp.png" class="img-fluid" alt="" /></a>

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

    <!-- Initialize Marcas Swiper -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const marcasSwiper = new Swiper('.marcas-swiper', {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    576: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    },
                    992: {
                        slidesPerView: 4,
                        spaceBetween: 40,
                    }
                }
            });
        });
    </script>


</body>

</html>
