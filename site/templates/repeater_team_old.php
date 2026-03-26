<?php
$img = ($page->image) ? $page->image->url : false;

?>
<!-- single-creative-member start -->
<div class="col-12 col-md-6 col-lg-3 col-xl-3 pb-3">
    <div class="single-creative-member">
        <!-- <div class="member-photo">
            <a href='<?php echo $page->team_member_link->url; ?>'>
                <img src="<?php echo $page->image->url; ?>" alt="" />
            </a>
        </div> -->
        <div class="member-info">
            <span class="member-name">
                <a href='<?php echo $page->team_member_link->url; ?>' class="text-white">
                    <?php echo $page->names; ?>
                </a>
            </span>
            <span class="member-role">
                <?php echo $page->title; ?>
            </span>
        </div>

        <!-- <div class="member-icons">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
            <svg version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px"
                y="0px" width="52px" height="52px" viewBox="0 0 52 52" enable-background="new 0 0 52 52"
                xml:space="preserve">
                <path
                    d="M51.673,0H0v51.5c0.244-5.359,3.805-10.412,7.752-13.003l36.169-23.74c4.264-2.799,7.761-8.663,7.752-14.297V0L51.673,0z" />
            </svg>
        </div> -->
    </div>
</div>
<!-- single-creative-member end -->