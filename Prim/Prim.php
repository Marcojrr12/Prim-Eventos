<?php session_start(); ?>

<HTML lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PRIM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="shortcut icon" href="Imgs/favicon.ico" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://kit.fontawesome.com/f62c384a8b.js" crossorigin="anonymous"></script>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- cabeçalho e menu de navegação -->
    <div class="container">
        <div class="row">

            
                <img src="Imgs/LogoFULL.png" class="logo">
            



            <div class="col-6 col-md-6 col-sm-6 col-lg-6 menu_area">
                <nav class="navbar navbar-expand-sm ">
                    
                    <ul class="navbar-nav me-auto mb-6 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="Prim.php">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Eventos.php">Eventos</a>
                        </li>
                       
                        <li class="nav-item">
                            <a class="nav-link" href="publicarE.php">Divulgar Evento</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="publicarS.php">Publicar Serviço</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Serviços.php">Serviços</a>
                        </li>
                    </ul>
                
                    
                <div class="float-right">

                    <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                        <li class="nav-item dropdown">
                            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="media align-items-center">
                                    <span class="avatar avatar-sm rounded-circle">
                                        <img alt="Image placeholder" src="Imgs/user.png">
                                    </span>
                                    <div class="media-body  ml-2  d-none d-lg-block">
                                        <span class="mb-0 text-sm  font-weight-bold">
                                            <?php
                                            if (isset($_SESSION['usuario'])) {
                                                print $_SESSION['usuario'];
                                            } else {
                                                print "Anônimo";
                                            }
                                            ?>
                                        </span>
                                    </div>
                                </div>
                            </a>
                            <?php if (isset($_SESSION['usuario'])) : ?>

                                <div class="dropdown-menu  dropdown-menu-right ">
                                    <div class="dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Bem Vindo!</h6>
                                    </div>
                                  
                                    <a href="Meus Eventos.php" class="dropdown-item">
                                        <i class="fas fa-calendar-check"></i>
                                        <span>Meus Eventos</span>
                                    </a>
                                    <a href="Meus Ingressos.php" class="dropdown-item">
                                        <i class="fas fa-ticket-alt"></i>
                                        <span>Meus Ingressos</span>
                                    </a>
                                    <a href="Meus Serviços.php" class="dropdown-item">
                                        <i class="fas fa-tools"></i>
                                        <span>Meus Serviços</span>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="Backend/logout.php" class="dropdown-item">
                                        <i class="fas fa-sign-out-alt"></i>
                                        <span>Sair</span>
                                    </a>
                                </div>

                            <?php
                            endif;
                            if (!(isset($_SESSION['usuario']))) : ?>

                                <div class="dropdown-menu  dropdown-menu-right ">
                                    <div class="dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Bem Vindo!</h6>
                                    </div>
                                    <a href="Backend/logout.php" class="dropdown-item">
                                        <i class="fas fa-sign-out-alt"></i>
                                        <span>Fazer Login</span>
                                    </a>
                                </div>

                            <?php endif; ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        </ul>
        </nav>
    </div>




    </div>

    </div><!-- /.container-fluid -->

    <div class="container carrossel">
        <div class="row ">
            <div class="col-12 col-md-12 col-lg-6 car">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="1500">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="Imgs/show2.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="Imgs/show.jpeg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="Imgs/festaPrim.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>



            <div class="col-12 col-md-12 col-lg-3 evt1">

                <h1 class="evt"> <strong> PRIM EVENTOS</strong>
                </h1>
                <h2> <img class="icone-criar" src="Imgs/Criar.png"> Divulgar Evento </h2>
                <span>
                    <br>
                    Divulgar seu Evento nunca foi tão simples, com apenas poucos cliques seu evento estará publicado em nossa aplicação.
                    </br> Faça seu login e apenas curta.
                </span>

                <a class="nav-link" href="publicarE.php"> <button type="button" class="btn btn-primary btn-lg" style="border: none;">Divulgar Evento</button></a>

            </div>

        </div>


    </div>

    <div class="container">
        <div class="row paz">




            <div class="col-10 col-md-3 col-lg-4 Sob">

                <h2><img class="about" src="Imgs/about.png" alt=""> Sobre Nós </h2>
                <Span>PRIM é um sistema voltado para organização de festas e eventos em geral e eventos em geral, com a
                    finalidade de facilitar a vida daqueles que desejam embarcar na produção de festas e os que desejam
                    participar também! Através da terceirização dos componentes essenciais numa festa (aluguel de
                    espaço, segurança, utensílios, barman, DJ e convites).</Span>

            </div>

            <!--<div class="col-12 col-md-8 col-lg-8"> -->


            <div class="card2" style="width: 23rem;">
                <img src="Imgs/Card.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><Strong> Evento no parque</Strong></h5>
                    <p class="card-text">11/06/2021 <?php print str_repeat("&nbsp;", 17) ?> 20:00</p>
                    <a href="#" class="btn btn-primary" disabled>Marcar presença</a>
                </div>
            </div>


            <div class="card2" style="width: 23rem;">
                <img src="Imgs/Card.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><Strong> Evento do Ano</Strong></h5>
                    <p class="card-text">28/04/2021 <?php print str_repeat("&nbsp;", 17) ?> 18:00</p>
                    <a href="#" class="btn btn-primary" disabled>Marcar presença</a>
                </div>
            </div>
        </div>









        <hr class="linha" size="7">

        <section id="footer">
    <div class="container">
    <div class="text-center">
  
      <div class="row">
             <p >Github dos Desenvolvedores</p>
          <ul class="list-unstyled list-inline social text-center">
            <li class="list-inline-item"><a href="https://github.com/RBGoriginal"><i class="fa fa-github"></i></a></li>
            <li class="list-inline-item"><a href="https://github.com/Marcojrr12"><i class="fa fa-github"></i></a></li>
            <li class="list-inline-item"><a href="https://github.com/pedr0santos"><i class="fa fa-github"></i></a></li>
            <li class="list-inline-item"><a href="https://github.com/iagolanaa"><i class="fa fa-github"></i></a></li>

          </ul> <p >© Todos os Direitos Reservados PRIM EVENTOS</p>
        </div>
        
        <hr>
      </div>
     
  </section>


</body>



</HTML>