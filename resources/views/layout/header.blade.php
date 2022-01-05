<div class="horizontal-menu">
  <nav class="navbar top-navbar">
    <div class="container">
      <div class="navbar-content">
        <a href="#" class="navbar-brand">
          Noble<span>UI</span>
        </a>
        <form class="search-form">
          <div class="input-group">
            <div class="input-group-text">
              <i data-feather="search"></i>
            </div>
            <input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
          </div>
        </form>
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="flag-icon flag-icon-us mt-1" title="us"></i> <span class="ms-1 me-1 d-none d-md-inline-block">English</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="languageDropdown">
              <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-us" title="us" id="us"></i> <span class="ms-1"> English </span></a>
              <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-fr" title="fr" id="fr"></i> <span class="ms-1"> French </span></a>
              <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-de" title="de" id="de"></i> <span class="ms-1"> German </span></a>
              <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-pt" title="pt" id="pt"></i> <span class="ms-1"> Portuguese </span></a>
              <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-es" title="es" id="es"></i> <span class="ms-1"> Spanish </span></a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="appsDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i data-feather="grid"></i>
            </a>
            <div class="dropdown-menu p-0" aria-labelledby="appsDropdown">
              <div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
                <p class="mb-0 fw-bold">Web Apps</p>
                <a href="javascript:;" class="text-muted">Edit</a>
              </div>
              <div class="row g-0 p-1">
                <div class="col-3 text-center">
                  <a href="{{ url('/apps/chat') }}" class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"><i data-feather="message-square" class="icon-lg mb-1"></i><p class="tx-12">Chat</p></a>
                </div>
                <div class="col-3 text-center">
                  <a href="{{ url('/apps/calendar') }}" class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"><i data-feather="calendar" class="icon-lg mb-1"></i><p class="tx-12">Calendar</p></a>
                </div>
                <div class="col-3 text-center">
                  <a href="{{ url('/email/inbox') }}" class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"><i data-feather="mail" class="icon-lg mb-1"></i><p class="tx-12">Email</p></a>
                </div>
                <div class="col-3 text-center">
                  <a href="{{ url('/general/profile') }}" class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"><i data-feather="instagram" class="icon-lg mb-1"></i><p class="tx-12">Profile</p></a>
                </div>
              </div>
              <div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">
                <a href="javascript:;">View all</a>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i data-feather="mail"></i>
            </a>
            <div class="dropdown-menu p-0" aria-labelledby="messageDropdown">
              <div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
                <p>9 New Messages</p>
                <a href="javascript:;" class="text-muted">Clear all</a>
              </div>
              <div class="p-1">
                <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                  <div class="me-3">
                    <img class="wd-30 ht-30 rounded-circle" src="{{ url('https://via.placeholder.com/30x30') }}" alt="userr">
                  </div>
                  <div class="d-flex justify-content-between flex-grow-1">
                    <div class="me-4">
                      <p>Leonardo Payne</p>
                      <p class="tx-12 text-muted">Project status</p>
                    </div>
                    <p class="tx-12 text-muted">2 min ago</p>
                  </div>	
                </a>
                <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                  <div class="me-3">
                    <img class="wd-30 ht-30 rounded-circle" src="{{ url('https://via.placeholder.com/30x30') }}" alt="userr">
                  </div>
                  <div class="d-flex justify-content-between flex-grow-1">
                    <div class="me-4">
                      <p>Carl Henson</p>
                      <p class="tx-12 text-muted">Client meeting</p>
                    </div>
                    <p class="tx-12 text-muted">30 min ago</p>
                  </div>	
                </a>
                <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                  <div class="me-3">
                    <img class="wd-30 ht-30 rounded-circle" src="{{ url('https://via.placeholder.com/30x30') }}" alt="userr">
                  </div>
                  <div class="d-flex justify-content-between flex-grow-1">
                    <div class="me-4">
                      <p>Jensen Combs</p>
                      <p class="tx-12 text-muted">Project updates</p>
                    </div>
                    <p class="tx-12 text-muted">1 hrs ago</p>
                  </div>	
                </a>
                <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                  <div class="me-3">
                    <img class="wd-30 ht-30 rounded-circle" src="{{ url('https://via.placeholder.com/30x30') }}" alt="userr">
                  </div>
                  <div class="d-flex justify-content-between flex-grow-1">
                    <div class="me-4">
                      <p>Amiah Burton</p>
                      <p class="tx-12 text-muted">Project deatline</p>
                    </div>
                    <p class="tx-12 text-muted">2 hrs ago</p>
                  </div>	
                </a>
                <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                  <div class="me-3">
                    <img class="wd-30 ht-30 rounded-circle" src="{{ url('https://via.placeholder.com/30x30') }}" alt="userr">
                  </div>
                  <div class="d-flex justify-content-between flex-grow-1">
                    <div class="me-4">
                      <p>Yaretzi Mayo</p>
                      <p class="tx-12 text-muted">New record</p>
                    </div>
                    <p class="tx-12 text-muted">5 hrs ago</p>
                  </div>	
                </a>
              </div>
              <div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">
                <a href="javascript:;">View all</a>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i data-feather="bell"></i>
              <div class="indicator">
                <div class="circle"></div>
              </div>
            </a>
            <div class="dropdown-menu p-0" aria-labelledby="notificationDropdown">
              <div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
                <p>6 New Notifications</p>
                <a href="javascript:;" class="text-muted">Clear all</a>
              </div>
              <div class="p-1">
                <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                  <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                    <i class="icon-sm text-white" data-feather="gift"></i>
                  </div>
                  <div class="flex-grow-1 me-2">
                    <p>New Order Recieved</p>
                    <p class="tx-12 text-muted">30 min ago</p>
                  </div>	
                </a>
                <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                  <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                    <i class="icon-sm text-white" data-feather="alert-circle"></i>
                  </div>
                  <div class="flex-grow-1 me-2">
                    <p>Server Limit Reached!</p>
                    <p class="tx-12 text-muted">1 hrs ago</p>
                  </div>	
                </a>
                <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                  <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                    <img class="wd-30 ht-30 rounded-circle" src="{{ url('https://via.placeholder.com/30x30') }}" alt="userr">
                  </div>
                  <div class="flex-grow-1 me-2">
                    <p>New customer registered</p>
                    <p class="tx-12 text-muted">2 sec ago</p>
                  </div>	
                </a>
                <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                  <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                    <i class="icon-sm text-white" data-feather="layers"></i>
                  </div>
                  <div class="flex-grow-1 me-2">
                    <p>Apps are ready for update</p>
                    <p class="tx-12 text-muted">5 hrs ago</p>
                  </div>	
                </a>
                <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                  <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                    <i class="icon-sm text-white" data-feather="download"></i>
                  </div>
                  <div class="flex-grow-1 me-2">
                    <p>Download completed</p>
                    <p class="tx-12 text-muted">6 hrs ago</p>
                  </div>	
                </a>
              </div>
              <div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">
                <a href="javascript:;">View all</a>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img class="wd-30 ht-30 rounded-circle" src="{{ url('https://via.placeholder.com/30x30') }}" alt="profile">
            </a>
            <div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
              <div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
                <div class="mb-3">
                  <img class="wd-80 ht-80 rounded-circle" src="{{ url('https://via.placeholder.com/80x80') }}" alt="">
                </div>
                <div class="text-center">
                  <p class="tx-16 fw-bolder">Amiah Burton</p>
                  <p class="tx-12 text-muted">amiahburton@gmail.com</p>
                </div>
              </div>
              <ul class="list-unstyled p-1">
                <li class="dropdown-item py-2">
                  <a href="{{ url('/general/profile') }}" class="text-body ms-0">
                    <i class="me-2 icon-md" data-feather="user"></i>
                    <span>Profile</span>
                  </a>
                </li>
                <li class="dropdown-item py-2">
                  <a href="javascript:;" class="text-body ms-0">
                    <i class="me-2 icon-md" data-feather="edit"></i>
                    <span>Edit Profile</span>
                  </a>
                </li>
                <li class="dropdown-item py-2">
                  <a href="javascript:;" class="text-body ms-0">
                    <i class="me-2 icon-md" data-feather="repeat"></i>
                    <span>Switch User</span>
                  </a>
                </li>
                <li class="dropdown-item py-2">
                  <a href="javascript:;" class="text-body ms-0">
                    <i class="me-2 icon-md" data-feather="log-out"></i>
                    <span>Log Out</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
          <i data-feather="menu"></i>					
        </button>
      </div>
    </div>
  </nav>
  <nav class="bottom-navbar">
    <div class="container">
      <ul class="nav page-navigation">
        <li class="nav-item {{ active_class(['/']) }}">
          <a class="nav-link" href="{{ url('/') }}">
            <i class="link-icon" data-feather="box"></i>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>
        <li class="nav-item {{ active_class(['email/*', 'apps/*']) }}">
          <a href="#" class="nav-link">
            <i class="link-icon" data-feather="mail"></i>
            <span class="menu-title">Apps</span>
            <i class="link-arrow"></i>
          </a>
          <div class="submenu">
            <ul class="submenu-item">
              <li class="category-heading">Email</li>
              <li class="nav-item"><a class="nav-link {{ active_class(['email/inbox']) }}" href="{{ url('/email/inbox') }}">Inbox</a></li>
              <li class="nav-item"><a class="nav-link {{ active_class(['email/read']) }}" href="{{ url('/email/read') }}">Read</a></li>
              <li class="nav-item"><a class="nav-link {{ active_class(['email/compose']) }}" href="{{ url('/email/compose') }}">Compose</a></li>
              <li class="category-heading">Other<li>
              <li class="nav-item"><a class="nav-link {{ active_class(['apps/chat']) }}" href="{{ url('/apps/chat') }}">Chat</a></li>
              <li class="nav-item"><a class="nav-link {{ active_class(['apps/calendar']) }}" href="{{ url('/apps/calendar') }}">Calendar</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item mega-menu {{ active_class(['ui-components/*', 'advanced-ui/*']) }}">
          <a href="#" class="nav-link">
            <i class="link-icon" data-feather="feather"></i>
            <span class="menu-title">UI Kit</span>
            <i class="link-arrow"></i>
          </a>
          <div class="submenu">
            <div class="col-group-wrapper row">
              <div class="col-group col-md-9">
                <div class="row">
                  <div class="col-12">
                    <p class="category-heading">Basic</p>
                    <div class="submenu-item">
                      <div class="row">
                        <div class="col-md-4">
                          <ul>
                            <li class="nav-item"><a href="{{ url('/ui-components/accordion') }}" class="nav-link {{ active_class(['ui-components/accordion']) }}">Accordion</a></li>
                            <li class="nav-item"><a href="{{ url('/ui-components/alerts') }}" class="nav-link {{ active_class(['ui-components/alerts']) }}">Alerts</a></li>
                            <li class="nav-item"><a href="{{ url('/ui-components/badges') }}" class="nav-link {{ active_class(['ui-components/badges']) }}">Badges</a></li>
                            <li class="nav-item"><a href="{{ url('/ui-components/breadcrumbs') }}" class="nav-link {{ active_class(['ui-components/breadcrumbs']) }}">Breadcrumbs</a></li>
                            <li class="nav-item"><a href="{{ url('/ui-components/buttons') }}" class="nav-link {{ active_class(['ui-components/buttons']) }}">Buttons</a></li>
                            <li class="nav-item"><a href="{{ url('/ui-components/button-group') }}" class="nav-link {{ active_class(['ui-components/button-group']) }}">Buttn Group</a></li>
                            <li class="nav-item"><a href="{{ url('/ui-components/cards') }}" class="nav-link {{ active_class(['ui-components/cards']) }}">Cards</a></li>
                            <li class="nav-item"><a href="{{ url('/ui-components/carousel') }}" class="nav-link {{ active_class(['ui-components/carousel']) }}">Carousel</a></li>
                            <li class="nav-item"><a href="{{ url('/ui-components/collapse') }}" class="nav-link {{ active_class(['ui-components/collapse']) }}">Collapse</a></li>
                          </ul>
                        </div>
                        <div class="col-md-4">
                          <ul>
                            <li class="nav-item"><a href="{{ url('/ui-components/dropdowns') }}" class="nav-link {{ active_class(['ui-components/dropdowns']) }}">Dropdowns</a></li>
                            <li class="nav-item"><a href="{{ url('/ui-components/list-group') }}" class="nav-link {{ active_class(['ui-components/list-group']) }}">List group</a></li>
                            <li class="nav-item"><a href="{{ url('/ui-components/media-object') }}" class="nav-link {{ active_class(['ui-components/media-object']) }}">Media object</a></li>
                            <li class="nav-item"><a href="{{ url('/ui-components/modal') }}" class="nav-link {{ active_class(['ui-components/modal']) }}">Modal</a></li>
                            <li class="nav-item"><a href="{{ url('/ui-components/navs') }}" class="nav-link {{ active_class(['ui-components/navs']) }}">Navs</a></li>
                            <li class="nav-item"><a href="{{ url('/ui-components/navbar') }}" class="nav-link {{ active_class(['ui-components/navbar']) }}">Navbar</a></li>
                            <li class="nav-item"><a href="{{ url('/ui-components/pagination') }}" class="nav-link {{ active_class(['ui-components/pagination']) }}">Pagination</a></li>
                            <li class="nav-item"><a href="{{ url('/ui-components/popovers') }}" class="nav-link {{ active_class(['ui-components/popovers']) }}">Popovers</a></li>
                          </ul>
                        </div>
                        <div class="col-md-4">
                          <ul>
                            <li class="nav-item"><a href="{{ url('/ui-components/progress') }}" class="nav-link {{ active_class(['ui-components/progress']) }}">Progress</a></li>
                            <li class="nav-item"><a href="{{ url('/ui-components/scrollbar') }}" class="nav-link {{ active_class(['ui-components/scrollbar']) }}">Scrollbar</a></li>
                            <li class="nav-item"><a href="{{ url('/ui-components/scrollspy') }}" class="nav-link {{ active_class(['ui-components/scrollspy']) }}">Scrollspy</a></li>
                            <li class="nav-item"><a href="{{ url('/ui-components/spinners') }}" class="nav-link {{ active_class(['ui-components/spinners']) }}">Spinners</a></li>
                            <li class="nav-item"><a href="{{ url('/ui-components/tabs') }}" class="nav-link {{ active_class(['ui-components/tabs']) }}">Tabs</a></li>
                            <li class="nav-item"><a href="{{ url('/ui-components/tooltips') }}" class="nav-link {{ active_class(['ui-components/tooltips']) }}">Tooltips</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-group col-md-3">
                <div class="row">
                  <div class="col-12">
                    <p class="category-heading">Advanced</p>
                    <div class="submenu-item">
                      <div class="row">
                        <div class="col-md-12">
                          <ul>
                            <li class="nav-item"><a href="{{ url('/advanced-ui/cropper') }}" class="nav-link {{ active_class(['advanced-ui/cropper']) }}">Cropper</a></li>
                            <li class="nav-item"><a href="{{ url('/advanced-ui/owl-carousel') }}" class="nav-link {{ active_class(['advanced-ui/owl-carousel']) }}">Owl carousel</a></li>
                            <li class="nav-item"><a href="{{ url('/advanced-ui/sweet-alert') }}" class="nav-link {{ active_class(['advanced-ui/sweet-alert']) }}">Sweetalert</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item {{ active_class(['forms/*']) }}">
          <a href="#" class="nav-link">
            <i class="link-icon" data-feather="inbox"></i>
            <span class="menu-title">Forms</span>
            <i class="link-arrow"></i>
          </a>
          <div class="submenu">
            <ul class="submenu-item">
              <li class="nav-item"><a href="{{ url('/forms/basic-elements') }}" class="nav-link {{ active_class(['forms/basic-elements']) }}">Basic Elements</a></li>
              <li class="nav-item"><a href="{{ url('/forms/advanced-elements') }}" class="nav-link {{ active_class(['forms/advanced-elements']) }}">Advanced Elements</a></li>
              <li class="nav-item"><a href="{{ url('/forms/editors') }}" class="nav-link {{ active_class(['forms/editors']) }}">Editors</a></li>
              <li class="nav-item"><a href="{{ url('/forms/wizard') }}" class="nav-link {{ active_class(['forms/wizard']) }}">Wizard</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item {{ active_class(['charts/*', 'tables/*']) }}">
          <a href="#" class="nav-link">
            <i class="link-icon" data-feather="pie-chart"></i>
            <span class="menu-title">Data</span>
            <i class="link-arrow"></i>
          </a>
          <div class="submenu">
            <div class="row">
              <div class="col-md-6">
                <ul class="submenu-item pe-0">
                  <li class="category-heading">Charts</li>
                  <li class="nav-item"><a href="{{ url('/charts/apex') }}" class="nav-link {{ active_class(['charts/apex']) }}">Apex</a></li>
                  <li class="nav-item"><a href="{{ url('/charts/chartjs') }}" class="nav-link {{ active_class(['charts/chartjs']) }}">ChartJs</a></li>
                  <li class="nav-item"><a href="{{ url('/charts/flot') }}" class="nav-link {{ active_class(['charts/flot']) }}">Float</a></li>
                  <li class="nav-item"><a href="{{ url('/charts/morrisjs') }}" class="nav-link {{ active_class(['charts/morrisjs']) }}">Morris</a></li>
                  <li class="nav-item"><a href="{{ url('/charts/peity') }}" class="nav-link {{ active_class(['charts/peity']) }}">Peity</a></li>
                  <li class="nav-item"><a href="{{ url('/charts/sparkline') }}" class="nav-link {{ active_class(['charts/sparkline']) }}">Sparkline</a></li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="submenu-item ps-0">
                  <li class="category-heading">Tables</li>
                  <li class="nav-item"><a href="{{ url('/tables/basic-tables') }}" class="nav-link {{ active_class(['tables/basic-tables']) }}">Basic Tables</a></li>
                  <li class="nav-item"><a href="{{ url('/tables/data-table') }}" class="nav-link {{ active_class(['tables/data-table']) }}">Data Table</a></li>
                </ul>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item {{ active_class(['icons/*']) }}">
          <a href="#" class="nav-link">
            <i class="link-icon" data-feather="smile"></i>
            <span class="menu-title">Icons</span>
            <i class="link-arrow"></i>
          </a>
          <div class="submenu">
            <ul class="submenu-item">
              <li class="nav-item"><a href="{{ url('/icons/feather-icons') }}" class="nav-link {{ active_class(['icons/feather-icons']) }}">Feather Icons</a></li>
              <li class="nav-item"><a href="{{ url('/icons/flag-icons') }}" class="nav-link {{ active_class(['icons/flag-icons']) }}">Flag Icons</a></li>
              <li class="nav-item"><a href="{{ url('/icons/mdi-icons') }}" class="nav-link {{ active_class(['icons/mdi-icons']) }}">Mdi Icons</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item mega-menu {{ active_class(['general/*', 'error/*', 'auth/*']) }}">
          <a href="#" class="nav-link">
            <i class="link-icon" data-feather="book"></i>
            <span class="menu-title">Sample Pages</span>
            <i class="link-arrow"></i>
          </a>
          <div class="submenu">
            <div class="col-group-wrapper row">
              <div class="col-group col-md-6">
                <p class="category-heading">Special Pages</p>
                <div class="submenu-item">
                  <div class="row">
                    <div class="col-md-6">
                      <ul>
                        <li class="nav-item"><a href="{{ url('/general/blank-page') }}" class="nav-link {{ active_class(['general/blank-page']) }}">Blank page</a></li>
                        <li class="nav-item"><a href="{{ url('/general/faq') }}" class="nav-link {{ active_class(['general/faq']) }}">Faq</a></li>
                        <li class="nav-item"><a href="{{ url('/general/invoice') }}" class="nav-link {{ active_class(['general/invoice']) }}">Invoice</a></li>
                      </ul>
                    </div>
                    <div class="col-md-6">
                      <ul>
                        <li class="nav-item"><a href="{{ url('/general/profile') }}" class="nav-link {{ active_class(['general/profile']) }}">Profile</a></li>
                        <li class="nav-item"><a href="{{ url('/general/pricing') }}" class="nav-link {{ active_class(['general/pricing']) }}">Pricing</a></li>
                        <li class="nav-item"><a href="{{ url('/general/timeline') }}" class="nav-link {{ active_class(['general/timeline']) }}">Timeline</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-group col-md-3">
                <p class="category-heading">Auth Pages</p>
                <ul class="submenu-item">
                  <li class="nav-item"><a href="{{ url('/auth/login') }}" class="nav-link {{ active_class(['auth/login']) }}">Login</a></li>
                  <li class="nav-item"><a href="{{ url('/auth/register') }}" class="nav-link {{ active_class(['auth/register']) }}">Register</a></li>
                </ul>
              </div>
              <div class="col-group col-md-3">
                <p class="category-heading">Error Pages</p>
                <ul class="submenu-item">
                  <li class="nav-item"><a href="{{ url('/error/404') }}" class="nav-link {{ active_class(['error/404']) }}">404</a></li>
                  <li class="nav-item"><a href="{{ url('/error/500') }}" class="nav-link {{ active_class(['error/500']) }}">500</a></li>
                </ul>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item">
          <a href="https://www.nobleui.com/laravel/documentation/docs.html" target="_blank" class="nav-link">
            <i class="link-icon" data-feather="hash"></i>
            <span class="menu-title">Documentation</span></a>
        </li>
      </ul>
    </div>
  </nav>
</div>