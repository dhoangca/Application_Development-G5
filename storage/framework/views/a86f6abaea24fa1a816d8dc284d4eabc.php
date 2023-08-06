<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="content">
    <!-- Your create trainee form here -->
    <form action="<?php echo e(route('managetrainer.trainers.store')); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="fname">First Name:</label>
            <input type="text" name="fname" id="fname" class="form-control" required>
        </div>
        <?php if($errors->has('fname')): ?>
            <p><?php echo e($errors->first('fname')); ?></p>
        <?php endif; ?>
        <div class="form-group">
            <label for="lname">Last Name:</label>
            <input type="text" name="lname" id="lname" class="form-control" required>
        </div>
        <?php if($errors->has('lname')): ?>
            <p><?php echo e($errors->first('lname')); ?></p>
        <?php endif; ?>
        <div class="form-group">
            <label for="age">Age:</label>
            <input type="number" name="age" id="age" class="form-control" required>
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
            <input type="tel" name="telephone" id="telephone" class="form-control" required>
        </div>
        <?php if($errors->has('telephone')): ?>
            <p><?php echo e($errors->first('telephone')); ?></p>
        <?php endif; ?>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <?php if($errors->has('email')): ?>
            <p><?php echo e($errors->first('email')); ?></p>
        <?php endif; ?>
        <div class="form-group">
            <label for="date_of_birth">Date of Birth:</label>
            <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" required>
        </div>
        <?php if($errors->has('date_of_birth')): ?>
            <p><?php echo e($errors->first('date_of_birth')); ?></p>
        <?php endif; ?>
        <div class="form-group">
            <label for="type">Type:</label>
            <input type="text" name="type" id="type" class="form-control" required>
        </div>
        <?php if($errors->has('type')): ?>
            <p><?php echo e($errors->first('type')); ?></p>
        <?php endif; ?>
        <div class="form-group">
            <label for="working_place">Working Place:</label>
            <input type="text" name="working_place" id="working_place" class="form-control" required>
        </div>
        <?php if($errors->has('working_place')): ?>
            <p><?php echo e($errors->first('working_place')); ?></p>
        <?php endif; ?>
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" name="address" id="address" class="form-control" required>
        </div>
        <?php if($errors->has('address')): ?>
            <p><?php echo e($errors->first('address')); ?></p>
        <?php endif; ?>
        <div class="form-group">
            <label for="about">About:</label>
            <input type="text" name="about" id="about" class="form-control" required>
        </div>
        <?php if($errors->has('about')): ?>
            <p><?php echo e($errors->first('about')); ?></p>
        <?php endif; ?>

        <button type="submit" class="btn btn-primary">Create Trainer</button>
    </form>

</div>

<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layouts.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\Users\MINH\OneDrive\Máy tính\Application_Development-G5-CM\resources\views/trainees/createTrainer.blade.php ENDPATH**/ ?>