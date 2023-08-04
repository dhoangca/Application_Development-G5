<?php echo $__env->make('Layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- sidebar -->
<?php echo $__env->make('Layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- navbar -->
<?php echo $__env->make('Layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<div class="content">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-user">
                <div class="image">
                    <img src="img/damir-bosnjak.jpg" alt="...">
                </div>
                <div class="card-body">
                    <div class="author">
                        <img class="avatar border-gray" src="img/mike.jpg" alt="...">
                        <h5 class="title">Chet Faker</h5>
                        <p class="description">
                            @chetfaker
                        </p>
                    </div>
                    <p class="description text-center">
                        "I like the way you work it <br>
                        No diggity <br>
                        I wanna bag it up"
                    </p>
                </div>
                <div class="card-footer">
                    <hr>
                    <div class="button-container">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-6 ml-auto">
                                <h5>12<br><small>Files</small></h5>
                            </div>
                            <div class="col-lg-4 col-md-6 col-6 ml-auto mr-auto">
                                <h5>2GB<br><small>Used</small></h5>
                            </div>
                            <div class="col-lg-3 mr-auto">
                                <h5>24,6$<br><small>Spent</small></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Team Members</h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled team-members">
                        <li>
                            <div class="row">
                                <div class="col-md-2 col-2">
                                    <div class="avatar">
                                        <img src="img/faces/ayo-ogunseinde-2.jpg" alt="Circle Image"
                                            class="img-circle img-no-padding img-responsive">
                                    </div>
                                </div>
                                <div class="col-md-7 col-7">
                                    DJ Khaled
                                    <br />
                                    <span class="text-muted"><small>Offline</small></span>
                                </div>
                                <div class="col-md-3 col-3 text-right">
                                    <btn class="btn btn-sm btn-outline-success btn-round btn-icon"><i
                                            class="fa fa-envelope"></i></btn>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-md-2 col-2">
                                    <div class="avatar">
                                        <img src="img/faces/joe-gardner-2.jpg" alt="Circle Image"
                                            class="img-circle img-no-padding img-responsive">
                                    </div>
                                </div>
                                <div class="col-md-7 col-7">
                                    Creative Tim
                                    <br />
                                    <span class="text-success"><small>Available</small></span>
                                </div>
                                <div class="col-md-3 col-3 text-right">
                                    <btn class="btn btn-sm btn-outline-success btn-round btn-icon"><i
                                            class="fa fa-envelope"></i></btn>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-md-2 col-2">
                                    <div class="avatar">
                                        <img src="img/faces/clem-onojeghuo-2.jpg" alt="Circle Image"
                                            class="img-circle img-no-padding img-responsive">
                                    </div>
                                </div>
                                <div class="col-ms-7 col-7">
                                    Flume
                                    <br />
                                    <span class="text-danger"><small>Busy</small></span>
                                </div>
                                <div class="col-md-3 col-3 text-right">
                                    <btn class="btn btn-sm btn-outline-success btn-round btn-icon"><i
                                            class="fa fa-envelope"></i></btn>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card card-user">
                <div class="card-header">
                    <h5 class="card-title">Edit Profile</h5>
                </div>
                <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('Trainer.updateProfile')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="user-section">
                            
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>User Name</label>
                                        <?php if(auth()->guard()->check()): ?>
                                            <input type="text" class="form-control" placeholder="Username"
                                                value="<?php echo e(Auth::user()->username); ?>" name="username" >
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-md-6 pl-1">
                                    <div class="form-group">
                                        <label>Email address</label>
                                        <?php if(auth()->guard()->check()): ?>
                                            <input type="email" class="form-control" placeholder="Email address"
                                                value="<?php echo e(Auth::user()->email); ?>" name="email">
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="trainer-section">
                            
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" placeholder="First Name"
                                            name="fname" value="">
                                    </div>
                                </div>
                                <div class="col-md-6 pl-1">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" placeholder="Last Name"
                                            name="lname" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>Age</label>
                                        <input type="text" class="form-control" placeholder="Age" name="age"
                                            value="">
                                    </div>
                                </div>
                                <div class="col-md-4 px-1">
                                    <div class="form-group">
                                        <label>Date of Birth</label>
                                        <input type="text" class="form-control" placeholder="Date of Birth"
                                            name="date_of_birth" value="">
                                    </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <label>Telephone</label>
                                        <input type="text" class="form-control" placeholder="Telephone"
                                            name="telephone" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Working position</label>
                                        <input type="text" class="form-control" placeholder="Working position"
                                            name="working_place" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control" placeholder="Home Address"
                                            name="address" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>About Me</label>
                                        <textarea class="form-control textarea" placeholder="About Me" name="about"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="update ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary btn-round">Update Profile</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>


<!-- footer -->
<?php echo $__env->make('Layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- js -->
<?php echo $__env->make('Layouts.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH D:\AD\resources\views/TrainerRole/profile.blade.php ENDPATH**/ ?>