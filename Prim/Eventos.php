<?php
include('Backend/verificalogin.php');

include("Backend/conexao.php");

$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";
if(empty($filtro) )
  $filtro = "%%";
$SQL = "SELECT TITULO_EVENTO,DATA_EVENTO,HORA_EVENTO,PRECO_EVENTO,ID_EVENTO FROM EVENTO WHERE ID_CATEGORIA_EVENTO LIKE '$filtro' ORDER BY ID_EVENTO DESC";
$consulta = mysqli_query($conexao, $SQL);
$registros = mysqli_num_rows($consulta);

mysqli_close($conexao);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="shortcut icon" href="Imgs/favicon.ico" />
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://kit.fontawesome.com/f62c384a8b.js" crossorigin="anonymous"></script>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/f62c384a8b.js" crossorigin="anonymous"></script>

  <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
  <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">
  <title>Prim Eventos</title>
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
              <a class="nav-link active" href="Eventos.php">Eventos</a>
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
                        <span class="mb-0 text-sm  font-weight-bold" id=""><?php print $_SESSION['usuario']; ?></span>
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

  </div>

  <h1 style="font-size:40px;text-align:center;color:aliceblue;">Eventos  </h1> <br>
  <br> 


  <div class="container ">
    <div class="row align-items-start">
      <div class="col-12 busca">
        <div class="text-center">
          <form method="get">          
            <button value="%%" name="filtro" type="submit" style="  margin-top: 0px; background: linear-gradient(90deg, #77d1d4 0%, #05c9cf 100%);" class="btn btn-outline-primary">Todos</button> 
            <button value="1" name="filtro" type="submit" style="   background: linear-gradient(90deg, #667EEA 0%, #764BA2 100%);"  class="btn btn-outline-primary">Vip</button>
            <button value="2" name="filtro" type="submit" class="btn btn-outline-info">Social </button>
            <button value="3" name="filtro" type="submit" class="btn btn-outline-info">Corporativo</button>
            <button value="4" name="filtro" type="submit" class="btn btn-outline-info">Religioso</button>
            <button value="5" name="filtro" type="submit" class="btn btn-outline-info">Cultural</button>
            <button value="6" name="filtro" type="submit" class="btn btn-outline-info">Esportivo</button>
            <button value="7" name="filtro" type="submit" class="btn btn-outline-info">Educacional</button>
          </form>
        </div>
      </div>

    </div>
  </div>

  <div class="container cards">
    <div class="row align-items-start">
      <?php while ($mostraEventos = mysqli_fetch_array($consulta)) { ?>
        <div class="card2" style="width: 25rem; margin-bottom:20px; margin-right:7%">
          
              <img src="Imgs/Card.jpg" class="card-img-top" alt="...">

          <div class="card-body">
            <h5 class="card-title"><Strong> <?php print "$mostraEventos[0]"; ?></Strong></h5>
            <p class="card-text"><?php print date("d/m/Y",strtotime($mostraEventos[1]));
                                  print str_repeat("&nbsp;", 9);
                                  print("Horário: ");
                                  print date("H:i",strtotime($mostraEventos[2])); ?></p>
                               <p style="color:green;">R$ <?php echo $mostraEventos[3]?></p>
              <form method="post" action="EventoD.php" >
                <button  value="<?php echo $mostraEventos[4]?>" name="event" type="submit" class="btn btn-primary">Marcar presença</button>
              </form>
          </div>

        </div>
      <?php } ?>
    </div>
  </div>



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