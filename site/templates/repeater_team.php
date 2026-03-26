<?php
$img = $page->image->size(278,371)->url;
//$img = ($page->image) ? $page->image->url : false;
?>

<div class="col-xl-6 col-sm-6 col-lg-6 col-md-6 mb-3">
    <div class="our-leaders">
        <?php if ($img): ?>
            <div class="lead-img floatleft">
                <img src="<?php echo $img ?>" alt="" />
            </div>
        <?php endif; ?>
        <div class="lead-content floatright">
            <div class="member-info-3">
                <span class="member-name">
                    <?php echo $page->names; ?>
                </span>
                <span class="member-role">
                    <?php echo $page->title; ?>
                </span>
                <a href="<?php echo $page->team_member_link->url; ?>" class="readon large"
                    style="transition: all 0.3s ease-in-out 0s; min-height: 0px; min-width: 58.9538px; line-height: 12px; border-width: 1px; margin: 0px 0px 3.68462px; padding: 11px 48px 11px 15px; letter-spacing: 0px; font-size: 10px;">Read
                    more</a>
                <!-- <p>Ut wisi enim ad minim venirci tation ullamcorper susc nostrudexerci tation ullamcoramcorper </p> -->
            </div>
            <!-- <div class="lead-icon">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
            </div> -->
        </div>
    </div>
</div>