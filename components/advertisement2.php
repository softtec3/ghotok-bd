<div id="advertise2">
        <?php
        if (!empty($all_advertisement[1]['ad_link']) && !empty($all_advertisement[1]['ad_image'])) {
                echo "<a href='{$all_advertisement[1]['ad_link']}' target='_blank'>
            <img src='https://admin.ghotok.soft-techtechnology.com/{$all_advertisement[1]['ad_image']}' alt='advertisement 2'>
          </a>";
        }
        ?>
</div>