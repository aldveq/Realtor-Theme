<?php
    $brand_logo = get_field('contact_information_settings_brand_logo', 'option');
?>

<section class="brand-section">
    <div class="container">
        <?php 
            if (!empty($brand_logo)):
                ?>
                    <img src="<?php echo $brand_logo['url']; ?>" class="brand-section__image" alt="<?php echo $brand_logo['alt']; ?>" />
                <?php
            else:
                ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/default-image.png" class="brand-section__image" alt="Default Image" />
                <?php
            endif;
        ?>
    </div>
</section>