<div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
        <div class="logo">
            <a href="#" class="simple-text logo-mini">
                <div class="logo-image-small">
                    <img src="img/logo-small.png">
                </div>
            </a>
            <a href="#" class="simple-text logo-normal">
                Group 5
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <div style="padding: 7px; display: flex; justify-content: center ">
                    <div style="display: flex; align-items: center;">
                        @auth
                            <p style="margin: 0; font-size: 18px; font-weight: bold; color: #333;">Welcome,
                                {{ Auth::user()->username }}</p>
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
                        <li id="accounts" class="{{ request()->is('Users/users') ? 'active' : '' }}">
                            <a href="{{ asset('Users/users/') }}">
                                <i class="nc-icon nc-book-bookmark"></i>
                                <p>Accounts MGMT</p>
                            </a>
                        </li>
                        <li id="Trainee" class=" {{ request()->is('managetrainee/trainees') ? 'active' : '' }}">
                            <a href="{{ asset('managetrainee/trainees') }}">
                                <i class="nc-icon nc-book-bookmark"></i>
                                <p>AC Trainee MGMT</p>
                            </a>
                        </li>
                        <li id="Course" class=" {{ request()->is('manageCourse/courses') ? 'active' : '' }}">
                            <a href="{{ asset('manageCourse/courses') }}">
                                <i class="nc-icon nc-book-bookmark"></i>
                                <p>Course MGMT</p>
                            </a>
                        </li>
                        <li id="Category"
                            class="{{ request()->is('MNGCourseCategories/course-categories') ? 'active' : '' }}">
                            <a href="{{ asset('MNGCourseCategories/course-categories') }}">
                                <i class="nc-icon nc-book-bookmark"></i>
                                <p>Course-Category MGMT</p>
                            </a>
                        </li>
                        <li id="Topic" class="{{ request()->is('MngTopic/topics') ? 'active' : '' }}">
                            <a href="{{ asset('MngTopic/topics') }}">
                                <i class="nc-icon nc-book-bookmark"></i>
                                <p>Topics MGMT</p>
                            </a>
                        </li>
                        <li id="assign" class="{{ request()->is('Assign/assign-trainer-to-topic') ? 'active' : '' }}">
                            <a href="{{ asset('Assign/assign-trainer-to-topic') }}">
                                <i class="nc-icon nc-book-bookmark"></i>
                                <p>assign trainer to topic</p>
                            </a>
                        </li>
                        {{-- Add more Admin-specific sidebar menu items here --}}
                    @endif

                    {{-- Training Role Sidebar Menu Items --}}
                    @if (Auth::user()->role === 'training')
                        <li id="home"
                            class="{{ request()->route()->getName() === 'All.index.training'? 'active': '' }}">
                            <a href="{{ route('All.index.training') }}">
                                <i class="nc-icon nc-bank"></i>
                                <p>Home</p>
                            </a>
                        </li>
                        <li id="notifications" class="{{ request()->is('All/notifications') ? 'active' : '' }}">
                            <a href="{{ asset('All/notifications') }}">
                                <i class="nc-icon nc-bell-55"></i>
                                <p>Notifications</p>
                            </a>
                        </li>
                        <li id="Trainee" class=" {{ request()->is('managetrainee/trainees') ? 'active' : '' }}">
                            <a href="{{ asset('managetrainee/trainees') }}">
                                <i class="nc-icon nc-book-bookmark"></i>
                                <p>AC Trainee MGMT</p>
                            </a>
                        </li>
                        <li id="Course" class=" {{ request()->is('manageCourse/courses') ? 'active' : '' }}">
                            <a href="{{ asset('manageCourse/courses') }}">
                                <i class="nc-icon nc-book-bookmark"></i>
                                <p>Course MGMT</p>
                            </a>
                        </li>
                        <li id="Category"
                            class="{{ request()->is('MNGCourseCategories/course-categories') ? 'active' : '' }}">
                            <a href="{{ asset('MNGCourseCategories/course-categories') }}">
                                <i class="nc-icon nc-book-bookmark"></i>
                                <p>Course-Category MGMT</p>
                            </a>
                        </li>
                        <li id="Topic" class="{{ request()->is('MngTopic/topics') ? 'active' : '' }}">
                            <a href="{{ asset('MngTopic/topics') }}">
                                <i class="nc-icon nc-book-bookmark"></i>
                                <p>Topics MGMT</p>
                            </a>
                        </li>
                        <li id="categories" class="{{ request()->is('category') ? 'active' : '' }}">
                            <a href="{{ asset('/category') }}">
                                <i class="nc-icon nc-book-bookmark"></i>
                                <p>Category MGMT</p>
                            </a>
                        </li>
                        {{-- Add more Training-specific sidebar menu items here --}}
                    @endif

                    {{-- Trainer Role Sidebar Menu Items --}}
                    @if (Auth::user()->role === 'trainer')
                        <li id="home"
                            class="{{ request()->route()->getName() === 'All.index.trainer'? 'active': '' }}">
                            <a href="{{ route('All.index.trainer') }}">
                                <i class="nc-icon nc-bank"></i>
                                <p>Home</p>
                            </a>
                        </li>

                        <li id="notifications" class="{{ request()->is('All/notifications') ? 'active' : '' }}">
                            <a href="{{ asset('All/notifications') }}">
                                <i class="nc-icon nc-bell-55"></i>
                                <p>Notifications</p>
                            </a>
                        </li>
                        <li id="profile" class="{{ request()->is('Trainer/ViewProfile') ? 'active' : '' }}">
                            <a href="{{ asset('Trainer/ViewProfile') }}">
                                <i class="nc-icon nc-badge"></i>
                                <p>View Profile</p>
                            </a>
                        </li>
                        <li id="view" class="{{ request()->is('Trainer/view') ? 'active' : '' }}">
                            <a href="{{ asset('Trainer/view') }}">
                                <i class="nc-icon nc-calendar-60"></i>
                                <p>View</p>
                            </a>
                        </li>
                        {{-- Add more Trainer-specific sidebar menu items here --}}
                    @endif
                @endauth
            </ul>
        </div>
    </div>
