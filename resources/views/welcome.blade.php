<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->


    <!-- Parte abaixo pertence ao templates agency -->
        <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'> -->

    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">
    <link href="css/agency.css" rel="stylesheet">

    </head>
    <body id="page-top" class="index">

        <!-- Autentificação -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            @if (Route::has('login'))
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                 @if (Auth::check())
                <a class="navbar-brand page-scroll" href="#page-top">Home</a>
                @else
                <a class="navbar-brand page-scroll" href="#page-top">Home</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling header-bg -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{ url('/login') }}">Login</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{ url('/register') }}">Registro</a>
                        @endif
                    </li>
                    @endif

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>




 <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Olá, sou Hugo </div>
                <div class="intro-heading">Bem-vindos ao meu portfólio.</div>
                <a href="#services" class="page-scroll btn btn-xl">Meu Objetivo</a>
                <a href="#certificados" class="page-scroll btn btn-xl">Certificados</a>
                <a href="#projetos" class="page-scroll btn btn-xl">Projetos</a>
                <a href="#about" class="page-scroll btn btn-xl">Minha Habilidades</a>
                <!--<a href="#services" class="page-scroll btn btn-xl">#</a>-->
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 text-center">
                   <h2 class="section-heading">Meu Objetivo</h2>
                    <h3 class="section-subheading text-muted">Olá, meu nome e Hugo de Jesus da Costa e meu objetivo com esse portfólio é mostra as minhas habilidades com programação, afim de inicia minha carreira como desenvolvedor. Este portfólio contém certificados de conclusão de curso do site devmedia é projetos feitos por min, que fiz no intuito de treina minhas habilidades, adquiri e pesquisa novas tecnologias.</h3>
                </div>
                <div class="col-lg-2 text-center">
                    <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/HugoFotoFormatura.jpg" alt="">
                    </div>
                </div>
            </div>
            
        </div>
    </section>


 <!-- Certificados Section -->
