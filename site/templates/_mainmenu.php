<div class="main-menu">
    <div class="container">
        <div class="menu">
            <nav>
                <ul>
                    <li><a href="#">Homepage</a>
                        <div class="mega-menu">
                            <ul>
                                <li><a href="<?php echo $config->urls->httpRoot; ?>">
                                        Homepage
                                        <div>Group</div>
                                    </a></li>
                                <?php
                                //$home = $pages->get('template=home');
                                $countries = $pages->find('template=country'); 


                                foreach ($countries as $country): ?>

                                                                <li><a href="<?php echo $country->url; ?>">
                                                                        Homepage
                                                                        <div>
                                                                            <?php echo $country->title; ?>
                                                                        </div>
                                                                        </a></li>
                                                                        <?php
                                endforeach;
                                ?>


                            </ul>
                        </div>
                    </li>
                    <?php
//get all children from root country
$template = $page->template();
if ($template != 'country')
    $parent = $page->parent("template=country");
else
    $parent = $page;
    //echo $parent;die;
//if($parent){
$children = $parent->children();

foreach ($children as $child) {
    //does the child have children?
    $link = ($child->hasChildren) ? '#' : $child->url;
    echo '<li><a href="' . $link . '">' . $child->title . '</a>';
    if ($child->hasChildren) {
        echo '<div class="one-collam-menu">
                                <div class="mega-menu">
                                    <ul>';
        foreach ($child->children as $grandchild) {
            echo '<li><a href="' . $grandchild->url . '">' . $grandchild->title . '</a></li>';
        }
        echo '</ul>
                                        </div>
                                    </div>';
    }

    echo '</li>';
}
//}
?>
                                <?php
                                $blogIndex = $pages->get("template=blog-index");
                                if($blogIndex->id):
                                ?>
                                <li><a href="<?= $blogIndex->url ?>">Blogs</a></li>
                                <?php endif; ?>

                                <?php
                                $cnty = $page->closest("template=country");
                                if($cnty->id == 1179):?>
                                <li><a href="https://inscloud.net/clarkson_uganda/client_portal" target="_blank">Client Portal</a></li>
                                
                                <?php endif;?>
                                
                </ul>
            </nav>
        </div>
    </div>
</div>