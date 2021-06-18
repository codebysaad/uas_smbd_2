<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sistem Inventory</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Sistem Inventory</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Menu</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="daftar_barang.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Daftar Barang
                            </a>
                            <a class="nav-link" href="daftar_inventory.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Inventory
                            </a>
                            <a class="nav-link" href="daftar_user.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Daftar User
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Muhyiddin(201953109)
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tambah User</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Tambah User</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header d-sm-flex align-items-center justify-content-between">
                                Tambah User Baru
                            </div>
                            <div class="card-body">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                        <?php
					                            include 'config/connection.php';
					                            $conn = sqlsrv_connect( $serverName, $connectionInfo);
                                                if( $conn === false ) {
                                                    echo "Koneksi Gagal</br>";
                                                    die( print_r( sqlsrv_errors(), true));
                                                }
                                                $id = $_GET['id'];
                                                $tsql = "SELECT * FROM Users WHERE id='$id'";
                                                $stmt = sqlsrv_query( $conn, $tsql);
                                                if( $stmt === false ) {
                                                    echo "Error in executing query.</br>";
                                                    die( print_r( sqlsrv_errors(), true));
                                                }
                                                $json = array();
                                                while($d = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
				                            ?>
                                            <form method="post" action="crud/action_update_user.php">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label class="bmd-label-floating">ID</label>
                                                            <input name="id" type="text" class="form-control" value="<?php echo $d['id']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <label class="bmd-label-floating">Username</label>
                                                            <input type="text" class="form-control" name="username" value="<?php echo $d['username']; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <label class="bmd-label-floating">Password</label>
                                                            <input type="password" class="form-control" name="pasword" value="<?php echo $d['pasword']; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-8">
                                                    <label for="inputState">Level Access</label>
                                                    <select name="access" id="inputState" class="form-control">
                                                        <option selected>Pilih...</option>
                                                        <option <?=$d['access'] == 'admin' ? ' selected="selected"' : '';?>>admin</option>
                                                        <option <?=$d['access'] == 'user' ? ' selected="selected"' : '';?>>user</option>
                                                    </select>
                                                </div>
                                                </br>
                                                <button type="submit" class="btn btn-warning pull-right">Update</button>
                                                <div class="clearfix"></div>
                                            </form>
                                            <?php
                                                    }
                                                ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Anak Menara 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>