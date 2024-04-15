<div class="app-menu navbar-menu">
  <!-- LOGO -->
  <div class="navbar-brand-box">
      <!-- Dark Logo-->
      <a href="" class="logo logo-dark">
          <span class="logo-sm">
              <img src="https://digitalsolutions.ltd/img/logomain.png" alt="" height="22">
          </span>
          <span class="logo-lg">
              <img src="https://digitalsolutions.ltd/img/logomain.png" alt="" width="200">
          </span>
      </a>
      <!-- Light Logo-->
      <a href="" class="logo logo-light">
          <span class="logo-sm">
              <img src="https://digitalsolutions.ltd/img/logomain.png" alt="" height="22">
          </span>
          <span class="logo-lg">
              <img src="https://digitalsolutions.ltd/img/logomain.png" alt="" width="50px">
          </span>
      </a>
      <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
          <i class="ri-record-circle-line"></i>
      </button>
  </div>

  <div id="scrollbar">
      <div class="container-fluid">

          <div id="two-column-menu">
          </div>
          <ul class="navbar-nav" id="navbar-nav">
              <li class="menu-title"><span data-key="t-menu">Menu</span></li>
              <li>
                <a class="nav-link menu-link" href="{{ route('dashboard') }}" >
                  <i data-feather="home" class="icon-dual"></i> <span data-key="t-dashboards">Dashboards</span>
              </a>
              </li>
              @if (auth()->user()->role == 'admin')

              <li>
                <a class="nav-link menu-link" href="{{ route('role.index') }}" >
                  <i data-feather="home" class="icon-dual"></i> <span data-key="t-dashboards">Role</span>
              </a>
              </li>
              <li>
                <a class="nav-link menu-link" href="{{url('/admin/category') }}" >
                  <i data-feather="home" class="icon-dual"></i> <span data-key="t-dashboards">Category</span>
              </a>
              </li>
              <li>
                <a class="nav-link menu-link" href="{{url('/admin/subCategory') }}" >
                  <i data-feather="home" class="icon-dual"></i> <span data-key="t-dashboards">Sub Category</span>
              </a>
              </li> 
              <li>
                <a class="nav-link menu-link" href="{{url('/admin/featured') }}" >
                  <i data-feather="home" class="icon-dual"></i> <span data-key="t-dashboards">Featured</span>
              </a>
              </li>
              <li>
                <a class="nav-link menu-link" href="{{url('/admin/division') }}" >
                  <i data-feather="home" class="icon-dual"></i> <span data-key="t-dashboards">Division</span>
              </a>
              </li>
              <li>
                <a class="nav-link menu-link" href="{{url('/admin/district') }}" >
                  <i data-feather="home" class="icon-dual"></i> <span data-key="t-dashboards">District</span>
              </a>
              </li>
              <li>
                <a class="nav-link menu-link" href="{{url('/admin/upazila') }}" >
                  <i data-feather="home" class="icon-dual"></i> <span data-key="t-dashboards">Upazila</span>
              </a>
            </li>
              @endif

            <li>
              <a class="nav-link menu-link" href="{{url('/admin/topic') }}" >
                <i data-feather="home" class="icon-dual"></i> <span data-key="t-dashboards">Topic</span>
            </a>
            </li>
              
              <li class="nav-item">
                  <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                      <i data-feather="home" class="icon-dual"></i> <span data-key="t-dashboards">News</span>
                  </a>
                   <div class="collapse menu-dropdown" id="sidebarDashboards">
                      <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="{{ url('/admin/create/news') }}" class="nav-link" data-key="t-analytics"> Add News </a>
                        </li>
                          <li class="nav-item">
                              <a href="{{ url('admin/news') }}" class="nav-link" data-key="t-analytics"> All News </a>
                          </li>
                         
                      </ul>
                  </div> 
              </li> 
             
            </li>  

          </ul>
      </div>
      <!-- Sidebar -->
  </div>

  <div class="sidebar-background"></div>
</div>