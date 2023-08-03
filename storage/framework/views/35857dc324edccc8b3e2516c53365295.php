<!-- header -->
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
            <h5 class="card-title">Welcome back, Admin</h5>
            <p class="card-category">Home admin</p>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="card card-plain">
                  <div class="card-header">
                    <h5 class="card-title">Sự kiện đáng chú ý</h5>
                  </div>
                  <div class="card-body">
                    <div class="alert alert-info">
                      <span>This is a plain notification</span>
                    </div>
                    <div class="alert alert-info alert-dismissible fade show">
                      <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="nc-icon nc-simple-remove"></i>
                      </button>
                      <span>This is a notification with close button.</span>
                    </div>
                    <div class="alert alert-info alert-with-icon alert-dismissible fade show" data-notify="container">
                      <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="nc-icon nc-simple-remove"></i>
                      </button>
                      <span data-notify="icon" class="nc-icon nc-bell-55"></span>
                      <span data-notify="message">This is a notification with close button and icon.</span>
                    </div>
                    <div class="alert alert-info alert-with-icon alert-dismissible fade show" data-notify="container">
                      <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="nc-icon nc-simple-remove"></i>
                      </button>
                      <span data-notify="icon" class="nc-icon nc-chart-pie-36"></span>
                      <span data-notify="message">This is a notification with close button and icon and have many lines. You can see that the icon and the close button are always vertically aligned. This is a beautiful notification. So you don't have to worry about the style.</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card card-plain">
                  <div class="card-header">
                    <h5 class="card-title">Notification states</h5>
                  </div>
                  <div class="card-body">
                    <div class="alert alert-primary alert-dismissible fade show">
                      <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="nc-icon nc-simple-remove"></i>
                      </button>
                      <span><b> Primary - </b> This is a regular notification made with ".alert-primary"</span>
                    </div>
                    <div class="alert alert-info alert-dismissible fade show">
                      <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="nc-icon nc-simple-remove"></i>
                      </button>
                      <span><b> Info - </b> This is a regular notification made with ".alert-info"</span>
                    </div>
                    <div class="alert alert-success alert-dismissible fade show">
                      <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="nc-icon nc-simple-remove"></i>
                      </button>
                      <span><b> Success - </b> This is a regular notification made with ".alert-success"</span>
                    </div>
                    <div class="alert alert-warning alert-dismissible fade show">
                      <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="nc-icon nc-simple-remove"></i>
                      </button>
                      <span><b> Warning - </b> This is a regular notification made with ".alert-warning"</span>
                    </div>
                    <div class="alert alert-danger alert-dismissible fade show">
                      <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="nc-icon nc-simple-remove"></i>
                      </button>
                      <span><b> Danger - </b> This is a regular notification made with ".alert-danger"</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



<!-- footer -->
<?php echo $__env->make('Layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- js -->
<?php echo $__env->make('Layouts.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\AD\resources\views/Contents/indexTraining.blade.php ENDPATH**/ ?>