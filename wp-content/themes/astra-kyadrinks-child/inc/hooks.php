<?php
/**
 * Remplacer le header Astra par notre header custom
 */
remove_action( 'astra_header', 'astra_header_markup' );

add_action( 'astra_header', 'kya_custom_header_markup' );
function kya_custom_header_markup() {
    // Chemin correct vers le template
    $template_path = get_stylesheet_directory() . '/templates/header/custom-header.php';

    if ( file_exists( $template_path ) ) {
        include $template_path;
    } else {
        echo '<!-- Header template not found: ' . $template_path . ' -->';
    }
}
