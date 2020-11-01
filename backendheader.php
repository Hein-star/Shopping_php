<?php 
    session_start();

    if(!isset($_SESSION['login_user'])){
        header('location:login.php');
    }

    if(isset($_SESSION['login_user'])){
        if ($_SESSION['login_user']['rname'] == "customer") {
            header('location:index.php');
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> 2am Shoping </title>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- iconfont CSS -->
        <link rel="stylesheet" type="text/css" href="icon/icofont/icofont.min.css">
        <!-- Boxicon CSS -->
        <link rel="stylesheet" type="text/css" href="icon/boxicons-master/css/boxicons.min.css">
        <!-- Main CSS-->
        <link rel="stylesheet" type="text/css" href="backend/css/main.css">
    </head>
    <body class="app sidebar-mini">

        <!-- Navbar-->
        <header class="app-header bg-success">
            <a class="app-header__logo bg-success" href="login.php">
                2am Shopping
            </a>
            
            <!-- Sidebar toggle button-->
            <a class="app-sidebar__toggle bg-success" href="#" data-toggle="sidebar" aria-label="Hide Sidebar">
                <i class="icofont-navigation-menu"></i>
            </a>
          
            <!-- Navbar Right Menu-->
            <ul class="app-nav">
                <li class="app-search">
                    <input class="app-search__input" type="search" placeholder="Search">
                    <button class="app-search__button">
                        <i class="icofont-search-2"></i>
                    </button>
                </li>

                <!-- User Menu-->
                <li class="dropdown">
                    <a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu">
                        <i class="icofont-user-alt-3"></i>
                </a>
                  <ul class="dropdown-menu settings-menu dropdown-menu-right">
                    <li>
                        <a class="dropdown-item btn-success" href="profile.php">
                            <i class="icofont-ui-user"></i> Profile
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item btn-success" href="signout.php">
                            <i class="icofont-logout"></i>
                            Logout
                        </a>
                    </li>
                  </ul>
                </li>
            </ul>
        </header>

        <!-- Sidebar menu-->
        <div class="app-sidebar__overlay" data-toggle="sidebar"></div>

        <aside class="app-sidebar">
            <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="image/user/user.webp" alt="User Image" width="50" height="50">
                <div>
                  <p class="app-sidebar__user-name"><?= $_SESSION['login_user']['name']; ?> </p>
                  <p class="app-sidebar__user-designation"> <?= $_SESSION['login_user']['rname']; ?> </p>
                </div>
            </div>
            
            <ul class="app-menu">
                <li>
                    <a class="app-menu__item" href="#">
                        <i class="app-menu__icon icofont-dashboard"></i>
                        <span class="app-menu__label">
                            Dashboard
                        </span>
                    </a>
                </li>
                <li>
                    <a class="app-menu__item" href="order_list.php">
                        <i class="app-menu__icon icofont-prestashop"></i>
                        <span class="app-menu__label">
                            Order
                        </span>
                    </a>
                </li>
                <li>
                    <a class="app-menu__item" href="customer_list.php">
                        <i class="app-menu__icon icofont-users-social"></i>
                        <span class="app-menu__label">
                            Customer
                        </span>
                    </a>
                </li>
                <li>
                    <a class="app-menu__item" href="brand_list.php">
                        <i class="app-menu__icon icofont-ui-tag"></i>
                        <span class="app-menu__label">
                            Brands 
                        </span>
                    </a>
                </li>
                <li>
                    <a class="app-menu__item" href="item_list.php">
                        <i class="app-menu__icon icofont-package"></i>
                        <span class="app-menu__label">
                            Items
                        </span>
                    </a>
                </li>
                <li>
                    <a class="app-menu__item" href="subcategory_list.php">
                        <i class="app-menu__icon icofont-tags"></i>
                        <span class="app-menu__label">
                            Sub-Category 
                        </span>
                    </a>
                </li>
                <li>
                    <a class="app-menu__item" href="category_list.php">
                        <i class="app-menu__icon icofont-tag"></i>
                        <span class="app-menu__label">
                            Category 
                        </span>
                    </a>
                </li>
            </ul>
        </aside>
        <main class="app-content">
            
        