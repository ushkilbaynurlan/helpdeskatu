<?php $__env->startSection('page-title'); ?>
    <?php echo e(__('Edit Category')); ?> (<?php echo e($category->name); ?>) 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>"><?php echo e(__('Home')); ?></a></li>
    <li class="breadcrumb-item"><a href="<?php echo e(route('admin.category')); ?>"><?php echo e(__('Category')); ?></a></li>
    <li class="breadcrumb-item"><?php echo e(__('Edit')); ?></li>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="<?php echo e(route('admin.category.update',$category->id)); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-label"><?php echo e(__('Name')); ?></label>
                                <div class="col-sm-12 col-md-12">
                                    <input type="text" placeholder="<?php echo e(__('Name of the Category')); ?>" name="name" class="form-control <?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" value="<?php echo e($category->name); ?>" autofocus>
                                    <div class="invalid-feedback">
                                        <?php echo e($errors->first('name')); ?>

                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="exampleColorInput" class="form-label"><?php echo e(__('Color')); ?></label>
                                <div class="col-sm-12 col-md-12">
                                    <input name="color" type="color" class="form-control form-control-color <?php echo e($errors->has('color') ? ' is-invalid' : ''); ?>" value="<?php echo e($category->color); ?>">
                                    <div class="invalid-feedback">
                                        <?php echo e($errors->first('color')); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label class="form-label"></label>
                                <div class="col-sm-12 col-md-12 text-end">
                                    <button class="btn btn-primary btn-block btn-submit"><span><?php echo e(__('Update')); ?></span></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/nurlan/HELPDESK/main_file/resources/views/admin/category/edit.blade.php ENDPATH**/ ?>