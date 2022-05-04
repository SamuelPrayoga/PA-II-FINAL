<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard Rektor IT Del | Agenda Rektor</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/icons/itdel.png" />
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Dashboard Rektor <sup>IT Del</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="/index">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Sumber Daya Manusia
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <span>Dosen</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data Dosen:</h6>
                        <a class="collapse-item" href="/DosenAktif">Dosen Aktif</a>
                        <a class="collapse-item" href="/DosenTugasBelajar">Dosen Tugas Belajar</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-user-cog"></i>
                    <span>Staff dan Asisten Dosen</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Staff dan Asisten Dosen</h6>
                        <a class="collapse-item" href="/Staff">Staff</a>
                        <a class="collapse-item" href="/AsistenDosen">Asisten Dosen</a>
                        <a class="collapse-item" href="/Keasramaan">Keasramaan</a>
                        <a class="collapse-item" href="/Pegawai">Pegawai</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMahasiswa"
                    aria-expanded="true" aria-controls="collapseMahasiswa">
                    <i class="fas fa-user-graduate"></i>
                    <span>Mahasiswa</span>
                </a>
                <div id="collapseMahasiswa" class="collapse" aria-labelledby="headingMahasiswa"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Mahasiswa</h6>
                        <a class="collapse-item" href="/MahasiswaAktif">Mahasiswa Aktif</a>
                        <a class="collapse-item" href="/MahasiswaAlumni">Mahasiswa Alumni</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Asset dan Fasilitas Kampus
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-building"></i>
                    <span>Gedung & Bangunan</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Gedung Dalam Kampus:</h6>
                        <a class="collapse-item" href="/ListGedung">List Gedung</a>
                        <a class="collapse-item" href="/KapasitasRuangKelas">Kapasitas Ruangan Kelas</a>
                        <a class="collapse-item" href="/Laboratorium">Laboratorium</a>
                        <a class="collapse-item" href="/Kantin">Kantin</a>
                        <a class="collapse-item" href="/Perpustakaan">Perpustakaan</a>
                        <a class="collapse-item" href="/PerumahanDalam">Perumahan Dalam IT Del</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Gedung Luar Kampus:</h6>
                        <a class="collapse-item" href="/PerumahanLuar">Perumahan Luar IT Del</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAsrama"
                    aria-expanded="true" aria-controls="collapseAsrama">
                    <i class="fas fa-home"></i>
                    <span>Asrama dan Rusunawa</span>
                </a>
                <div id="collapseAsrama" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Asrama dan Rusunawa</h6>
                        <a class="collapse-item" href="/Asrama">Asrama</a>
                        <a class="collapse-item" href="/Rusunawa">Rusunawa</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseInventaris"
                    aria-expanded="true" aria-controls="collapseInventaris">
                    <i class="fas fa-bookmark"></i>
                    <span>Inventaris Kampus</span>
                </a>
                <div id="collapseInventaris" class="collapse" aria-labelledby="headingInventaris"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data Inventaris</h6>
                        <a class="collapse-item" href="/DataKomputer">Komputer</a>
                        <a class="collapse-item" href="/Kendaraan">Kendaraan Kampus</a>
                        <a class="collapse-item" href="/Hiburan">Peralatan Musik/Ibadah</a>
                    </div>
                </div>
            </li>

            <div class="sidebar-heading">
                Agenda dan Pertemuan
            </div>
            <!-- Nav Item - Tables -->
            <li class="nav-item active">
                <a class="nav-link" href="/AgendaRektor">
                    <i class="fas fa-calendar"></i>
                    <span>Agenda Rektor</span></a>
            </li>
            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="/PertemuanRektor">
                    <i class="fas fa-briefcase"></i>
                    <span>Pertemuan Rektor</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">

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

                    <!-- Topbar Search -->

                      <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="#">Agenda dan Pertemuan Rektor</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Agenda Rektor</li>
                        </ol>
                      </nav>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                    <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">User</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>

                <div class="container-fluid">
                                        <!-- DataTales Example -->
                                        <div class="card shadow mb-4">
                                            <div class="card-header py-3">
                                                <h6 class="m-0 font-weight-bold text-primary">Jadwal dan Riwayat Agenda Institut Teknologi Del</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Nama Agenda</th>
                                                                <th>Lokasi</th>
                                                                <th>Tanggal</th>
                                                                <th>Waktu</th>
                                                                <th>Keterangan</th>
                                                                <th>Konfirmasi</th>
                                                                <th>Status Konfirmasi</th>
                                                            </tr>
                                                        </thead>
                                                        <tfoot>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Nama Agenda</th>
                                                                <th>Lokasi</th>
                                                                <th>Tanggal</th>
                                                                <th>Waktu</th>
                                                                <th>Keterangan</th>
                                                                <th>Konfirmasi</th>
                                                                <th>Status Konfirmasi</th>
                                                            </tr>
                                                        </tfoot>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Penandatanganan MoU Kerjasama Bidang Teknologi AI dengan Institut Teknologi Bandung</td>
                                                                <td>Gedung Auditorium ITB</td>
                                                                <td>15 April 2022</td>
                                                                <td>Pukul 10.00 WIB</td>
                                                                <td>Membawa Berkas MoU dan Asistensi Rektorat</td>
                                                                <td>
                                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" > Konfirmasi</button>
                                                                </td>
                                                                <td>Hadir</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Penandatanganan MoU Kerjasama Bidang Teknologi AI dengan Institut Teknologi Sumatera</td>
                                                                <td>Gedung Auditorium ITERA</td>
                                                                <td>22 April 2022</td>
                                                                <td>Pukul 10.00 WIB</td>
                                                                <td>Membawa Berkas MoU dan Asistensi Rektorat</td>
                                                                <td>
                                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" > Konfirmasi</button>
                                                                </td>
                                                                <td>Hadir</td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                    <div class="modal fade" id="myModal" role="dialog">
                                                        <div class="modal-dialog">

                                                          <!-- Modal content-->
                                                          <div class="modal-content">
                                                            <div class="modal-header">

                                                              <h4 class="modal-title">Konfirmasi Pertemuan Rektor</h4>
                                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-sm-4"><strong>Nama Kegiatan Pertemuan</strong></div>
                                                                    <div class="col-sm-2">:</div>
                                                                    <div class="col-md-6">Penandatanganan MoU Kerjasama Bidang Teknologi AI dengan Institut Teknologi Bandung</div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-4"><strong>Penyelenggara</strong></div>
                                                                    <div class="col-sm-2">:</div>
                                                                    <div class="col-md-6">Institut Teknologi Bandung</div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-4"><strong>Lokasi</strong></div>
                                                                    <div class="col-sm-2">:</div>
                                                                    <div class="col-md-6">Gedung Auditorium ITB</div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-4"><strong>Tanggal</strong></div>
                                                                    <div class="col-sm-2">:</div>
                                                                    <div class="col-md-6">15 April 2022</div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-4"><strong>Waktu</strong></div>
                                                                    <div class="col-sm-2">:</div>
                                                                    <div class="col-md-6">10.00 WIB</div>
                                                                </div>
                                                                <br>
                                                                <p>Konfirmasi Kehadiran Anda</p>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="confirm" id="hadir" value="hadir" required>
                                                                        <label class="form-check-label" for="hadir">
                                                                      Hadir
                                                                    </label>
                                                                  </div>
                                                                  <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="confirm" id="tidakhadir" value="tidakhadir" required>
                                                                        <label class="form-check-label" for="tidakhadir">
                                                                      Tidak Dapat Hadir
                                                                    </label>
                                                                  </div>
                                                                  <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="confirm" id="diwakilkan" value="diwakilkan" required>
                                                                        <label class="form-check-label" for="diwakilkan">
                                                                      Hadir Tetapi Diwakilkan
                                                                    </label>
                                                                  </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-primary">Submit</button>
                                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                </div>
                                            </div>
                                        </div>
                </div>

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Institut Teknologi Del</span>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
        <!-- Page level plugins -->
        <script src="vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
