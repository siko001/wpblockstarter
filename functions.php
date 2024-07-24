<?php 

// Enqueue Styles and Scripts
function enqueue_scripts() {
    wp_enqueue_style('adobe-fonts', 'https://use.typekit.net/ril1kdi.css');
    wp_enqueue_style('tailwind-styles', get_template_directory_uri() . '/blocks/build/style.css', array(), '1.0.0');

}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );


// Add custom editor styles
function enqueue_editor_styles() {
    add_editor_style('https://use.typekit.net/ril1kdi.css');
}
add_action('admin_init', 'enqueue_editor_styles');



// Add custom editor styles
function custom_blocks_editor_styles() {
    wp_enqueue_style(
        'custom-blocks-editor-styles',
        get_template_directory_uri() . '/blocks/build/style.css',
        array(), "1.0.0"
    );
}
add_action( 'enqueue_block_assets', 'custom_blocks_editor_styles' );




// Add custom blocks
function custom_blocks() {
	register_block_type( __DIR__ . '/blocks/build/custom-block' );
}
add_action( 'init', 'custom_blocks' );


