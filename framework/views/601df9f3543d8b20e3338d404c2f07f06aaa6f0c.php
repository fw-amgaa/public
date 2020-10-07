<?php $__env->startSection('styles'); ?>
    <meta property="og:title"         content="<?php echo e($blog->title); ?>" />
    <meta property="og:description"   content="<?php echo e($blog->excerpt); ?>" />
    <meta property="og:image"         content="<?php echo e(Voyager::image($blog->image)); ?>" />
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <!-- Start Main content -->
    <main class="bg-grey pb-30">
        <div class="container single-content">
            <div class="entry-header entry-header-style-1 mb-50 pt-50">
                <h1 class="entry-title mb-50 font-weight-900">
                    <?php echo e($blog->title); ?>

                </h1>
                <div class="row">
                    <div class="col-md-6">
                        <div class="entry-meta align-items-center meta-2 font-small color-muted">
                            <p class="mb-5">
                                <a class="author-avatar" href="#"><img class="img-circle" src=" <?php echo e(Voyager::image($blog->avatar)); ?> " alt=""></a>
                                By <a class="author-name"><span class="author-name font-weight-bold" id="author-canvas-toggle"><?php echo e($blog->name); ?></span></a>
                            </p>
                            <span class="mr-10"><?php echo e($blog->created_at); ?> </span>
                            <span class="has-dot"> 8 <?php echo e(__('customlang.mins')); ?></span>
                        </div>
                    </div>
                    <div class="col-md-6 text-right d-none d-md-inline">
                        <ul class="header-social-network d-inline-block list-inline mr-15">
                            <li class="list-inline-item text-muted"><span><?php echo e(__('customlang.share')); ?>: </span></li>
                            <li class="list-inline-item"><a class="social-icon fb text-xs-center" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://writers.mn/blogs/<?php echo e($blog->slug); ?>"><i class="elegant-icon social_facebook"></i></a></li>
                            <li class="list-inline-item"><a class="social-icon tw text-xs-center" target="_blank" href="http://twitter.com/share?text=<?php echo e($blog->title); ?>&url=https://writers.mn/blogs/<?php echo e($blog->slug); ?>"><i class="elegant-icon social_twitter "></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--end single header-->
            <figure class="image mb-30 m-auto text-center border-radius-10">
                <img class="border-radius-10" src="<?php echo e(Voyager::image($blog->image)); ?> " alt="post-title" />
            </figure>
            <!--figure-->
            <article class="entry-wraper mb-50" style="max-width: 640px">
                <div class="excerpt mb-30">
                    <p><?php echo e($blog->excerpt); ?> </p>
                </div>
                <div class="entry-main-content dropcap wow fadeIn animated">
                    <?php echo $blog->body; ?>

                </div>
                <div class="entry-bottom mt-50 mb-30 wow fadeIn animated">
                    <div class="tags">
                        <span><?php echo e(__('customlang.category')); ?>: </span>
                        <a href="/blogs/<?php echo e($blog->sluger); ?>" rel="tag"><?php echo e($blog->sluger); ?></a>
                    </div>
                </div>
                <div class="single-social-share clearfix wow fadeIn animated">
                    <ul class="header-social-network d-inline-block list-inline float-md-right mt-md-0 mt-4">
                        <li class="list-inline-item text-muted"><span>Share this: </span></li>
                        <li class="list-inline-item"><a class="social-icon fb text-xs-center" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://writers.mn/blogs/<?php echo e($blog->slug); ?>"><i class="elegant-icon social_facebook"></i></a></li>
                        <li class="list-inline-item"><a class="social-icon tw text-xs-center" target="_blank" href="http://twitter.com/share?text=<?php echo e($blog->title); ?>&url=https://writers.mn/blogs/<?php echo e($blog->slug); ?>"><i class="elegant-icon social_twitter "></i></a></li>
                    </ul>
                </div>
                <!--author box-->
                <div class="author-bio p-30 mt-50 border-radius-10 bg-white wow fadeIn animated">
                    <div class="author-image mb-30">
                        <a href="author.html"><img src="<?php echo e(Voyager::image($blog->avatar)); ?>" alt="" class="avatar"></a>
                    </div>
                    <div class="author-info">
                        <h4 class="font-weight-bold mb-20"><span class="vcard author" id="author-canvas-toggle"><span class="fn"><a href="" title="Posted by <?php echo e($blog->name); ?>" rel="author"><?php echo e($blog->name); ?></a></span></span>
                        </h4>
                        <h5 class="text-muted">About author</h5>
                        <div class="author-description text-muted"> <?php echo e($blog->author_desc); ?> </div>
                        <!-- <a href="" class="author-bio-link mb-md-0 mb-3">View all posts</a> -->
                        <div class="author-social">
                            <ul class="author-social-icons">
                                <li class="author-social-link-facebook"><a href="<?php echo e($blog->facebook); ?>" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                                <li class="author-social-link-twitter"><a href="<?php echo e($blog->instagram); ?>" target="_blank"><i class="elegant-icon social_instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--related posts-->
            </article>
            <div class="related-posts">
                    <div class="post-module-3">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">Related posts</h5>
                        </div>
                        <div class="loop-list loop-list-style-1" style="display: flex">
                            <?php $__currentLoopData = $also; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <article class="col-lg-4 col-md-6 mb-30 wow fadeInUp animated" data-wow-delay="0.2s">
                                <div class="post-card-1 border-radius-10 hover-up">
                                    <div class="post-thumb thumb-overlay img-hover-slide position-relative" style="background-image: url(<?php echo e(Voyager::image($blog->image)); ?>)">
                                        <a class="img-link" href="/blogs/<?php echo e($blog->slug); ?>"></a>
                                        <span class="top-right-icon <?php echo e($blog->color_class); ?>"><i class="elegant-icon <?php echo e($blog->icon_class); ?>"></i></span>
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
        </div>
        <!--container-->
    </main>
    <!-- End Main content -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('components.ui', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/writers/resources/views/blog-single.blade.php ENDPATH**/ ?>