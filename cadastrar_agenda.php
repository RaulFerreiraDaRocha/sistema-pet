<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

    <title>Agenda - Sistema Pets</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php include('sidebar.php');?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php include('top_navbar.php'); ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading ->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Painel de Controle</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Relatórios Gerais</a>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-lg-12">

              <!-- Default Card Example -->
              <div class="card mb-4">
                <div class="card-header">
                  Agendar Banho e Tosa
                </div>
                <div class="card-body">
                  <!--INICIO FORM-->
				  <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Agendar Banho e Tosa!</h1>
              </div>
              <form class="user">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="cliente_nome" placeholder="Nome">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="cliente_sobrenome" placeholder="Sobrenome">
                  </div>
                </div>
				 <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="cliente_whatsapp" placeholder="WhatsApp">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="cliente_captacao" placeholder="Como conheceu a loja?">
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" id="cliente_email" placeholder="Email">
                </div>
				<div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="pet_nome" placeholder="Nome do Pet">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="pet_raca" placeholder="Raça do Pet">
                  </div>
                </div>
				<div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="form-group">
                                <label>Ele é um</label>
                                <select class="form-control" id="pet_tipo" name="pet_tipo">
                                    <option>Cachorro</option>
									<option>Gato</option>
                                 </select>
                            </div>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="pet_cor" placeholder="Cor do Pet">
                  </div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" rows="3" id="pet_descricao" name="pet_descricao" placeholder="Descreva características do animal que possam identificá-lo facilmente." ></textarea>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="date" class="form-control form-control-user" id="pet_agendamento" name="pet_agendamento">
                  </div>
                  <div class="col-sm-6">
                    <input type="time" class="form-control form-control-user" id="pet_horario" name="pet_horario">
                  </div>
                </div>
                <a href="login.html" class="btn btn-primary btn-user btn-block">
                  Registrar Agendamento
                </a>
                <hr>
                </form>
              <hr>
              <div class="text-center">
                <button type="reset" class="btn btn-danger btn-user btn-block">
                  Limpar Dados
                </button>
              </div>
              <div class="text-center">
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
				  <!--FINAL FORM-->
                </div>
              </div>

            
          </div>

          <!-- Content Row -->

          

            <!-- Pie Chart -->
            
          </div>

          <!-- Content Row -->
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
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
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
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

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
