<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $__env->make('client.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div>
                <!-- Begin Page Content -->
                    <?php echo $__env->yieldContent('content'); ?>            
                <!-- /.container-fluid -->
                <!-- Footer -->
                    <?php echo $__env->make('client.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!-- End of Footer -->
            </div>
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
</body>
<?php echo $__env->make('client.layout.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</html><?php /**PATH D:\New folder\htdocs\Semi-project-PBIT17102\SMProjects\resources\views/client/layout/master.blade.php ENDPATH**/ ?>