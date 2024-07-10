<?php if(session()->has('msg')): ?>
    <div class="alert alert-<?php echo e(session('type')); ?>">
        <?php echo session('msg'); ?>

    </div>
<?php endif; ?>
<?php /**PATH /home3/polygonedu/public_html/test/@core/resources/views/components/flash-msg.blade.php ENDPATH**/ ?>