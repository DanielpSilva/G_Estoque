<?php
session_start();
include("verifica_login.php");
include("conexao.php");

  $empresa = $_SESSION['idempresa'];
  
  $consulta = "SELECT * FROM `fornecedores` WHERE fornecedor_empresa_id ='$empresa'";
  $query = mysqli_query($conn, $consulta);

$style = "SELECT * FROM style WHERE empresa_id  ='$empresa'";
$queryStyle = mysqli_query($conn, $style);

?>
<!DOCTYPE html>

<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <link rel="icon" href="img/favico.png"/><a style="visibility: hidden;">;</a>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>G. Estoque</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

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
          <span>Saídas</span></a>
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
          <span>Utilitários</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Customização:</h6>
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
          <div class="row-fluid">
            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#myModal">Adicionar</button>
            <br/><hr><br/>
            <table class="table table-striped" >
              <thead class="thead-dark">
                <tr>
                  
                  <th>Nome</th>
                  <th>Razao</th>
                  <th>CNPJ</th>
                  <th>Telefone</th>

                  <th>Rua</th>
                  <th>Numero</th>
                  <th>Bairro</th>
                  <th>Cidade</th>
                  <th>Estado</th>
                </tr>
				</thead>

                </tr>
                <?php while($dado = $query->fetch_array()){ ?>
                <tr>
                  
                  <td><?php echo $dado['fornecedor_nome'] ?></td>
                  <td><?php echo $dado['fornecedor_razao'] ?></td>
                  <td><?php echo $dado['fornecedor_cnpj'] ?></td>
                  <td><?php echo $dado['fornecedor_telefone'] ?></td>
                  
                  <td><?php echo $dado['fornecedor_rua'] ?></td>
                  <td><?php echo $dado['fornecedor_numero'] ?></td>
                  <td><?php echo $dado['fornecedor_bairro'] ?></td>
                  <td><?php echo $dado['fornecedor_cidade'] ?></td>
                  <td><?php echo $dado['fornecedor_estado_sigla'] ?></td>
                  
                </tr>
                <?php  } ?>


              </table>
          </div>
          <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  
                  <h4 class="modal-title">Novo fornecedor</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                  <form method="Post" action="processa_fornecedor.php">
                    <!-- Nome -->
                    <div class="form-group row">
                      <label for="nome" class="col-sm-2">Nome:</label>
                      <input name="nome" type="text" class="form-group inputForm col-sm-10" id="nome">
                      <br/>
                    </div>

                    <!-- Razao -->
                    <div class="form-group row">
                      <label for="razao"class="col-sm-2">Razão:</label>
                      <input name="razao" type="text" class="form-group inputForm col-sm-10" id="razao">
                      <br/>
                    </div>

                    <!-- CNPJ -->
                    <div class="form-group row">
                      <label for="cnpj"class="col-sm-2">CNPJ:</label>
                      <input name="razao" type="text" class="form-group inputForm col-sm-10" id="cnpj">
                      <br/>
                    </div>

                    <!-- E-mail -->
                    <div class="form-group row">
                      <label for="email"class="col-sm-2">E-mail:</label>
                      <input name="email" type="email" class="form-group inputForm col-sm-10" id="email">
                      <br/>
                    </div>

                    <!-- Telefone -->
                    <div class="form-group row">
                      <label for="telefone"class="col-sm-2">Telefone:</label>
                      <input name="telefone" type="text" class="form-group inputForm col-sm-10" id="telefone">
                      <br/>
                    </div>

                    <!-- Cep -->
                    <div class="form-group row">
                      <label for="cep"class="col-sm-2">Cep:</label>
                      <input name="cep" type="text" class="form-group inputForm col-sm-10" id="cep" value="" size="10" maxlength="9" onblur="pesquisacep(this.value);">
                      <br/>
                    </div>

                    <!-- Rua -->
                    <div class="form-group row">
                      <label for="rua"class="col-sm-2">Rua:</label>
                      <input name="rua" class="form-group inputForm col-sm-10" type="text" id="rua" size="40">
                      <br/>
                    </div>

                    <!-- Numero -->
                    <div class="form-group row">
                      <label for="numero"class="col-sm-2">Numero:</label>
                      <input name="numero" class="form-group inputForm col-sm-10" type="text" id="numero">
                      <br/>
                    </div>

                    <!-- Bairro -->
                    <div class="form-group row">
                      <label for="bairro"class="col-sm-2">Bairro:</label>
                      <input name="bairro" class="form-group inputForm col-sm-10" type="text" id="bairro" size="40">
                      <br/>
                    </div>

                    <!-- Cidade -->
                    <div class="form-group row">
                      <label for="cidade"class="col-sm-2">Cidade:</label>
                      <input name="cidade" class="form-group inputForm col-sm-10" type="text" id="cidade" size="40">
                      <br/>
                    </div>

                    <!-- Estado -->
                    <div class="form-group row">
                      <label for="uf"class="col-sm-2">Estado:</label>
                      <input name="uf" class="form-group inputForm col-sm-10" type="text" id="uf" size="2">
                      <br/>
                    </div>

                    <!-- IBGE -->
                    <div class="form-group row">
                      <label for="ibge"class="col-sm-2">IBGE:</label>
                      <input name="ibge" class="form-group inputForm col-sm-10" type="text" id="ibge" size="8">
                      <br/>
                    </div>


                      <button type="submit" value="Cadastrar" class="btn btn-primary"> Cadastrar </button>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                </div>
              </div>

            </div>
          </div>
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
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Clique em sair se realmente quer finalizar a sessão.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="logout.php">Sair</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>
<!-- Adicionando Javascript -->
    <script type="text/javascript" >
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
            document.getElementById('ibge').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
            document.getElementById('ibge').value=(conteudo.ibge);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";
                document.getElementById('ibge').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = '//viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

    </script>
</html>
