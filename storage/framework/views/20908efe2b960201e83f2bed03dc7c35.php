<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="content">
    <!-- Your trainee listing table here -->
    <table class="table">
        <thead>
            <tr>
                <th class="text-center">Name</th>
                <th class="text-center">Age</th>
                <th class="text-center">Date of Birth</th>
                <th class="text-center">Email</th>
                <th class="text-center">Telephone</th>
                <th class="text-center">Address</th>
                <th class="text-center">Education</th>
                <th class="text-center">TOEIC Score</th>
                <th class="text-center">Majors</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $trainees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trainee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td class="text-center"><?php echo e($trainee->name); ?></td>
                    <td class="text-center"><?php echo e($trainee->age); ?></td>
                    <td class="text-center"><?php echo e($trainee->date_of_birth); ?></td>
                    <td class="text-center"><?php echo e($trainee->email); ?></td>
                    <td class="text-center"><?php echo e($trainee->telephone); ?></td>
                    <td class="text-center"><?php echo e($trainee->address); ?></td>
                    <td class="text-center"><?php echo e($trainee->education); ?></td>
                    <td class="text-center"><?php echo e($trainee->toeic_score); ?></td>
                    <td class="text-center"><?php echo e($trainee->majors); ?></td>
                    <td class="text-center">
                        <a href="<?php echo e(route('managetrainee.trainees.edit', $trainee->traineeId)); ?>"
                            class="btn btn-sm btn-primary">Edit</a>
                        <form action="<?php echo e(route('managetrainee.trainees.delete', $trainee->traineeId)); ?>" method="post"
                            style="display: inline-block">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('delete'); ?>
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <a href="<?php echo e(route('managetrainee.trainees.create')); ?>" class="btn btn-primary">Add</a>
</div>

<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layouts.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH D:\AD\resources\views/trainees/index.blade.php ENDPATH**/ ?>