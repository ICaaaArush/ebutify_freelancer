
<?php $__env->startSection('content'); ?>
    <main>
        <section class="eb-blog-page-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="eb-about-bg"></div>
                        <div class="blog_2_img text-center">
                            <img src="<?php echo e(asset('storage/'.$data->image)); ?>" width="100%">
                        </div>
                    </div>
                    <div class="col-12 ">
                        <div id="main-content-entry" class="blog_2-main-contant pb-5">
                            <div class="entry_profile">
                                <span class="article_author_link">
                                    <i class="fas fa-user-circle"></i>
                                    <a href="/author">
                                        <span><?php echo e($author->name); ?></span>
                                    </a>
                                    <span class="divider">|</span>
                                    <time>Update: <?php echo e(date('F j,Y', strtotime($data->updated_at))); ?></time>
                                </span>
                            </div>
                            <h1><?php echo e($data->heading); ?></h1>
                            <?php echo $data->body; ?>

                        </div>
                        <div class="blog_social_media">
                            <h3>Share this</h3>
                            <ul>
                                
                                <li><a href="#" 
                                    onclick="
                                      window.open(
                                        'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href), 
                                        'facebook-share-dialog', 
                                        'width=626,height=436'); 
                                      return false;"><i class="fab fa-facebook-f" style="color: #3b5998;"></i></a></li>
                                
                                <li><a class="share-linkedin" href="#" onclick="
                                    window.open('http://www.linkedin.com/shareArticle?mini=true&url=https://127.0.0.1/<?php echo e(Request::path()); ?>&summary=some%20summary%20if%20you%20want&source=stackoverflow.com');
                                    return false;"><i class="fab fa-linkedin-in" style="color: #0e76a8;"></i></a></li>
                                
                            </ul>
                        </div>
                        
                        
                        
                        <div class="row">
                            <div col-12>
                                <div class="blog_2_subscribe_from">
                                    <div class="blog_2_subscribe_from_content text-center">
                                        <h3>Subscribe to our Newsletter</h3>
                                        <p>Don’t miss any updates of our new templates and extensions and all the astonishing offers we bring for you.</p>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Email Address" aria-label="email"
                                                aria-describedby="basic-addon2">
                                            <span class="btn blog_subscribe_btn" id="basic-addon2">Subscribe</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        
                    </div>
                </div>
            </div>
        </section>
        <section class="aside_social_media">
            <div class="sticky_social_media_ribon">
                <span class="cols-item">Please<br>Share</span>
                <ul>
                    
                    <li><a href="" target="blank"><i class="fab fa-facebook-f" style="color: #3b5998;"></i></a></li>
                    <li><a href="" target="blank"><i class="fab fa-twitter" style="color: #05acee;"></i></a></li>
                    <li><a href="" target="blank"><i class="fab fa-linkedin-in" style="color: #0e76a8;"></i></a></li>
                    <li><a href="" target="blank"><i class="fab fa-whatsapp" style="color: #25d366;"></i></a></li>
                    <li><a href="" target="blank"><i class="fab fa-get-pocket" style="color: #ee4056;"></i></a></li>
                    <li><a href=""><i class="fab fa-reddit-alien" style="color: #ff5700;"></i></a></li>
                    <li><a href="" target="blank"><img src="images/instapaper.svg"></a></li>
                    <li class="exp-item"><a href="" target="blank"><i class="fas fa-paper-plane" style="color: #08c;"></i></a></li>
                    <li class="exp-item"><a href="" target="blank"><i class="fab fa-skype" style="color: #00aff0;"></i></a></li>
                    <li class="exp-item"><a href="" target="blank"><i class="fab fa-pinterest-p" style="color: #c8232c;"></i></a></li>
                    <li class="exp-item"><a href="" target="blank"><i class="fas fa-envelope" style="color: #08c;"></i></a></li>
                    <li class="exp-item do-collops"><a href="javascript::void()" ><i class="fas fa-arrow-up" style="color: #0d4fe9;"></i></a></li>
                    <li class="cols-item do-expnds"><a href="javascript::void()" ><i class="fas fa-arrow-down" style="color: #0d4fe9;"></i></a></li>
                </ul>
            </div>
        </section>
    </main>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\ebutify\ebutify_freelancer\resources\views/front/blog2.blade.php ENDPATH**/ ?>