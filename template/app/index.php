<?php
require_once realpath(dirname(__FILE__) . "/../app/layouts/head-tag.php");
?>

    <section class="content">

        <section class="intro intro-h-600px">

            <div class="intro-row intro-h-2-3 mb-10x top-row">

            <?php if (isset($articles[0])) {?>

                <div class="intro-2-3-col intro-h-100 position-relative h-md-300px showcase">

                    <a href="http://localhost/cms-php/show-article/<?php echo $articles[0]['id']; ?>">

                        <div class="intro-2-3-item img-bg intro-h-100" style="background: url(http://localhost/cms-php/<?php echo $articles[0]['image']; ?>) no-repeat center; background-size: cover;"></div>

                        <div class="intro-item-caption">

                            <h3 class="caption-title">
                                <span><?php echo $articles[0]['title']; ?></span>
                            </h3>

                            <ul class="caption-info-bar">

                                <li class="">by <b class="text-yellow"><?php echo $articles[0]['username']; ?></b> <?php echo date("M d, Y", strtotime($articles[0]['created_at'])); ?></li>
                                <li><i class="fas fa-bolt text-yellow"></i>  <?php echo $articles[0]['view']; ?></li>
                                <li><i class="fas fa-comments text-yellow"></i> <?php echo $articles[0]['comments_count']; ?></li>

                            </ul>

                        </div>

                    </a>

                </div>

                <?php }?>


                <!-- <div class="intro-1-3-col intro-h-100"> -->

                <?php if (isset($articles[1])) {?>

                    <div class="intro-1-3-item
                     position-relative h-md-300px top-box top-box-a">

                        <a href="http://localhost/cms-php/show-article/<?php echo $articles[1]['id']; ?>">

                            <div class="img-bg intro-h-100" style="background: url(http://localhost/cms-php/<?php echo $articles[1]['image']; ?>) no-repeat center; background-size: cover;"></div>

                            <div class="intro-item-caption">

                                <h3 class="caption-title">
                                    <b><?php echo $articles[1]['title']; ?></b>
                                </h3>

                                <ul class="caption-info-bar">

                                    <li>feb 19 2021</li>
                                    <li><i class="fas fa-bolt text-yellow"></i> <?php echo $articles[1]['view']; ?></li>
                                    <li><i class="fas fa-comments text-yellow"></i> <?php echo $articles[1]['comments_count']; ?></li>

                                </ul>

                            </div>

                        </a>

                    </div>

                    <?php }?>



                    <?php if (isset($articles[2])) {?>
                    <div class="intro-1-3-item intro-h-50 position-relative h-md-300px top-box top-box-b">

                        <a href="http://localhost/cms-php/show-article/<?php echo $articles[2]['id']; ?>">

                            <div class="img-bg intro-h-100" style="background: url(http://localhost/cms-php/<?php echo $articles[2]['image']; ?>) no-repeat center; background-size: cover;"></div>

                            <div class="intro-item-caption">

                                <h3 class="caption-title">
                                    <b><?php echo $articles[2]['title']; ?></b>
                                </h3>

                                <ul class="caption-info-bar">

                                    <li><?php echo date("M d, Y", strtotime($articles[2]['created_at'])); ?></li>
                                    <li><i class="fas fa-bolt text-yellow"></i> <?php echo $articles[2]['view']; ?></li>
                                    <li><i class="fas fa-comments text-yellow"></i> <?php echo $articles[2]['comments_count']; ?></li></li>

                                </ul>


                            </div>

                        </a>

                    </div>

                    <?php }?>

                <!-- </div> -->

            </div>


            <?php if (isset($articles[3])) {?>

            <section class="intro-row intro-h-1-3 boxes">

                <div class="intro-1-3-col-item intro-h-100 position-relative h-md-300px">

                    <a href="http://localhost/cms-php/show-article/<?php echo $articles[3]['id']; ?>">

                        <div class="img-bg intro-h-100" style="background: url(http://localhost/cms-php/<?php echo $articles[3]['image']; ?>) no-repeat center; background-size: cover;"></div>

                        <div class="intro-item-caption">

                            <h3 class="caption-title">
                                <b><?php echo $articles[3]['title']; ?></b>
                            </h3>

                            <ul class="caption-info-bar">
                                <li><?php echo date("M d, Y", strtotime($articles[3]['created_at'])); ?></li>
                                <li><i class="fas fa-bolt text-yellow"></i> <?php echo $articles[3]['view']; ?></li>
                                <li><i class="fas fa-comments text-yellow"></i> <?php echo $articles[3]['comments_count']; ?></li>
                            </ul>

                        </div>

                    </a>

                </div>

                <?php }?>




                <?php if (isset($articles[4])) {?>
                <div class="intro-1-3-col-item intro-h-100 position-relative h-md-300px">

                    <a href="http://localhost/cms-php/show-article/<?php echo $articles[4]['id']; ?>">

                        <div class="img-bg intro-h-100" style="background: url(http://localhost/cms-php/<?php echo $articles[4]['image']; ?>) no-repeat center; background-size: cover;"></div>

                        <div class="intro-item-caption">

                            <h3 class="caption-title">
                                <b><?php echo $articles[4]['title']; ?></b>
                            </h3>

                            <ul class="caption-info-bar">
                                <li><?php echo date("M d, Y", strtotime($articles[4]['created_at'])); ?></li>
                                <li><i class="fas fa-bolt text-yellow"></i> <?php echo $articles[4]['view']; ?></li>
                                <li><i class="fas fa-comments text-yellow"></i> <?php echo $articles[4]['comments_count']; ?></li>
                            </ul>

                        </div>

                    </a>

                </div>

                <?php }?>




                <?php if (isset($articles[5])) {?>
                <div class="intro-1-3-col-item intro-h-100 position-relative h-md-300px">

                    <a href="http://localhost/cms-php/show-article/<?php echo $articles[5]['id']; ?>">

                        <div class="img-bg intro-h-100" style="background: url(http://localhost/cms-php/<?php echo $articles[5]['image']; ?>) no-repeat center; background-size: cover;"></div>
                        <div class="intro-item-caption">

                            <h3 class="caption-title">
                                <b><?php echo $articles[5]['title']; ?></b>
                            </h3>

                            <ul class="caption-info-bar">
                                <li><?php echo date("M d, Y", strtotime($articles[5]['created_at'])); ?></li>
                                <li><i class="fas fa-bolt text-yellow"></i> <?php echo $articles[5]['view']; ?></li>
                                <li><i class="fas fa-comments text-yellow"></i> <?php echo $articles[5]['comments_count']; ?></li>
                            </ul>

                        </div>

                    </a>

                </div>

                <?php }?>


            </section>

        </section><!--end of intro-->


        <div class="container no-gutter">

            <main class="main">

                <div class="main-crypto-mining-news">
                    <div class="row">

                    <h2 class="title">POPULAR POSTS</h2>

                    <div class="popular">
                    <?php foreach ($popularArticles as $article) {?>


                             <div class="box">
                               
                               <div class="main-news-w-50">
    
                                    <article>
    
                                        <img class="main-news-img" src="http://localhost/cms-php/<?php echo $article['image']; ?>" alt="">
    
                                        <h3 class="article-title">
                                            <a href="http://localhost/cms-php/show-article/<?php echo $article['id']; ?>"><?php echo $article['title']; ?></a>
                                        </h3>
    
                                        <ul class="info-bar">
    
                                            <li class=""><span class="text-muted">by</span> <a href="#" class="color-black"><b><?php echo $article['username']; ?>,</b></a>
                                                <span class="text-muted"><?php echo date("M d, Y", strtotime($article['created_at'])); ?></span></li>
                                            <li><i class="fas fa-bolt text-yellow"></i> <?php echo $article['view']; ?></li>
                                            <li><i class="fas fa-comments text-yellow"></i> <?php echo $article['comments_count']; ?></li>
    
                                        </ul>
    
                                    </article>
    
                                    </div>
                               </div>

                               
                               <?php }?>
                            </div>

                        </div>
                </div><!--end of main crypto mining news-->

            </main><!--end of main-->

            <?php
require_once realpath(dirname(__FILE__) . "/../app/layouts/sidebar.php");
?>

        </div> <!--end of container-->


    </section><!--end of content-->
    </section><!--end of first app section-->




<?php
require_once realpath(dirname(__FILE__) . "/../app/layouts/footer.php");
?>