<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> <?= $title; ?> </title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/') ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('user/dashboard/') ?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-futbol"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Futsaloka</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('user/dashboard/') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('user/dashboard/tarif/') ?>">
                <i class="fas fa-fw fa-list-alt"></i>
                <span>Tarif Lapangan</span></a>
            </li>


            <!-- Nav Item - Charts -->
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('user/dashboard/pesan/') ?>">
                    <i class="fa fa-shopping-cart"></i>
                    <span>Pesan Sekarang!</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('user/dashboard/riwayat/') ?>">
                    <i class="fas fa-fw fa-history"></i>
                    <span>Riwayat Pemesanan</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

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

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            </a>
                            <!-- Dropdown - Messages -->
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"> <?= $user['username']; ?> </span>
                                <img class="img-profile rounded-circle" src="https://cdn.iconscout.com/icon/free/png-512/avatar-372-456324.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?= base_url('auth/logout') ?>" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Approach -->
                <div class="card shadow mx-4">
                    <div class="card-header py-3">
                        <h4 class="m-0 font-weight-bold text-primary">Ayo Pesan Sekarang !</h6>
                    </div>
                </div>

                <?= $this->session->flashdata('pemesanan'); ?>
                
                <div class="mx-4 my-4">
                <form role="form" method="post" action="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card shadow">
                                    <div class="card-header bg-primary">
                                        <h6 class="m-0 font-weight-bold text-light">Isi Data Diri</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" name="nama" class="form-control" placeholder="Nama" value="">
                                            <small class="text-danger"> <?php echo form_error('nama'); ?> </small>
                                        </div>
                                        <div class="form-group">
                                            <label>No HP</label>
                                            <input type="number" name="no_hp" class="form-control" placeholder="No HP" value="">
                                            <small class="text-danger"> <?php echo form_error('no_hp'); ?> </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-dark shadow">
                                    <div class="card-header bg-primary">
                                        <h6 class="m-0 font-weight-bold text-light">Jadwal</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Tanggal Main</label>
                                            <input type="date" name="tanggal_main" id="tanggal_main" class="form-control" placeholder="Tanggal Main" value="">
                                            <small class="text-danger"> <?php echo form_error('tanggal_main'); ?> </small>
                                        </div>
                                        <div class="form-group">
                                            <label>Jadwal Main</label>
                                            <select name="jadwal" id="jadwal" class="form-control select2" style="width: 100%;">
                                                <option value="">- Pilih Jadwal -</option>
                                                <? foreach($jadwal as $jd): ?>
                                                    <option value="<?= $jd['id_jadwal'];?>"> <?= $jd['jam']; ?> </option>
                                                <? endforeach; ?>
                                            </select>
                                            <small class="text-danger"> <?php echo form_error('jadwal'); ?> </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                            </div>
                            <div class="col-md-6 my-4">
                                <div class="card card-dark shadow">
                                    <div class="card-header bg-primary">
                                    <h6 class="m-0 font-weight-bold text-light">Pembayaran</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Jenis Pembayaran</label>
                                            <select name="pembayaran" class="custom-select">
                                                <option value="">- Pilih Jenis Pembayaran -</option>
                                                <option value="tunai">Bayar di tempat</option>
                                                <option value="transfer">Transfer</option>
                                            </select>
                                            <small class="text-danger"> <?php echo form_error('pembayaran'); ?> </small>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="reset" class="btn btn-danger">Batal</button>
                                        <button type="submit" class="btn btn-success float-right">Lanjutkan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                    <span>Futsaloka &copy; 2020</span>
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
                    <h5 class="modal-title" id="exampleModalLabel">Apakah Anda ingin Keluar ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url('auth/logout') ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/') ?>js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url('assets/') ?>vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url('assets/') ?>js/demo/chart-area-demo.js"></script>
    <script src="<?= base_url('assets/') ?>js/demo/chart-pie-demo.js"></script>


</body>

</html>