<?php 
    
    $title_share    = urlencode($title." - ".$nome_empresa);
    $url_twitter    = "https://twitter.com/share?url=".$canonical."&amp;text=".$title_share."%0A";
    $url_facebook   = "https://facebook.com/sharer/sharer.php?u=".$canonical."&amp;text=".$title_share;
    $url_email      = "mailto:?subject=".$title_share."&amp;body=".$canonical;
    $url_whatsapp   = "whatsapp://send?text=".$canonical."%20".$title_share;
    
?>
<div class="jssocials-shares">
    <div class="jssocials-share">
        <p>Gostou? Compartilhe: </p>
    </div>
    <div class="jssocials-share jssocials-share-twitter">
        <a target="_blank" href="<?php echo $url_twitter; ?>" class="jssocials-share-link">
            <span class="jssocials-share-label">Twitter</span>
        </a>
    </div>
    <div class="jssocials-share jssocials-share-facebook">
        <a target="_blank" href="<?php echo $url_facebook; ?>" class="jssocials-share-link">
            <span class="jssocials-share-label">Facebook</span>
        </a>
    </div>
    <div class="jssocials-share jssocials-share-email">
        <a target="_self" href="<?php echo $url_email; ?>" class="jssocials-share-link">
            <span class="jssocials-share-label">E-mail</span>
        </a>
    </div>
    <div class="jssocials-share jssocials-share-whatsapp">
        <a target="_self" href="<?php echo $url_whatsapp; ?>" class="jssocials-share-link">
            <span class="jssocials-share-label">WhatsApp</span>
        </a>
    </div>
 </div>