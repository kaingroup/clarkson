<style>
    footer {
        background: rgba(0, 0, 0, 0) url(<?php echo $urls->templates ?>img/about/bg-3.jpg) no-repeat scroll center center / cover;

    }
</style>
<footer>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="footer-logo">
                        <a href="<?php echo $config->urls->httpRoot; ?>"><img
                                src="<?php echo $urls->templates ?>img/logo_trans_xs.fw.png" alt=""></a>
                        

                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="email-newslatter">
                        <h3>Email Newsletters</h3>
                        <form action="#">
                            <input type="text" placeholder="Email Address">
                            <button type="submit"><i class="fa fa-envelope-o"></i></button>
                        </form>
                        <p>Don't worry we hate spam! We also protect your email ;)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copy-right">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="copyright-text">
                        <p>&copy; Clarkson Insurance Brokers, <?php echo date('Y')?> by <a href="https://www.kaingroup.net/"
                                target="_blank">KAINGroup</a></p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 d-flex flex-column">
                    <div class="footer-menu mb-3">
                        <nav>
                            <ul>
                                <li class="text-white">SOCIAL: </li>
                                <li><a href="https://www.facebook.com/profile.php?id=61550068165700" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="		
https://www.linkedin.com/company/99822348/admin/feed/posts/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="https://twitter.com/clarkson1958" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/1958clarkson/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="https://www.tiktok.com/@1958clarkson" target="_blank"><i class="fa fa-tiktok"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UC5Ex9reoWhuWzRdItpslaKA" target="_blank"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="footer-menu">
                        <nav>
                            <ul>
                                <li class="text-white">SUPPORT: </li>
                                <?php 
                                $cnty = $page->closest("template=country");
                                if($cnty->id == 1179):?>
                                <li><a href="https://inscloud.net/clarkson_uganda/client_portal" target="_blank">Client Portal</a></li>
                                <li><a href="https://inscloud.net/clarkson_uganda/login.php" target="_blank">ICloud</a></li>
                                <?php endif;
                                if($cnty->id == 1039):
                                ?>
                                <li><a href="https://inscloud.net/clarkson_kenya/login.php" target="_blank">ICloud</a></li>
                                <?php endif ?>
                                <li><a href="https://outlook.office.com/mail/" target="_blank">Email</a></li>
                                
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php
// WhatsApp Floating Button
$cnty = $page->closest("template=country");
$whatsappNumber = $cnty->whatsapp_number ?? '';
if($whatsappNumber): ?>
<a href="https://wa.me/<?= $whatsappNumber ?>?text=<?= urlencode('Hello, I would like to inquire about your insurance services.') ?>"
   class="whatsapp-float"
   target="_blank"
   rel="noopener noreferrer"
   aria-label="Chat on WhatsApp">
    <i class="fa-brands fa-whatsapp"></i>
</a>
<?php endif; ?>

<!-- Floating Quote Button -->
<a href="/request-a-quote/" class="quote-float" aria-label="Get a Quote">
    <i class="fa fa-file-text-o"></i>
    <span>Get a Quote</span>
</a>