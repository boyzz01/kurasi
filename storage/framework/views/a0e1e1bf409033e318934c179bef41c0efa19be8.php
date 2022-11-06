<?php if($message = Session::get('success')): ?>
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong><?php echo e($message); ?></strong>
    </div>
<?php elseif($message = Session::get('error')): ?>
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong><?php echo e($message); ?></strong>
    </div>
<?php elseif($message = Session::get('message')): ?>
    <div class="alert alert-info alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong><?php echo e($message); ?></strong>
    </div>
<?php endif; ?>



<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(2000, 0).slideUp(1000, function() {
            $(this).remove();
        });
    }, 1000);
</script>
<?php /**PATH C:\xampp\htdocs\kurasi\resources\views/alert.blade.php ENDPATH**/ ?>