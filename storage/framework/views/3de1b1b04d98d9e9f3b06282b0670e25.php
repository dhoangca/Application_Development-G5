<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="content">
    <!-- Your trainee listing table here -->
    <table class="table">
        <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Name</th>
                <th class="text-center">Description</th>
                <th class="text-center">Category ID</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td class="text-center"><?php echo e($course->name); ?></td>
                    <td class="text-center"><?php echo e($course->description); ?></td>
                    <td class="text-center"><?php echo e($course->categoryId); ?></td>
                    <td class="text-center">
                        <a href="<?php echo e(route('manageCourse.courses.edit', $course->courseId)); ?>"
                            class="btn btn-sm btn-primary">Edit</a>
                        <form action="<?php echo e(route('manageCourse.courses.delete', $course->courseId)); ?>" method="post"
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
    <a href="<?php echo e(route('manageCourse.courses.create')); ?>" class="btn btn-primary">Add</a>
</div>

<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layouts.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH D:\AD\resources\views/trainees/indexCourse.blade.php ENDPATH**/ ?>