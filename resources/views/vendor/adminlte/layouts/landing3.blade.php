<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Acme</title>

    <!-- Bootstrap Core CSS -->
    <link href="landing/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="landing/css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="landing/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html"><i class="fa fa-money"></i> <span class="light"></span> Acme</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#nosotros">Nosotros</a>
                    </li>
                    <li>
                        <a href="#noticias">Hazte Socio</a>
                    </li>
                    <li>
                        <a href="#contactanos">Contáctanos</a>
                    </li>
                    <li>
                        <a href="#">Sociales</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('landing/img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Rockfield</h1>
                        <hr class="small">
                        <span class="subheading">Una firma global con un enfoque local</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
<!-- Main Content -->

     <section id="nosotros">
        <div class="container">
            <div class="row">
                <div class="col-sm-12" >
                    <h2 class="text-center">NOSOTROS</h2>
                </div>
            </div>
            <br>
            <br>
           
            <div class="row">
                <div class="col-sm-7 col-md-7">
                    <h3 class="text-left"><u>Una firma global con un enfoque local</u> </h3>
                    <p class="text-justify">  En <strong>Rockfield Capital Management</strong>, tenemos un claro propósito, ayudar a mejorar la vida financiera de nuestros clientes a     través del poder de cada transacción. 
                    </p>
                    <p class="text-justify">  Cumplimos este objetivo proveyendo una <strong>amplia gama de servicios financieros</strong>; de esta manera, aspiramos a ser el principal asesor y financiador de confianza de nuestros afiliados</p>

                    <p class="text-justify">Cada día, estamos <strong>orgullosos de los resultados</strong> obtenidos por nuestros altamente capacitados traders y con las decisiones de inversión de sus clientes.</p> 
                </div>
                <div class="col-sm-12 col-md-5">
                    
                </div>
            </div>
        </div>
    </section>
   <hr>
    <section id="contactanos">
        <div class="container">
            <div class="row">
                <h2 class="text-center">CONTÁCTANOS</h2>
            </div>
            <br>
            <br>
            
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h3 class="text-center"> <i class="fa fa-clock-o"></i> <u>Horario de Atención</u></h3>
                    <p>La atención de clientes se realizará de Lunes a Viernes entre las 8:30 y las 17:00.</p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <h3 class="text-center"> <i class="fa fa-dot-circle-o"></i> <u>Nuestras Redes Sociales</u></h3>
                   <p class="text-center"> <a class="sociales" href="https://www.facebook.com/nicky.llere" target="_blank" title="Facebook" itemprop="followee"><i class="fa fa-facebook-square fa-4x" aria-hidden="true"></i></a>
                    <a  class="sociales" href="https://www.facebook.com/nicky.llere" target="_blank" title="Twitter" itemprop="followee"><i class="fa fa-twitter-square fa-4x" aria-hidden="true"></i></a>
                    <!-- <a class="sociales" href="https://www.facebook.com/nicky.llere" target="_blank" title ="YouTube" itemprop="followee"><i class="fa fa-youtube-square fa-4x" aria-hidden="true"></i></a> --> </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="text-center"><i class="fa fa-envelope"></i> <u>Envíanos un mensaje</u></h3>
                    <br>
                </div>
                <div class="col-sm-12 col-md-8 col-md-offset-2">
                    <form name="sentMessage" id="contactForm" novalidate>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Nombre</label>
                            <input type="text" class="form-control" placeholder="Nombre" id="name" required data-validation-required-message="Ingresa tu nombre.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Correo Electrónico</label>
                            <input type="email" class="form-control" placeholder="Correo Electrónico" id="email" required data-validation-required-message="Ingresa tu correo electrónico address.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Numero de Telefono</label>
                            <input type="tel" class="form-control" placeholder="Numero de Telefono" id="phone" required data-validation-required-message="Ingresa tu número de teléfono.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Mensaje</label>
                            <textarea rows="5" class="form-control" placeholder="Mensaje" id="message" required data-validation-required-message="Ingresa tu mensaje."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" class="btn btn-default">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h3></h3>
                </div>
            </div>
        </div>

    </section>
    <hr>

    
    <section id="noticias">
        <div class="container">
            <div class="row">
                <h2 class="text-center"> <u>NOTICIAS </u></h2>
            </div>

                <div class="col-sm-12 col-md-6">
                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title">
                                Man must explore, and this is exploration at its greatest
                            </h2>
                            <h3 class="post-subtitle">
                                Problems look mighty small from 150 miles up
                            </h3>
                        </a>
                        <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on September 24, 2014</p>
                    </div>
                    
                </div>

                <div class="col-sm-12 col-md-6">
                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title">
                                I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.
                            </h2>
                        </a>
                        <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on September 18, 2014</p>
                    </div>
                    
                </div>

                <div class="col-sm-12 col-md-6">
                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title">
                                Science has not yet mastered prophecy
                            </h2>
                            <h3 class="post-subtitle">
                                We predict too much for the next year and yet far too little for the next ten.
                            </h3>
                        </a>
                        <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on August 24, 2014</p>
                    </div>
                </div>
               

                <div class="col-sm-12 col-md-6">
                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title">
                                Failure is not an option
                            </h2>
                            <h3 class="post-subtitle">
                                Many say exploration is part of our destiny, but it’s actually our duty to future generations.
                            </h3>
                        </a>
                        <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on July 8, 2014</p>
                    </div>
                </div>
                
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul>
                
        </div>
    </section>

   

    <hr>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-muted">Copyright &copy; Your Website 2016</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="landing/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="landing/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="landing/js/jqBootstrapValidation.js"></script>
    <script src="landing/js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="landing/js/clean-blog.min.js"></script>

</body>

</html>
