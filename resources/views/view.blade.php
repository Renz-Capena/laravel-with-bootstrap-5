{{-- header --}}
@include('components.header')

<!--*******************
        Preloader start
    ********************-->
<div id="preloader">
    <div class="lds-ripple">
        <div></div>
        <div></div>
    </div>
</div>
<!--*******************
        Preloader end
    ********************-->

<!--**********************************
        Main wrapper start
    ***********************************-->
<div id="main-wrapper">

    <!--**********************************
            Nav header start
        ***********************************-->
    <div class="nav-header">
        <a href="#" class="brand-logo">
            <svg class="logo-abbr" width="55" height="55" viewbox="0 0 55 55" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M27.5 0C12.3122 0 0 12.3122 0 27.5C0 42.6878 12.3122 55 27.5 55C42.6878 55 55 42.6878 55 27.5C55 12.3122 42.6878 0 27.5 0ZM28.0092 46H19L19.0001 34.9784L19 27.5803V24.4779C19 14.3752 24.0922 10 35.3733 10V17.5571C29.8894 17.5571 28.0092 19.4663 28.0092 24.4779V27.5803H36V34.9784H28.0092V46Z"
                    fill="url(#paint0_linear)"></path>
                <defs>
                </defs>
            </svg>
            <div class="brand-title">
                <h2 class="">Fillow.</h2>
                <span class="brand-sub-title">@sample</span>
            </div>
        </a>
        <div class="nav-control">
            <div class="hamburger">
                <span class="line"></span><span class="line"></span><span class="line"></span>
            </div>
        </div>
    </div>

    <div class="header border-bottom">
        <div class="header-content">
            <nav class="navbar navbar-expand">
                <div class="collapse navbar-collapse justify-content-between">
                    <div class="header-left">
                        <div class="dashboard_bar">
                            Dashboard
                        </div>
                    </div>
                    <ul class="navbar-nav header-right">

                        <li class="nav-item">
                            {{ session('userLogin')->fullname }}<span
                                class="ms-1">({{ session('userLogin')->username }})</span>
                        </li>


                        <li class="nav-item dropdown  header-profile">
                            <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                                <img src="{{ asset('assets/images/user.jpg') }}" width="56" alt="">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item ai-icon">
                                    <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary"
                                        width="18" height="18" viewbox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    <span class="ms-2">Profile </span>
                                </a>
                                <a href="{{ route('logoutBtnFn') }}" class="dropdown-item ai-icon">
                                    <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger"
                                        width="18" height="18" viewbox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                        <polyline points="16 17 21 12 16 7"></polyline>
                                        <line x1="21" y1="12" x2="9" y2="12"></line>
                                    </svg>
                                    <span class="ms-2">Logout </span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <div class="dlabnav">
        <div class="dlabnav-scroll">
            <ul class="metismenu" id="menu">
                <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{ route('homeFn') }}">User tables</a></li>
                        <li><a href="#">Calendar</a></li>
                    </ul>

                </li>

                <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                        <i class="fas fa-info-circle"></i>
                        <span class="nav-text">Apps</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">About</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    {{-- content --}}
    <div class="content-body">
        <div class="container-fluid">
            <div class="card p-3 text-center w-auto">
                <h1 class="text-primary">User Information</h1>
                <hr>
                <p>Username : {{ $data->username }}</p>
                <p>Fullname : {{ $data->fullname }}</p>
                <p>Rmail : {{ $data->email }}</p>
                <p>Password : {{ $data->password }}</p>
                <p>Date created : {{ $data->created_at }}</p>
                <p>Date updated : {{ $data->updated_at }}</p>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="copyright">
            <p>Copyright © Designed &amp; Developed by <a href="../index.htm" target="_blank">DexignLab</a> 2021</p>
        </div>
    </div>


</div>
<!--*************** scripts *************************-->
@include('components.script')



</body>

</html>
