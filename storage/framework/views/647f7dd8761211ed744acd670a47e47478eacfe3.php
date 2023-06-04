<?php $__env->startSection('page-title'); ?>
    <?php echo e(__('Manage Languages')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>"><?php echo e(__('Home')); ?></a></li>
    <li class="breadcrumb-item"><?php echo e(__('Languages')); ?></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('multiple-action-button'); ?>
    <div class="btn btn-sm btn-primary btn-icon m-1 float-end">
        <a href="#" class="" data-bs-toggle="tooltip" data-bs-placement="top"
            title="<?php echo e(__('Create Language')); ?>" data-ajax-popup="true" data-size="md"
            data-title="<?php echo e(__('Create Language')); ?>" data-url="<?php echo e(route('admin.lang.create')); ?>">
            <i class="ti ti-plus text-white"></i>
        </a>
    </div>

    <?php if($lang != (Utility::getSettingValByName('DEFAULT_LANG') ?? 'en')): ?>    
        <div class="action-btn btn btn-sm btn-danger btn-icon m-1 float-end ms-2">
            <form method="POST" action="<?php echo e(route('admin.lang.destroy', $lang)); ?>" id="delete-form-<?php echo e($lang); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="mx-3 btn btn-sm d-inline-flex align-items-center show_confirm"
                    data-toggle="tooltip" title='Delete'>
                    <span class="text-white"> <i class="ti ti-trash"></i></span>
                </button>
            </form>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <?php $__currentLoopData = $user->languages(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $code): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e(route('admin.lang.index', $code)); ?>"
                                    class="nav-link text-sm my-1 font-weight-bold <?php if($code == $lang): ?> active <?php endif; ?>">
                                    <i class="d-lg-none d-block mr-1"></i>
                                    <span class="d-none d-lg-block"><?php echo e(Str::upper($code)); ?></span>
                                </a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="card  p-3">
                    <div class="card-body">
                        <ul class="nav nav-pills nav-fill my-4 lang-tab">
                            <li class="nav-item">
                                <a data-href="#labels" class="nav-link active"><?php echo e(__('Labels')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a data-toggle="tab" data-href="#messages" class="nav-link"><?php echo e(__('Messages')); ?> </a>
                            </li>
                        </ul>
                        <form method="post" action="<?php echo e(route('admin.lang.store.data', [$lang])); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="tab-content">
                                <div class="tab-pane active" id="labels">
                                    <div class="row">
                                        <?php $__currentLoopData = $arrLabel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $label => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label class="form-label text-dark"><?php echo e($label); ?></label>
                                                    <input type="text" class="form-control"
                                                        name="label[<?php echo e($label); ?>]" value="<?php echo e($value); ?>">
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                                <div class="tab-pane" id="messages">
                                    <?php $__currentLoopData = $arrMessage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fileName => $fileValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h6><?php echo e(ucfirst($fileName)); ?></h6>
                                            </div>
                                            <?php $__currentLoopData = $fileValue; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $label => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if(is_array($value)): ?>
                                                    <?php $__currentLoopData = $value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $label2 => $value2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if(is_array($value2)): ?>
                                                            <?php $__currentLoopData = $value2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $label3 => $value3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php if(is_array($value3)): ?>
                                                                    <?php $__currentLoopData = $value3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $label4 => $value4): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <?php if(is_array($value4)): ?>
                                                                            <?php $__currentLoopData = $value4; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $label5 => $value5): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                <div class="col-lg-6">
                                                                                    <div class="form-group mb-3">
                                                                                        <label
                                                                                            class="form-label text-dark"><?php echo e($fileName); ?>.<?php echo e($label); ?>.<?php echo e($label2); ?>.<?php echo e($label3); ?>.<?php echo e($label4); ?>.<?php echo e($label5); ?></label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            name="message[<?php echo e($fileName); ?>][<?php echo e($label); ?>][<?php echo e($label2); ?>][<?php echo e($label3); ?>][<?php echo e($label4); ?>][<?php echo e($label5); ?>]"
                                                                                            value="<?php echo e($value5); ?>">
                                                                                    </div>
                                                                                </div>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        <?php else: ?>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group mb-3">
                                                                                    <label
                                                                                        class="form-label text-dark"><?php echo e($fileName); ?>.<?php echo e($label); ?>.<?php echo e($label2); ?>.<?php echo e($label3); ?>.<?php echo e($label4); ?></label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        name="message[<?php echo e($fileName); ?>][<?php echo e($label); ?>][<?php echo e($label2); ?>][<?php echo e($label3); ?>][<?php echo e($label4); ?>]"
                                                                                        value="<?php echo e($value4); ?>">
                                                                                </div>
                                                                            </div>
                                                                        <?php endif; ?>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                <?php else: ?>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group mb-3">
                                                                            <label
                                                                                class="form-label text-dark"><?php echo e($fileName); ?>.<?php echo e($label); ?>.<?php echo e($label2); ?>.<?php echo e($label3); ?></label>
                                                                            <input type="text" class="form-control"
                                                                                name="message[<?php echo e($fileName); ?>][<?php echo e($label); ?>][<?php echo e($label2); ?>][<?php echo e($label3); ?>]"
                                                                                value="<?php echo e($value3); ?>">
                                                                        </div>
                                                                    </div>
                                                                <?php endif; ?>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <?php else: ?>
                                                            <div class="col-lg-6">
                                                                <div class="form-group mb-3">
                                                                    <label
                                                                        class="form-label text-dark"><?php echo e($fileName); ?>.<?php echo e($label); ?>.<?php echo e($label2); ?></label>
                                                                    <input type="text" class="form-control"
                                                                        name="message[<?php echo e($fileName); ?>][<?php echo e($label); ?>][<?php echo e($label2); ?>]"
                                                                        value="<?php echo e($value2); ?>">
                                                                </div>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php else: ?>
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-3">
                                                            <label
                                                                class="form-label text-dark"><?php echo e($fileName); ?>.<?php echo e($label); ?></label>
                                                            <input type="text" class="form-control"
                                                                name="message[<?php echo e($fileName); ?>][<?php echo e($label); ?>]"
                                                                value="<?php echo e($value); ?>">
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                            <div class="text-end">
                                <input type="submit" value="<?php echo e(__('Save')); ?>" class="btn btn-primary btn-block btn-submit ">
                            </div>
                        </form>
                    </div>
                </div> <!-- end card-->
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        $(document).on('click', '.lang-tab .nav-link', function() {
            $('.lang-tab .nav-link').removeClass('active');
            $('.tab-pane').removeClass('active');
            $(this).addClass('active');
            var id = $('.lang-tab .nav-link.active').attr('data-href');
            $(id).addClass('active');
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/nurlan/HELPDESK/main_file/resources/views/admin/lang/index.blade.php ENDPATH**/ ?>