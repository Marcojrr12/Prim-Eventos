<?php
include('Backend/verificalogin.php');
include("Backend/conexao.php");
$email = $_SESSION['Email'];
$SQL = "SELECT * FROM INGRESSO WHERE EMAIL_USER='$email'";
$consulta = mysqli_query($conexao,$SQL);
mysqli_close($conexao);
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.82.0">
  <title>Prim Eventos</title>
  <link href="style.css" rel="stylesheet">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
    integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
    integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc"
    crossorigin="anonymous"></script>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <script src="https://kit.fontawesome.com/f62c384a8b.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="shortcut icon" href="Imgs/favicon.ico" />
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://kit.fontawesome.com/f62c384a8b.js" crossorigin="anonymous"></script>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- Bootstrap core CSS -->
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
  <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">
 

  <!-- Custom styles for this template -->

</head>

<body>
  <!-- cabeçalho e menu de navegação -->
  <div class="container">
   <div class="row">

       <div class="col-4 col-md-2 col-lg-0">
           <img src="Imgs/LogoFULL.png" class="logo">
       </div>



       <div class="col-6 col-md-6 col-sm-6 col-lg-6 menu_area">
           <nav class="navbar navbar-expand-lg ">

               <ul class="navbar-nav me-auto mb-6 mb-lg-0">
                   <li class="nav-item">
                       <a class="nav-link " href="Prim.php">Ínicio</a>
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
                   
                   <div class="float-right">
                    
                    <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                       <li class="nav-item dropdown">
                         <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <div class="media align-items-center">
                             <span class="avatar avatar-sm rounded-circle">
                               <img alt="Image placeholder" src="Imgs/user.png">
                             </span>
                             <div class="media-body  ml-2  d-none d-lg-block">
                               <span class="mb-0 text-sm  font-weight-bold"><?php print $_SESSION['usuario'];?></span>
                             </div>
                           </div>
                         </a>
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

 
    <div class="wrapper d-flex align-items-stretch">
      <nav id="sidebar">
         <div class="p-4 pt-5">
           <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(Imgs/user.png);"></a>
        <ul class="list-unstyled components mb-5">
         
        
          <li>
            <a href="Meus Eventos.php" class="dropdown-item">
               <i class="fas fa-calendar-check"></i>
             <span>Meus Eventos</span>
           </a>
          </li>
          <li>
          <a href="Meus Ingressos.php" class="dropdown-item">
            <i class="fas fa-ticket-alt"></i>
          <span>Meus Ingressos</span>
        </a>
          <li>
            <a href="Meus Serviços.php" class="dropdown-item">
               <i class="fas fa-tools"></i>
             <span>Meus Serviços</span>
           </a>
          </li>
          <li>
            <a href="Backend/logout.php" class="dropdown-item">
               <i class="fas fa-sign-out-alt"></i>
             <span>Sair</span>
            </a>
          </li>
        </ul>
          
          
         </div>
      </nav>



      <div id="content" class="p-4 p-md-5">

       
       <div class="row align-items-start">
        <?php while($mostraEventos = mysqli_fetch_array($consulta)){ ?>    
          <div class="card2" style="width: 25rem; margin-bottom:20px; margin-right:7%">

          <form method="post" action="EventoD.php" >
            <button  value="<?php echo $mostraEventos[1]?>" name="event" type="submit" style="background:none; border:none;">
            <img src="Imgs/qr-code.png" class="card-img-top" alt="..."></button>
          </form>

            <div class="card-body">
              <h5 class="card-title"><Strong> <?php print "$mostraEventos[2]"; ?></Strong></h5>
              <p class="card-text">Quantidade: <?php print "$mostraEventos[3]";?></p>
            </div>
          </div>
        <?php } ?>
    </div>
    </div>
       </div>
 













      <script src="javascript.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

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

</html>