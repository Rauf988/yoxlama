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
                        <input class="form-control" placeholder="Search" type="text" name="name">
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
    <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(<?php echo base_url('public/assets/img/profile-cover.jpg')?>); background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-default opacity-8"></span>
        <!-- Header container -->
        <div class="container-fluid d-flex align-items-center">
            <div class="row">
                <div class="col-lg-7 col-md-10">
                    <h1 class="display-2 text-white"><?php echo $_SESSION['admin_info']['name'] ?></h1>
                </div>
            </div>
        </div>
    </div>






    <!-- Page content -->
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                <div class="card card-profile shadow">

                    <div class="card-body pt-0 pt-md-4">
                        <div class="row">
                            <div class="col">
                                <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <h3>
                                <?php echo $_SESSION['admin_info']['name'] ?><span class="font-weight-light">, 27</span>
                            </h3>
                            <div class="h5 font-weight-300">
                                <i class="ni location_pin mr-2"></i>BAKU, AZERBAIJAN
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">My account</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="<?php echo base_url('Raufcont/profilUpt/')?>">
                            <h6 class="heading-small text-muted mb-4">User information</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">Username</label>
                                            <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Username" name="name" value="<?php echo $_SESSION['admin_info']['name'] ?>">
                                        </div>
                                    </div>
                                </div>
                                    <button type="submit" class="btn btn-info">SAVE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->

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