<?php
namespace ProcessWire;

/**
 * Repeater template for country testimonials
 * Fields expected: testimonial_text, testimonial_author, testimonial_role, image (optional)
 */

$img = ($page->image) ? $page->image->size(100, 100)->url : wire('config')->urls->templates . 'img/default-avatar.png';
?>
<div class="single-testimonial">
    <div class="testimonial-box">
        <img src="<?php echo $img; ?>" alt="<?php echo $page->testimonial_author; ?>">
        <p><?php echo $page->testimonial_text; ?></p>
        <span class="quote"><i class="fa fa-quote-right"></i></span>
    </div>
    <div class="testimonial-details">
        <h5><?php echo $page->testimonial_author; ?></h5>
        <p><?php echo $page->testimonial_role; ?></p>
    </div>
</div>
