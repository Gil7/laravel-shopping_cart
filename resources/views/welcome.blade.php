<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Trajes Chiapas</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" media="screen" title="no title">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="{{asset('/css/landing.css')}}" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="{{asset('/css/creative.css')}}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Trajes Chiapas</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">Acerca De</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Servicios</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Portafolio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contactanos</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">El lugar perfecto para adquirir un pedacito de Chiapas...</h1>
                <hr>
                <p>Busca, encuentra y compra el ejemplar que mas te guste!</p>

            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Tenemos lo que buscas...!</h2>
                    <hr class="light">
                    <p class="text-faded">Tenemos una amplia variedad de vestimentas que pudes adquirir de manera rápida, segura y fácil!</p>
                    <a href="{{route('user.signin')}}" class="page-scroll btn btn-default btn-xl sr-button">Iniciar Sesión!</a>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Estamos a tu servicio!</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-shopping-cart text-primary sr-icons"></i>
                        <h3>Compra en linea</h3>
                        <p class="text-muted">Elige lo que te gusta y compra.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-truck text-primary sr-icons"></i>
                        <h3>Envios a domicilio</h3>
                        <p class="text-muted">Contamos con envios a domicilio :) .</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-credit-card-alt text-primary sr-icons"></i>
                        <h3>Tarjeta de credito</h3>
                        <p class="text-muted">Paga con tu tarjeta y evita pagos extras!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter popup-gallery">
                <div class="col-lg-4 col-sm-6">
                    <a href="{{asset('/img/landing.jpg')}}" class="portfolio-box">
                        <img src="{{asset('/img/landing.jpg')}}" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Bienvenido a
                                </div>
                                <div class="project-name">
                                    Trajes Chiapas
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="{{asset('/img/1.jpg')}}" class="portfolio-box">
                        <img src="{{asset('/img/1.jpg')}}" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Bienvenido a
                                </div>
                                <div class="project-name">
                                    Trajes Chiapas
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="{{asset('/img/2.jpg')}}" class="portfolio-box">
                        <img src="{{asset('/img/2.jpg')}}" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Bienvenido a
                                </div>
                                <div class="project-name">
                                    Trajes Chiapas
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="{{asset('/img/4.jpg')}}" class="portfolio-box">
                        <img src="{{asset('/img/4.jpg')}}" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Bienvenido a
                                </div>
                                <div class="project-name">
                                    Trajes Chiapas
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="{{asset('/img/7.jpg')}}" class="portfolio-box">
                        <img src="{{asset('/img/7.jpg')}}" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Bienvenido a
                                </div>
                                <div class="project-name">
                                    Trajes Chiapas
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="{{asset('/img/6.jpeg')}}" class="portfolio-box">
                        <img src="{{asset('/img/6.jpeg')}}" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Bienvenido a
                                </div>
                                <div class="project-name">
                                    Trajes Chiapas
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>No lo pienses más!</h2>
                <a href="{{route('user.signup')}}" class="btn btn-default btn-xl sr-button">Registrate ahora!</a>
            </div>
        </div>
    </aside>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Contactanos!</h2>
                    <hr class="primary">
                    <p>Estas listo? Llamanos o envianos un correo, te responderemos lo más rápido posible!</p>
                </div>
                <div class="col-lg-3 col-lg-offset-1 text-center">
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                    <p>961-322-56-96</p>
                </div>
                <div class="col-lg-3 col-lg-offset-1 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><a href="mailto:your-email@your-domain.com">gilberto.mendez.santiz@gmail.com</a></p>
                </div>
                <div class="col-lg-3 col-lg-offset-1 text-center">
                    <i class="fa fa-facebook-official fa-3x sr-contact"></i>
                    <p><a href="">Trajes Chiapas</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script
			  src="https://code.jquery.com/jquery-1.12.4.js"
			  integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
			  crossorigin="anonymous"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script type="text/javascript" src="{{asset('/js/scrollreveal.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/popup.min.js')}}"></script>

    <!-- Theme JavaScript -->
    <script type="text/javascript" src="{{asset('/js/creative.min.js')}}"></script>

</body>

</html>
