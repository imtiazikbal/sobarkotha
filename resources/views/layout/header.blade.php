<div id="layout-wrapper">

  <header id="page-topbar">
     <div class="layout-width">
         <div class="navbar-header">
             <div class="d-flex">
                 <!-- LOGO -->
                 <a href="{{ route('dashboard') }}" class="navbar-brand-box horizontal-logo">
                     <a href="{{ route('dashboard') }}" class="logo logo-dark">
                         <span class="logo-sm">
                             <img src="assets/images/logo-sm.png" alt="" height="22">
                         </span>
                         <a href="{{ route('dashboard') }}" class="logo-lg">
                             <img src="assets/images/logo-dark.png" alt="" height="17">
                         </a>
                     </a>
 
                     <a href="{{ route('dashboard') }}" class="logo logo-light">
                         <span class="logo-sm">
                             <img src="assets/images/logo-sm.png" alt="" height="22">
                         </span>
                         <a href="{{ route('dashboard') }}" class="logo-lg">
                             <img src="assets/images/logo-light.png" alt="" height="17">
                         </a>
                     </a>
                 </a>
 
                 <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger" id="topnav-hamburger-icon">
                     <span class="hamburger-icon">
                         <span></span>
                         <span></span>
                         <span></span>
                     </span>
                 </button>
 
                 <!-- App Search-->
                 <form class="app-search d-none d-md-block">
                     <div class="position-relative">
                         <input type="text" class="form-control" placeholder="Search..." autocomplete="off" id="search-options" value="">
                         <span class="mdi mdi-magnify search-widget-icon"></span>
                         <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none" id="search-close-options"></span>
                     </div>
                     <div class="dropdown-menu dropdown-menu-lg" id="search-dropdown">
                         <div data-simplebar style="max-height: 320px;">
                             <!-- item-->
                             <div class="dropdown-header">
                                 <h6 class="text-overflow text-muted mb-0 text-uppercase">Recent Searches</h6>
                             </div>
 
                             <div class="dropdown-item bg-transparent text-wrap">
                                 <a href="index.html" class="btn btn-soft-secondary btn-sm rounded-pill">how to setup <i class="mdi mdi-magnify ms-1"></i></a>
                                 <a href="index.html" class="btn btn-soft-secondary btn-sm rounded-pill">buttons <i class="mdi mdi-magnify ms-1"></i></a>
                             </div>
                             <!-- item-->
                             <div class="dropdown-header mt-2">
                                 <h6 class="text-overflow text-muted mb-1 text-uppercase">Pages</h6>
                             </div>
 
                             <!-- item-->
                             <a href="javascript:void(0);" class="dropdown-item notify-item">
                                 <i class="ri-bubble-chart-line align-middle fs-18 text-muted me-2"></i>
                                 <span>Analytics Dashboard</span>
                             </a>
 
                             <!-- item-->
                             <a href="javascript:void(0);" class="dropdown-item notify-item">
                                 <i class="ri-lifebuoy-line align-middle fs-18 text-muted me-2"></i>
                                 <span>Help Center</span>
                             </a>
 
                             <!-- item-->
                             <a href="javascript:void(0);" class="dropdown-item notify-item">
                                 <i class="ri-user-settings-line align-middle fs-18 text-muted me-2"></i>
                                 <span>My account settings</span>
                             </a>
 
                             <!-- item-->
                             <div class="dropdown-header mt-2">
                                 <h6 class="text-overflow text-muted mb-2 text-uppercase">Members</h6>
                             </div>
 
                             <div class="notification-list">
                                 <!-- item -->
                                 <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                     <div class="d-flex">
                                         <img src="assets/images/users/avatar-2.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                         <div class="flex-grow-1">
                                             <h6 class="m-0">Angela Bernier</h6>
                                             <span class="fs-11 mb-0 text-muted">Manager</span>
                                         </div>
                                     </div>
                                 </a>
                                 <!-- item -->
                                 <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                     <div class="d-flex">
                                         <img src="assets/images/users/avatar-3.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                         <div class="flex-grow-1">
                                             <h6 class="m-0">David Grasso</h6>
                                             <span class="fs-11 mb-0 text-muted">Web Designer</span>
                                         </div>
                                     </div>
                                 </a>
                                 <!-- item -->
                                 <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                     <div class="d-flex">
                                         <img src="assets/images/users/avatar-5.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                         <div class="flex-grow-1">
                                             <h6 class="m-0">Mike Bunch</h6>
                                             <span class="fs-11 mb-0 text-muted">React Developer</span>
                                         </div>
                                     </div>
                                 </a>
                             </div>
                         </div>
 
                         <div class="text-center pt-3 pb-1">
                             <a href="pages-search-results.html" class="btn btn-primary btn-sm">View All Results <i class="ri-arrow-right-line ms-1"></i></a>
                         </div>
                     </div>
                 </form>
             </div>
 
             <div class="d-flex align-items-center">
                <div class="d-flex align-items-center ">
                    <a class="btn btn-primary" href="{{ url('/admin/leadNews/get') }}">Lead News</a>
                </div>
 
                 {{-- <div class="dropdown d-md-none topbar-head-dropdown header-item">
                     <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <i class="bx bx-search fs-22"></i>
                     </button>
                     <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">
                         <form class="p-3">
                             <div class="form-group m-0">
                                 <div class="input-group">
                                     <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                     <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div> --}}
 
                 {{-- <div class="dropdown ms-1 topbar-head-dropdown header-item">
                     <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <img id="header-lang-img" src="assets/images/flags/us.svg" alt="Header Language" height="20" class="rounded">
                     </button>
                     <div class="dropdown-menu dropdown-menu-end">
 
                         <!-- item-->
                         <a href="javascript:void(0);" class="dropdown-item notify-item language py-2" data-lang="en" title="English">
                             <img src="assets/images/flags/us.svg" alt="user-image" class="me-2 rounded" height="18">
                             <span class="align-middle">English</span>
                         </a>
 
                         <!-- item-->
                         <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp" title="Spanish">
                             <img src="assets/images/flags/spain.svg" alt="user-image" class="me-2 rounded" height="18">
                             <span class="align-middle">Española</span>
                         </a>
 
                         <!-- item-->
                         <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr" title="German">
                             <img src="assets/images/flags/germany.svg" alt="user-image" class="me-2 rounded" height="18"> <span class="align-middle">Deutsche</span>
                         </a>
 
                         <!-- item-->
                         <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it" title="Italian">
                             <img src="assets/images/flags/italy.svg" alt="user-image" class="me-2 rounded" height="18">
                             <span class="align-middle">Italiana</span>
                         </a>
 
                         <!-- item-->
                         <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru" title="Russian">
                             <img src="assets/images/flags/russia.svg" alt="user-image" class="me-2 rounded" height="18">
                             <span class="align-middle">русский</span>
                         </a>
 
                         <!-- item-->
                         <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ch" title="Chinese">
                             <img src="assets/images/flags/china.svg" alt="user-image" class="me-2 rounded" height="18">
                             <span class="align-middle">中国人</span>
                         </a>
 
                         <!-- item-->
                         <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="fr" title="French">
                             <img src="assets/images/flags/french.svg" alt="user-image" class="me-2 rounded" height="18">
                             <span class="align-middle">français</span>
                         </a>
 
                         <!-- item-->
                         <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ar" title="Arabic">
                             <img src="assets/images/flags/ae.svg" alt="user-image" class="me-2 rounded" height="18">
                             <span class="align-middle">Arabic</span>
                         </a>
                     </div>
                 </div>
 
                 <div class="dropdown topbar-head-dropdown ms-1 header-item">
                     <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <i class='bx bx-category-alt fs-22'></i>
                     </button>
                     <div class="dropdown-menu dropdown-menu-lg p-0 dropdown-menu-end">
                         <div class="p-3 border-top-0 border-start-0 border-end-0 border-dashed border">
                             <div class="row align-items-center">
                                 <div class="col">
                                     <h6 class="m-0 fw-semibold fs-15"> Web Apps </h6>
                                 </div>
                                 <div class="col-auto">
                                     <a href="#!" class="btn btn-sm btn-soft-info"> View All Apps
                                         <i class="ri-arrow-right-s-line align-middle"></i></a>
                                 </div>
                             </div>
                         </div>
 
                         <div class="p-2">
                             <div class="row g-0">
                                 <div class="col">
                                     <a class="dropdown-icon-item" href="#!">
                                         <img src="assets/images/brands/github.png" alt="Github">
                                         <span>GitHub</span>
                                     </a>
                                 </div>
                                 <div class="col">
                                     <a class="dropdown-icon-item" href="#!">
                                         <img src="assets/images/brands/bitbucket.png" alt="bitbucket">
                                         <span>Bitbucket</span>
                                     </a>
                                 </div>
                                 <div class="col">
                                     <a class="dropdown-icon-item" href="#!">
                                         <img src="assets/images/brands/dribbble.png" alt="dribbble">
                                         <span>Dribbble</span>
                                     </a>
                                 </div>
                             </div>
 
                             <div class="row g-0">
                                 <div class="col">
                                     <a class="dropdown-icon-item" href="#!">
                                         <img src="assets/images/brands/dropbox.png" alt="dropbox">
                                         <span>Dropbox</span>
                                     </a>
                                 </div>
                                 <div class="col">
                                     <a class="dropdown-icon-item" href="#!">
                                         <img src="assets/images/brands/mail_chimp.png" alt="mail_chimp">
                                         <span>Mail Chimp</span>
                                     </a>
                                 </div>
                                 <div class="col">
                                     <a class="dropdown-icon-item" href="#!">
                                         <img src="assets/images/brands/slack.png" alt="slack">
                                         <span>Slack</span>
                                     </a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div> --}}
 
               
 
                 <div class="ms-1 header-item d-none d-sm-flex">
                     <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" data-toggle="fullscreen">
                         <i class='bx bx-fullscreen fs-22'></i>
                     </button>
                 </div>
 
                 <div class="ms-1 header-item d-none d-sm-flex">
                     <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode">
                         <i class='bx bx-moon fs-22'></i>
                     </button>
                 </div>
 
                
 
                 <div class="dropdown ms-sm-3 header-item topbar-user">
                     <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <span class="d-flex align-items-center">
                             <img class="rounded-circle header-profile-user" src="https://digitalsolutions.ltd/img/logomain.png" alt="Header Avatar">
                             <span class="text-start ms-xl-2">
                                 <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">@php
                                     if(Auth::check()){
                                         echo Auth::user()->name;
                                     }
                                 @endphp</span>
                                 <span class="d-none d-xl-block ms-1 fs-12 user-name-sub-text">@php
                                    if(Auth::check()){
                                        echo Auth::user()->role;
                                    }
                                @endphp</span>
                             </span>
                         </span>
                     </button>
                     <div class="dropdown-menu dropdown-menu-end">
                         <!-- item-->
                         <h6 class="dropdown-header">Welcome Anna!</h6>
                         <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Profile</span></a>
                         <a class="dropdown-item" href="apps-chat.html"><i class="mdi mdi-message-text-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Messages</span></a>
                         <a class="dropdown-item" href="apps-tasks-kanban.html"><i class="mdi mdi-calendar-check-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Taskboard</span></a>
                         <a class="dropdown-item" href="pages-faqs.html"><i class="mdi mdi-lifebuoy text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Help</span></a>
                         <div class="dropdown-divider"></div>
                         <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-wallet text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Balance : <b>$5971.67</b></span></a>
                         <a class="dropdown-item" href="pages-profile-settings.html"><span class="badge bg-success-subtle text-success mt-1 float-end">New</span><i class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Settings</span></a>
                         <a class="dropdown-item" href="auth-lockscreen-basic.html"><i class="mdi mdi-lock text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Lock screen</span></a>
                         <a class="dropdown-item" href="auth-logout-basic.html"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </header>