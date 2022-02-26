<?php

?>
<section class="shorten-section section">
    <img class="page-bg" src="/url-shortener/view/img/shorten-bg.svg#svgView(preserveAspectRatio(none))" alt="wavy background image">

    <h2>Shorten</h2>
    <div class="shorten-top shorten-div">
        <form class="shorten-form" action="/shorten/create" method="post">
            <input type="text" name="long_url" placeholder="long url" value="<?= $long_url ??= "" ?>">
            <input type="password" name="link_pass" placeholder="link password (optional)">
            <input type="submit" value="Get Short URL">
        </form>
        <h3 class="align-center">Short Url</h3>
        <p class="align-center shortened-url">
            <?php
            if (isset($short_url) && $short_url)
                echo $short_url;
            else if (isset($requested_create))
                echo "Somthing unexpected happend. Try again later.";
            ?>
        </p>
    </div>

    <div class="shorten-bottom shorten-div hidden">
        <!-- not used for now -->
    </div>
</section>