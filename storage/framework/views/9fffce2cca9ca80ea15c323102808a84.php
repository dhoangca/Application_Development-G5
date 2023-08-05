<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="content">
    <!-- Your edit trainee form here -->
    <form action="<?php echo e(route('managetrainer.trainers.update', $trainer->trainerId)); ?>" method="post">
        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>
        <div class="form-group">
            <label for="fname">First Name:</label>
            <input type="text" name="fname" id="fname" class="form-control" value="<?php echo e($trainer->fname); ?>" required>
        </div>
        <?php if($errors->has('fname')): ?>
            <p><?php echo e($errors->first('fname')); ?></p>
        <?php endif; ?>
        <div class="form-group">
            <label for="lname">Last Name:</label>
            <input type="text" name="lname" id="lname" class="form-control" value="<?php echo e($trainer->lname); ?>" required>
        </div>
        <?php if($errors->has('lname')): ?>
            <p><?php echo e($errors->first('lname')); ?></p>
        <?php endif; ?>
        <div class="form-group">
            <label for="age">Age:</label>
            <input type="number" name="age" id="age" class="form-control" value="<?php echo e($trainer->age); ?>" required>
        </div>
        <?php if($errors->has('age')): ?>
            <p><?php echo e($errors->first('age')); ?></p>
        <?php endif; ?>
        <div class="mb-3">
            <label for="image">Image:</label>
            <div class="input-group">
                <label class="input-group-text" for="imageInput"><input type="file" name="image"
                        id="image"></label>
            </div>
        </div>
        <?php if($errors->has('image')): ?>
            <p><?php echo e($errors->first('image')); ?></p>
        <?php endif; ?>
        <div class="form-group">
            <label for="telephone">Telephone:</label>
            <input type="tel" name="telephone" id="telephone" class="form-control" value="<?php echo e($trainer->telephone); ?>" required>
        </div>
        <?php if($errors->has('telephone')): ?>
            <p><?php echo e($errors->first('telephone')); ?></p>
        <?php endif; ?>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" value="<?php echo e($trainer->email); ?>" required>
        </div>
        <?php if($errors->has('email')): ?>
            <p><?php echo e($errors->first('email')); ?></p>
        <?php endif; ?>
        <div class="form-group">
            <label for="date_of_birth">Date of Birth:</label>
            <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" value="<?php echo e($trainer->date_of_birth); ?>" required>
        </div>
        <?php if($errors->has('date_of_birth')): ?>
            <p><?php echo e($errors->first('date_of_birth')); ?></p>
        <?php endif; ?>
        <div class="form-group">
            <label for="type">Type:</label>
            <input type="text" name="type" id="type" class="form-control" value="<?php echo e($trainer->type); ?>" required>
        </div>
        <?php if($errors->has('type')): ?>
            <p><?php echo e($errors->first('type')); ?></p>
        <?php endif; ?>
        <div class="form-group">
            <label for="working_place">Working Place:</label>
            <input type="text" name="working_place" id="working_place" class="form-control" value="<?php echo e($trainer->working_place); ?>" required>
        </div>
        <?php if($errors->has('working_place')): ?>
            <p><?php echo e($errors->first('working_place')); ?></p>
        <?php endif; ?>
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" name="address" id="address" class="form-control" value="<?php echo e($trainer->address); ?>" required>
        </div>
        <?php if($errors->has('address')): ?>
            <p><?php echo e($errors->first('address')); ?></p>
        <?php endif; ?>
        <div class="form-group">
            <label for="about">About:</label>
            <input type="text" name="about" id="about" class="form-control" value="<?php echo e($trainer->about); ?>" required>
        </div>
        <?php if($errors->has('about')): ?>
            <p><?php echo e($errors->first('about')); ?></p>
        <?php endif; ?>

        <button type="submit" class="btn btn-primary">Update Trainer</button>
    </form>
</div>

<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layouts.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\Users\MINH\OneDrive\Máy tính\Application_Development-G5-CM\resources\views/trainees/editTrainer.blade.php ENDPATH**/ ?>