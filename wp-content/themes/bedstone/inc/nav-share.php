<?php

    $share_title = urlencode(get_the_title());
    $share_url = urlencode(get_permalink());

?>

<div class="social share">
    <h6>Share this:</h6>
    <ul>
        <li class="social-facebook"><a href="https://www.facebook.com/sharer.php?u=<?php echo $share_url; ?>" rel="external"></a></li>
        <li class="social-twitter"><a href="https://twitter.com/share?text=<?php echo $share_title; ?>&url=<?php echo $share_url; ?>" rel="external"></a></li>
        <li class="social-email"><a href="mailto:?subject=Check out this blog post by Climate Generation&amp;body=I wanted to share this website with you. <?php echo $share_title; ?>: <?php echo $share_url; ?>"></a></li>
    </ul>
</div>