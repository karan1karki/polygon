<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Dashboard')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="main-content-inner">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-md-3 mt-5 mb-3">
                        <div class="card">
                            <div class="dsh-box-style">
                                <a href="<?php echo e(route('admin.new.user')); ?>" class="add-new"><i class="ti-plus"></i></a>
                                <div class="icon">
                                    <i class="ti-user"></i>
                                </div>
                                <div class="content">
                                    <span class="total"><?php echo e($total_admin); ?></span>
                                    <h4 class="title"><?php echo e(__('Total Admin')); ?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-md-5 mb-3">
                        <div class="card">
                            <div class="dsh-box-style">
                                <a href="<?php echo e(route('admin.blog.new')); ?>" class="add-new"><i class="ti-plus"></i></a>
                                <div class="icon">
                                    <i class="ti-layout-width-default"></i>
                                </div>
                                <div class="content">
                                    <span class="total"><?php echo e($blog_count); ?></span>
                                    <h4 class="title"><?php echo e(__('Total Blogs')); ?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if(!empty(get_static_option('job_module_status'))): ?>
                    <div class="col-md-3 mt-md-5 mb-3">
                        <div class="card">
                            <div class="dsh-box-style">
                                <a href="<?php echo e(route('admin.jobs.new')); ?>" class="add-new"><i class="ti-plus"></i></a>
                                <div class="icon">
                                    <i class="ti-briefcase"></i>
                                </div>
                                <div class="content">
                                    <span class="total"><?php echo e($total_jobs); ?></span>
                                    <h4 class="title"><?php echo e(__('Total Jobs')); ?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if(!empty(get_static_option('events_module_status'))): ?>
                    <div class="col-md-3 mt-md-5 mb-3">
                        <div class="card">
                            <div class="dsh-box-style">
                                <a href="<?php echo e(route('admin.events.new')); ?>" class="add-new"><i class="ti-plus"></i></a>
                                <div class="icon">
                                    <i class="ti-calendar"></i>
                                </div>
                                <div class="content">
                                    <span class="total"><?php echo e($total_events); ?></span>
                                    <h4 class="title"><?php echo e(__('Total Events')); ?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="col-md-3 mt-md-5 mb-3">
                            <div class="card">
                                <div class="dsh-box-style">
                                    <a href="<?php echo e(route('admin.event.attendance.logs')); ?>" class="add-new"><i class="ti-eye"></i></a>
                                    <div class="icon">
                                        <i class="ti-ticket"></i>
                                    </div>
                                    <div class="content">
                                        <span class="total"><?php echo e($total_event_attendance); ?></span>
                                        <h4 class="title"><?php echo e(__('Total Events Attendance')); ?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if(!empty(get_static_option('donations_module_status'))): ?>
                    <div class="col-md-3 mt-md-5 mb-3">
                        <div class="card">
                            <div class="dsh-box-style">
                                <a href="<?php echo e(route('admin.donations.new')); ?>" class="add-new"><i class="ti-plus"></i></a>
                                <div class="icon">
                                    <i class="ti-face-sad"></i>
                                </div>
                                <div class="content">
                                    <span class="total"><?php echo e($total_donations); ?></span>
                                    <h4 class="title"><?php echo e(__('Total Donations Cause')); ?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="col-md-3 mt-md-5 mb-3">
                            <div class="card">
                                <div class="dsh-box-style">
                                    <a href="<?php echo e(route('admin.donations.payment.logs')); ?>" class="add-new"><i class="ti-eye"></i></a>
                                    <div class="icon">
                                        <i class="ti-money"></i>
                                    </div>
                                    <div class="content">
                                        <span class="total"><?php echo e($total_donated_log); ?></span>
                                        <h4 class="title"><?php echo e(__('Total Donated')); ?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if(!empty(get_static_option('product_module_status'))): ?>
                    <div class="col-md-3 mt-md-5 mb-3">
                        <div class="card">
                            <div class="dsh-box-style">
                                <a href="<?php echo e(route('admin.products.new')); ?>" class="add-new"><i class="ti-plus"></i></a>
                                <div class="icon">
                                    <i class="ti-package"></i>
                                </div>
                                <div class="content">
                                    <span class="total"><?php echo e($total_products); ?></span>
                                    <h4 class="title"><?php echo e(__('Total Products')); ?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-md-5 mb-3">
                        <div class="card">
                            <div class="dsh-box-style">
                                <a href="<?php echo e(route('admin.products.order.logs')); ?>" class="add-new"><i class="ti-eye"></i></a>
                                <div class="icon">
                                    <i class="ti-shopping-cart"></i>
                                </div>
                                <div class="content">
                                    <span class="total"><?php echo e($total_product_order); ?></span>
                                    <h4 class="title"><?php echo e(__('Total Products Order')); ?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <div class="col-md-3 mt-md-5 mb-3">
                        <div class="card">
                            <div class="dsh-box-style">
                                <a href="<?php echo e(route('admin.services.new')); ?>" class="add-new"><i class="ti-plus"></i></a>
                                <div class="icon">
                                    <i class="ti-blackboard"></i>
                                </div>
                                <div class="content">
                                    <span class="total"><?php echo e($total_services); ?></span>
                                    <h4 class="title"><?php echo e(__('Total Courses')); ?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-md-5 mb-3">
                        <div class="card">
                            <div class="dsh-box-style">
                                <a href="<?php echo e(route('admin.work.new')); ?>" class="add-new"><i class="ti-plus"></i></a>
                                <div class="icon">
                                    <i class="ti-write"></i>
                                </div>
                                <div class="content">
                                    <span class="total"><?php echo e($total_works); ?></span>
                                    <h4 class="title"><?php echo e(__('Total Activities')); ?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home3/polygonedu/public_html/test/@core/resources/views/backend/admin-home.blade.php ENDPATH**/ ?>