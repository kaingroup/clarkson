<?php
namespace ProcessWire;

/**
 * Blog Post Template
 * Displays individual blog post with sidebar
 */
?>
<!DOCTYPE html>
<html class="no-js" lang="">
<?php include('./_header.php'); ?>

<body class="pages home-4">
    <style>
        <?php
        $mastheadimage = (!empty($page->masthead_image->url)) ? $page->masthead_image->url : ($page->image ? $page->image->url : $urls->templates . 'img/about/header1.jpg');
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
                <div class="col-md-8">
                    <div class="top-title-k">
                        <h1><?= $page->title ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End particles js -->

    <div class="single-blog-area qa-area">
        <div class="container">
            <div class="row">
                <!-- Blog Post Content -->
                <div class="col-xl-8 col-lg-8 col-md-8 qa-border">
                    <div class="single-blof-image-area">
                        <?php if($page->image): ?>
                        <a class="fancybox w-100" href="<?= $page->image->url ?>">
                            <img class="img-fluid" src="<?= $page->image->url ?>" alt="<?= $page->title ?>">
                        </a>
                        <?php endif; ?>
                        <div class="itemtoolbar">
                            <p>
                                <?php if($page->getUnformatted('pub_datetime')): ?>
                                <span class="text-black"><i class="fa fa-clock-o"></i> <?= date('F j, Y', $page->getUnformatted('pub_datetime')) ?></span>
                                <?php endif; ?>
                                <?php if($page->blog_categories && $page->blog_categories->count()): ?>
                                <span><i class="fa fa-folder-open"></i>
                                    <?php
                                    $catLinks = [];
                                    foreach($page->blog_categories as $cat) {
                                        $catLinks[] = '<a href="' . $cat->url . '"  class="text-black">' . $cat->title . '</a>';
                                    }
                                    echo implode(', ', $catLinks);
                                    ?>
                                </span>
                                <?php endif; ?>
                            </p>
                        </div>
                    </div>

                    <div class="single-blog-text-area">
                        <h2><?= $page->title ?></h2>
                        <?= $page->body ?>

                        <!-- Social Share Buttons -->
                        <div class="blog-share mt-4 pt-4 border-top">
                            <p class="mb-2"><strong>Share this post:</strong></p>
                            <p>
                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode($page->httpUrl) ?>" target="_blank" rel="noopener" class="btn btn-sm" style="background:#3b5998;color:#fff;">
                                    <i class="fa fa-facebook"></i> Facebook
                                </a>
                                <a href="https://twitter.com/intent/tweet?url=<?= urlencode($page->httpUrl) ?>&text=<?= urlencode($page->title) ?>" target="_blank" rel="noopener" class="btn btn-sm" style="background:#1da1f2;color:#fff;">
                                    <i class="fa fa-twitter"></i> Twitter
                                </a>
                                <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?= urlencode($page->httpUrl) ?>&title=<?= urlencode($page->title) ?>" target="_blank" rel="noopener" class="btn btn-sm" style="background:#0077b5;color:#fff;">
                                    <i class="fa fa-linkedin"></i> LinkedIn
                                </a>
                                <a href="https://wa.me/?text=<?= urlencode($page->title . ' ' . $page->httpUrl) ?>" target="_blank" rel="noopener" class="btn btn-sm" style="background:#25d366;color:#fff;">
                                    <i class="fa-brands fa-whatsapp"></i> WhatsApp
                                </a>
                            </p>
                        </div>

                        <!-- Tags -->
                        <?php if($page->blog_tags && $page->blog_tags->count()): ?>
                        <div class="blog-tags mt-3">
                            <p>
                                <i class="fa fa-tags"></i>
                                <?php
                                foreach($page->blog_tags as $tag) {
                                    echo '<span class="badge bg-secondary me-1">' . $tag->title . '</span>';
                                }
                                ?>
                            </p>
                        </div>
                        <?php endif; ?>
                    </div>

                    <!-- Post Navigation -->
                    <div class="post-navigation mt-4 pt-4 border-top">
                        <div class="row">
                            <div class="col-6">
                                <?php if($page->prev("template=blog-post")->id): ?>
                                <a href="<?= $page->prev("template=blog-post")->url ?>" class="text-muted">
                                    <i class="fa fa-chevron-left"></i> Previous Post
                                </a>
                                <?php endif; ?>
                            </div>
                            <div class="col-6 text-end">
                                <?php if($page->next("template=blog-post")->id): ?>
                                <a href="<?= $page->next("template=blog-post")->url ?>" class="text-muted">
                                    Next Post <i class="fa fa-chevron-right"></i>
                                </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <!-- Related Posts -->
                    <?php
                    $relatedPosts = null;
                    if($page->blog_categories && $page->blog_categories->count()) {
                        $relatedPosts = $pages->find("template=blog-post, blog_categories={$page->blog_categories->first()}, id!={$page->id}, limit=3, sort=-pub_datetime");
                    }
                    if(!$relatedPosts || !$relatedPosts->count()) {
                        $relatedPosts = $pages->find("template=blog-post, id!={$page->id}, limit=3, sort=-pub_datetime");
                    }
                    if($relatedPosts->count()):
                    ?>
                    <div class="related-posts mt-5">
                        <h4 class="mb-4">Related Posts</h4>
                        <div class="row">
                            <?php foreach($relatedPosts as $rp):
                                $rpImg = $rp->image ? $rp->image->size(250, 180)->url : false;
                            ?>
                            <div class="col-md-4">
                                <div class="related-post-item mb-3">
                                    <?php if($rpImg): ?>
                                    <a href="<?= $rp->url ?>">
                                        <img src="<?= $rpImg ?>" alt="<?= $rp->title ?>" class="img-fluid mb-2">
                                    </a>
                                    <?php endif; ?>
                                    <h6><a href="<?= $rp->url ?>"><?= $rp->title ?></a></h6>
                                    <small class="text-muted"><?= date('M j, Y', $rp->getUnformatted('pub_datetime')) ?></small>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>

                <!-- Sidebar -->
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="single-blog-sidebar">

                        <!-- Categories Widget -->
                        <?php
                        $categories = $pages->find("template=blog-category, sort=title");
                        if($categories->count()):
                        ?>
                        <div class="sidebar-widget mb-4">
                            <h4>Categories</h4>
                            <ul class="list-unstyled">
                                <?php foreach($categories as $cat):
                                    $postCount = $pages->count("template=blog-post, blog_categories=$cat");
                                ?>
                                <li class="mb-2">
                                    <a href="<?= $cat->url ?>"><?= $cat->title ?></a>
                                    <span class="badge bg-secondary"><?= $postCount ?></span>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <?php endif; ?>

                        <!-- Recent Posts Widget -->
                        <?php
                        $recentPosts = $pages->find("template=blog-post, id!={$page->id}, sort=-pub_datetime, limit=5");
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

    <!-- Blog Post Schema.org Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BlogPosting",
        "headline": "<?= addslashes($page->title) ?>",
        "datePublished": "<?= $page->getUnformatted('pub_datetime') ? date('c', $page->getUnformatted('pub_datetime')) : date('c', $page->created) ?>",
        "dateModified": "<?= date('c', $page->modified) ?>",
        <?php if($page->image): ?>
        "image": "<?= $page->image->httpUrl ?>",
        <?php endif; ?>
        "author": {
            "@type": "Organization",
            "name": "Clarkson Insurance Brokers"
        },
        "publisher": {
            "@type": "Organization",
            "name": "Clarkson Insurance Brokers",
            "logo": {
                "@type": "ImageObject",
                "url": "<?= $urls->httpTemplates ?>img/logo_trans_xs.fw.png"
            }
        },
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "<?= $page->httpUrl ?>"
        }
    }
    </script>

    <?php include('./_footer.php'); ?>
    <?php include('./_scripts.php'); ?>
</body>
</html>
