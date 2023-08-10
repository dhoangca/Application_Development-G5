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
                        <?php if(auth()->guard()->check()): ?>
                            <p style="margin: 0; font-size: 18px; font-weight: bold; color: #333;">Welcome,
                                <?php echo e(Auth::user()->username); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <hr>
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
                        <li id="accounts" class="<?php echo e(request()->is('Users/users') ? 'active' : ''); ?>">
                            <a href="<?php echo e(asset('Users/users/')); ?>">
                                <i class="nc-icon nc-book-bookmark"></i>
                                <p>Accounts MGMT</p>
                            </a>
                        </li>
                        <li id="Trainee" class=" <?php echo e(request()->is('managetrainee/trainees') ? 'active' : ''); ?>">
                            <a href="<?php echo e(asset('managetrainee/trainees')); ?>">
                                <i class="nc-icon nc-book-bookmark"></i>
                                <p>AC Trainee MGMT</p>
                            </a>
                        </li>
                        <li id="Course" class=" <?php echo e(request()->is('manageCourse/courses') ? 'active' : ''); ?>">
                            <a href="<?php echo e(asset('manageCourse/courses')); ?>">
                                <i class="nc-icon nc-book-bookmark"></i>
                                <p>Course MGMT</p>
                            </a>
                        </li>
                        <li id="Category"
                            class="<?php echo e(request()->is('MNGCourseCategories/course-categories') ? 'active' : ''); ?>">
                            <a href="<?php echo e(asset('MNGCourseCategories/course-categories')); ?>">
                                <i class="nc-icon nc-book-bookmark"></i>
                                <p>Course-Category MGMT</p>
                            </a>
                        </li>
                        <li id="Topic" class="<?php echo e(request()->is('MngTopic/topics') ? 'active' : ''); ?>">
                            <a href="<?php echo e(asset('MngTopic/topics')); ?>">
                                <i class="nc-icon nc-book-bookmark"></i>
                                <p>Topics MGMT</p>
                            </a>
                        </li>
                        
                        <li id="assign" class="<?php echo e(request()->is('Assign/assign-trainer-to-topic') ? 'active' : ''); ?>">
                            <a href="<?php echo e(asset('Assign/assign-trainer-to-topic')); ?>">
                                <i class="nc-icon nc-book-bookmark"></i>
                                <p>assign trainer to topic</p>
                            </a>
                        </li>
                        <li id="assignc"
                            class="<?php echo e(request()->is('AssignC/assign_trainee_to_courses') ? 'active' : ''); ?>">
                            <a href="<?php echo e(asset('AssignC/assign_trainee_to_courses')); ?>">
                                <i class="nc-icon nc-book-bookmark"></i>
                                <p>assign trainee to courses</p>
                            </a>
                        </li>
                        
                    <?php endif; ?>

                    
                    <?php if(Auth::user()->role === 'training'): ?>
                        <li id="home"
                            class="<?php echo e(request()->route()->getName() === 'All.index.training'? 'active': ''); ?>">
                            <a href="<?php echo e(route('All.index.training')); ?>">
                                <i class="nc-icon nc-bank"></i>
                                <p>Home</p>
                            </a>
                        </li>
                        <li id="notifications" class="<?php echo e(request()->is('All/notifications') ? 'active' : ''); ?>">
                            <a href="<?php echo e(asset('All/notifications')); ?>">
                                <i class="nc-icon nc-bell-55"></i>
                                <p>Notifications</p>
                            </a>
                        </li>
                        <li id="Trainee" class=" <?php echo e(request()->is('managetrainee/trainees') ? 'active' : ''); ?>">
                            <a href="<?php echo e(asset('managetrainee/trainees')); ?>">
                                <i class="nc-icon nc-book-bookmark"></i>
                                <p>AC Trainee MGMT</p>
                            </a>
                        </li>
                        <li id="Course" class=" <?php echo e(request()->is('manageCourse/courses') ? 'active' : ''); ?>">
                            <a href="<?php echo e(asset('manageCourse/courses')); ?>">
                                <i class="nc-icon nc-book-bookmark"></i>
                                <p>Course MGMT</p>
                            </a>
                        </li>
                        <li id="Category"
                            class="<?php echo e(request()->is('MNGCourseCategories/course-categories') ? 'active' : ''); ?>">
                            <a href="<?php echo e(asset('MNGCourseCategories/course-categories')); ?>">
                                <i class="nc-icon nc-book-bookmark"></i>
                                <p>Course-Category MGMT</p>
                            </a>
                        </li>
                        <li id="Topic" class="<?php echo e(request()->is('MngTopic/topics') ? 'active' : ''); ?>">
                            <a href="<?php echo e(asset('MngTopic/topics')); ?>">
                                <i class="nc-icon nc-book-bookmark"></i>
                                <p>Topics MGMT</p>
                            </a>
                        </li>
                        <li id="Trainer" class="<?php echo e(request()->is('managetrainer/trainers') ? 'active' : ''); ?>">
                            <a href="<?php echo e(asset('managetrainer/trainers')); ?>">
                                <i class="nc-icon nc-book-bookmark"></i>
                                <p>Trainer profile MGMT</p>
                            </a>
                        </li>
                        <li id="assign" class="<?php echo e(request()->is('Assign/assign-trainer-to-topic') ? 'active' : ''); ?>">
                            <a href="<?php echo e(asset('Assign/assign-trainer-to-topic')); ?>">
                                <i class="nc-icon nc-book-bookmark"></i>
                                <p>assign trainer to topic</p>
                            </a>
                        </li>
                        <<<<<<< HEAD=======<li id="assignc"
                            class="<?php echo e(request()->is('AssignC/assign_trainee_to_courses') ? 'active' : ''); ?>">
                            <a href="<?php echo e(asset('AssignC/assign_trainee_to_courses')); ?>">
                                <i class="nc-icon nc-book-bookmark"></i>
                                <p>assign trainee to courses</p>
                            </a>
                            </li>
                            >>>>>>> 5d8b0f81be7dd123c33307941eec259aeb4c1b14
                            
                    <?php endif; ?>

                    
                    <?php if(Auth::user()->role === 'trainer'): ?>
                        <li id="home"
                            class="<?php echo e(request()->route()->getName() === 'All.index.trainer'? 'active': ''); ?>">
                            <a href="<?php echo e(route('All.index.trainer')); ?>">
                                <i class="nc-icon nc-bank"></i>
                                <p>Home</p>
                            </a>
                        </li>

                        <li id="notifications" class="<?php echo e(request()->is('All/notifications') ? 'active' : ''); ?>">
                            <a href="<?php echo e(asset('All/notifications')); ?>">
                                <i class="nc-icon nc-bell-55"></i>
                                <p>Notifications</p>
                            </a>
                        </li>
                        <li id="profile" class="<?php echo e(request()->is('Trainer/ViewProfile') ? 'active' : ''); ?>">
                            <a href="<?php echo e(asset('Trainer/ViewProfile')); ?>">
                                <i class="nc-icon nc-badge"></i>
                                <p>View Profile</p>
                            </a>
                        </li>
                        <li id="view" class="<?php echo e(request()->is('Trainer/view') ? 'active' : ''); ?>">
                            <a href="<?php echo e(asset('Trainer/view')); ?>">
                                <i class="nc-icon nc-calendar-60"></i>
                                <p>View</p>
                            </a>
                        </li>
                        
                    <?php endif; ?>
                <?php endif; ?>
            </ul>
        </div>
    </div>
<?php /**PATH C:\Users\MINH\OneDrive\Máy tính\Application_Development-G5-CM\resources\views/Layouts/sidebar.blade.php ENDPATH**/ ?>