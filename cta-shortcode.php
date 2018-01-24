<?php
function asif_cta_shortcode($atts, $content = null) {
    extract( shortcode_atts( array(
        'title' => '',
        'desc' => '',
        'type' => 1,
        'link_to_page' => '',
        'external_link' => '',
        'link_text' => 'See more',
    ), $atts) );
    if($type == 1) {
        $link_source = get_page_link($link_to_page);
    } else {
        $link_source = $external_link;
    }
    $asif_cta_markup = '
        <div class="asif-cta-box">
            <h2>'.$title.'</h2>
            '.wpautop($desc).'
            <a href="'.$link_source.'" class="borderdbtn">'.$link_text.'</a>
        </div>
    ';
    $asif_cta_markup .= '';
    return $asif_cta_markup;
}
add_shortcode('asif_cta', 'asif_cta_shortcode');
