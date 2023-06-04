   <?php
       $logo = Utility::get_superadmin_logo();
       $emailTemplate     = App\Models\EmailTemplate::first();
       $logos = \App\Models\Utility::get_file('uploads/logo/');
   ?>

<?php if(isset($settings['cust_theme_bg']) && $settings['cust_theme_bg'] == 'on' || $settings['SITE_RTL'] =='on'): ?>
    <nav class="dash-sidebar light-sidebar transprent-bg">
<?php else: ?>
    <nav class="dash-sidebar light-sidebar">
<?php endif; ?>



    <div class="navbar-wrapper">
        <div class="m-header main-logo">
            <a href="<?php echo e(route('home')); ?>" class="b-brand">
                <!-- ========   change your logo hear   ============ -->
                
                <img width="10px" height="10px" src="<?php echo e(asset('assets/images/logo.png')); ?>"
                alt="<?php echo e(config( '')); ?>" class="logo logo-lg">
            </a>
        </div>
        <div class="navbar-content">
            <ul class="dash-navbar">
                <li class="dash-item <?php echo e(request()->is('*dashboard*') ? ' active' : ''); ?>">
                    <a href="<?php echo e(route('home')); ?>" class="dash-link "><span class="dash-micon"><i class="ti ti-home"></i></span><span class="dash-mtext"><?php echo e(__('Dashboard')); ?></span></a>
                </li>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage-users')): ?>
                    <li class="dash-item <?php echo e(request()->is('*users*') ? ' active' : ''); ?>">
                        <a href="<?php echo e(route('admin.users')); ?>" class="dash-link"><span class="dash-micon"><i class="ti ti-users"></i></span><span class="dash-mtext"><?php echo e(__('Users')); ?></span></a>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage-tickets')): ?>
                    <li class="dash-item <?php echo e(request()->is('*ticket*') ? ' active' : ''); ?>">
                        <a href="<?php echo e(route('admin.tickets.index')); ?>" class="dash-link"><span class="dash-micon"><i class="ti ti-ticket"></i></span><span class="dash-mtext"><?php echo e(__('Tickets')); ?></span></a>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage-category')): ?>
                    <li class="dash-item <?php echo e((\Request::route()->getName()=='admin.category' || \Request::route()->getName()=='admin.category.create' || \Request::route()->getName()=='admin.category.edit') ? ' active' : ''); ?>">
                        <a href="<?php echo e(route('admin.category')); ?>" class="dash-link"><span class="dash-micon"><i class="ti ti-clipboard-list"></i></span><span class="dash-mtext"><?php echo e(__('Category')); ?></span></a>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage-faq')): ?>
                    <?php if(Utility::getSettingValByName('FAQ') == 'on'): ?>
                        <li class="dash-item <?php echo e(request()->is('*faq*') ? ' active' : ''); ?>">
                            <a href="<?php echo e(route('admin.faq')); ?>" class="dash-link"><span class="dash-micon"><i class="ti ti-question-mark"></i></span><span class="dash-mtext"><?php echo e(__('FAQ')); ?></span></a>
                        </li>
                    <?php endif; ?>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage-knowledge')): ?>
                    <?php if(Utility::getSettingValByName('Knowlwdge_Base') == 'on'): ?>
                        <li class="dash-item <?php echo e(request()->is('*knowledge*') ? ' active' : ''); ?>">
                            <a href="<?php echo e(route('admin.knowledge')); ?>" class="dash-link"><span class="dash-micon"><i class="ti ti-school"></i></span><span class="dash-mtext"><?php echo e(__('Knowledge Base')); ?></span></a>
                        </li>
                    <?php endif; ?>
                <?php endif; ?>


            </ul>
        </div>
    </div>
</nav>




<?php /**PATH /Users/nurlan/HELPDESK/main_file/resources/views/admin/partials/sidebar.blade.php ENDPATH**/ ?>