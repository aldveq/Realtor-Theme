<?php

function get_background_color_for_first_content($isBackgroundEnabled, $isFirstColReverted) {
    if ($isFirstColReverted == 'no' && $isBackgroundEnabled == 'yes') {
        return 'bg-enabled-revert';
    }

    if ($isFirstColReverted == 'yes' && $isBackgroundEnabled == 'yes') {
        return 'bg-enabled';
    }

    return '';
} 

function get_total_ratings($total_rating, $remaining_rating) {
    $rating_filled_str = '';
    $rating_empty_str = '';
    $rating_filled_i = 0;
    $rating_empty_i = 0;

    for($rating_filled_i; $rating_filled_i < $total_rating; $rating_filled_i++) {
        $rating_filled_str .= '<span class="icon-star testimonials-container__rating-star active"></span>';
    }

    for($rating_empty_i; $rating_empty_i < $remaining_rating; $rating_empty_i++) {
        $rating_empty_str .= '<span class="icon-star testimonials-container__rating-star"></span>';
    }

    return $rating_filled_str . $rating_empty_str;
}

function convert_hex_to_rgba($color, $opacity = false) {
    
    $default = 'rgb(0,0,0)';

    //Return default if no color provided
    if(empty($color))
        return $default; 

    //Sanitize $color if "#" is provided 
        if ($color[0] == '#' ) {
            $color = substr( $color, 1 );
        }

        //Check if color has 6 or 3 characters and get values
        if (strlen($color) == 6) {
                $hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
        } elseif ( strlen( $color ) == 3 ) {
                $hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
        } else {
                return $default;
        }

        //Convert hexadec to rgb
        $rgb =  array_map('hexdec', $hex);

        //Check if opacity is set(rgba or rgb)
        if($opacity){
            if(abs($opacity) > 1)
                $opacity = 1.0;
            $output = 'rgba('.implode(",",$rgb).','.$opacity.')';
        } else {
            $output = 'rgb('.implode(",",$rgb).')';
        }

        //Return rgb(a) color string
        return $output;
}

function adjust_brightness_darkness_color($hex, $steps) {
    // Steps should be between -255 and 255. Negative = darker, positive = lighter
    $steps = max(-255, min(255, $steps));

    // Normalize into a six character long hex string
    $hex = str_replace('#', '', $hex);
    if (strlen($hex) == 3) {
        $hex = str_repeat(substr($hex,0,1), 2).str_repeat(substr($hex,1,1), 2).str_repeat(substr($hex,2,1), 2);
    }

    // Split into three parts: R, G and B
    $color_parts = str_split($hex, 2);
    $return = '#';

    foreach ($color_parts as $color) {
        $color   = hexdec($color); // Convert to decimal
        $color   = max(0,min(255,$color + $steps)); // Adjust color
        $return .= str_pad(dechex($color), 2, '0', STR_PAD_LEFT); // Make two char hex code
    }

    return $return;
}

function post_estimated_reading_time($post_content) {
	// get the content
	$the_content = $post_content;
	// count the number of words
	$words = str_word_count( strip_tags( $the_content ) );
	// rounding off and deviding per 200 words per minute
	$minute = floor( $words / 200 );
	// rounding off to get the seconds
	// $second = floor( $words % 200 / ( 200 / 60 ) );
	// calculate the amount of time needed to read
	// $estimate = $minute . ' minute' . ( $minute == 1 ? '' : 's' );
	$estimate = $minute . ' min read';
	
    return $estimate;
}

function get_formatted_video_url($url) {

    if(strpos($url, 'youtube') == true):
        $youtube_video_id = get_youtube_video_id($url);
        return $url.'?autoplay=1&loop=1&mute=1&controls=0&showinfo=0&playlist='.$youtube_video_id;
    else:
        return $url . '?autoplay=1&loop=1&muted=1';
    endif;

}

function get_youtube_video_id($url) {
    $yt_video_id = substr($url, -11,30); 
    return $yt_video_id;
}