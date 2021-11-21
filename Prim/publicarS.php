<?php
include('Backend/verificalogin.php');
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="shortcut icon" href="Imgs/favicon.ico" />
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://kit.fontawesome.com/f62c384a8b.js" crossorigin="anonymous"></script>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
  <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">
  <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
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
              <a class="nav-link" href="Eventos.php">Eventos</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="publicarE.php">Divulgar Evento</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="publicarS.php">Publicar Serviço</a>
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
                        <span class="mb-0 text-sm  font-weight-bold" ><?php print $_SESSION['usuario']; ?></span>
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
    <form method="post" action="Backend/processaServico.php">
      <h1 style="color:aliceblue"><img src="Imgs/viral.png" width="70px" alt=""> Publicar Serviço </h1>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 form-p">

            <div class="form-outline">
            <p style="font-size: 20px;margin-top:15px; margin-bottom:0px;">*Nome:</p>
              <input name="Nome" autocomplete="off" type="text" id="typeText" class="form-control" />
              <label class="form-label" for="typeText"></label>
            </div>

            <div class="form-outline">
            <p style="font-size: 20px;margin-top:15px; margin-bottom:0px;">Descrição:</p>
              <textarea name="Descricao" autocomplete="off" class="form-control" id="textAreaExample" rows="4"></textarea>
              <label class="form-label" for="textAreaExample"></label>
            </div>
           
            <div class="input-group ">
              <div class="input-group-prepend">
              <p style="font-size: 20px;margin-top:15px; margin-bottom:0px;"> *Celular:</p>

              </div>
            </div>
            <input type="text" name="telefone" class="telefone form-control" placeholder="(17) 9 9173-3578" />
            <script>$('.telefone').mask('(00) 0 0000-0000');</script>

            <p style="margin-top:30px; font-size:15px"> (*) Campos obrigatórios </p>
          </div>


          <div class="col-lg-6"> <br>
          <p style="font-size: 20px;margin-top:15px; margin-bottom:0px;">*CEP:</p>
            <input type="text" name="cep" class="cep form-control" placeholder="Digite o CEP" /><script>$('.cep').mask('00000-000');</script>
           

            
            
            <p style="font-size: 20px;margin-top:15px; margin-bottom:0px;">*Categoria:</p>
              <select name="categoria" class="custom-select" id="inputGroupSelect01" style="font-size: 18px; height:33px; margin-top:0px"> 
              <option value="1">VIP</option>
              <option value="2">Barman</option>
              <option value="3">Bebidas</option>
              <option value="4">Som e Iluminação</option>
              <option value="5">Buffet</option>
              <option value="6">Copos</option>
              <option value="7">DJ</option>
              <option value="8">Decoração</option>
              <option value="9">Local</option>
              <option value="10">Segurança</option> 
              <option value="11">Serviços Gerais</option>
              <option value="12">Bolos</option>
              
            </select> 
            <p style="font-size: 20px;margin-top:110px; margin-bottom:0px;">*Preço:</p>

            <label for="dinheiro"></label><input type="text" id="dinheiro" autocomplete="off" name="dinheiro" class="dinheiro form-control" style="display:inline-block" placeholder="Digite o preço"/>
            <script>$('.dinheiro').mask('00000,00', {
                reverse: true
              });</script>
            <button type="submit" class=" buttonS" class="btn btn-primary btn-rounded" style="border: none; margin-top:15%;">Publicar</button>
            
          </div>
        </div>
    </form>
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