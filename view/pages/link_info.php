<?php
$_SESSION["current_link"] = "Link Info";
?>
<section class="link-info-section section">
    <img class="page-bg" src="/url-shortener/view/img/link-info.svg#svgView(preserveAspectRatio(none))" alt="wavy background image">
    <h2>Link Info</h2>
    <div class="info-div">
        <form action="link-info/get-details" method="post">
            <input type="text" name="short_url" placeholder="short url" value="<?php
                                                                                if (isset($short_url) && $short_url) {
                                                                                    echo $short_url;
                                                                                } else {
                                                                                    echo "";
                                                                                }
                                                                                ?>">
            <input type="password" name="link_pass" placeholder="link password (optional)">
            <input type="submit" value="Get Link Info">
        </form>
        <h3 class="align-center">Link Info</h3>
        <p class="link-info">
            <?php
            if (isset($link_info) && $link_info) {
                foreach ($link_info as $k => $v) {
                    if ($k == "passHash") continue;
                    echo $k . ": " . $v . "<br>";
                }
            } else if (isset($requested_info)) {
                echo "bad url or non-matching password.";
            }

            ?>
        </p>
    </div>
    <div class="info-div hidden">
        <!-- no used for now -->
    </div>


</section>