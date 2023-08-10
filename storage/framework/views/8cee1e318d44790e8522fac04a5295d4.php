<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="content">
    <!-- Your create trainee form here -->
    <form action="<?php echo e(route('MNGCourseCategories.course-categories.store')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <input type="text" name="description" id="description" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Create Course Categories</button>
    </form>
</div>

<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layouts.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\Users\MINH\OneDrive\Máy tính\Application_Development-G5-CM\resources\views/trainees/createcoursecategories.blade.php ENDPATH**/ ?>