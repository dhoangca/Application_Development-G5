




<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('Layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                    <h4 class="card-title" style="margin-right: 10px;">Topic Management</h4>
                    <div class="search-bar"
                        style="display: flex; align-items: center; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
                        <i class="fas fa-search search-icon" style="margin-right: 5px;"></i>
                        <input type="text" class="search-input"
                            style="border: none; outline: none; background: transparent;" placeholder="Search...">
                    </div>
                </div>
                <hr>
                <?php if(session('status')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('status')); ?>

                    </div>
                <?php endif; ?>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="text-primary">
                                <th class="text-center">Name</th>
                                <th class="text-center">description</th>
                                <th class="text-center">courseId</th>
                                <th class="text-center">ACTION</th>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $topics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $topic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="text-center"><?php echo e($topic->name); ?></td>
                                        <td class="text-center"><?php echo e($topic->description); ?></td>
                                        <td class="text-center"><?php echo e($topic->courseId); ?></td>
                                        <td class="text-center">
                                            <a href="<?php echo e(route('MngTopic.topics.edit', $topic->topicId)); ?>"
                                                class="btn btn-sm btn-primary">Edit</a>
                                            <form action="<?php echo e(route('MngTopic.topics.destroy', $topic->topicId)); ?>"
                                                method="post" style="display: inline-block">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('delete'); ?>
                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <!-- Pagination -->
                        
                        <div class="create-button">
                            <a href="<?php echo e(route('MngTopic.topics.create')); ?>" class="btn btn-primary">Add</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layouts.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\Users\MINH\OneDrive\Máy tính\Application_Development-G5-CM\resources\views/trainees/indexTopic.blade.php ENDPATH**/ ?>