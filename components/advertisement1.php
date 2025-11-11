<div id="advertise1">
        <?php
        if (!empty($all_advertisement[0]['ad_link']) && !empty($all_advertisement[0]['ad_image'])) {
                echo "<a href='{$all_advertisement[0]['ad_link']}' target='_blank'>
            <img src='https://admin.ghotok.soft-techtechnology.com/{$all_advertisement[0]['ad_image']}' alt='advertisement 1'>
          </a>";
        }
        ?>
</div>