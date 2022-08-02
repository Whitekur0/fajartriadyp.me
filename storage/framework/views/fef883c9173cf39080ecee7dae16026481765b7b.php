<!doctype html>
<html lang="en">

<head>
    <?php echo $__env->make('layouts/head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>
    <?php echo $__env->make('layouts/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <main role="main " class="container">
        

        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <?php echo $__env->make('layouts/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
</body>
</html><?php /**PATH C:\xampp\htdocs\ProjekAkhir\resources\views/base.blade.php ENDPATH**/ ?>