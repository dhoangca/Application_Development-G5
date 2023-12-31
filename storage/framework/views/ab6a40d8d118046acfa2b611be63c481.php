<!DOCTYPE html>
<html>

<head>
    <base href="<?php echo e(asset('')); ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Training Hub</title>
    <!-- Add your CSS and JS links here, including Bootstrap CSS and JS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Add your custom CSS styles here -->
    <style>
        /* Custom CSS for Training Hub Welcome Page */

        /* Center the content vertically */
        html,
        body {
            height: 100%;
        }

        body {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f8f9fa;
            /* Set a background color (adjust as needed) */
        }

        /* Style the container */
        .container {
            max-width: 100%;
            /* Adjust the max-width to your preference */
            margin: auto;
            /* padding: 20px; */
        }

        /* Center the heading */
        h1 {
            text-align: center;
        }

        /* Adjust the image size (if needed) */
        .img-half {
            width: 100%;
            height: 100vh;
            object-fit: cover;
        }

        .col-md-6 {
            padding: 0px;
        }

        .col-md-6 .content {
            padding: 20px;
            /* Add your desired padding value here */
        }

        /* Add margin to the buttons */
        /* .btn {
            margin-right: 10px;
            margin-bottom: 10px;
        } */

        /* Add additional custom styles as needed */
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="img/btec1.jpg" alt="Training Hub Image" class="img-fluid img-half">
            </div>
            <div class="col-md-6">
                <div class="d-flex flex-column justify-content-center align-items-center h-100 content">
                    <h1 class="text-center">Welcome to</h1>
                    <h2 class="text-center">Training Hub: Efficient Training Management System</h2>
                    <div class="mt-4">
                        
                        <a href="<?php echo e(asset('Auth/login')); ?>" class="btn btn-primary btn-lg btn-block"
                            style="background-color: #4CAF50; color: white; padding: 12px 24px; font-size: 18px; border: none; border-radius: 8px; cursor: pointer; width: 100%; transition: background-color 0.3s;">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add your JS scripts here, including Bootstrap JS -->
    <script src="<?php echo e(asset('https://code.jquery.com/jquery-3.5.1.slim.min.js')); ?>"></script>
    <script src="<?php echo e(asset('https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\Users\MINH\OneDrive\Máy tính\Application_Development-G5-CM\resources\views/Contents/welcome.blade.php ENDPATH**/ ?>