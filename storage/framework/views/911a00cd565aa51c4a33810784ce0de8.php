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
                <?php if(auth()->guard()->check()): ?>
                    
                    <?php if(Auth::user()->role === 'admin'): ?>
                        <li id="home" class="<?php echo e(request()->route()->getName() === 'All.index.admin'? 'active': ''); ?>">
                            <a href="<?php echo e(route('All.index.admin')); ?>">
                                <i class="nc-icon nc-bank"></i>
                                <p>Home</p>
                            </a>
                        </li>
                        <li id="dashboard" class="<?php echo e(request()->is('All/dashboard') ? 'active' : ''); ?>">
                            <a href="<?php echo e(asset('All/dashboard')); ?>">
                                <i class="nc-icon nc-ruler-pencil"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li id="notifications" class="<?php echo e(request()->is('All/notifications') ? 'active' : ''); ?>">
                            <a href="<?php echo e(asset('All/notifications')); ?>">
                                <i class="nc-icon nc-bell-55"></i>
                                <p>Notifications</p>
                            </a>
                        </li>
                        <li id="accounts" class="<?php echo e(request()->is('users') ? 'active' : ''); ?>">
                            <a href="<?php echo e(asset('/users')); ?>">
                                <i class="nc-icon nc-book-bookmark"></i>
                                <p>Accounts MGMT</p>
                            </a>
                        </li>
                        <li id="other" class="<?php echo e(request()->is('...') ? 'active' : ''); ?>">
                            <a href="<?php echo e(asset('/users')); ?>">
                                <i class="nc-icon nc-book-bookmark"></i>
                                <p>... MGMT</p>
                            </a>
                        </li>
                        
                    <?php endif; ?>

                    
                    <?php if(Auth::user()->role === 'training'): ?>
                        <li id="accounts" class="<?php echo e(request()->is('student-account') ? 'active' : ''); ?>">
                            <a href="<?php echo e(asset('/student-account')); ?>">
                                <i class="nc-icon nc-book-bookmark"></i>
                                <p>Student Account Management</p>
                            </a>
                        </li>
                        <li id="categories" class="<?php echo e(request()->is('category') ? 'active' : ''); ?>">
                            <a href="<?php echo e(asset('/category')); ?>">
                                <i class="nc-icon nc-book-bookmark"></i>
                                <p>Category Management</p>
                            </a>
                        </li>
                        <li id="categories" class="<?php echo e(request()->is('category') ? 'active' : ''); ?>">
                            <a href="<?php echo e(asset('/category')); ?>">
                                <i class="nc-icon nc-book-bookmark"></i>
                                <p>Category Management</p>
                            </a>
                        </li>
                        <li id="categories" class="<?php echo e(request()->is('category') ? 'active' : ''); ?>">
                            <a href="<?php echo e(asset('/category')); ?>">
                                <i class="nc-icon nc-book-bookmark"></i>
                                <p>Category Management</p>
                            </a>
                        </li>
                        <li id="categories" class="<?php echo e(request()->is('category') ? 'active' : ''); ?>">
                            <a href="<?php echo e(asset('/category')); ?>">
                                <i class="nc-icon nc-book-bookmark"></i>
                                <p>Category Management</p>
                            </a>
                        </li>   
                        
                    <?php endif; ?>

                    
                    <?php if(Auth::user()->role === 'trainer'): ?>
                        <li id="profile" class="<?php echo e(request()->is('profile') ? 'active' : ''); ?>">
                            <a href="<?php echo e(asset('/profile')); ?>">
                                <i class="nc-icon nc-circle-09"></i>
                                <p>View Profile</p>
                            </a>
                        </li>
                        
                    <?php endif; ?>
                <?php endif; ?>
            </ul>
        </div>
    </div>
<?php /**PATH C:\Users\MINH\OneDrive\Máy tính\Application_Development-G5-CM\resources\views/Layouts/sidebarAdmin.blade.php ENDPATH**/ ?>