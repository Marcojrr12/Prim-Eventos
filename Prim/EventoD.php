<?php
include('Backend/verificalogin.php');
include("Backend/conexao.php");

$ID = $_POST['event'];

$SQL = "SELECT * FROM EVENTO WHERE ID_EVENTO LIKE '$ID'";
$consulta = mysqli_query($conexao,$SQL);
$result = mysqli_fetch_array($consulta);

$ingDisponivel = $result['PUBLICO_EVENTO'] - $result['ING_VENDIDOS_EVENTO'];

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
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/f62c384a8b.js" crossorigin="anonymous"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link rel="shortcut icon" href="Imgs/favicon.ico" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://kit.fontawesome.com/f62c384a8b.js" crossorigin="anonymous"></script>
  <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
  <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <title>Prim-Eventos</title>
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
                        <span class="mb-0 text-sm  font-weight-bold"><?php print $_SESSION['usuario']; ?></span>
                        
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


  <div class="Quadrado">
  <a href="Eventos.php"><img src="Imgs/voltar.png" width="40px" style="margin-left:20px"  alt=""></a>
      <br>
      <h1 style="color:aliceblue"><img src="Imgs/descricao1.png" width="50px" alt="">    Descrição </h1> <br>
      <div class="container">
  <div class="row">
    <div class="col">
    <img src="Imgs/Card.jpg" width="300px" alt="">
    </div>
    <div class="col">
      <h1 style="color:aliceblue"><?php echo $result['TITULO_EVENTO']?></h1>
    <p>Ingressos Disponiveis: <?php echo $ingDisponivel ?>  </p>
    <p>Publico Máximo: <?php echo $result['PUBLICO_EVENTO'] ?></p>
    <p>CEP: <?php echo $result['LOCALIZACAO_EVENTO'] ?></p>
    <p>Data: <?php echo date("d/m/Y",strtotime($result['DATA_EVENTO'])) ?></p>
    <p>Horário: <?php echo date("H:i",strtotime($result['HORA_EVENTO'])) ?></p>
    <p>Contato: <?php echo $result['TELEFONE_EVENTO'] ?></p>
    <p>Descrição: <?php echo $result['DESCRICAO_EVENTO'] ?> </p>

    </div>
    <div class="col">  <br><br><br>
    <strong style="color:#029905; font-size:40px; margin-left:80px;" class="text-center">Preço: R$<?php echo $result['PRECO_EVENTO'] ?></strong> <br><br>
    <span id="span_erro_carrinho" class="blocoAlerta" style="display:none;">Selecione uma opção para variação do produto</span>
        <p style="margin-left:80px">Quantidade de Ingressos:</p>     
        <form method="post" action="payment.php">
          <input name="Vendido" style="width:40%;height:34px;margin-left:125px" class="publico" id="number" type="number" value="1" min='1'><br>
          </div>
          <input name="dinheiro" value="<?php echo $result['PRECO_EVENTO'] ?>" style='display: none;' >
          <input name="titulo" value="<?php echo $result['TITULO_EVENTO'] ?>" style='display: none;' >
          <input name="local" value="<?php echo $result['LOCALIZACAO_EVENTO'] ?>" style='display: none;' >
          <input name="disponivel" value="<?php echo $ingDisponivel ?>" style='display: none;' >
          <button style="margin-bottom:30px"type="submit" name="ID" value="<?php echo $ID ?>" class="btn btn-info" >Prosseguir</button>
      </form>



            </div>
          </div>
        </div>
       
    <hr class="linha" size="7">
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