<li data-transition="zoomout" data-slotamount="7" data-masterspeed="300" data-thumb="<?php echo $page->image->url;?>"
    data-saveperformance="off" data-title="Slide3">
    <!-- MAIN IMAGE -->
    <img src="<?php echo $page->image->url;?>" alt="slidebg1" data-bgposition="center top" data-bgfit="cover"
        data-bgrepeat="no-repeat">
    <!-- LAYERS -->
    <!-- LAYER NR. 1 -->
    <div class="tp-caption largeHeadingBlack h1 customin ltr tp-resizeme" data-x="center" data-hoffset="200"
        data-y="center" data-voffset="-185"
        data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
        data-speed="1200" data-start="500" data-easing="Back.easeInOut" data-splitin="none" data-splitout="none"
        data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="400" data-endeasing="Back.easeIn"
        style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap; color:<?php echo $page->colour;?>">
        <h1><?php echo $page->title;?></h1>
    </div>

    <!-- LAYER NR. 3 -->
    <div class="tp-caption detailTextBlack p lfl tp-resizeme" data-x="center" data-hoffset="200" data-y="center"
        data-voffset="-5" data-speed="1200" data-start="1950" data-easing="easeInOutExpo" data-splitin="none"
        data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300"
        style="z-index: 7; max-width: auto; max-height: auto; white-space: normal;">
        <p style="text-align:center; color:<?php echo $page->colour;?>"><?php echo $page->subtitle;?></p>
    </div>
    <!-- LAYER NR. 4 -->
    <div class="tp-caption lfl tp-resizeme" data-x="center" data-hoffset="200" data-y="center" data-voffset="85"
        data-speed="1200" data-start="2750" data-easing="easeInOutExpo" data-splitin="none" data-splitout="none"
        data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300"
        style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;"><a href='<?php echo $page->button_link->url;?>'
            class='readon large'><?php echo $page->button_label;?></a>
    </div>
</li>