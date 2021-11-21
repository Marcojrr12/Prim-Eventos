<?php
include('Backend/verificalogin.php');
$ID = $_POST['ID'];
$vendido = $_POST['Vendido'];
$disponivel=$_POST['disponivel'];
if($vendido > $disponivel)
{
  header('Location: Eventos.php');
}

$money = $_POST['dinheiro'];
$titulo = $_POST['titulo'];
$local = $_POST['local'];
$totalPreco = $vendido*$money;
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Finalizar Compra</title>

   <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/f62c384a8b.js" crossorigin="anonymous"></script>
</head>
<body>
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

</div>

<section class="pt-5 pb-5">
  <div class="container">
    <div class="row w-100">
        <div class="col-lg-12 col-md-12 col-12"><a href="Eventos.php"><img src="Imgs/voltar.png" width="40px" style="margin-left:0px"  alt=""></a>
            <h3 style="color:aliceblue"class="display-5 mb-2 text-center">     Finalizar </h3>
          
            <table id="shoppingCart" class="table table-condensed table-responsive">
                <thead>
                    <tr>
                        <th style="color:aliceblue;width:60%">Evento</th>
                        <th style="color:aliceblue;width:12% "class="preco">Quantidade</th>
                        <th style="color:aliceblue;width:12% "class="preco">Preço</th>
                       
                        <th style="width:16%"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="color:aliceblue" data-th="Product">
                            <div class="row">
                                <div class="col-md-3 text-left">
                                    <img src="Imgs/Card.jpg" alt="" class="img-fluid d-none d-md-block rounded mb-2 shadow ">
                                </div>
                                <div class="col-md-9 text-left mt-sm-2">
                                    <h4><?php echo $titulo?></h4>
                                    <p class="font-weight-light">CEP: <?php echo $local?></p>
                                </div>
                            </div>
                        </td>
                        <td style="color:aliceblue;font-size:30px;" class="preco" data-th="Price"><?php echo $vendido?></td>
                        <td style="color:aliceblue;font-size:30px;" class="preco" data-th="Price">R$<?php echo $totalPreco?></td>
                        
                            </div>
                        </td>
                    </tr>
                    <tr>
                       
                </tbody>
            </table>
            
            
        </div>
      
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>




      <label style="color:aliceblue;"><input type="radio" name="optradio" value="Sim" checked  style="height:35px; width:35px; vertical-align: middle;">Pagamento</label>
<label style="color:aliceblue;"><input type="radio" name="optradio" value="Nao" style="height:35px; width:35px; vertical-align: middle;">Ingresso Grátis</label>
    
        
<div class="pay" id="smart-button-container">
      <div style="text-align: center;">
        <div id="paypal-button-container"></div>
      </div>
    </div>
    
  
</div>
  <div class="Qrcode">
 

  <div class="d-grid gap-2 col-6 mx-auto">
  <br>
  <form method="post" action="Backend/processaIngresso.php">
    <input name="vendido" value="<?php echo $vendido ?>" style='display: none;' >
    <input name="titulo" value="<?php echo $titulo ?>" style='display: none;' >
    <button name="ID" value="<?php echo $ID ?>" type="submit" class="btn btn-warning" style="width:500px; height:50px; margin-left:100px" >Gerar QR CODE</button></a>
  
 
</div>

    </div>
</section>


<script> $('.Qrcode').hide();
  $('input[name="optradio"]').change(function () {
    if ($('input[name="optradio"]:checked').val() === "Sim") {
        $('.pay').show();
        $('.Qrcode').hide();
        
      
    } else {
        $('.pay').hide();
        $('.Qrcode').show();
      
       
    }
});
</script>
 
  <script src="https://www.paypal.com/sdk/js?client-id=sb&currency=BRL" data-sdk-integration-source="button-factory"></script>
  <script>
    function initPayPalButton() {
      paypal.Buttons({
        style: {
          shape: 'rect',
          color: 'gold',
          layout: 'vertical',
          label: 'paypal',
          
        },

        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{"amount":{"currency_code":"BRL","value":<?php echo $totalPreco?>}}]
          });
        },

        onApprove: function(data, actions) {
          return actions.order.capture().then(function(details) {
            alert('Transaction completed by ' + details.payer.name.given_name + '!');
          });
        },

        onError: function(err) {
          console.log(err);
        }
      }).render('#paypal-button-container');
    }
    initPayPalButton();
  </script>
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
