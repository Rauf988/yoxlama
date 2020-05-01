<?php
//



if(!isset($_SESSION['admin_info'])){
    redirect(base_url('cpdash'));
}

//
//?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>PA NEWS</title>
    <!-- Favicon -->
    <link href="<?php echo base_url('public/assets/front/images/icons/logo.png')?>" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="<?php echo base_url('public/assets/admin/nucleo/css/nucleo.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('public/assets/admin/@fortawesome/fontawesome-free/css/all.min.css')?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Argon CSS -->
    <link type="text/css" href="<?php echo base_url('public/assets/admin/dashboardcss/argon.css?v=1.0.0')?>" rel="stylesheet">
</head>

<body>
<!-- Sidenav -->
<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pt-0" href="<?php echo base_url('Raufcont/logOut')?>">
            <h3>LOG OUT</h3>
        </a>
        <!-- User -->
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                        <h3><?php echo $_SESSION['admin_info']['name'] ?></h3>
                    </div>
                </a>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="../index.html">
                            <img src="../assets/img/brand/blue.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                    <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fa fa-search"></span>
                        </div>
                    </div>
                </div>
            </form>



            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('Raufcont/news')?>">
                        <i class="ni ni-single-02 text-yellow"></i>ADD NEWS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo base_url('Raufcont/dashboard')?>">
                        <i class="ni ni-bullet-list-67 text-red"></i>REDAKTE/SIL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo base_url('Raufcont/admin_profile')?>">
                        <i class="fa fa-user text-red"></i>EDIT PROFILE</a>
                </li>
            </ul>


        </div>
    </div>
</nav>

<!-- Main content -->
<div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
        <div class="container-fluid">
            <!-- Brand -->
            <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="<?php echo base_url('Raufcont/dashboard')?>">XOŞ GƏLMİSİZ</a>
            <!-- Form -->
            <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
                <div class="form-group mb-0">
                    <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-search"></i></span>
                        </div>
                        <input class="form-control" placeholder="Search" type="text">
                    </div>
                </div>
            </form>





            <!-- User -->
            <ul class="navbar-nav align-items-center d-none d-md-flex">
                <li class="nav-item dropdown">
                    <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media align-items-center">
                            <div class="media-body ml-2 d-none d-lg-block">
                                <span class="mb-0 text-sm  font-weight-bold"><?php echo $_SESSION['admin_info']['name'] ?></span>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- USER END -->





    <!-- Header --> <!-- REDAKTE COLUM -->





    <div class="header bg-gradient-primary pb-5 pt-8 pt-md-10">
        <div class="container-fluid">
            <div class="header-body">
    <div class="container-fluid mt--9" style="height: 500px;">
        <div class="row mt-8">
            <div class="col">
                <div class="card bg-default shadow" style="height: 500px; overflow-y: auto;">
                    <div class="card-header bg-transparent border-0">
                        <h3 class="text-white mb-0">Düzəliş et/Sil</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-dark table-flush">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">Xəbər</th>
                                <th scope="col">Description</th>
                                <th scope="col">Cateqorya</th>
                                <th scope="col">Redakte et</th>
                                <th scope="col">Sil</th>
                            </tr>
                            </thead>
                            <tbody style="height: 300px; overflow-y: auto">

                        <?php foreach ($allNews as $allNewsKey) { ?>

                            <tr>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <?php echo $allNewsKey['title'] ?>
                                        </div>
                                    </div>
                                </th>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <?php echo $allNewsKey['description'] ?>
                                        </div>
                                    </div>
                                </th>
                                <td>
                                   <?php echo $allNewsKey['status'] ?>
                                </td>
                                <td>
                     <span class="badge badge-dot mr-4">
                          <a href="<?php echo base_url('Raufcont/update/'.$allNewsKey['id'])?>"><button type="button" class="btn btn-info">Redakte et</button></a>
                      </span>
                                </td>
                                <td>
                                    <span class="badge badge-dot mr-4">
                        <a href="<?php echo base_url('Raufcont/del/'.$allNewsKey['id'])?>"><button type="button" class="btn btn-danger">sil</button></a>
                                    </span>
                                </td>
                            </tr>

                           <?php } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
            </div>
        </div>
    </div>

        <!-- REDAKTE COLUM END-->


        <!-- Footer -->
        <footer class="footer">
            <div class="row align-items-center justify-content-xl-between">
                <div class="col-xl-6">
                    <div class="copyright text-center text-xl-left text-muted">
                        &copy; 2019 <a href="http://academy.asoiu.edu.az/" class="font-weight-bold ml-1" target="_blank">PA NEWS AZII IT-CLUB</a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Footer END -->

    </div>
</div>
<!-- Argon Scripts -->
<!-- Core -->
<script src="<?php echo base_url('public/assets/admin/vendor/jquery/dist/jquery.min.js')?>"></script>
<script src="<?php echo base_url('public/assets/admin/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')?>"></script>
<!-- Argon JS -->
<script src="<?php echo base_url('public/assets/admin/argonjs/argon.js?v=1.0.0')?>"></script>
</body>

</html>