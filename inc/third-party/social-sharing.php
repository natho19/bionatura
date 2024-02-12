<?php

function bionatura_social_sharing($content)
{
    global $post;

    if (is_single()) {
        // Get site name
        $site_title = get_bloginfo('name');

        // Get current page URL 
        $URL = urlencode(get_permalink());

        // Get current page title
        $title = htmlspecialchars(urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8');

        // Construct sharing URL without using any script
        $twitterURL = 'https://twitter.com/intent/tweet?text=' . $title . '&amp;url=' . $URL . '&amp;via=' . $site_title;
        $facebookURL = 'https://www.facebook.com/sharer/sharer.php?u=' . $URL;
        $linkedInURL = 'https://www.linkedin.com/shareArticle?mini=true&url=' . $URL . '&amp;title=' . $title;

        // Add sharing button at the end of post/page content
        $content .= '<div class="repeat_informtion social_medias">';
        $content .= '<h6>Partager sur :</h6>';
        // Facebook
        $content .= '<a href="' . $facebookURL . '" target="_blank"><span class="fa fa-facebook"></span></a>';
        // Twitter
        $content .= '<a href="' . $twitterURL . '" target="_blank"><span class="fa fa-twitter"></span></a>';
        // LinkedIn
        $content .= '<a href="' . $linkedInURL . '" target="_blank"><span class="fa fa-linkedin"></span></a>';

        $content .= '</div>';

        return $content;
    } else {
        // if not a post/page then don't include sharing button
        return $content;
    }
};

add_filter('the_content', 'bionatura_social_sharing');