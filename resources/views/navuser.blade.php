<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard Rektor Institut Teknologi Del</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('img/icons/itdel.png') }}" />
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/index">
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
                    <span>Beranda</span></a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">

            <div class="sidebar-heading">
                Agenda Rektor / Rektorat
            </div>
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="/AgendaRektor">
                    <i class="fas fa-calendar"></i>
                    <span>Agenda Rektor</span></a>
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
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
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
                    <i class="fas fa-users"></i>
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
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Gedung Dalam Kampus:</h6>
                        <a class="collapse-item" href="/ListGedung">List Gedung</a>
                        <a class="collapse-item" href="/KapasitasRuanganKelas">Kapasitas Ruangan Kelas</a>
                        <a class="collapse-item" href="/Kantin">Kantin</a>
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
                        <a class="collapse-item" href="/Asrama">Asrama/Rusunawa</a>
                        <a class="collapse-item" href="/Rusun3">Data Rusunawa 3</a>
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
                        <a class="collapse-item" href="/Komputer">Komputer</a>
                        <a class="collapse-item" href="/KendaraanKampus">Kendaraan Kampus</a>
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                List Aset IT Del
            </div>
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseaset"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-clipboard"></i>
                    <span>Penambahan Aset</span>
                </a>
                <div id="collapseaset" class="collapse" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Kategori</h6>
                        <a class="collapse-item" href="/Mebeler">Mebeler</a>
                        <a class="collapse-item" href="/AlatTulis">Alat Tulis/PC/Notebook</a>
                        <a class="collapse-item" href="/AudioVisual">Audio Visual</a>
                        <a class="collapse-item" href="/PeralatanRumahTangga">Peralatan Rumah Tangga</a>
                        <a class="collapse-item" href="/PersediaanKampus">Persediaan Kampus</a>
                        <a class="collapse-item" href="/AlatLaboratorium">Alat-Alat Lab</a>
                        <a class="collapse-item" href="/Jaringan">Jaringan</a>
                        <a class="collapse-item" href="/PerlengkapanMaintanance">Perlengkapan Maintanance</a>
                        <a class="collapse-item" href="/PerlengkapanTaman">Perlengkapan Taman</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsedisposal"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-recycle"></i>
                    <span>Disposal Aset</span>
                </a>
                <div id="collapsedisposal" class="collapse" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Kategori</h6>
                        <a class="collapse-item" href="/DisposalMebeler">Mebeler</a>
                        <a class="collapse-item" href="/DisposalAlatTulis">Alat Tulis/PC/Notebook</a>
                        <a class="collapse-item" href="/DisposalAudioVisual">Audio Visual</a>
                        <a class="collapse-item" href="/DisposalPeralatanRumahTangga">Peralatan Rumah Tangga</a>
                        <a class="collapse-item" href="/DisposalPersediaanKampus">Persediaan Kampus</a>
                        <a class="collapse-item" href="/DisposalAlatLaboratorium">Alat-Alat Lab</a>
                        <a class="collapse-item" href="/DisposalJaringan">Jaringan</a>
                        <a class="collapse-item" href="/DisposalPerlengkapanMaintanance">Perlengkapan Maintanance</a>
                        <a class="collapse-item" href="/DisposalPerlengkapanTaman">Perlengkapan Taman</a>
                    </div>
                </div>
            </li>

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


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Messages -->
                        <!-- Dropdown - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">1</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to
                                            download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Rektor</span>
                                <img class="img-profile rounded-circle" src="{{ asset('img/undraw_profile.svg') }}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="/settingsprofile">
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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">DASHBOARD REKTOR IT DEL</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-file-export fa-sm text-white-50"></i> Export Data</a>
                    </div>
