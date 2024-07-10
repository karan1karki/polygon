<?php $__env->startSection('site-title'); ?>
    <?php echo e(get_static_option('team_page_' . $user_select_lang_slug . '_name')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-title'); ?>
    <?php echo e(get_static_option('team_page_' . $user_select_lang_slug . '_name')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-meta-data'); ?>
    <meta name="description" content="<?php echo e(get_static_option('team_page_' . $user_select_lang_slug . '_meta_description')); ?>">
    <meta name="tags" content="<?php echo e(get_static_option('team_page_' . $user_select_lang_slug . '_meta_tags')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="team-member-area gray-bg team-page padding-120">
        <div class="container">
            <div class="row">
                <?php $__currentLoopData = $all_team_members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-3  col-sm-6 padding-bottom-60">
                        <div class="team-section">
                            <div class="team-img-cont">
                                <button type="button" data-toggle="modal"
                                    data-target="#exampleModalCenter-<?php echo e($data->image); ?>">
                                    <?php echo render_image_markup_by_attachment_id($data->image); ?>

                                </button>
                                <div class="social-link">
                                    <ul>
                                        <?php if(!empty($data->icon_one) && !empty($data->icon_one_url)): ?>
                                            <li><a href="<?php echo e($data->icon_one_url); ?>"><i
                                                        class="<?php echo e($data->icon_one); ?>"></i></a></li>
                                        <?php endif; ?>
                                        <?php if(!empty($data->icon_two) && !empty($data->icon_two_url)): ?>
                                            <li><a href="<?php echo e($data->icon_two_url); ?>"><i
                                                        class="<?php echo e($data->icon_two); ?>"></i></a></li>
                                        <?php endif; ?>
                                        <?php if(!empty($data->icon_three) && !empty($data->icon_three_url)): ?>
                                            <li><a href="<?php echo e($data->icon_three_url); ?>"><i
                                                        class="<?php echo e($data->icon_three); ?>"></i></a></li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-text">
                                <h4 class="title"><?php echo e($data->name); ?></h4>
                                <span><?php echo e($data->designation); ?></span>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter-<?php echo e($data->image); ?>" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <?php echo render_image_markup_by_attachment_id($data->image); ?>

                                </div>
                                <div class="modal-body">
                                    <div class="modal-data">
                                        <h4 id="exampleModalLongTitle"><?php echo e($data->name); ?></h4>
                                        <h5><?php echo e($data->designation); ?></h5>
                                        <h6><?php echo $data->description; ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-12">
                    <div class="pagination-wrapper">
                        <?php echo e($all_team_members->links()); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <p></p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.frontend-page-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\polygoneserver\@core\resources\views/frontend/pages/team-page.blade.php ENDPATH**/ ?>