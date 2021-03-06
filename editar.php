<!DOCTYPE html>

<html lang="pt-br">
<?php
session_start();
include("verifica_login.php");

include("conexao.php");
$empresa = $_SESSION['idempresa'];
$style = "SELECT * FROM style WHERE empresa_id  ='$empresa'";
$queryStyle = mysqli_query($conn, $style);
?>
<head>

  <meta charset="utf-8">
  <link rel="icon" href="img/favico.png"/><a style="visibility: hidden;">;</a>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>G. Estoque</title>

  <!-- Custom fonts for this template-->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
  <!-- Custom styles for this template-->
  <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="painel.php">
        <div class="sidebar-brand-text mx-3">G. Estoque</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="painel.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Painel Principal</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        MAPA
      </div>

      <!-- Nav Item MAPA SITE -->
      <!-- Deposito-->
      <li class="nav-item">
        <a class="nav-link" href="deposito.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Deposito</span></a>
      </li>

      <!-- Fornecedor -->
      <li class="nav-item">
        <a class="nav-link" href="fornecedores.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Fornecedores</span></a>
      </li>

      <!-- Unidade -->
      <li class="nav-item">
        <a class="nav-link" href="unidade.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Unidades</span></a>
      </li>

      <!-- Produtos -->
      <li class="nav-item">
        <a class="nav-link" href="produtos.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Produtos</span></a>
      </li>

      <!-- Estoque -->
      <li class="nav-item">
        <a class="nav-link" href="estoque.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Estoque</span></a>
      </li>

      <!-- Entradas -->
      <li class="nav-item">
        <a class="nav-link" href="entradas.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Entradas</span></a>
      </li>

      <!-- Saidas -->
      <li class="nav-item">
        <a class="nav-link" href="saidas.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Sa??das</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
        
      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>
        
      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Utilit??rios</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Customiza????o:</h6>
            <a class="collapse-item" href="editar.php">Editar</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
            
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['usuario'];?></span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Perfil
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Sair
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <h1>Edi????o</h1>
          <hr>
            <form method="Post" action="processa_editar.php" required style="width: 80%; padding-left: 50px;">
              <div class="form-group row">
                  <label for="menu" class="col-sm-2">Cor do menu: </label>
                  <input name="menu" type="text" class="form-group inputForm col-sm-10" id="menu">
              </div>
              <div class="form-group row">
                  <label for="botao" class="col-sm-2">Cor dos bot??es: </label>
                  <input name="botao" type="text" class="form-group inputForm col-sm-10" id="botao">
              </div>

              <div class="form-group row">
                <label class="col-sm-2">Cor da tabela: </label>
                <div class="custom-control custom-radio col-sm-1">
                  <input type="radio" id="light" name="tabela" class="custom-control-input" value="light" checked>
                  <label class="custom-control-label" for="light">Light</label>
                </div>
                <div class="custom-control custom-radio">
                  <input type="radio" id="dark" name="tabela" class="custom-control-input" value="dark">
                  <label class="custom-control-label" for="dark">Dark</label>
                </div>
              </div>

              <div class="form-group row">
                  <h4>Favicon menu: </h4>
              </div>
              <div class="form-group row">
                  <label for="deposito" class="col-sm-2">Dep??sito: </label>
                  <input name="deposito" type="text" class="form-group inputForm col-sm-4" id="deposito">

                  <label for="fornecedores" class="col-sm-2">Fornecedores: </label>
                  <input name="fornecedores" type="text" class="form-group inputForm col-sm-4" id="fornecedores">
              </div>
              <div class="form-group row">
                  <label for="unidades" class="col-sm-2">Unidades: </label>
                  <input name="unidades" type="text" class="form-group inputForm col-sm-4" id="unidades">

                  <label for="produtos" class="col-sm-2">Produtos: </label>
                  <input name="produtos" type="text" class="form-group inputForm col-sm-4" id="produtos">
              </div>
              <div class="form-group row">
                  <label for="estoque" class="col-sm-2">Estoque: </label>
                  <input name="estoque" type="text" class="form-group inputForm col-sm-4" id="estoque">

                  <label for="entradas" class="col-sm-2">Entradas: </label>
                  <input name="entradas" type="text" class="form-group inputForm col-sm-4" id="entradas">
              </div>
              <div class="form-group row">
                  <label for="saidas" class="col-sm-2">Sa??das: </label>
                  <input name="saidas" type="text" class="form-group inputForm col-sm-4" id="saidas">
              </div>
              <center>
                <button type="submit" class="btn btn-success btn-lg">Salvar</button>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; G. Estoque 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Realmente quer sair?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">??</span>
          </button>
        </div>
        <div class="modal-body">Clique em sair se realmente quer finalizar a sess??o.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="logout.php">Sair</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="assets/js/sb-admin-2.min.js"></script>

</body>

</html>
