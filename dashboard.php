<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<?php
include "koneksi.php";
?>

<?php
$current_page = basename($_SERVER['REQUEST_URI']);
?>

<!DOCTYPE html>
<html lang="en">
    <style>
      .nav-link {
        color: #333;
        padding: 10px 10px;
        border-radius: 10px;
        transition: all 0.3s ease;
      }

      /* active style */
      .nav-link.active {
        background-color: rgb(102, 106, 103) !important;
        color: white !important;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.32);
        transition: all 0.3s ease;
      }

      .container1{
        margin-top:50px;
        margin-left:300px;
      }

      .card-container {
        margin-left:300px;
        display: flex;
        gap: 20px;
        flex-wrap: wrap;
        justify-content: flex-start;
        margin-top: 20px;
      }

      .card {
        padding:10px;
        width: 250px;
        border: 1px solid #ddd;
        border-radius: 12px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        overflow: hidden;
        text-align: center;
        background-color: #fff;
        transition: transform 0.2s;
      }

      .card:hover {
        transform: scale(1.03);
      }

      .card img {
        width: 100%;
        height: 300px;
        object-fit: cover;
      }

      .card h3 {
        margin: 20px 0px 5px 0px;
        font-size: 18px;
      }

      .card p {
        margin-bottom: 10px;
        color: #555;
        font-size: 15px;
      }


    </style>
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
            <a class="nav-link <?= $current_page == 'dashboard.php' ? 'active' : '' ?>" href="dashboard.php">
              <i class="fas fa-fw fa-chart-area"></i>
              <span>dashboard admin</span>
            </a>
          </li>

          <!-- Nav Item - Admin -->
          <li class="nav-item">
            <a class="nav-link <?= $current_page == 'admin.php' ? 'active' : '' ?>" href="admin.php">
              <i class="fas fa-fw fa-chart-area"></i>
              <span>admin</span>
            </a>
          </li>

           <li class="nav-item">
            <a class="nav-link <?= $current_page == 'calon_ketua.php' ? 'active' : '' ?>" href="calon_ketua.php">
              <i class="fas fa-fw fa-chart-area"></i>
              <span>calon ketua osis</span>
            </a>
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

         <div class="container1 mr-5 ">
           <!-- Content Row -->
            <div class="row">
              <!-- Earnings (Monthly) Card Example -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow  py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div
                          class="text-xs font-weight-bold text-primary text-uppercase mb-1"
                        >
                          jumlah calon ketua
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php
                                 include 'koneksi.php'; 
                                  $sql = "SELECT COUNT(id_calon) AS total_calon FROM calon_ketua";
                                  $hasil = mysqli_query($koneksi, $sql);
                                  $data = mysqli_fetch_assoc($hasil);

                                  echo $data['total_calon']; 
                              ?>

                        </div>
                      </div>
                      <div class="col-auto">
                        <i class="bi bi-people-fill fa-3x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Earnings (Monthly) Card Example -->
              <div class="col-xl-3 col-md-6 mb-4 ">
                <div class="card border-left-success shadow py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div
                          class="text-xs font-weight-bold text-success text-uppercase mb-1 ml-2"
                        >
                          review calon ketua
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                         <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="calon_ketua.php" class="btn btn-sm btn-success me-md-1 mr-4">review</a>
                        

                     </div>
                        </div>
                      </div>
                      <div class="col-auto">
                        <i class="bi bi-mortarboard-fill fa-3x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
             </div>

              <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4"> 
                <div class="card border-left-info shadow py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div
                          class="text-xs font-weight-bold text-info text-uppercase mb-1"
                        >
                          hasil vote saat ini
                        </div>
                        <div class="row no-gutters align-items-center">
                          <div class="col-auto">
                            <div
                              class="h5 mb-0 mr-3 font-weight-bold text-gray-800"
                            >
                              10%
                            </div>
                          </div>
                          <div class="col">
                            <div class="progress progress-sm mr-2">
                              <div
                                class="progress-bar bg-info"
                                role="progressbar"
                                style="width: 10%"
                                aria-valuenow="50"
                                aria-valuemin="0"
                                aria-valuemax="100"
                              ></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-auto">
                        <i
                          class="bi bi-person-lines-fill fa-3x text-gray-300"
                        ></i>
                      </div>
                    </div>
                  </div>
                </div><div class="container-fluid">
              </div>
            </div>
          </div>

         </div>
            <div class="card-container">
            <?php
            include 'koneksi.php';

            $result = $koneksi->query("SELECT calon_ketua.*, COUNT(voting.id_calon) as total_voter 
            FROM calon_ketua 
            LEFT JOIN voting ON calon_ketua.id_calon = voting.id_calon 
            GROUP BY calon_ketua.id_calon"
            );

            while ($row = $result->fetch_assoc()) {
                echo "<div class='card'>";
                echo "<img src='" . htmlspecialchars($row['foto']) . "' alt='Foto Calon'>";
                echo "<h3>" . htmlspecialchars($row['nama']) . "</h3>";
                echo "<p>Total Suara: " . $row['total_voter'] . " orang</p>";
                echo "</div>";
            } 
            ?>
            </div>
         </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright &copy; pemilihan ketua osis</span>
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











