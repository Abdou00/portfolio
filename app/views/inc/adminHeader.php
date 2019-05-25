<?php
/**
 * Created by PhpStorm.
 * User: samba
 * Date: 24/05/19
 * Time: 15:57
 */
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Dashboard</title>
        <!-- Custom fonts for this template-->
        <link href="<?php echo URL_ROOT; ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <!-- Page level plugin CSS-->
        <link href="<?php echo URL_ROOT; ?>/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
        <!-- Custom styles for this template-->
        <link href="<?php echo URL_ROOT; ?>/css/sb-admin.css" rel="stylesheet">
    </head>

    <body id="page-top">
        <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
            <a class="navbar-brand mr-1" href="<?php echo URL_ROOT; ?>">Samba Abdoulaye Diarra</a>

            <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
                <i class="fas fa-bars"></i>
            </button>
        </nav>

        <div id="wrapper">
            <!-- Sidebar -->
            <ul class="sidebar navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo URL_ROOT; ?>/admin/index">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="far fa-file-code"></i>
                        <span>Skills</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                        <a class="dropdown-item" href="<?php echo URL_ROOT; ?>/admin/addSkill">Add</a>
                        <!--<a class="dropdown-item" href="<?php echo URL_ROOT; ?>/admin/editSkill">Edit</a>-->
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <span>Experiences</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                        <a class="dropdown-item" href="<?php echo URL_ROOT; ?>/admin/addExperience">Add</a>
                        <!--<a class="dropdown-item" href="<?php echo URL_ROOT; ?>/admin/editExperience">Edit</a>-->
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-images"></i>
                        <span>Projects</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                        <a class="dropdown-item" href="<?php echo URL_ROOT; ?>/admin/addProject">Add</a>
                        <!--<a class="dropdown-item" href="<?php echo URL_ROOT; ?>/admin/editProject">Edit</a>-->
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo URL_ROOT; ?>">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Go to site</span>
                    </a>
                </li>
            </ul>
