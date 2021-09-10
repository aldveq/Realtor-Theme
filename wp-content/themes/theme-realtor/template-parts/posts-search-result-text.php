<?php 
    $search_term = $args['data']['search_term'];
    $posts_search_count =  $args['data']['posts_search_count'];
?>

<div class="result mb-3">
    <?php
        if($search_term != '' && $posts_search_count != '') {
            ?>
                <p class="blog-search-template-container__posts-search-result-text"><?php echo $posts_search_count; ?> results for <span class="blog-search-template-container__posts-search-result-term"><?php echo $search_term; ?></span> search</p>
            <?php
        }
    ?>
</div>
