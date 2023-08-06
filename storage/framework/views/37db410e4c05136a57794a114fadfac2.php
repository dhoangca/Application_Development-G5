
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('Layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Trainee Management</h4>
                    <a href="<?php echo e(route('trainees.createTstaff')); ?>" class="btn btn-primary">Add Trainee</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Date of Birth</th>
                                    <th>Email</th>
                                    <th>Telephone</th>
                                    <th>Address</th>
                                    <th>Education</th>
                                    <th>TOEIC Score</th>
                                    <th>Majors</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $trainees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trainee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($trainee->name); ?></td>
                                    <td><?php echo e($trainee->age); ?></td>
                                    <td><?php echo e($trainee->date_of_birth); ?></td>
                                    <td><?php echo e($trainee->email); ?></td>
                                    <td><?php echo e($trainee->telephone); ?></td>
                                    <td><?php echo e($trainee->address); ?></td>
                                    <td><?php echo e($trainee->education); ?></td>
                                    <td><?php echo e($trainee->toeic_score); ?></td>
                                    <td><?php echo e($trainee->majors); ?></td>
                                    <td>
                                        
                                        <a href="<?php echo e(route('users.edit', ['user' => $trainee->id])); ?>" class="btn btn-primary">Edit</a>
                                        <form action="<?php echo e(route('trainees.destroy', $trainee->id)); ?>" method="POST" style="display:inline-block">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this trainee?')">Delete</button>
                                        </form>
                                    </td>
                                    
                                    

                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layouts.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\Users\MINH\OneDrive\Máy tính\Application_Development-G5-CM\resources\views/users/indexTstaff.blade.php ENDPATH**/ ?>