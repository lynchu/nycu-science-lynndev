<?php
// disable author page access
function oc_author_page_redirect() {
    if ( is_author() ) {
        wp_redirect( home_url() );
    }
}
add_action( 'template_redirect', 'oc_author_page_redirect' );