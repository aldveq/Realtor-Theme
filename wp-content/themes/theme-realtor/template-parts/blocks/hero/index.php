<?php
    $hero_image = get_field('hero_image');
    $hero_title = get_field('hero_title');
    $hero_subtitle = get_field('hero_subtitle');
?>

<section class="hero-image-section" style="background-image:url(<?php echo !empty($hero_image) ? $hero_image['url'] : get_template_directory_uri() . '/images/default-image.png'; ?>);">
    <div class="container container-separation-y">
        <?php
            if(!empty($hero_title)):
                ?>
                    <h3><?php echo $hero_title; ?></h3>
                <?php
            else:
                ?>
                    <h3>Your title here</h3>
                <?php
            endif;
        ?>
        <?php
            if(!empty($hero_subtitle)):
                ?>
                    <p><?php echo $hero_subtitle; ?></p>
                <?php
            else:
                ?>
                    <p>Your subtitle here</p>
                <?php
            endif;
        ?>
    </div>
</section>