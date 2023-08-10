<?php echo $__env->make('Layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- sidebar -->
<?php echo $__env->make('Layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- navbar -->
<?php echo $__env->make('Layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Assign Trainer to Topic</h5>
                    <p class="card-category"> assign trainer to a topic.</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <?php if(session('message')): ?>
                            <p><?php echo e(session('message')); ?></p>
                        <?php endif; ?>
                        <?php if(session('success')): ?>
                            <div class="alert alert-danger">
                                <?php echo e(session('success')); ?>

                            </div>
                        <?php endif; ?>
                        <form method="post" action="<?php echo e(route('Assign.assignTrainerToTopic')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>Select a Topic:</label>
                                        <select class="form-control" name="topicId" id="topicId">
                                            <?php $__currentLoopData = $topics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $topic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($topic->topicId); ?>"><?php echo e($topic->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 pl-1">
                                    <div class="form-group">
                                        <label>Select a Trainer:</label>
                                        <select class="form-control" name="trainerId" id="trainerId">
                                            <?php $__currentLoopData = $trainers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trainer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($trainer->trainerId); ?>">
                                                    <?php echo e($trainer->fname); ?><?php echo e($trainer->lname); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="update ml-auto mr-auto">
                                    <button type="submit" class="btn btn-primary btn-round">Assign Trainer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



<!-- footer -->
<?php echo $__env->make('Layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- js -->
<?php echo $__env->make('Layouts.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\Users\MINH\OneDrive\Máy tính\Application_Development-G5-CM\resources\views/Assign/assign_trainer_to_topic.blade.php ENDPATH**/ ?>