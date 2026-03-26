<div class="side-menu">
            <nav>
                <ul>
                    <li><a href="<?php echo $config->urls->httpRoot; ?>">Homepage</a>
                        <ul class="uk-nav-sub">
                            <?php
                                //$home = $pages->get('template=home');
                                $countries = $pages->find('template=country'); 


                                foreach ($countries as $country): ?>

                                                                <li><a href="<?php echo $country->url; ?>">
                                                                        Homepage
                                                                        <span>
                                                                            <?php echo $country->title; ?>
                                                                        </span>
                                                                        </a></li>
                                                                        <?php
                                endforeach;
                                ?>
                            
                        </ul>
                    </li>
                    <li><a href="#">About Us</a>
                        <ul class="uk-nav-sub">
                            <li><a href="aboutus.html">The company</a></li>
                            <li><a href="#">Our Values</a></li>
                            <li><a href="#">Board of Directors</a></li>
                            <li><a href="#">Management</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
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
        echo '<ul class="uk-nav-sub">
                                ';
        foreach ($child->children as $grandchild) {
            echo '<li><a href="' . $grandchild->url . '">' . $grandchild->title . '</a></li>';
        }
        echo '</ul>';
    }

    echo '</li>';
}
//}
?>
                    
                    <li><a href="/request-a-quote">Request a quote</a></li>
                </ul>
            </nav>
        </div>