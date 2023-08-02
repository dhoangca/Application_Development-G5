<div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
        <div class="logo">
            <a href="" class="simple-text logo-mini">
                <div class="logo-image-small">
                    <img src="img/logo-small.png">
                </div>
            </a>
            <a href="https://www.creative-tim.com" class="simple-text logo-normal">
                Group 5
            </a>
        </div>
        <div class="sidebar-wrapper">           
            <ul class="nav">
                <div style="padding: 7px; display: flex; justify-content: center ">
                    <div style="display: flex; align-items: center;">
                        @auth
                            <p style="margin: 0; font-size: 18px; font-weight: bold; color: #333;">Welcome, {{ Auth::user()->username }}</p>
                        @endauth
                    </div>
                </div>
                <hr>
                @auth
                    {{-- Admin Sidebar Menu Items --}}
                    @if (Auth::user()->role === 'admin')
                        <li id="home" class="{{ request()->route()->getName() === 'All.index.admin'? 'active': '' }}">
                            <a href="{{ route('All.index.admin') }}">
                                <i class="nc-icon nc-bank"></i>
                                <p>Home</p>
                            </a>
                        </li>
                        <li id="dashboard" class="{{ request()->is('All/dashboard') ? 'active' : '' }}">
                            <a href="{{ asset('All/dashboard') }}">
                                <i class="nc-icon nc-ruler-pencil"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li id="notifications" class="{{ request()->is('All/notifications') ? 'active' : '' }}">
                            <a href="{{ asset('All/notifications') }}">
                                <i class="nc-icon nc-bell-55"></i>
                                <p>Notifications</p>
                            </a>
                        </li>
                        <li id="accounts" class="{{ request()->is('users') ? 'active' : '' }}">
                            <a href="{{ asset('/users') }}">
                                <i class="nc-icon nc-book-bookmark"></i>
                                <p>Accounts MGMT</p>
                            </a>
                        </li>
                        <li id="other" class="{{ request()->is('...') ? 'active' : '' }}">
                            <a href="{{ asset('/users') }}">
                                <i class="nc-icon nc-book-bookmark"></i>
                                <p>... MGMT</p>
                            </a>
                        </li>
                        {{-- Add more Admin-specific sidebar menu items here --}}
                    @endif

                    {{-- Training Role Sidebar Menu Items --}}
                    @if (Auth::user()->role === 'training')
                    <li id="categories" class=" {{ request()->is('category') ? 'active' : '' }}">
                        <a href="{{ asset('managetrainee/trainees') }}">
                            <i class="nc-icon nc-book-bookmark"></i>
                            <p>AC Trainee MGNT</p>
                        </a>
                    </li>

                        <li id="categories" class=" {{ request()->is('category') ? 'active' : '' }}">
                            <a href="{{ asset('manageCourse/courses') }}">
                                <i class="nc-icon nc-book-bookmark"></i>
                                <p>Course Management</p>
                            </a>
                        </li>
                        <li id="categories" class="{{ request()->is('category') ? 'active' : '' }}">
                            <a href="{{ asset('/category') }}">
                                <i class="nc-icon nc-book-bookmark"></i>
                                <p>Category Management</p>
                            </a>
                        </li>
                        <li id="categories" class="{{ request()->is('category') ? 'active' : '' }}">
                            <a href="{{ asset('/category') }}">
                                <i class="nc-icon nc-book-bookmark"></i>
                                <p>Category Management</p>
                            </a>
                        </li>
                        <li id="categories" class="{{ request()->is('category') ? 'active' : '' }}">
                            <a href="{{ asset('/category') }}">
                                <i class="nc-icon nc-book-bookmark"></i>
                                <p>Category Management</p>
                            </a>
                        </li>
                        {{-- Add more Training-specific sidebar menu items here --}}
                    @endif

                    {{-- Trainer Role Sidebar Menu Items --}}
                    @if (Auth::user()->role === 'trainer')
                        <li id="profile" class="{{ request()->is('profile') ? 'active' : '' }}">
                            <a href="{{ asset('/profile') }}">
                                <i class="nc-icon nc-circle-09"></i>
                                <p>View Profile</p>
                            </a>
                        </li>
                        {{-- Add more Trainer-specific sidebar menu items here --}}
                    @endif
                @endauth
            </ul>
        </div>
    </div>
