<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="content">
    <!-- Your edit trainee form here -->
    <form action="<?php echo e(route('managetrainee.trainees.update', $trainee->traineeId)); ?>" method="post">
        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control" value="<?php echo e($trainee->name); ?>" required>
        </div>

        <div class="form-group">
            <label for="age">Age:</label>
            <input type="number" name="age" id="age" class="form-control" value="<?php echo e($trainee->age); ?>" required>
        </div>

        <div class="form-group">
            <label for="date_of_birth">Date of Birth:</label>
            <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" value="<?php echo e($trainee->date_of_birth); ?>" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" value="<?php echo e($trainee->email); ?>" required>
        </div>

        <div class="form-group">
            <label for="telephone">Telephone:</label>
            <input type="tel" name="telephone" id="telephone" class="form-control" value="<?php echo e($trainee->telephone); ?>" required>
        </div>

        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" name="address" id="address" class="form-control" value="<?php echo e($trainee->address); ?>" required>
        </div>

        <div class="form-group">
            <label for="education">Education:</label>
            <input type="text" name="education" id="education" class="form-control" value="<?php echo e($trainee->education); ?>" required>
        </div>

        <div class="form-group">
            <label for="toeic_score">TOEIC Score:</label>
            <input type="text" name="toeic_score" id="toeic_score" class="form-control" value="<?php echo e($trainee->toeic_score); ?>" required>
        </div>

        <div class="form-group">
            <label for="majors">Majors:</label>
            <input type="text" name="majors" id="majors" class="form-control" value="<?php echo e($trainee->majors); ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Trainee</button>
    </form>
</div>

<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layouts.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\Users\MINH\OneDrive\Máy tính\Application_Development-G5-CM\resources\views/trainees/edit.blade.php ENDPATH**/ ?>