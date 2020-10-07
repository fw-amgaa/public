<?php $__env->startSection('content'); ?>
<main>
        <!--archive header-->
        <div class="archive-header pt-50 text-center">
            <div class="container">
                <h2 class="font-weight-900"><?php echo e(__('customlang.blogs')); ?></h2>
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow"><?php echo e(__('customlang.home')); ?></a>
                    <span></span> <?php echo e(__('customlang.blogs')); ?>

                </div>
                <div class="bt-1 border-color-1 mt-30 mb-50"></div>
            </div>
        </div>
        <div class="container">
            <div class="loop-grid mb-30">
                <div class="row">
                    <div class="col-lg-8 mb-30">
                        <div class="carausel-post-1 hover-up border-radius-10 overflow-hidden transition-normal position-relative wow fadeInUp animated">
                            <div class="arrow-cover"></div>
                            <div class="slide-fade">
                            <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $featuredBlog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="position-relative post-thumb">
                                    <div class="thumb-overlay img-hover-slide position-relative" style="background-image: url(<?php echo e(Voyager::image($featuredBlog->image)); ?>)">
                                        <a class="img-link" href="/blogs/<?php echo e($featuredBlog->slug); ?>"></a>
                                        <span class="top-left-icon bg-warning"><i class="elegant-icon icon_star_alt"></i></span>
                                        <div class="post-content-overlay text-white ml-30 mr-30 pb-30">
                                            <div class="entry-meta meta-0 font-small mb-20">
                                                <a href="/blogs/<?php echo e($featuredBlog->sluger); ?>"><span class="post-cat text-warning text-uppercase"><?php echo e($featuredBlog->sluger); ?></span></a>
                                            </div>
                                            <h3 class="post-title font-weight-900 mb-20">
                                                <a class="text-white" href="/blogs/<?php echo e($featuredBlog->slug); ?>"><?php echo e($featuredBlog->title); ?></a>
                                            </h3>
                                            <div class="entry-meta meta-1 font-small text-white mt-10 pr-5 pl-5">
                                                <span class="post-on"><?php echo e($featuredBlog->created_at); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                    <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <article class="col-lg-4 col-md-6 mb-30 wow fadeInUp animated" data-wow-delay="0.2s">
                        <div class="post-card-1 border-radius-10 hover-up">
                            <div class="post-thumb thumb-overlay img-hover-slide position-relative" style="background-image: url(<?php echo e(Voyager::image($blog->image)); ?>)">
                                <a class="img-link" href="/blogs/<?php echo e($blog->slug); ?>"></a>
                                <span class="top-right-icon bg-success"><i class="elegant-icon icon_camera_alt"></i></span>
                                <ul class="social-share">
                                    <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                    <li><a class="fb" href="https://www.facebook.com/sharer/sharer.php?u=https://writers.mn/blogs/<?php echo e($blog->slug); ?>" title="Share on Facebook" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                                    <li><a class="tw" href="http://twitter.com/share?text=<?php echo e($blog->title); ?>&url=https://writers.mn/blogs/<?php echo e($blog->slug); ?>" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                </ul>
                            </div>
                            <div class="post-content p-30">
                                <div class="entry-meta meta-0 font-small mb-10">
                                    <a href="/blogs/<?php echo e($blog->sluger); ?>"><span class="post-cat text-success" style="text-transform: capitalize"><?php echo e($blog->sluger); ?></span></a>
                                </div>
                                <div class="d-flex post-card-content">
                                    <h5 class="post-title mb-20 font-weight-900">
                                        <a href="/blogs/<?php echo e($blog->slug); ?>"><?php echo e($blog->title); ?></a>
                                    </h5>
                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                        <span class="post-on"><?php echo e($blog->created_at); ?></span>
                                        <span class="time-reading has-dot"><?php echo e($blog->read); ?> <?php echo e(__('customlang.mins')); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('components.ui', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/writers/resources/views/blogs.blade.php ENDPATH**/ ?>