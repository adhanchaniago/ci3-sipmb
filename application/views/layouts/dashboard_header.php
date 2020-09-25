<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title><?php echo ($title ?: "") ?>Sistem Informasi Penerimaan Mahasiswa Baru</title>
    <!-- Favicon -->
    <link rel="icon" href="<?php echo base_url(); ?>assets/img/brand/favicon.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <!-- Page plugins -->
    <!-- Argon CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
    <!-- Sidenav -->
    <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
        <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="sidenav-header  align-items-center">
                <a class="navbar-brand" href="<?php echo base_url(); ?>">
                    <img src="<?php echo base_url(); ?>assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
                </a>
            </div>
            <div class="navbar-inner">
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <!-- Nav items -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="<?php echo base_url(); ?>dashboard">
                                <i class="ni ni-tv-2 text-primary"></i>
                                <span class="nav-link-text">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="ni ni-planet text-orange"></i>
                                <span class="nav-link-text">Icons</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="ni ni-pin-3 text-primary"></i>
                                <span class="nav-link-text">Google</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>dashboard/user-profile">
                                <i class="ni ni-single-02 text-yellow"></i>
                                <span class="nav-link-text">Profile</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="ni ni-bullet-list-67 text-default"></i>
                                <span class="nav-link-text">Tables</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="ni ni-key-25 text-info"></i>
                                <span class="nav-link-text">Login</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="ni ni-circle-08 text-pink"></i>
                                <span class="nav-link-text">Register</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('auth'); ?>/logout">
                                <i class="ni ni-send text-dark"></i>
                                <span class="nav-link-text">Logout</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Divider -->
                    <hr class="my-3">
                    <!-- Heading -->
                    <h6 class="navbar-heading p-0 text-muted">
                        <span class="docs-normal">Documentation</span>
                    </h6>
                    <!-- Navigation -->
                    <ul class="navbar-nav mb-md-3">
                        <li class="nav-item">
                            <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html" target="_blank">
                                <i class="ni ni-spaceship"></i>
                                <span class="nav-link-text">Getting started</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html" target="_blank">
                                <i class="ni ni-palette"></i>
                                <span class="nav-link-text">Foundation</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/components/alerts.html" target="_blank">
                                <i class="ni ni-ui-04"></i>
                                <span class="nav-link-text">Components</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/plugins/charts.html" target="_blank">
                                <i class="ni ni-chart-pie-35"></i>
                                <span class="nav-link-text">Plugins</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active active-pro" href="upgrade.html">
                                <i class="ni ni-send text-dark"></i>
                                <span class="nav-link-text">Upgrade to PRO</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>