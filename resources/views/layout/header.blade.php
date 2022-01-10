<div class="horizontal-menu">
    <nav class="navbar top-navbar">
        <div class="container">
            <div class="navbar-content">
                <a href="#" class="navbar-brand">
                    Domain Availability <span>Monitor</span>
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button"
                           data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="me-2 icon-md" data-feather="user"></i>
                        </a>
                        <div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
                            <div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
                                <div class="text-center">
                                    <p class="tx-16 fw-bolder">{{ auth()->user()->username }}</p>
                                    <p class="tx-12 text-muted">{{ auth()->user()->email }}</p>
                                </div>
                            </div>
                            <ul class="list-unstyled p-1">
                                <a href="{{ url('/general/profile') }}" class="text-body ms-0">
                                <li class="dropdown-item py-2">
                                        <i class="me-2 icon-md" data-feather="user"></i>
                                        <span>Profile</span>
                                </li>
                                </a>
                                <form method="POST" action="{{ route('logout') }}" id="logoutForm">
                                    @csrf
                                    <a class="text-body ms-0 cursor-pointer"
                                       onclick="document.getElementById('logoutForm').submit()">
                                        <li class="dropdown-item py-2">
                                            <i class="me-2 icon-md" data-feather="log-out"></i>
                                            <span>Log Out</span>
                                        </li>
                                    </a>
                                </form>
                            </ul>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                        data-toggle="horizontal-menu-toggle">
                    <i data-feather="menu"></i>
                </button>
            </div>
        </div>
    </nav>
    <nav class="bottom-navbar">
        <div class="container">
            <ul class="nav page-navigation">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/home') }}">
                        <i class="link-icon" data-feather="box"></i>
                        <span class="menu-title">Home</span>
                    </a>
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
