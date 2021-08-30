<div class="section-aside">

<aside class="sidebar">

    <div class="sidebar-item">

        <?php foreach($categories as $category) {?>

        <ul class="sidebar-list">
            <li><a href="http://localhost/cms-php/show-category/<?php echo $category['id']; ?>"><b><?php echo $category['name']; ?></b></a></li>
        </ul>
        
        <?php }?>

    </div>

    <section class="sidebar-item">

        <h2 class="title">POPULAR POSTS</h2>

        <?php foreach($sidebarPopularArticles as $article) { ?>


            <div class="popular-post">

                <img class="popular-post-img" src="http://localhost/cms-php/<?php echo $article['image']; ?>" alt="">

                <div class="popular-post-title">
                    <h3>
                        <a href="http://localhost/cms-php/show-article/<?php echo $article['id']; ?>"><b><?php echo $article['title']; ?></b></a>
                    </h3>
                    <ul class="info-bar">

                        <li class=""><span class="text-muted">by</span> <a href="#" class="color-black"><b><?php echo $article['username']; ?></b></a>

                            <span class="text-muted"><?php echo date("M d, Y",strtotime($article['created_at'])) ; ?></span></li>

                    </ul>
                </div>

            </div>
        <?php }?>
    </section>


</aside>

</div>