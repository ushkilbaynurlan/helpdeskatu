<form class="pl-3 pr-3 mt-2 animated" method="post" action="<?php echo e(route('admin.lang.store')); ?>">
    <?php echo csrf_field(); ?>
    <div class="form-group p-2">
        <label for="code" class="form-label"><?php echo e(__('Language Code')); ?></label>
        <input class="form-control" type="text" id="code" name="code" required="" placeholder="<?php echo e(__('Language Code')); ?>">
    </div>
    <div class="modal-footer">        
        <input type="button" value="<?php echo e(__('Cancel')); ?>" class="btn btn-secondary btn-light" data-bs-dismiss="modal">
        <input type="submit" value="<?php echo e(__('Create')); ?>" class="btn btn-primary">
    </div>

</form>
<?php /**PATH /Users/nurlan/HELPDESK/main_file/resources/views/admin/lang/create.blade.php ENDPATH**/ ?>