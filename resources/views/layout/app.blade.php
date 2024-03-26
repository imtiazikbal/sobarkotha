<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">


<!-- Mirrored from themesbrand.com/velzon/html/minimal/apps-chat.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Nov 2023 23:28:35 GMT -->
<head>
    
    <meta charset="utf-8" />
    <title>Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
   
    <link rel="shortcut icon" href="{{ asset('assets') }}/assets/images/favicon.ico">

    <!-- glightbox css -->
    <link rel="stylesheet" href=" {{ asset('assets') }}/assets/libs/glightbox/css/glightbox.min.css">

    <!-- Layout config Js -->
    <script src=" {{ asset('assets') }}/assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href=" {{ asset('assets') }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- Icons Css -->
    <link href=" {{ asset('assets') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href=" {{ asset('assets') }}/assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href=" {{ asset('assets') }}/assets/css/custom.min.css" rel="stylesheet" type="text/css" />
   
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
  
</head>

<body>

    <!-- Begin page -->
@include('layout.header')

<!-- removeNotificationModal -->
<div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
            </div>
            <div class="modal-body">
                <div class="mt-2 text-center">
                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                        <h4>Are you sure ?</h4>
                        <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete It!</button>
                </div>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!-- /.modal -->
        <!-- ========== App Menu ========== -->
        @include('layout.sidebar')
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            @yield('content')
            <!-- End Page-content -->

           @include('layout.footer')
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <div class="offcanvas offcanvas-end border-0" tabindex="-1" id="userProfileCanvasExample">
        <!--end offcanvas-header-->
        <div class="offcanvas-body profile-offcanvas p-0">
            <div class="team-cover">
                <img src="{{ asset('assets') }}/assets/images/small/img-9.jpg" alt="" class="img-fluid" />
            </div>
            <div class="p-1 pb-4 pt-0">
                <div class="team-settings">
                    <div class="row g-0">
                        <div class="col">
                            <div class="btn nav-btn">
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="user-chat-nav d-flex">
                                <button type="button" class="btn nav-btn favourite-btn active">
                                    <i class="ri-star-fill"></i>
                                </button>

                                <div class="dropdown">
                                    <a class="btn nav-btn" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-2-fill"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-inbox-archive-line align-bottom text-muted me-2"></i>Archive</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-mic-off-line align-bottom text-muted me-2"></i>Muted</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line align-bottom text-muted me-2"></i>Delete</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <div class="p-3 text-center">
                <img src="{{ asset('assets') }}/assets/images/users/avatar-2.jpg" alt="" class="avatar-lg img-thumbnail rounded-circle mx-auto profile-img">
                <div class="mt-3">
                    <h5 class="fs-16 mb-1"><a href="javascript:void(0);" class="link-primary username">Lisa Parker</a></h5>
                    <p class="text-muted"><i class="ri-checkbox-blank-circle-fill me-1 align-bottom text-success"></i>Online</p>
                </div>

                <div class="d-flex gap-3 justify-content-center">
                    <button type="button" class="btn avatar-xs p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Message">
                        <span class="avatar-title rounded bg-light text-body">
                            <i class="ri-question-answer-line"></i>
                        </span>
                    </button>

                    <button type="button" class="btn avatar-xs p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Favourite">
                        <span class="avatar-title rounded bg-light text-body">
                            <i class="ri-star-line"></i>
                        </span>
                    </button>

                    <button type="button" class="btn avatar-xs p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Phone">
                        <span class="avatar-title rounded bg-light text-body">
                            <i class="ri-phone-line"></i>
                        </span>
                    </button>

                    <div class="dropdown">
                        <button class="btn avatar-xs p-0" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="avatar-title bg-light text-body rounded">
                                <i class="ri-more-fill"></i>
                            </span>
                        </button>

                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-inbox-archive-line align-bottom text-muted me-2"></i>Archive</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-mic-off-line align-bottom text-muted me-2"></i>Muted</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line align-bottom text-muted me-2"></i>Delete</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="border-top border-top-dashed p-3">
                <h5 class="fs-15 mb-3">Personal Details</h5>
                <div class="mb-3">
                    <p class="text-muted text-uppercase fw-medium fs-12 mb-1">Number</p>
                    <h6>+(256) 2451 8974</h6>
                </div>
                <div class="mb-3">
                    <p class="text-muted text-uppercase fw-medium fs-12 mb-1">Email</p>
                    <h6>lisaparker@gmail.com</h6>
                </div>
                <div>
                    <p class="text-muted text-uppercase fw-medium fs-12 mb-1">Location</p>
                    <h6 class="mb-0">California, USA</h6>
                </div>
            </div>

            <div class="border-top border-top-dashed p-3">
                <h5 class="fs-15 mb-3">Attached Files</h5>

                <div class="vstack gap-2">
                    <div class="border rounded border-dashed p-2">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar-xs">
                                    <div class="avatar-title bg-light text-secondary rounded fs-20">
                                        <i class="ri-folder-zip-line"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1 overflow-hidden">
                                <h5 class="fs-13 mb-1"><a href="#" class="text-body text-truncate d-block">App pages.zip</a></h5>
                                <div class="text-muted">2.2MB</div>
                            </div>
                            <div class="flex-shrink-0 ms-2">
                                <div class="d-flex gap-1">
                                    <button type="button" class="btn btn-icon text-muted btn-sm fs-18"><i class="ri-download-2-line"></i></button>
                                    <div class="dropdown">
                                        <button class="btn btn-icon text-muted btn-sm fs-18 dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="ri-share-line align-bottom me-2 text-muted"></i> Share</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="ri-bookmark-line align-bottom me-2 text-muted"></i> Bookmark</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="ri-delete-bin-line align-bottom me-2 text-muted"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border rounded border-dashed p-2">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar-xs">
                                    <div class="avatar-title bg-light text-secondary rounded fs-20">
                                        <i class="ri-file-ppt-2-line"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1 overflow-hidden">
                                <h5 class="fs-13 mb-1"><a href="#" class="text-body text-truncate d-block">Velzon admin.ppt</a></h5>
                                <div class="text-muted">2.4MB</div>
                            </div>
                            <div class="flex-shrink-0 ms-2">
                                <div class="d-flex gap-1">
                                    <button type="button" class="btn btn-icon text-muted btn-sm fs-18"><i class="ri-download-2-line"></i></button>
                                    <div class="dropdown">
                                        <button class="btn btn-icon text-muted btn-sm fs-18 dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="ri-share-line align-bottom me-2 text-muted"></i> Share</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="ri-bookmark-line align-bottom me-2 text-muted"></i> Bookmark</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="ri-delete-bin-line align-bottom me-2 text-muted"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border rounded border-dashed p-2">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar-xs">
                                    <div class="avatar-title bg-light text-secondary rounded fs-20">
                                        <i class="ri-folder-zip-line"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1 overflow-hidden">
                                <h5 class="fs-13 mb-1"><a href="#" class="text-body text-truncate d-block">Images.zip</a></h5>
                                <div class="text-muted">1.2MB</div>
                            </div>
                            <div class="flex-shrink-0 ms-2">
                                <div class="d-flex gap-1">
                                    <button type="button" class="btn btn-icon text-muted btn-sm fs-18"><i class="ri-download-2-line"></i></button>
                                    <div class="dropdown">
                                        <button class="btn btn-icon text-muted btn-sm fs-18 dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="ri-share-line align-bottom me-2 text-muted"></i> Share</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="ri-bookmark-line align-bottom me-2 text-muted"></i> Bookmark</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="ri-delete-bin-line align-bottom me-2 text-muted"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border rounded border-dashed p-2">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar-xs">
                                    <div class="avatar-title bg-light text-secondary rounded fs-20">
                                        <i class="ri-image-2-line"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1 overflow-hidden">
                                <h5 class="fs-13 mb-1"><a href="#" class="text-body text-truncate d-block">bg-pattern.png</a></h5>
                                <div class="text-muted">1.1MB</div>
                            </div>
                            <div class="flex-shrink-0 ms-2">
                                <div class="d-flex gap-1">
                                    <button type="button" class="btn btn-icon text-muted btn-sm fs-18"><i class="ri-download-2-line"></i></button>
                                    <div class="dropdown">
                                        <button class="btn btn-icon text-muted btn-sm fs-18 dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="ri-share-line align-bottom me-2 text-muted"></i> Share</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="ri-bookmark-line align-bottom me-2 text-muted"></i> Bookmark</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="ri-delete-bin-line align-bottom me-2 text-muted"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-2">
                        <button type="button" class="btn btn-primary">Load more <i class="ri-arrow-right-fill align-bottom ms-1"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <!--end offcanvas-body-->
    </div>
    <!--end offcanvas-->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <div class="customizer-setting d-none d-md-block">
        <div class="btn-primary rounded-pill shadow-lg btn btn-icon btn-lg p-2" data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
            <i class='mdi mdi-spin mdi-cog-outline fs-22'></i>
        </div>
    </div>

    <!-- Theme Settings -->
   >
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> 


    <!-- JAVASCRIPT -->
    <script src=" {{ asset('assets') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src=" {{ asset('assets') }}/assets/libs/simplebar/simplebar.min.js"></script>
    <script src=" {{ asset('assets') }}/assets/libs/node-waves/waves.min.js"></script>
    <script src=" {{ asset('assets') }}/assets/libs/feather-icons/feather.min.js"></script>
    <script src=" {{ asset('assets') }}/assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src=" {{ asset('assets') }}/assets/js/plugins.js"></script>

    <!-- glightbox js -->
    <script src=" {{ asset('assets') }}/assets/libs/glightbox/js/glightbox.min.js"></script>

    <!-- fgEmojiPicker js -->
    <script src=" {{ asset('assets') }}/assets/libs/fg-emoji-picker/fgEmojiPicker.js"></script>

    <!-- Summer Note -->
    <script src=" {{ asset('assets') }}/summernote\js\summernote.min.js"></script>
    <script src=" {{ asset('assets') }}/summernote\js\summernote-bs4.min.js"></script>
    <script src=" {{ asset('assets') }}/summernote\js\summernote-lite.js"></script>
    <!-- chat init js -->
    <script src=" {{ asset('assets') }}/assets/js/pages/chat.init.js"></script>

    <!-- App js -->
    <script src=" {{ asset('assets') }}/assets/js/app.js"></script>

</body>


<!-- Mirrored from themesbrand.com/velzon/html/minimal/apps-chat.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Nov 2023 23:28:36 GMT -->
</html>