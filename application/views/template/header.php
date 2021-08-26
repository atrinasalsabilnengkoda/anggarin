<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />

    <!-- App favicon -->
    <!-- <link rel="shortcut icon" href="assets/images/favicon.ico"> -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/logo.png">

    <!-- plugin css -->
    <link href="<?php echo base_url(); ?>/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />

    <!-- Icons Css -->
    <link href="<?php echo base_url(); ?>/assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    <!-- App Css-->
    
    <link href="<?php echo base_url(); ?>/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    <!-- SweetAlert -->
    <link href="<?php echo base_url() ?>assets/css/sweetalert2.min.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- datatables -->
    
</head>


<body>
    <!-- Begin page -->
    <div id="layout-wrapper">
        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="<?= base_url();?>home" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="<?php echo base_url(); ?>/assets/images/logo.png" alt="" height="16">
                            </span>
                            <span class="logo-lg">
                                <img src="<?php echo base_url(); ?>/assets/images/logonya.png" alt="" height="24">
                            </span>
                        </a>

                        <a href="<?= base_url();?>" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="<?php echo base_url(); ?>/assets/images/logo.png" alt="" height="16">
                            </span>
                            <span class="logo-lg">
                                <img src="<?php echo base_url(); ?>/assets/images/logonya.png" alt="" height="24">
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                        <i class="mdi mdi-menu"></i>
                    </button>

                    <!-- <div class="topbar-social-icon me-3 d-none d-md-block">
                        <ul class="list-inline title-tooltip m-0">
                            <li class="list-inline-item">
                                <a href="<?= base_url();?>calender" data-bs-toggle="tooltip" data-placement="top" title="Calendar">
                                 <i class="mdi mdi-calendar"></i>
                                </a>
                            </li>

                            <li class="list-inline-item">
                                <a href="pages-invoice.html" data-bs-toggle="tooltip" data-placement="top" title="Printer">
                                 <i class="mdi mdi-printer"></i>
                                </a>
                            </li>
                        </ul>
                    </div> -->
            
                </div>

                 <!-- Search input -->
                 <!-- <div class="search-wrap" id="search-wrap">
                    <div class="search-bar">
                        <input class="search-input form-control" placeholder="Search" />
                        <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                            <i class="mdi mdi-close-circle"></i>
                        </a>
                    </div>
                </div> -->

                <div class="d-flex">
                    <!-- <div class="dropdown d-none d-lg-inline-block">
                        <button type="button" class="btn header-item toggle-search noti-icon waves-effect" data-target="#search-wrap">
                            <i class="mdi mdi-magnify"></i>
                        </button>
                    </div> -->
                    
                    <div class="dropdown d-none d-lg-inline-block ms-1">
                        <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                            <i class="mdi mdi-fullscreen"></i>
                        </button>
                    </div>

                    

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="<?php echo base_url(); ?>assets/images/users/avatar.png"
                                alt="Header Avatar">
                            <span class="d-none d-xl-inline-block ms-1">Admin</span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item" href="<?= base_url();?>bank"><i class="mdi mdi-wallet-outline font-size-16 align-middle me-1"></i> My Wallet</a>
                            <a class="dropdown-item d-block" href="<?= base_url();?>setting"><span class="badge badge-success float-end">11</span><i class="mdi mdi-cog-outline font-size-16 align-middle me-1"></i> Settings</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="<?= base_url();?>login"><i class="mdi mdi-power font-size-16 align-middle me-1 text-danger"></i> Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">
            <div data-simplebar class="h-100">
                <div class="user-sidebar text-center">
                    <div class="dropdown">
                        <div class="user-img">
                            <img src="<?php echo base_url(); ?>assets/images/users/avatar.png" alt="" class="rounded-circle">
                            <span class="avatar-online bg-success"></span>
                        </div>
                        <div class="user-info">
                            <h5 class="mt-3 font-size-16 text-white">Admin</h5>
                            <span class="font-size-13 text-white-50">Administrator</span>
                        </div>
                    </div>
                </div>
                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Menu</li>

                        <li>
                            <a href="<?= base_url();?>home" class="waves-effect">
                                <i class="dripicons-home"></i><span class="badge rounded-pill bg-info float-end"></span>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="dripicons-cart"></i>
                                <span>Products</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="<?= base_url();?>product">Data Product</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="mdi mdi-account"></i>
                                <span>Customers</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="<?= base_url();?>customer">Data Customer</a></li>
                                <li><a href="<?= base_url();?>order">Data Order</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="dripicons-card"></i>
                                <span>Invoice</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="<?= base_url();?>supplier">Data Supplier</a></li>
                                <li><a href="<?= base_url();?>payment">Data Pembayaran</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="mdi mdi-bank"></i>
                                <span>Bank</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="<?= base_url();?>bank">Data Bank</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="dripicons-document"></i>
                                <span>Report</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="<?= base_url();?>income">Laporan Pendapatan</a></li>
                                <li><a href="<?= base_url();?>outcome">Laporan Pengeluaran</a></li>
                                <li><a href="<?= base_url();?>profitloss">Laporan Laba Rugi</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="mdi mdi-cog-outline"></i>
                                <span>Settings</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="<?= base_url();?>setting">Setting Email</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>

        <script>
 var flash = $('#flash_tmbh').data('flash');
 if(flash){
  Swal.fire({
  position: 'top-center',
  icon: 'success',
  title: 'Data berhasil disimpan',
  showConfirmButton: false,
  timer: 1500
})
 }
  </script>
  
  <script>
 var flash = $('#flash_hps').data('flash');
 if(flash){
  Swal.fire({
  position: 'top-center',
  icon: 'warning',
  title: 'Data berhasil dihapus',
  showConfirmButton: false,
  timer: 1500
})
 }
  </script>
</body>