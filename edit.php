<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" type="image/webp" href="aset/pesat-removebg-preview.png">

    <title>Pesat admin</title>
    

    <!-- Custom fonts for this template-->
    <link
      href="vendor/fontawesome-free/css/all.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet"
    />

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />
  </head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Sidebar -->
      <ul
        class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
        id="accordionSidebar"
      >
        <!-- Sidebar - Brand -->
        <a
          class="sidebar-brand d-flex align-items-center justify-content-center"
          href="index.html"
        >
          <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
          </div>
          <div class="sidebar-brand-text mx-3">pesat admin</div>
        </a>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
          <a class="nav-link" 
           <?= $current_page == 'dashboard.php' ? 'active' : '' ?>
           href="dashboard.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>dashboard admin</span></a
          >
        </li>

        <li class="nav-item">
          <a class="nav-link" 
           <?= $current_page == 'admin.php' ? 'active' : '' ?>
           href="admin.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>admin</span></a
          >
        </li>

        <li class="nav-item">
          <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>calon ketua osis</span></a
          >
        </li>

         <li class="nav-item">
            <a class="nav-link <?= $current_page == 'lapor.php' ? 'active' : '' ?>" href="lapor.php">
              <i class="fas fa-fw fa-chart-area"></i>
              <span>laporan jumlah suara</span>
            </a>
          </li>


        
      </ul>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
          <!-- Topbar -->
          <nav
            class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow"
          >
            <!-- Sidebar Toggle (Topbar) -->
            <button
              id="sidebarToggleTop"
              class="btn btn-link d-md-none rounded-circle mr-3"
            >
              <i class="fa fa-bars"></i>
            </button>

            <ul class="navbar-nav ml-auto">
              <!-- Nav Item - Search Dropdown (Visible Only XS) -->
              <li class="nav-item dropdown no-arrow d-sm-none">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="searchDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="fas fa-search fa-fw"></i>
                </a>
                <!-- Dropdown - Messages -->
                <div
                  class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                  aria-labelledby="searchDropdown"
                >
                  <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                      <input
                        type="text"
                        class="form-control bg-light border-0 small"
                        placeholder="Search for..."
                        aria-label="Search"
                        aria-describedby="basic-addon2"
                      />
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                          <i class="fas fa-search fa-sm"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </li>

              <div class="topbar-divider d-none d-sm-block"></div>

              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="userDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small"
                    >Im admin</span
                  >
                  <img
                    class="img-profile rounded-circle"
                    src="img/undraw_profile.svg"
                  />
                </a>
                <!-- Dropdown - User Information -->
                <div
                  class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                  aria-labelledby="userDropdown"
                >
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Settings
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                    Activity Log
                  </a>
                  <div class="dropdown-divider"></div>
                  <a
                    class="dropdown-item"
                    href="#"
                    data-toggle="modal"
                    data-target="#logoutModal"
                  >
                    <i
                      class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"
                    ></i>
                    Logout
                  </a>
                </div>
              </li>
            </ul>
          </nav>
          <!-- End of Topbar -->
            <?php
                    $berhasil = false;
                    //ambil id
                    $id_admin = $_GET['id_admin'];

                    //sql
                    $sql = "SELECT * FROM admin where id_admin = $id_admin";

                    //eksekusi
                    $hasil = mysqli_query($koneksi, $sql);

                    //mengambil satu baris data dari hasil eksekusi
                    $ambil_data = mysqli_fetch_assoc($hasil);

                    //update data jika di submit
                    if (isset($_POST['simpan'])) {
                        $nama = $_POST['username'];
                        $password = $_POST['password'];

                        $update = "UPDATE admin SET username = '$nama',  password = '$password' WHERE id_admin = $id_admin";

                        $hasil = mysqli_query($koneksi, $update);

                        if ($hasil) {
                            $berhasil = true;
                        } else {
                        }
                    }
                    ?>





                <form action="" method="post" class="bg-white">
                    <div class="mb-3 p-3">
                        <label class="form-label">nama</label>
                        <input type="text" class="form-control" name="username" value="<?= $ambil_data['username'] ?>" required>
                    </div>
                    <div class="mb-3 p-3">
                        <label class="form-label">password</label>
                        <input type="text" class="form-control" name="password" value="<?= $ambil_data['password'] ?>" required>
                    </div>
                    <button type="submit" name="simpan" class="btn btn-primary m-3">Submit</button>
                </form>
                <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                
                <?php
                if ($berhasil) : ?>
                    <script>
                        swal({
                            title: "Berhasil!",
                            text: "Data berhasil disimpan!",
                            icon: "success",
                            button: "Sip",
                        }).then(() => {
                            window.location.href = "admin.php"; // Redirect to the same page
                        });
                    </script>
                <?php endif; ?>

                    <!-- Footer -->
                    <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
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
                <div
                class="modal fade"
                id="logoutModal"
                tabindex="-1"
                role="dialog"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true"
                >
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button
                        class="close"
                        type="button"
                        data-dismiss="modal"
                        aria-label="Close"
                        >
                        <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Select "Logout" below if you are ready to end your current session.
                    </div>
                    <div class="modal-footer">
                        <button
                        class="btn btn-secondary"
                        type="button"
                        data-dismiss="modal"
                        >
                        Cancel
                        </button>
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












