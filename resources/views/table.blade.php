<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png') }}">
    <title>Система статистики ювелирных магазинов</title>
    <!-- Custom CSS -->
    <link href="{{ asset('assets/libs/chartist/dist/chartist.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/extra-libs/c3/c3.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" type="text/css" />
    <!-- Custom CSS -->
    <link href="{{ asset('dist/css/style.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" class="mini-sidebar">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <a href="#" class="logo">
                            <!-- Logo icon -->
                            <b class="logo-icon">
                                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                <!-- Dark Logo icon -->
                                <img src="{{ asset('assets/images/logo-icon.png') }}" alt="homepage" class="dark-logo" />
                                <!-- Light Logo icon -->
                                <img src="{{ asset('assets/images/logo-light-icon.png') }}" alt="homepage" class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src="{{ asset('assets/images/logo-text.png') }}" alt="homepage" class="dark-logo" />
                                <!-- Light Logo text -->
                                <span class="nice-logo">Nice Diamond</span>
                                <!-- <img src="{{ asset('assets/images/logo-light-text.png') }}" class="light-logo" alt="homepage" /> -->
                            </span>
                        </a>
                        <a class="sidebartoggler d-none d-md-block" href="javascript:void(0)" data-sidebartype="mini-sidebar">
                            <i class="mdi mdi-toggle-switch mdi-toggle-switch-off font-20"></i>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti-more"></i>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <!-- <li class="nav-item d-none d-md-block">
                            <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar">
                                <i class="mdi mdi-menu font-24"></i>
                            </a>
                        </li> -->
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box d-none">
                            <a class="nav-link waves-effect waves-dark" href="javascript:void(0)">
                                <div class="d-flex align-items-center">
                                    <i class="mdi mdi-magnify font-20 mr-1"></i>
                                    <div class="ml-1 d-none d-sm-block">
                                        <span>Поиск</span>
                                    </div>
                                </div>
                            </a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Строка поиска">
                                <a class="srh-btn">
                                    <i class="ti-close"></i>
                                </a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown d-none">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="font-22 mdi mdi-email-outline"></i>

                            </a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown" aria-labelledby="2">
                                <span class="with-arrow">
                                    <span class="bg-danger"></span>
                                </span>
                                <ul class="list-style-none">
                                    <li>
                                        <div class="drop-title text-white bg-danger">
                                            <h4 class="mb-0 m-t-5">5 Новых</h4>
                                            <span class="font-light">Писем</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="message-center message-body">
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item">
                                                <span class="user-img">
                                                    <?php // <img src="{{ asset('assets/images/users/1.jpg') }}" alt="user" class="rounded-circle"> ?>
                                                    <span class="profile-status online pull-right"></span>
                                                </span>
                                                <div class="mail-contnet">
                                                    <h5 class="message-title">Pavan kumar</h5>
                                                    <span class="mail-desc">Just see the my admin!</span>
                                                    <span class="time">9:30 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item">
                                                <span class="user-img">
                                                    <img src="{{ asset('assets/images/users/2.jpg') }}" alt="user" class="rounded-circle">
                                                    <span class="profile-status busy pull-right"></span>
                                                </span>
                                                <div class="mail-contnet">
                                                    <h5 class="message-title">Sonu Nigam</h5>
                                                    <span class="mail-desc">I've sung a song! See you at</span>
                                                    <span class="time">9:10 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item">
                                                <span class="user-img">
                                                    <img src="{{ asset('assets/images/users/3.jpg') }}" alt="user" class="rounded-circle">
                                                    <span class="profile-status away pull-right"></span>
                                                </span>
                                                <div class="mail-contnet">
                                                    <h5 class="message-title">Arijit Sinh</h5>
                                                    <span class="mail-desc">I am a singer!</span>
                                                    <span class="time">9:08 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item">
                                                <span class="user-img">
                                                    <img src="{{ asset('assets/images/users/4.jpg') }}" alt="user" class="rounded-circle">
                                                    <span class="profile-status offline pull-right"></span>
                                                </span>
                                                <div class="mail-contnet">
                                                    <h5 class="message-title">Pavan kumar</h5>
                                                    <span class="mail-desc">Just see the my admin!</span>
                                                    <span class="time">9:02 AM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
									<?php /*
                                    <li>
                                        <a class="nav-link text-center link" href="javascript:void(0);">
                                            <b>See all e-Mails</b>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </li>
									*/ ?>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown border-right d-none">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-bell-outline font-22"></i>
                                <span class="badge badge-pill badge-info noti">4</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown">
                                <span class="with-arrow">
                                    <span class="bg-primary"></span>
                                </span>
                                <ul class="list-style-none">
                                    <li>
                                        <div class="drop-title bg-primary text-white">
                                            <h4 class="mb-0 m-t-5">4 Новых</h4>
                                            <span class="font-light">Сообщения</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="message-center notifications">
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item">
                                                <span class="btn btn-danger btn-circle">
                                                    <i class="fa fa-link"></i>
                                                </span>
                                                <div class="mail-contnet">
                                                    <h5 class="message-title">Luanch Admin</h5>
                                                    <span class="mail-desc">Just see the my new admin!</span>
                                                    <span class="time">9:30 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item">
                                                <span class="btn btn-success btn-circle">
                                                    <i class="ti-calendar"></i>
                                                </span>
                                                <div class="mail-contnet">
                                                    <h5 class="message-title">Event today</h5>
                                                    <span class="mail-desc">Just a reminder that you have event</span>
                                                    <span class="time">9:10 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item">
                                                <span class="btn btn-info btn-circle">
                                                    <i class="ti-settings"></i>
                                                </span>
                                                <div class="mail-contnet">
                                                    <h5 class="message-title">Settings</h5>
                                                    <span class="mail-desc">You can customize this template as you want</span>
                                                    <span class="time">9:08 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item">
                                                <span class="btn btn-primary btn-circle">
                                                    <i class="ti-user"></i>
                                                </span>
                                                <div class="mail-contnet">
                                                    <h5 class="message-title">Pavan kumar</h5>
                                                    <span class="mail-desc">Just see the my admin!</span>
                                                    <span class="time">9:02 AM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
									<?php
									/*
                                    <li>
                                        <a class="nav-link text-center m-b-5" href="javascript:void(0);">
                                            <strong>Check all notifications</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </li>
									*/
									?>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php // <img src="{{ asset('assets/images/users/2.jpg') }}" alt="user" class="rounded-circle" width="40"> ?>
                                <span class="m-l-5 font-medium d-none d-sm-inline-block">{{ Auth::user()->name }} <i class="mdi mdi-chevron-down"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <span class="with-arrow">
                                    <span class="bg-primary"></span>
                                </span>
                                <div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10">
                                    <div class="">
                                        <?php // <img src="{{ asset('assets/images/users/2.jpg') }}" alt="user" class="rounded-circle" width="60"> ?>
                                    </div>
                                    <div class="m-l-10">
                                        <h4 class="mb-0">{{ Auth::user()->name }}</h4>
                                        <p class=" mb-0">{{ Auth::user()->email }}</p>
                                    </div>
                                </div>
								<?php
								/*
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="ti-email m-r-5 m-l-5"></i> Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
                                <div class="dropdown-divider"></div>
								*/
								?>								
                                <a class="dropdown-item" href="/logout">
                                    <i class="fa fa-power-off m-r-5 m-l-5"></i> Выйти</a>
								<?php
								/*								
                                <div class="dropdown-divider"></div>
                                <div class="p-l-30 p-10">
                                    <a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded">View Profile</a>
                                </div>
								*/
								?>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->

        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">
                            <i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">Персональная информация</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link <?php // has-arrow ?> waves-effect waves-dark" href="/home" aria-expanded="false">
                                <i class="mdi mdi-av-timer"></i>
                                <span class="hide-menu">Статистика </span>
                                <?php //<span class="badge badge-pill badge-info ml-auto m-r-15">3</span> ?>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark active" href="/table" aria-expanded="false">
                                <i class="mdi mdi-view-module"></i>
                                <span class="hide-menu">Таблица </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="mdi mdi-tune"></i>
                                <span class="hide-menu">По магазинам </span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="/" class="sidebar-link">
                                        <i class="mdi mdi-view-quilt"></i>
                                        <span class="hide-menu"> Магазин 1 </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="/" class="sidebar-link">
                                        <i class="mdi mdi-view-parallel"></i>
                                        <span class="hide-menu"> Магазин 2 </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="/" class="sidebar-link">
                                        <i class="mdi mdi-view-day"></i>
                                        <span class="hide-menu"> Магазин 3 </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="/" class="sidebar-link">
                                        <i class="mdi mdi-view-array"></i>
                                        <span class="hide-menu"> Магазин 4 </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="/" class="sidebar-link">
                                        <i class="mdi mdi-view-module"></i>
                                        <span class="hide-menu"> Магазин 5 </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
					</ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Данные о работе компании</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Панель управления</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Статистика</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        <h4 class="page-title">
                            Ювелирная сеть "DIAMOND & Свадьба" {{ $strResultHeaderText }} ( {{ $strDateToday }} )
                        </h4>
                        <div class="block-workers">
                            <i class="mdi mdi-emoticon font-20 text-success"></i>
                            <p class="text-workers">
                                <strong>Сегодня работали:</strong> 
