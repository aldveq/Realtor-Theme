<?php
    $search_term = isset($_GET['s']) ? sanitize_text_field($_GET['s']) : '';

    $blog_page_settings_title = get_field('blog_page_settings_title', 'option');
    $blog_page_settings_subtitle = get_field('blog_page_settings_subtitle', 'option');
    $blog_page_settings_description = get_field('blog_page_settings_description', 'option');
?>

<div class="blog-search-template-container">
    <?php
        if(!empty($blog_page_settings_title)):
            ?>
                <h1 class="blog-search-template-container__title"><?php echo $blog_page_settings_title; ?></h1>
            <?php
        endif;
    ?>
    <?php
        if(!empty($blog_page_settings_subtitle)):
            ?>
                <h2 class="blog-search-template-container__subtitle"><?php echo $blog_page_settings_subtitle; ?></h2>
            <?php
        endif;
    ?>
    <?php
        if(!empty($blog_page_settings_description)):
            ?>
                <p class="blog-search-template-container__desc"><?php echo $blog_page_settings_description; ?></p>
            <?php
        endif;
    ?>
    <div class="blog-search-template-container__input-container">
        <input type="text" class="input blog-search-template-container__input" id="searchPostInput" value="<?php echo esc_html($search_term); ?>" style="color: #aaadc3 !important;" placeholder="Search posts entries...">
        <button class="button button__filled button__icon blog-search-template-container__button" id="searchPostBtn">Search</button>
    </div>
    <div class="mortgage-calculator-container__feedback-text-container" id="feedback"></div>
</div>