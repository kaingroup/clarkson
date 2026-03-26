<div class="row">
    <div class="col-12 col-md-12 col-lg-6">
        <div class="service-dev-img">
            <img src="<?php echo $page->image->url; ?>" alt="" />
        </div>
    </div>
    <div class="col-12 col-md-12 col-lg-6">
        <div class="service-dev-text">
            <h2>
                <?php echo $page->title; ?>
            </h2>
            <?php echo $page->body;
$file = $page->files;

if ($file) {
    echo '<a class="readon border black" href="' . $file->url . '" target="_blank">Read more</a>';
}
?>

<form id="career-form2" method="post" enctype='multipart/form-data' action="./">
                            <input type="hidden" name="<?php echo $session->CSRF->getTokenName(); ?>" value="<?php echo $session->CSRF->getTokenValue(); ?>"/>
                                <div class="row">
                                    <div class="col-12 col-md-12 col-lg-12">
                                        <div class="mb-3">
                                            <input type="hidden" name="career_listing" value="<?php echo $page->id; ?>" />
                                            <input class="form-control" type="file" id="formFile" name="files" required>
                                            <?php
                                                // show upload errors
                                                if(isset($errors['files'])){
                                                    // if multiple errors
                                                    if(is_array($errors['files'])){
                                                        foreach($errors['files'] as $e){
                                                            echo showError($e);
                                                        }
                                                    } else { // if single error
                                                        echo showError($errors['files']);
                                                    }
                                                }
                                                ?>
                                        </div>
                                    </div>

                                    
                                    
                                    <div class="col-12 col-md-12 col-lg-12">
                                        
                                        <div class="control-group">
                                        <input type="hidden" name="action" id="action" value="send"/>
                                            <button type="submit" class="readon contact-border border pulse"
                                                name="submit" value="submit">submit</button>
                                            <p class="form-message"></p>
                                        </div>
                                    </div>


                                </div>
                            </form>

        </div>
    </div>
</div>