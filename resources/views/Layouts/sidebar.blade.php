<div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
        <div class="logo">
            <a href="https://www.creative-tim.com" class="simple-text logo-mini">
                <div class="logo-image-small">
                    <img src="img/logo-small.png">
                </div>
                <!-- <p>CT</p> -->
            </a>
            <a href="https://www.creative-tim.com" class="simple-text logo-normal">
                Creative Tim
                <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="active ">
                    <a href="{{ asset('All/dashboard') }}">
                    {{-- <a href="./dashboard.html"> --}}
                        <i class="nc-icon nc-bank"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="{{ asset('/users')}}">
                        <i class="nc-icon nc-diamond"></i>
                        <p>Account user management</p>
                    </a>
                </li>
                <li>
                    <a href="./map.html">
                        <i class="nc-icon nc-pin-3"></i>
                        <p>Maps</p>
                    </a>
                </li>
                <li>
                    <a href="{{ asset('All/notifications') }}">
                    {{-- <a href="./notifications.html"> --}}
                        <i class="nc-icon nc-bell-55"></i>
                        <p>Notifications</p>
                    </a>
                </li>
                <li>
                    <a href="{{ asset('All/user') }}">
                    {{-- <a href="./user.html"> --}}
                        <i class="nc-icon nc-single-02"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li>
                    <a href="{{ asset('All/tables') }}">
                        <i class="nc-icon nc-tile-56"></i>
                        <p>Table List</p>
                    </a>
                </li>
                <!-- Dropdown Menu -->
                {{-- <li class="nav-item btn-rotate dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="nc-icon nc-diamond"></i></i> <!-- New user icon -->
                        <p>
                            Account user management
                        </p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{ asset('/users/create') }}">Add</a>
                        <a class="dropdown-item" href="{{ asset('/users') }}">List</a>
                    </div>
                </li> --}}
                
                         <!-- End of Dropdown Menu -->
                    <li>
                        <a href="./typography.html">
                            <i class="nc-icon nc-caps-small"></i>
                            <p>Typography</p>
                        </a>
                    </li>
                 
                <li>
                    <a href="./upgrade.html">
                        <i class="nc-icon nc-spaceship"></i>
                        <p>Upgrade to PRO</p>
                    </a>
                </li>
            
            </ul>
        </div>
    </div>
