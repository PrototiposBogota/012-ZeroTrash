<!DOCTYPE html>
<!--
Landing page based on Pratt: http://blacktie.co/demo/pratt/
-->
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ZeroTrash - ">
    <meta name="author" content="Diego Aristizabal - Uninpahu">

    <meta property="og:title" content="ZeroTrash" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="ZeroTrash - " />
    <meta property="og:url" content="http://demo.adminlte.acacha.org/" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE.png" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x600.png" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x314.png" />
    <meta property="og:sitename" content="demo.adminlte.acacha.org" />
    <meta property="og:url" content="http://demo.adminlte.acacha.org" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@acachawiki" />
    <meta name="twitter:creator" content="@acacha1" />

    <title>ZeroTrash</title>

    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/all-landing.css') }}" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

</head>

<body data-spy="scroll" data-target="#navigation" data-offset="50">

<div id="app" v-cloak>
    <!-- Fixed navbar -->
    <div id="navigation" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><b>ZeroTrash</b></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#home" class="smoothscroll">Inicio</a></li>
                    <li><a href="#desc" class="smoothscroll">Descripción</a></li>
                    <li><a href="#showcase" class="smoothscroll">Galeria</a></li>
                    <li><a href="#contact" class="smoothscroll">Contacto</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">{{ trans('adminlte_lang::message.login') }}</a></li>
                        <li><a href="{{ url('/register') }}">Registrarse</a></li>
                    @else
                        <li><a href="/home">{{ Auth::user()->name }}</a></li>
                    @endif
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>


    <section id="home" name="home"></section>
    <div id="headerwrap">
        <div class="container">
            <div class="row centered">
                <div class="col-lg-12">
                    <h1> <b><a href="#">ZeroTrash</a></b></h1>
                    <h3>El <a href="#">Reto: </a> ¿Cómo podemos motivar a los habitantes de la localidad de <a href="#">chapinero</a> a recolectar adecuadamente las <a href="#">basuras</a>?</h3>
                    <h3><a href="{{ url('/register') }}" class="btn btn-lg btn-success">Ingresa y aprende</a></h3>

                </div>

                <div class="col-lg-2">
                    <h5>Mundo Sano</h5>
                    <p>"Reciclar es mas que una acción, es el valor de la responsabilidad por preservar los recursos naturales"</p>
                    <img class="hidden-xs hidden-sm hidden-md" src="{{ asset('/img/arrow1.png') }}">
                </div>
                <div class="col-lg-8">
                    <img class="img-responsive" src="{{ asset('/img/img03.jpg') }}" alt="">
                </div>
                <div class="col-lg-2">
                    <br>
                    <img class="hidden-xs hidden-sm hidden-md" src="{{ asset('/img/arrow2.png') }}">
                    <h5>Mundo Contaminado</h5>
                    <p>"No tendremos una sociedad si destruimos el medio mabiente"</p>
                </div>
            </div>
        </div> <!--/ .container -->
    </div><!--/ #headerwrap -->
    </section>

    <section id="desc" name="desc"></section>
    <!-- INTRO WRAP -->
    <div id="intro">
        <div class="container">
            <div class="row centered">
                <h1>PROYECTO GENERACIÓN DE CAPACIDADES EN EL ECOSISTEMA DIGITAL EN BOGOTÁ</h1>
                <br>
                <br>
                <div class="col-lg-4">
                    <img src="{{ asset('/img/intro01.png') }}" alt="">
                    <h3>RETO </h3>
                    <p>¿Cómo podemos rescatar y cultivar la ética de los ciudadanos? <a href="#"> </a></p>
                </div>
                <div class="col-lg-4">
                    <img src="{{ asset('/img/intro02.png') }}" alt="">
                    <h3>Situación</h3>
                    <p>La situación de la localidad parte de que Chapinero posee predios
                        con todas las estratificaciones socioeconómicas, lo que hace
                        suponer una población muy diversa en ingresos y características.
                        Esta variedad se ve incrementada por los diversos orígenes de los
                        habitantes de la zona.</p>
                </div>
                <div class="col-lg-4">
                    <img src="{{ asset('/img/intro03.png') }}" alt="">
                    <h3>Oportunidad/Problemática</h3>
                    <p>La problemática de la comunidad se origina en la escasa
                        formación en temas relacionados con la recolección de basuras y
                        su adecuado emplazamiento en los espacios destinados para tal
                        fin. Los habitantes de la zona no tienen suficiente información
                        sobre cómo seleccionar y disponer de las basuras.</p>
                </div>
            </div>
            <br>
            <hr>
        </div> <!--/ .container -->
    </div><!--/ #introwrap -->

    <!-- FEATURES WRAP -->
    <div id="features">
        <div class="container">
            <div class="row">
                <h1 class="centered">Proyecto generación de capacidades en el ecosistema digital en Bogotá</h1>
                <br>
                <br>
                <div class="col-lg-6 centered">
                    <img class="centered" src="{{ asset('/img/green.png') }}" alt="">
                </div>

                <div class="col-lg-6">
                    <h3>Entorno limpio</h3>
                    <br>
                    <!-- ACCORDION -->
                    <div class="accordion ac" id="accordion2">
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                                    RETO
                                </a>
                            </div><!-- /accordion-heading -->
                            <div id="collapseOne" class="accordion-body collapse in">
                                <div class="accordion-inner">
                                    <p>¿Cómo podemos rescatar y cultivar la ética de los ciudadanos?</p>
                                </div><!-- /accordion-inner -->
                            </div><!-- /collapse -->
                        </div><!-- /accordion-group -->
                        <br>

                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                                    Situación
                                </a>
                            </div>
                            <div id="collapseTwo" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <p>La situación de la localidad parte de que Chapinero posee predios
                                        con todas las estratificaciones socioeconómicas, lo que hace
                                        suponer una población muy diversa en ingresos y características.
                                        Esta variedad se ve incrementada por los diversos orígenes de los
                                        habitantes de la zona.</p>
                                </div><!-- /accordion-inner -->
                            </div><!-- /collapse -->
                        </div><!-- /accordion-group -->
                        <br>

                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                                    Oportunidad / Problemática
                                </a>
                            </div>
                            <div id="collapseThree" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <p>La problemática de la comunidad se origina en la escasa
                                        formación en temas relacionados con la recolección de basuras y
                                        su adecuado emplazamiento en los espacios destinados para tal
                                        fin. Los habitantes de la zona no tienen suficiente información
                                        sobre cómo seleccionar y disponer de las basuras.</p>
                                </div><!-- /accordion-inner -->
                            </div><!-- /collapse -->
                        </div><!-- /accordion-group -->
                        <br>

                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
                                    Expectativa / Alcance
                                </a>
                            </div>
                            <div id="collapseFour" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <p>La expectativa de los habitantes se basa en prever un escenario
                                        en el que se haga un eficiente uso de los recursos mediante el
                                        aprovechamiento de los residuos y la adecuada disposición de las
                                        basuras. Esto podría estar apoyado por medios de comunicación
                                        que promuevan estos hábitos de higiene con la ciudadanía.</p>
                                </div><!-- /accordion-inner -->
                            </div><!-- /collapse -->
                        </div><!-- /accordion-group -->
                        <br>
                    </div><!-- Accordion -->
                </div>
            </div>
        </div><!--/ .container -->
    </div><!--/ #features -->

    <section id="showcase" name="showcase">
        <div id="showcase">
            <div class="container">
                <div class="row">
                    <h1 class="centered">{{ trans('adminlte_lang::message.screenshots') }}</h1>
                    <br>
                    <div class="col-lg-8 col-lg-offset-2">
                        <div id="carousel-example-generic" class="carousel slide">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="{{ asset('/img/item-01.png') }}" alt="">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('/img/item-02.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <br>
            </div><!-- /container -->
        </div>
    </section>

    <section id="contact" name="contact">
        <div id="footerwrap">
            <div class="container">
                <div class="col-lg-5">
                    <h3>{{ trans('adminlte_lang::message.address') }}</h3>
                    <p>
                        Av. Greenville 987,<br/>
                        New York,<br/>
                        90873<br/>
                        United States
                    </p>
                </div>

                <div class="col-lg-7">
                    <h3>{{ trans('adminlte_lang::message.dropus') }}</h3>
                    <br>
                    <form role="form" action="#" method="post" enctype="plain">
                        <div class="form-group">
                            <label for="name1">{{ trans('adminlte_lang::message.yourname') }}</label>
                            <input type="name" name="Name" class="form-control" id="name1" placeholder="{{ trans('adminlte_lang::message.yourname') }}">
                        </div>
                        <div class="form-group">
                            <label for="email1">{{ trans('adminlte_lang::message.emailaddress') }}</label>
                            <input type="email" name="Mail" class="form-control" id="email1" placeholder="{{ trans('adminlte_lang::message.enteremail') }}">
                        </div>
                        <div class="form-group">
                            <label>{{ trans('adminlte_lang::message.yourtext') }}</label>
                            <textarea class="form-control" name="Message" rows="3"></textarea>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-large btn-success">{{ trans('adminlte_lang::message.submit') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div id="c">
            <div class="container">
                <p>
                    <a href="https://github.com/acacha/adminlte-laravel"></a><b>admin-lte-laravel</b></a>. {{ trans('adminlte_lang::message.descriptionpackage') }}.<br/>
                    <strong>Copyright &copy; 2015 <a href="http://acacha.org">Acacha.org</a>.</strong> {{ trans('adminlte_lang::message.createdby') }} <a href="http://acacha.org/sergitur">Sergi Tur Badenas</a>. {{ trans('adminlte_lang::message.seecode') }} <a href="https://github.com/acacha/adminlte-laravel">Github</a>
                    <br/>
                    AdminLTE {{ trans('adminlte_lang::message.createdby') }} Abdullah Almsaeed <a href="https://almsaeedstudio.com/">almsaeedstudio.com</a>
                    <br/>
                    Pratt Landing Page PROVA {{ trans('adminlte_lang::message.createdby') }} <a href="http://www.blacktie.co">BLACKTIE.CO</a>
                </p>

            </div>
        </div>
    </footer>

</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ url (mix('/js/app-landing.js')) }}"></script>
<script>
    $('.carousel').carousel({
        interval: 3500
    })
</script>
</body>
</html>
