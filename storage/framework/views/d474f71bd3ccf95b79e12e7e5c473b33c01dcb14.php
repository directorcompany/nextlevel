    
    
    <?php $__env->startSection('sidebar'); ?>
    <?php echo $__env->make('backend.layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('footer'); ?>
    <?php echo $__env->make('backend.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection("title"); ?>
    Админ панель
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('content'); ?>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make("backend.layouts.navbar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Disk_C\OSPanel\domains\OpenServer\domains\nextlevel\resources\views/admin/index.blade.php ENDPATH**/ ?>