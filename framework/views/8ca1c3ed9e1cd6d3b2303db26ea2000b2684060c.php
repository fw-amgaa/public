<?php $__env->startSection('content'); ?>

<main>
        <!--archive header-->
        <div class="archive-header pt-50 text-center">
            <div class="container">
                <h2 class="font-weight-900">FW Academy</h2>
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow"><?php echo e(__('customlang.home')); ?></a>
                    <span></span> FW Academy
                </div>
                <div class="bt-1 border-color-1 mt-30 mb-50"></div>
            </div>
        </div>
        <div class="container">
            <div class="loop-list loop-list-style-1">
                <div class="row">
                  <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <article class="col-md-6 mb-40 wow fadeInUp  animated">
                        <div class="post-card-1 border-radius-10 hover-up">
                            <div class="post-thumb thumb-overlay img-hover-slide position-relative" style="background-image: url(<?php echo e(Voyager::image($blog->image)); ?>)">
                                <a class="img-link" href="/blogs/<?php echo e($blog->slug); ?>"></a>
                                <ul class="social-share">
                                    <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                    <li><a class="fb" href="https://www.facebook.com/sharer/sharer.php?u=https://writers.mn/blogs/<?php echo e($blog->slug); ?>" title="Share on Facebook" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                                    <li><a class="tw" href="http://twitter.com/share?text=<?php echo e($blog->title); ?>&url=https://writers.mn/blogs/<?php echo e($blog->slug); ?>" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                </ul>
                            </div>
                            <div class="post-content p-30">
                                <div class="entry-meta meta-0 font-small mb-10">
                                    <a href="/academy"><span class="post-cat text-info">FW Academy</span></a>
                                    <a href="/blogs/books"><span class="post-cat text-success"><?php echo e(__('customlang.book')); ?> (For example)</span></a>
                                </div>
                                <div class="d-flex post-card-content">
                                    <h5 class="post-title mb-20 font-weight-900">
                                        <a href="/blogs/<?php echo e($blog->slug); ?>"><?php echo e($blog->title); ?></a>
                                    </h5>
                                    <div class="post-excerpt mb-25 font-small text-muted">
                                        <p><?php echo e($blog->excerpt); ?></p>
                                    </div>
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
<?php echo $__env->make('components.ui', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/writers/resources/views/academy.blade.php ENDPATH**/ ?>