@foreach($salers as $objSaler)
    <span>{{ $objSaler->name }}; </span>
@endforeach
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <table class="revenue-per-day">
                            <tr>
                                <th>
                                    Добрый вечер, сумма выручки за рабочий день составила:
                                </th>
                                <th></th>
                            </tr>
@foreach($arrObjectsSumByShop as $objSumByShop)
	<tr>
		<td>
			{{ $objSumByShop->shop_name }}:
		</td>
		<td>
			{{ number_format($objSumByShop->rev, 2, '.', ' ') }}
		</td>
	</tr>	
@endforeach
@foreach($arrObjectsSumByPaymentType as $objSumByPaymentType)
	<tr>
		<td>
			{{ $objSumByPaymentType->payment_type }}:
		</td>
		<td>
			{{ number_format($objSumByPaymentType->rev, 2, '.', ' ') }}
		</td>
	</tr>	
@endforeach
                        </table>
                    </div>  
                </div>
                <div class="row">
                    <div class="col-md-6 col-12">
                        <h4 class="sales-span">
                            Продажи , единица измерения - шт.
                        </h4>
                        <table class="sales-table">
                            <tr>
                                <th>
                                    Золото
                                </th>
                                <th></th>
                            </tr>
                            <tr>
                                <td>
                                    Кольца обручальные
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Кольца остальные
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Серьги
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Подвески
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Колье
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Цепи, шнурки
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Бусы жемчуг
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Браслеты
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Броши
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Запонки, зажимы
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Прочее
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                        </table>
                        <table class="sales-table">
                            <tr>
                                <th>
                                    Серебро
                                </th>
                                <th></th>
                            </tr>
                            <tr>
                                <td>
                                    Кольца обручальные
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Кольца остальные
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Серьги
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Подвески
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Колье
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Цепи, шнурки
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Бусы жемчуг
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Браслеты
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Броши
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Запонки, зажимы
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Прочее
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                        </table>
                        <table class="sales-table">
                            <tr>
                                <th>
                                    Бусы добрянская
                                </th>
                                <th></th>
                            </tr>
                            <tr>
                                <td>
                                    Футляры, ювел.косметика
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-5 offset-md-1 col-12">
                        <h4 class="review-title">
                            ТАБЛИЦА ПРОСМОТРЫ И ПОКУПКИ за смену
                        </h4>
                        <table class="reviews-shopping-table">
                            <tr>
                                <th>
                                    ПРОСМОТРЫ ВСЕГО -
                                </th>
                                <th>
                                    value
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    Классика
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Нестандарт
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Эксклюзив
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Выдано анкет покупателям
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Расшифровка откуда узнали:
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Мимо
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Сайт
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Социальные сети (директ, контакт, инстаграм)
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Вернулись
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Из другого салона нашей сети
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    От друзей
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Реклама на улице(банер)
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Наружная реклама на витражных стеклах магазина
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Выставка WEDEXPO
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Выставка КОРОЛЕВСТВО СВАДЕБ
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Выставка ЦЕНТР СВАДЕБНЫХ СКИДОК
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Другое
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    ПОКУПКИ
                                </th>
                                <th></th>
                            </tr>
                            <tr>
                                <td>
                                    Количество купленных колец, штук
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Из них:
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Классика
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Нестандарт
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Эксклюзив
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Количество чеков по обр.кольцам, штук
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    В чеке одно кольцо
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    В чеке два кольца
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Расшифровка откуда узнали:
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Мимо
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Сайт
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Социальные сети (директ, контакт, инстаграм)
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Социальные сети (директ, контакт, инстаграм)
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Вернулись
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Из другого салона нашей сети
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    От друзей
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Реклама на улице (банер)
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Наружная реклама на витражных стеклах магазина
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Выставка WEDEXPO
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Выставка КОРОЛЕВСТВО СВАДЕБ
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Выставка ЦЕНТР СВАДЕБНЫХ СКИДОК
                                </td>
                                <td>
                                    value
                                </td>
                            </tr>
                        </table>
                </div>
            </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                <!-- Сделано в 
                <a target="_blank" href="https://timelabs.ru/" class="link">Timelabs</a>. -->
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- customizer Panel -->
    <!-- ============================================================== -->
    <aside class="customizer d-none">
        <a href="javascript:void(0)" class="service-panel-toggle">
            <i class="fa fa-spin fa-cog"></i>
        </a>
        <div class="customizer-body">
            <ul class="nav customizer-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home"
                        aria-selected="true">
                        <i class="mdi mdi-wrench font-20"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#chat" role="tab" aria-controls="chat" aria-selected="false">
                        <i class="mdi mdi-message-reply font-20"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact"
                        aria-selected="false">
                        <i class="mdi mdi-star-circle font-20"></i>
                    </a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <!-- Tab 1 -->
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="p-15 border-bottom">
                        <!-- Sidebar -->
                        <h5 class="font-medium m-b-10 m-t-10">Layout Settings</h5>
                        <div class="custom-control custom-checkbox m-t-10">
                            <input type="checkbox" class="custom-control-input" name="theme-view" id="theme-view">
                            <label class="custom-control-label" for="theme-view">Dark Theme</label>
                        </div>
                        <div class="custom-control custom-checkbox m-t-10">
                            <input type="checkbox" class="custom-control-input sidebartoggler" name="collapssidebar" id="collapssidebar">
                            <label class="custom-control-label" for="collapssidebar">Collapse Sidebar</label>
                        </div>
                        <div class="custom-control custom-checkbox m-t-10">
                            <input type="checkbox" class="custom-control-input" name="sidebar-position" id="sidebar-position">
                            <label class="custom-control-label" for="sidebar-position">Fixed Sidebar</label>
                        </div>
                        <div class="custom-control custom-checkbox m-t-10">
                            <input type="checkbox" class="custom-control-input" name="header-position" id="header-position">
                            <label class="custom-control-label" for="header-position">Fixed Header</label>
                        </div>
                        <div class="custom-control custom-checkbox m-t-10">
                            <input type="checkbox" class="custom-control-input" name="boxed-layout" id="boxed-layout">
                            <label class="custom-control-label" for="boxed-layout">Boxed Layout</label>
                        </div>
                    </div>
                    <div class="p-15 border-bottom">
                        <!-- Logo BG -->
                        <h5 class="font-medium m-b-10 m-t-10">Logo Backgrounds</h5>
                        <ul class="theme-color">
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-logobg="skin1"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-logobg="skin2"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-logobg="skin3"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-logobg="skin4"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-logobg="skin5"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-logobg="skin6"></a>
                            </li>
                        </ul>
                        <!-- Logo BG -->
                    </div>
                    <div class="p-15 border-bottom">
                        <!-- Navbar BG -->
                        <h5 class="font-medium m-b-10 m-t-10">Navbar Backgrounds</h5>
                        <ul class="theme-color">
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-navbarbg="skin1"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-navbarbg="skin2"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-navbarbg="skin3"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-navbarbg="skin4"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-navbarbg="skin5"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-navbarbg="skin6"></a>
                            </li>
                        </ul>
                        <!-- Navbar BG -->
                    </div>
                    <div class="p-15 border-bottom">
                        <!-- Logo BG -->
                        <h5 class="font-medium m-b-10 m-t-10">Sidebar Backgrounds</h5>
                        <ul class="theme-color">
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin1"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin2"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin3"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin4"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin5"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin6"></a>
                            </li>
                        </ul>
                        <!-- Logo BG -->
                    </div>
                </div>
                <!-- End Tab 1 -->
                <!-- Tab 2 -->
                <div class="tab-pane fade" id="chat" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <ul class="mailbox list-style-none m-t-20">
                        <li>
                            <div class="message-center chat-scroll">
                                <a href="javascript:void(0)" class="message-item" id='chat_user_1' data-user-id='1'>
                                    <span class="user-img">
                                        <?php // <img src="{{ asset('assets/images/users/1.jpg') }}" alt="user" class="rounded-circle"> ?>
                                        <span class="profile-status online pull-right"></span>
                                    </span>
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Pavan kumar</h5>
                                        <span class="mail-desc">Just see the my admin!</span>
                                        <span class="time">9:30 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item" id='chat_user_2' data-user-id='2'>
                                    <span class="user-img">
                                        <?php // <img src="{{ asset('assets/images/users/2.jpg') }}" alt="user" class="rounded-circle"> ?>
                                        <span class="profile-status busy pull-right"></span>
                                    </span>
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Sonu Nigam</h5>
                                        <span class="mail-desc">I've sung a song! See you at</span>
                                        <span class="time">9:10 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item" id='chat_user_3' data-user-id='3'>
                                    <span class="user-img">
                                        <?php // <img src="{{ asset('assets/images/users/3.jpg') }}" alt="user" class="rounded-circle"> ?>
                                        <span class="profile-status away pull-right"></span>
                                    </span>
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Arijit Sinh</h5>
                                        <span class="mail-desc">I am a singer!</span>
                                        <span class="time">9:08 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item" id='chat_user_4' data-user-id='4'>
                                    <span class="user-img">
                                        <?php // <img src="{{ asset('assets/images/users/4.jpg') }}" alt="user" class="rounded-circle"> ?>
                                        <span class="profile-status offline pull-right"></span>
                                    </span>
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Nirav Joshi</h5>
                                        <span class="mail-desc">Just see the my admin!</span>
                                        <span class="time">9:02 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item" id='chat_user_5' data-user-id='5'>
                                    <span class="user-img">
                                        <?php // <img src="{{ asset('assets/images/users/5.jpg') }}" alt="user" class="rounded-circle"> ?>
                                        <span class="profile-status offline pull-right"></span>
                                    </span>
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Sunil Joshi</h5>
                                        <span class="mail-desc">Just see the my admin!</span>
                                        <span class="time">9:02 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item" id='chat_user_6' data-user-id='6'>
                                    <span class="user-img">
                                        <?php // <img src="{{ asset('assets/images/users/6.jpg') }}" alt="user" class="rounded-circle"> ?>
                                        <span class="profile-status offline pull-right"></span>
                                    </span>
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Akshay Kumar</h5>
                                        <span class="mail-desc">Just see the my admin!</span>
                                        <span class="time">9:02 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item" id='chat_user_7' data-user-id='7'>
                                    <span class="user-img">
                                        <?php // <img src="{{ asset('assets/images/users/7.jpg') }}" alt="user" class="rounded-circle"> ?>
                                        <span class="profile-status offline pull-right"></span>
                                    </span>
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Pavan kumar</h5>
                                        <span class="mail-desc">Just see the my admin!</span>
                                        <span class="time">9:02 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item" id='chat_user_8' data-user-id='8'>
                                    <span class="user-img">
                                        <?php // <img src="{{ asset('assets/images/users/8.jpg') }}" alt="user" class="rounded-circle"> ?>
                                        <span class="profile-status offline pull-right"></span>
                                    </span>
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Varun Dhavan</h5>
                                        <span class="mail-desc">Just see the my admin!</span>
                                        <span class="time">9:02 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- End Tab 2 -->
                <!-- Tab 3 -->
                <div class="tab-pane fade p-15" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <h6 class="m-t-20 m-b-20">Activity Timeline</h6>
                    <div class="steamline">
                        <div class="sl-item">
                            <div class="sl-left bg-success">
                                <i class="ti-user"></i>
                            </div>
                            <div class="sl-right">
                                <div class="font-medium">Meeting today
                                    <span class="sl-date"> 5pm</span>
                                </div>
                                <div class="desc">you can write anything </div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left bg-info">
                                <i class="fas fa-image"></i>
                            </div>
                            <div class="sl-right">
                                <div class="font-medium">Send documents to Clark</div>
                                <div class="desc">Lorem Ipsum is simply </div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left">
                                <img class="rounded-circle" alt="user" src="{{ asset('assets/images/users/2.jpg') }}"> </div>
                            <div class="sl-right">
                                <div class="font-medium">Go to the Doctor
                                    <span class="sl-date">5 minutes ago</span>
                                </div>
                                <div class="desc">Contrary to popular belief</div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left">
                                <img class="rounded-circle" alt="user" src="{{ asset('assets/images/users/1.jpg') }}"> </div>
                            <div class="sl-right">
                                <div>
                                    <a href="javascript:void(0)">Stephen</a>
                                    <span class="sl-date">5 minutes ago</span>
                                </div>
                                <div class="desc">Approve meeting with tiger</div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left bg-primary">
                                <i class="ti-user"></i>
                            </div>
                            <div class="sl-right">
                                <div class="font-medium">Meeting today
                                    <span class="sl-date"> 5pm</span>
                                </div>
                                <div class="desc">you can write anything </div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left bg-info">
                                <i class="fas fa-image"></i>
                            </div>
                            <div class="sl-right">
                                <div class="font-medium">Send documents to Clark</div>
                                <div class="desc">Lorem Ipsum is simply </div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left">
                                <img class="rounded-circle" alt="user" src="{{ asset('assets/images/users/4.jpg') }}"> </div>
                            <div class="sl-right">
                                <div class="font-medium">Go to the Doctor
                                    <span class="sl-date">5 minutes ago</span>
                                </div>
                                <div class="desc">Contrary to popular belief</div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left">
                                <img class="rounded-circle" alt="user" src="{{ asset('assets/images/users/6.jpg') }}"> </div>
                            <div class="sl-right">
                                <div>
                                    <a href="javascript:void(0)">Stephen</a>
                                    <span class="sl-date">5 minutes ago</span>
                                </div>
                                <div class="desc">Approve meeting with tiger</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Tab 3 -->
            </div>
        </div>
    </aside>
    <div class="chat-windows"></div>
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- apps -->
	
    <script src="{{ asset('dist/js/app.min.js') }}"></script>
    <script src="{{ asset('dist/js/app.init.dark.js') }}"></script>
    <script src="{{ asset('dist/js/app-style-switcher.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/extra-libs/sparkline/sparkline.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('dist/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('dist/js/custom.js') }}"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="{{ asset('assets/libs/chartist/dist/chartist.min.js') }}"></script>
    <script src="{{ asset('assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}"></script>
    <!--c3 charts -->
    <script src="{{ asset('assets/extra-libs/c3/d3.min.js') }}"></script>
    <script src="{{ asset('assets/extra-libs/c3/c3.min.js') }}"></script>
	
    <script src="{{ asset('dist/js/axisTitle.js') }}"></script>
</body>

</html>