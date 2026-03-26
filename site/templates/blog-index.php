<?php
namespace ProcessWire;

/**
 * Blog Index Template
 * Displays paginated list of blog posts with category filtering
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
                <form action="<?= $page->url ?>">
                    <span class="search-button"><i class="fa fa-search"></i></span>
                    <input type="text" name="q" placeholder="Search blog..." value="<?= $sanitizer->text($input->get('q')) ?>">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End particles js -->

    <div class="blog-area qa-area">
        <div class="container">
            <div class="row">
                <!-- Blog Posts List -->
                <div class="col-xl-8 col-lg-8 col-md-8">
                    <?php
                    // Build selector for blog posts
                    $selector = "template=blog-post, sort=-pub_datetime, limit=10";

                    // Handle category filtering via URL segment
                    $categorySlug = $input->urlSegment1;
                    $categoryPage = null;
                    if($categorySlug) {
                        $categoryPage = $pages->get("template=blog-category, name=$categorySlug");
                        if($categoryPage->id) {
                            $selector .= ", blog_categories=$categoryPage";
                        }
                    }

                    // Handle search
                    $searchQuery = $sanitizer->text($input->get('q'));
                    if($searchQuery) {
                        $selector .= ", title|body%=$searchQuery";
                    }

                    // Get posts - check if blog-post children exist, otherwise search site-wide
                    $posts = $page->children($selector);
                    if(!$posts->count()) {
                        // Fall back to finding blog-post templates anywhere
                        $posts = $pages->find($selector);
                    }

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
                                <div class="blog-info mb-2" style="color: #555 !important;">
                                    <?php if($pubDate): ?>
                                    <span class="date me-3" style="color: #555 !important;">
                                        <i class="fa fa-clock-o" style="color: #ff6a00 !important;"></i> <?= $pubDate ?>
                                    </span>
                                    <?php endif; ?>
                                    <?php if($post->blog_categories && $post->blog_categories->count()): ?>
                                    <span class="category" style="color: #555 !important;">
                                        <i class="fa fa-folder-open" style="color: #ff6a00 !important;"></i>
                                        <?php
                                        $catLinks = [];
                                        foreach($post->blog_categories as $cat) {
                                            $catLinks[] = '<a href="' . $page->url . $cat->name . '/" style="color: #444 !important;">' . $cat->title . '</a>';
                                        }
                                        echo implode(', ', $catLinks);
                                        ?>
                                    </span>
                                    <?php endif; ?>
                                </div>
                                <h3 style="color: #1a1a1a !important;"><a href="<?= $post->url ?>" style="color: #1a1a1a !important;"><?= $post->title ?></a></h3>
                                <p style="color: #333 !important;"><?= $excerpt ?></p>
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
                        <p>No blog posts found<?= $categoryPage ? ' in this category' : '' ?><?= $searchQuery ? ' matching "' . $searchQuery . '"' : '' ?>.</p>
                    </div>
                    <?php endif; ?>
                </div>

                <!-- Sidebar -->
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="single-blog-sidebar">

                        <!-- Search Widget -->
                        <div class="sidebar-widget mb-4">
                            <h4>Search</h4>
                            <form action="<?= $page->url ?>" method="get">
                                <div class="input-group">
                                    <input type="text" name="q" class="form-control" placeholder="Search blog..." value="<?= $searchQuery ?>">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>

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
                                    <a href="<?= $page->url . $cat->name ?>/"><?= $cat->title ?></a>
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
