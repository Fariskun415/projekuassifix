<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SPK SALES TERBAIK</title>

  <base href="<?= base_url("assets") ?>/">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- AdminLTE Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  
  <style>
    /* Header Styles */
    .main-header.navbar {
      background-color: #2c3e50; /* Dark background for header */
      color: #ecf0f1; /* Light text for better readability */
    }
    .main-header .navbar-nav .nav-link {
      color: #ecf0f1; /* White text color */
      transition: color 0.3s ease;
    }
    .main-header .navbar-nav .nav-link:hover {
      color: #1abc9c; /* Hover color to match footer link */
    }
    .main-header .navbar-nav .nav-item.active .nav-link {
      color: #1abc9c; /* Active link color */
      font-weight: bold;
    }
    /* Search bar */
    .navbar-search-block {
      background-color: #34495e;
      border-radius: 5px;
      padding: 5px;
    }
    .navbar-search-block .form-control-navbar {
      background-color: #2c3e50;
      color: #ecf0f1;
      border: none;
    }
    .navbar-search-block .form-control-navbar::placeholder {
      color: #bdc3c7;
    }
    .navbar-search-block .btn-navbar {
      color: #ecf0f1;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">

<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
  <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
</div>

<!-- Header/Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="home.php" class="nav-link">Home</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link">Contact</a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Navbar Search -->
    <li class="nav-item">
      <a class="nav-link" data-widget="navbar-search" href="#" role="button">
        <i class="fas fa-search"></i>
      </a>
      <div class="navbar-search-block">
        <form class="form-inline">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
              <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
        </form>
      </div>
    </li>
  </ul>
</nav>
