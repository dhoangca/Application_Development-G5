<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="content">
    <!-- Your create trainee form here -->
    <form action="<?php echo e(route('managetrainee.trainees.store')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <?php if($errors->has('name')): ?>
            <p><?php echo e($errors->first('name')); ?></p>
        <?php endif; ?>

        <div class="form-group">
            <label for="age">Age:</label>
            <input type="number" name="age" id="age" class="form-control" required>
        </div>
        <?php if($errors->has('age')): ?>
            <p><?php echo e($errors->first('age')); ?></p>
        <?php endif; ?>

        <div class="form-group">
            <label for="date_of_birth">Date of Birth:</label>
            <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" required>
        </div>
        <?php if($errors->has('date_of_birth')): ?>
            <p><?php echo e($errors->first('adate_of_birthge')); ?></p>
        <?php endif; ?>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <?php if($errors->has('email')): ?>
            <p><?php echo e($errors->first('email')); ?></p>
        <?php endif; ?>

        <div class="form-group">
            <label for="telephone">Telephone:</label>
            <input type="tel" name="telephone" id="telephone" class="form-control" required>
        </div>
        <?php if($errors->has('telephone')): ?>
            <p><?php echo e($errors->first('telephone')); ?></p>
        <?php endif; ?>

        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" name="address" id="address" class="form-control" required>
        </div>
        <?php if($errors->has('address')): ?>
            <p><?php echo e($errors->first('address')); ?></p>
        <?php endif; ?>

        <div class="form-group">
            <label for="education">Education:</label>
            <input type="text" name="education" id="education" class="form-control" required>
        </div>
        <?php if($errors->has('education')): ?>
            <p><?php echo e($errors->first('education')); ?></p>
        <?php endif; ?>

        <div class="form-group">
            <label for="toeic_score">TOEIC Score:</label>
            <input type="text" name="toeic_score" id="toeic_score" class="form-control" required>
        </div>
        <?php if($errors->has('toeic_score')): ?>
            <p><?php echo e($errors->first('toeic_score')); ?></p>
        <?php endif; ?>

        <div class="form-group">
            <label for="majors">Majors:</label>
            <input type="text" name="majors" id="majors" class="form-control" required>
        </div>
        <?php if($errors->has('majors')): ?>
            <p><?php echo e($errors->first('majors')); ?></p>
        <?php endif; ?>

        <button type="submit" class="btn btn-primary">Create Trainee</button>
    </form>
</div>

<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layouts.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\Users\MINH\OneDrive\Máy tính\Application_Development-G5-CM\resources\views/trainees/create.blade.php ENDPATH**/ ?>