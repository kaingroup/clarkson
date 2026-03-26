
<div class="carousel-item active">
    <div class="d-flex flex-row h-100">
        <div class="col-8 text-black">
            <img src="<?php echo $page->image->url;?>" class="img-fluid" alt="" srcset="">
        </div>
        <div class="col-4 hero-text-section d-flex align-items-center justify-content-center">
            <div class="d-flex flex-column">
                <div class="hero-category"><?php echo $page->subtitle;?></div>
                <div class="hero-title"><?php echo $page->title;?></div>
                <div>

                    <a type="button" href="<?php echo $page->button_link->url;?>"
                        class="hero-btn btn btn-outline-dark rounded-0 border-light mt-5 text-light"><?php echo $page->button_label;?> <i
                            class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>