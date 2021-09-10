<?php
    $about_us_profile_title = get_field('about_us_profile_title');
    $about_us_profile_image = get_field('about_us_profile_image');
    $about_us_profile_description = get_field('about_us_profile_description');
?>

<section class="about-us-profile-container">
    <div class="container">
        <?php
            if(!empty($about_us_profile_title)):
                ?>
                    <h1 class="about-us-profile-container__title"><?php echo $about_us_profile_title; ?></h1>
                <?php
            else:
                ?>
                    <h1 class="about-us-profile-container__title">Your title here</h1>
                <?php
            endif;
        ?>
        <?php
            if(!empty($about_us_profile_image)):
                ?>
                    <img src="<?php echo $about_us_profile_image['url']; ?>" class="about-us-profile-container__image-profile" alt="<?php echo $about_us_profile_image['alt']; ?>">
                <?php
            else:
                ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/default-image.png" class="about-us-profile-container__image-profile" alt="Default Image">
                <?php
            endif;
        ?>
        <?php
            if(!empty($about_us_profile_description)):
                ?>
                    <div class="about-us-profile-container__desc-container">
                        <?php echo $about_us_profile_description; ?>
                    </div>
                <?php
            else:
                ?>
                    <div class="about-us-profile-container__desc-container">Your content here</div>
                <?php
            endif;
        ?>
    </div>
</section>