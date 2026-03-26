<?php
namespace ProcessWire;

/**
 * Blog Category Template
 * Displays posts filtered by this category
 */
?>
<!DOCTYPE html>
<html class="no-js" lang="">
<?php include('./_header.php'); ?>

<body class="pages home-4">
    <style>
        <?php
        $mastheadimage = (!empty($page->masthead_image->url)) ? $page->masthead_image->url : $urls->templates . 'img/about/header1.jpg';
        ?>
        #particles-js {
            background: rgba(0, 0, 0, 0) url("<?= $mastheadimage ?>") repeat scroll 0 0;
        }
    </style>

    <?php include('./_htmlheader.php'); ?>

    <div id="sidr-right" class="sidr right" style="display: none;">
        <div class="side-search">
            <div class="header-search">
                <form action="#">
                    <span class="search-button"><i class="fa fa-search"></i></span>
                    <input type="text" placeholder="search...">
                </form>
            </div>
        </div>
        <?php include('./_sidemenu.php'); ?>
    </div>

    <?php include('./_mainmenu.php'); ?>

    <!-- Start particles js -->
    <div id="particles-js">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="top-title-k">
                        <h1><?= $page->title ?></h1>
                        <p class="text-white">Category</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End particles js -->

    <div class="blog-area qa-area">
        <div class="container">
            <div class="row">
                <!-- Blog Posts in this Category -->
                <div class="col-xl-8 col-lg-8 col-md-8">
                    <?php if($page->body): ?>
                    <div class="category-description mb-4">
                        <?= $page->body ?>
                    </div>
                    <?php endif; ?>

                    <?php
                    // Get posts in this category
                    $posts = $pages->find("template=blog-post, blog_categories=$page, sort=-pub_datetime, limit=10");

                    if($posts->count()):
                        foreach($posts as $post):
                            $img = $post->image ? $post->image->size(362, 251)->url : false;
                            $excerpt = $post->excerpt ?: $sanitizer->truncate($post->body, 200);
                            $pubDate = $post->getUnformatted('pub_datetime') ? date('F j, Y', $post->getUnformatted('pub_datetime')) : '';
                    ?>
                    <div class="blog-box mb-4">
                        <div class="row">
                            <?php if($img): ?>
                            <div class="col-md-4">
                                <a href="<?= $post->url ?>">
                                    <img src="<?= $img ?>" alt="<?= $post->title ?>" class="img-fluid">
                                </a>
                            </div>
                            <?php endif; ?>
                            <div class="col-md-<?= $img ? '8' : '12' ?>">
                                <div class="blog-info mb-2">
                                    <?php if($pubDate): ?>
                                    <span class="date me-3">
                                        <i class="fa fa-clock-o"></i> <?= $pubDate ?>
                                    </span>
                                    <?php endif; ?>
                                </div>
                                <h3><a href="<?= $post->url ?>"><?= $post->title ?></a></h3>
                                <p><?= $excerpt ?></p>
                                <a href="<?= $post->url ?>" class="readon">Read More</a>
                            </div>
                        </div>
                    </div>
                    <?php
                        endforeach;

                        // Pagination
                        echo $posts->renderPager([
                            'nextItemLabel' => '<i class="fa fa-chevron-right"></i>',
                            'previousItemLabel' => '<i class="fa fa-chevron-left"></i>',
                            'listMarkup' => '<ul class="pagination justify-content-center mt-4">{out}</ul>',
                            'itemMarkup' => '<li class="page-item {class}">{out}</li>',
                            'linkMarkup' => '<a class="page-link" href="{url}">{out}</a>',
                            'currentItemClass' => 'active',
                        ]);
                    else:
                    ?>
                    <div class="alert alert-info">
                        <p>No posts found in this category yet.</p>
                    </div>
                    <?php endif; ?>
                </div>

                <!-- Sidebar -->
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="single-blog-sidebar">

                        <!-- All Categories Widget -->
                        <?php
                        $categories = $pages->find("template=blog-category, sort=title");
                        if($categories->count()):
                        ?>
                        <div class="sidebar-widget mb-4">
                            <h4>Categories</h4>
                            <ul class="list-unstyled">
                                <?php foreach($categories as $cat):
                                    $postCount = $pages->count("template=blog-post, blog_categories=$cat");
                                    $activeClass = ($cat->id === $page->id) ? 'fw-bold' : '';
                                ?>
                                <li class="mb-2 <?= $activeClass ?>">
                                    <a href="<?= $cat->url ?>"><?= $cat->title ?></a>
                                    <span class="badge bg-secondary"><?= $postCount ?></span>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <?php endif; ?>

                        <!-- Recent Posts Widget -->
                        <?php
                        $recentPosts = $pages->find("template=blog-post, sort=-pub_datetime, limit=5");
                        if($recentPosts->count()):
                        ?>
                        <div class="latest-post-single">
                            <h3>Recent Posts</h3>
                            <?php foreach($recentPosts as $rp):
                                $rpImg = $rp->image ? $rp->image->size(80, 80)->url : false;
                                $rpDate = $rp->getUnformatted('pub_datetime') ? date('M j, Y', $rp->getUnformatted('pub_datetime')) : '';
                            ?>
                            <div class="latest-post-box">
                                <?php if($rpImg): ?>
                                <img src="<?= $rpImg ?>" alt="<?= $rp->title ?>">
                                <?php endif; ?>
                                <div class="latest-post-details">
                                    <h5><a href="<?= $rp->url ?>"><?= $rp->title ?></a></h5>
                                    <span><i class="fa fa-clock-o"></i> <?= $rpDate ?></span>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('./_footer.php'); ?>
    <?php include('./_scripts.php'); ?>
</body>
</html>