<section id="certificados"  class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Certificados</h2>
                    <h3 class="section-subheading text-muted">Certificados de conclusão ou em andamento de cursos Devmedia </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 certificados-item">
                    <a href="#portfolioModal1" class="certificados-link" data-toggle="modal">
                        <div class="certificados-hover">
                            <div class="certificados-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/laravel54.png" class="img-responsive" alt="">
                    </a>
                    <div class="certificados-caption">
                        <h4>Curso de Laravel</h4>
                        <p class="text-muted">Concluido</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 certificados-item">
                    <a href="#portfolioModal2" class="certificados-link" data-toggle="modal">
                        <div class="certificados-hover">
                            <div class="certificados-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/php.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="certificados-caption">
                        <h4>Curso de PHP Básico</h4>
                        <p class="text-muted">Em andamento</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 certificados-item">
                    <a href="#portfolioModal3" class="certificados-link" data-toggle="modal">
                        <div class="certificados-hover">
                            <div class="certificados-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/poo.png" class="img-responsive" alt="">
                    </a>
                    <div class="certificados-caption">
                        <h4>Curso de Programação Orientada a Objetos com PHP</h4>
                        <p class="text-muted">Em andamento</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 certificados-item">
                    <a href="#portfolioModal4" class="certificados-link" data-toggle="modal">
                        <div class="certificados-hover">
                            <div class="certificados-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/bootstrap.png" class="img-responsive" alt="">
                    </a>
                    <div class="certificados-caption">
                        <h4>Bootstrap: Trabalhando com Design Responsivo</h4>
                        <p class="text-muted">Em andamento</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 certificados-item">
                    <a href="#portfolioModal5" class="certificados-link" data-toggle="modal">
                        <div class="certificados-hover">
                            <div class="certificados-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/cshap.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="certificados-caption">
                        <h4>Introdução a programação com C#</h4>
                        <p class="text-muted">Concluido</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 certificados-item">
                    <a href="#portfolioModal6" class="certificados-link" data-toggle="modal">
                        <div class="certificados-hover">
                            <div class="certificados-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/heroku-laravel.png" class="img-responsive" alt="">
                    </a>
                    <div class="certificados-caption">
                        <h4>Publicando projeto Laravel na nuvem</h4>
                        <p class="text-muted">Concluido</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    



    <!-- Projetos Grid Section -->

     <section id="projetos" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Projetos</h2>
                    <h3 class="section-subheading text-muted">Projetos de software feitos por mim.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 projetos-item">
                    <a href="#lockedcar" class="projetos-link" data-toggle="modal">
                        <div class="projetos-hover">
                            <div class="projetos-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/lockedcar01.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="projetos-caption">
                        <h4>LockedCar</h4>
                        <p class="text-muted">Protótipo</p>
                    </div>
                </div>
                
                
    </section>
    

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Minhas Habilidades</h2>
                    <h3 class="section-subheading text-muted">O que eu estou estudando atualmente.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/logos/LogoPHP03.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>PHP</h4>
                                    <h4 class="subheading">O que estou fazendo?</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Neste momento estou terminando o curso de php no Devmedia é estou já estou empregando meus conhecimentos em projetos, como este portfólio e o LokedCar.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/logos/LogoLaravel04.png" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Laravel</h4>
                                    <h4 class="subheading">Como estou com o Laravel?</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Após várias pesquisas, os Laravel foi a Framework mais indicada para trabalha com php, pois possui um gama de recursos que viabilizam a produção de sistema web, no meu caso aplique neste portfolio e no LokedCar.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/logos/LogoBootstrap.png" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>bootstrap</h4>
                                    <h4 class="subheading"></h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Bootstrap torna o desenvolvimento front-end web mais rápido e fácil. Com excelentes recursos que ajudam profissionais iniciante como eu. Uso esta framework em todos os meus projetos. </p>
                                </div>
                            </div>
                        
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>E
                                    <br>Sigo
                                    <br>Aprendendo!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
   

    <!-- Clients Aside
    <aside class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/envato.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/designmodo.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/themeforest.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/creative-market.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
            </div>
        </div>
    </aside> -->

   

    <footer>
        <nav id="mainRodape" class="navbar navbar-default navbar-fixed-bottom">
          <div class="container">
              <div class="row">
                  <div class="col-md-6">
                      <span class="copyright">Entre em contato hugosge@hotmail.com.br ou  </span>
                       <span class="copyright">Tel: (31)99281-7187</span>
                  </div>
                  <div class="col-md-6">
                      <ul class="list-inline social-buttons">
                        
                          <li><a href="https://www.facebook.com/hugo.Costa2015"><i class="fa fa-facebook"></i></a>
                          </li>
                          <li><a href="https://www.linkedin.com/in/hugo-costa-419ab694/"><i class="fa fa-linkedin"></i></a>
                          </li>
                      </ul>
                  </div>
                  <div class="col-md-4">
                      <ul class="list-inline quicklinks">
                       
                      </ul>
                  </div>
              </div>
           </div>
        </nav>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-lg-offset-0">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Curso de Laravel</h2>
                                <p class="item-intro text-muted">Concluido</p>
                               <!-- <img class="img-responsive img-centered"  src="img/certificados/Certificadolaravel.pdf" alt=""> -->
                                <object  width="1100" height="500"  data="img/certificados/Certificadolaravel.pdf" type="application/pdf">
                                          <p>Seu navegador não tem um plugin pra PDF</p>
                                </object>
                               <!--  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <p>
                                    <strong>Want these icons in this portfolio item sample?</strong>You can download 60 of them for free, courtesy of <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">RoundIcons.com</a>, or you can purchase the 1500 icon set <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">here</a>.</p>
                                <ul class="list-inline">
                                    <li>Date: July 2014</li>
                                    <li>Client: Round Icons</li>
                                    <li>Category: Graphic Design</li>
                                </ul>-->
                                <p>Neste curso de Laravel aprenderemos a trabalhar com um dos frameworks PHP mais utilizados atualmente. O Laravel é baseado na arquitetura MVC e tem um excelente desempenho. Veremos no decorrer do curso instalação, configuração do ambiente, rotas, manipulação de registros em banco de dados e também o desenvolvimento de templates. </p>

                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Fecha</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-lg-offset-0">
                            <div class="modal-body">
                                <h2>Curso de PHP Básico</h2>
                                <p class="item-intro text-muted">Em andamento.</p>
                               <!-- <img class="img-responsive img-centered" src="img/portfolio/startup-framework-preview.png" alt="">-->
                                <object  width="1100" height="500"  data="img/certificados/CertificadoPHP.pdf" type="application/pdf">
                                          <p>Seu navegador não tem um plugin pra PDF</p>
                                </object>
                               <!-- <p><a href="http://designmodo.com/startup/?u=787">Startup Framework</a> is a website builder for professionals. Startup Framework contains components and complex blocks (PSD+HTML Bootstrap themes and templates) which can easily be integrated into almost any design. All of these components are made in the same style, and can easily be integrated into projects, allowing you to create hundreds of solutions for your future projects.</p>
                                <p>You can preview Startup Framework <a href="http://designmodo.com/startup/?u=787">here</a>.</p> -->
                                <<p>Neste curso de PHP básico veremos os princípios de desenvolvimento, como funções nativas do PHP, estruturas de controle, variáveis, orientação a objetos e acesso a banco de dados, sempre utilizando exemplos para explicar cada item. Quando o aluno estiver com o conhecimento básico adquirido, iremos desenvolver exemplos para manutenção de dados, e com isso o aluno estará pronto para criar um sistema básico em PHP utilizando banco de dados.   </p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Fecha</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-lg-offset-0">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Curso de Programação Orientada a Objetos com PHP</h2>
                                <p class="item-intro text-muted">Em andamento.</p>
                                <!-- <img class="img-responsive img-centered" src="img/portfolio/treehouse-preview.png" alt="">-->
                                <object  width="1100" height="500"  data="img/certificados/CertificadoPooPHP.pdf" type="application/pdf">
                                          <p>Seu navegador não tem um plugin pra PDF</p>
                                </object>
                                <!--<p>Treehouse is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. This is bright and spacious design perfect for people or startup companies looking to showcase their apps or other projects.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/treehouse-free-psd-web-template/">FreebiesXpress.com</a>.</p> -->
                                <<p>O objetivo deste curso de Programação Orientada a Objetos (POO) com PHP é mostrar de forma clara e didática como funciona a orientação a objetos no PHP. A idéia é deixar claro quais os ganhos que teremos em utilizar a orientação a objetos e seguir todos os seus pilares: Abstração, Encapsulamento, Herança, Polimorfismo. Além disso, conheceremos ferramentas para trabalhar com PHP e também como ganhar produtividade no desenvolvimento de aplicações Web através da OO.  </p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Fecha</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-lg-offset-0">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Bootstrap: Trabalhando com Design Responsivo</h2>
                                <p class="item-intro text-muted">Em andamento.</p>
                                <!--<img class="img-responsive img-centered" src="img/portfolio/golden-preview.png" alt="">-->
                                <object  width="1100" height="500"  data="img/certificados/CertificadoBootstrap.pdf" type="application/pdf">
                                          <p>Seu navegador não tem um plugin pra PDF</p>
                                </object>
                                <!--<p>Start Bootstrap's Agency theme is based on Golden, a free PSD website template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Golden is a modern and clean one page web template that was made exclusively for Best PSD Freebies. This template has a great portfolio, timeline, and meet your team sections that can be easily modified to fit your needs.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/golden-free-one-page-web-template/">FreebiesXpress.com</a>.</p>  -->
                                <<p>Este curso tem como objetivo apresentar o framework Bootstrap 3. Para isso, inicialmente vamos entender o que é essa tecnologia e em quais situações seu uso é indicado. Com esses conceitos em mente, abordaremos os componentes que foram atualizados, assim como os novos recursos, passando, em seguida, para o desenvolvimento de uma aplicação. A partir disso, você estará apto a dominar o Bootstrap e passar a utilizá-lo em seus projetos.  </p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Fecha</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-lg-offset-0">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2> Introdução a programação com C#</h2>
                                <p class="item-intro text-muted">Concluido.</p>
                                <!--<img class="img-responsive img-centered" src="img/portfolio/escape-preview.png" alt="">-->
                                <object  width="1100" height="500"  data="img/certificados/CertificadoProgramacaoCsharp.pdf" type="application/pdf">
                                          <p>Seu navegador não tem um plugin pra PDF</p>
                                </object>
                                <!--<p>Escape is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Escape is a one page web template that was designed with agencies in mind. This template is ideal for those looking for a simple one page solution to describe your business and offer your services.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/escape-one-page-psd-web-template/">FreebiesXpress.com</a>.</p> -->
                                <<p>Este curso possui o objetivo de capacitar desenvolvedores em linguagem C#. Através da exemplificação das rotinas mais básicas da linguagem e sua sintaxe. O escopo deste curso privilegia o estudo da sintaxe básica de uma aplicação C# e dos tipos envolvidos (variáveis) do escopo. Também são estudados os statements básicos da linguagem e operadores aritméticos. Este curso tem como publico alvo quem não possui conhecimento em programação e deseja aprender utilizando o C#.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Fecha</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-lg-offset-0">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Publicando projeto Laravel na nuvem</h2>
                                <p class="item-intro text-muted">Concluido.</p>
                               <!-- <img class="img-responsive img-centered" src="img/portfolio/dreams-preview.png" alt="">-->
                                <object  width="1100" height="500"  data="img/certificados/CertificadoPlubLaravel.pdf" type="application/pdf">
                                          <p>Seu navegador não tem um plugin pra PDF</p>
                                </object>
                               <!-- <p>Dreams is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Dreams is a modern one page web template designed for almost any purpose. It’s a beautiful template that’s designed with the Bootstrap framework in mind.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/dreams-free-one-page-web-template/">FreebiesXpress.com</a>.</p> -->
                                <p>Aprenda a configurar, otimizar e preparar o Laravel para colocar em produção. Veremos neste curso todo processo de preparação da aplicação e configuração do Heroku, que disponibilizará um ambiente necessários para rodar o Laravel e uma conexão com banco de dados PostgreSQL.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Fecha</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



                               <!-- Lockedcar-->
    <div class="portfolio-modal modal fade" id="lockedcar" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-lg-offset-0">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>lockedcar</h2>
                                <p class="item-intro text-muted">Protótipo</p>
                                <!--<img class="img-responsive img-centered"  src="img/portfolio/lockedcar.jpg" alt=""> -->
                                <object  width="1100" height="500"  data="img/portfolio/lockedcar.jpg" type="image/jpeg">
                                          <p>Seu navegador não tem um plugin pra PDF</p>
                                </object>
                               <!--  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <p>
                                    <strong>Want these icons in this portfolio item sample?</strong>You can download 60 of them for free, courtesy of <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">RoundIcons.com</a>, or you can purchase the 1500 icon set <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">here</a>.</p>
                                <ul class="list-inline">
                                    <li>Date: July 2014</li>
                                    <li>Client: Round Icons</li>
                                    <li>Category: Graphic Design</li>
                                </ul>-->
                                <p>A ideia resultante do LockedCar, veio de trabalho de faculdade, cujo o objeto era complementar os atuais alarmas de veículo, provendo ao usuário a localização do carro via web é avisos sobre quando o alarme do carro dispara, assim dando ao usuário informações detalhas sobre tentativas de furto e roubo e até mesmo se o carro está sendo guinchado ou tentativas de roubo de suas rodas. Basicamente, site LockedCar é um web service que recebe dados latitude e longitude e as exibe em um mapa.Meu grupo do trabalho: Matheus Felipe, Thales Moutinho, Victor de Almeida , José Breno, José Henrique. Em meu grupo, fui responsável pelo o desenvolvimento do site com o link abaixo. </p>
                                <p> Login:teste@teste.com.br/ senha: una123456</p>

                               <a href="http://lockedcar.herokuapp.com" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Ir para o Lockedcar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



                  <!-- Beta Imoveis-->  

    <div class="portfolio-modal modal fade" id="betaimoveis" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-lg-offset-0">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Beta Imóveis</h2>
                                <p class="item-intro text-muted">Em construção</p>
                                <!--<img class="img-responsive img-centered"  src="img/portfolio/lockedcar.jpg" alt=""> -->
                                <object  width="1100" height="500"  data="img/portfolio/betaimoveis.jpg" type="image/jpeg">
                                          <p>Seu navegador não tem um plugin pra PDF</p>
                                </object>
                               <!--  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <p>
                                    <strong>Want these icons in this portfolio item sample?</strong>You can download 60 of them for free, courtesy of <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">RoundIcons.com</a>, or you can purchase the 1500 icon set <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">here</a>.</p>
                                <ul class="list-inline">
                                    <li>Date: July 2014</li>
                                    <li>Client: Round Icons</li>
                                    <li>Category: Graphic Design</li>
                                </ul>-->
                                <p>                                          </p>

                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Fecha</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





































<!-- Bootstrap Core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>
</body>
</html>
