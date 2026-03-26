<div class="square ">
    <div class="hovereffect">
        <img class="img-fluid" src="<?php echo $page->image->url;?>" alt="">
        <div class="overlay d-flex justify-content-center align-items-center">
            <div>
                <h2><?php echo $page->title;?></h2>
                <a class="info" href="<?php echo $page->button_link->url;?>"><?php echo $page->excerpt;?> <span class="country-no"><i class="fa fa-phone"
                            aria-hidden="true"></i> <?php echo $page->country_hotline;?></span></a>

            </div>

        </div>
    </div>
</div>