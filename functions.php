<?php
/**
 * Milestone Flooring + Remodeling — functions.php
 * Theme setup, asset enqueuing, Elementor integration, custom nav menus.
 */

defined( 'ABSPATH' ) || exit;

/* ============================================================
   CONSTANTS
   ============================================================ */
define( 'MILESTONE_VERSION', '1.0.0' );
define( 'MILESTONE_DIR',     get_template_directory() );
define( 'MILESTONE_URI',     get_template_directory_uri() );

/* ============================================================
   THEME SETUP
   ============================================================ */
function milestone_theme_setup(): void {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', [ 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ] );
    add_theme_support( 'custom-logo', [
        'height'      => 80,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ] );
    add_theme_support( 'customize-selective-refresh-widgets' );
    add_theme_support( 'align-wide' );

    // Elementor full-width support
    add_theme_support( 'elementor' );

    register_nav_menus( [
        'primary' => __( 'Primary Navigation', 'milestone' ),
        'footer'  => __( 'Footer Navigation',  'milestone' ),
    ] );

    load_theme_textdomain( 'milestone', MILESTONE_DIR . '/languages' );
}
add_action( 'after_setup_theme', 'milestone_theme_setup' );

/* ============================================================
   ENQUEUE ASSETS
   ============================================================ */
function milestone_enqueue_assets(): void {
    // Main stylesheet
    wp_enqueue_style(
        'milestone-style',
        get_stylesheet_uri(),
        [],
        MILESTONE_VERSION
    );

    // Main JS
    wp_enqueue_script(
        'milestone-main',
        MILESTONE_URI . '/assets/js/main.js',
        [],
        MILESTONE_VERSION,
        true   // load in footer
    );

    // Pass site data to JS
    wp_localize_script( 'milestone-main', 'milestoneData', [
        'ajaxUrl' => admin_url( 'admin-ajax.php' ),
        'nonce'   => wp_create_nonce( 'milestone_nonce' ),
        'siteUrl' => home_url(),
    ] );

    // Comment reply (only on singular posts with comments open)
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'milestone_enqueue_assets' );

/* ============================================================
   ELEMENTOR — Remove default page padding on full-width pages
   ============================================================ */
function milestone_elementor_canvas_no_padding(): void {
    add_theme_support( 'elementor', [
        'kits' => [
            'active_breakpoints' => [ 'viewport_mobile', 'viewport_tablet' ],
        ],
    ] );
}
add_action( 'elementor/init', 'milestone_elementor_canvas_no_padding' );

// Allow Elementor to override the header/footer on full-width templates
function milestone_elementor_location_override(): void {
    $locations = [ 'header', 'footer' ];
    foreach ( $locations as $location ) {
        if ( \Elementor\Plugin::$instance->modules_manager->get_modules( 'page-templates' )->get_template_type( get_the_ID() ) === 'elementor_canvas' ) {
            return; // canvas template — no header/footer
        }
    }
}

/* ============================================================
   CONTACT FORM — AJAX HANDLER
   ============================================================ */
function milestone_handle_contact_form(): void {
    check_ajax_referer( 'milestone_nonce', 'nonce' );

    $fname    = sanitize_text_field( $_POST['fname']    ?? '' );
    $lname    = sanitize_text_field( $_POST['lname']    ?? '' );
    $phone    = sanitize_text_field( $_POST['phone']    ?? '' );
    $email    = sanitize_email(      $_POST['email']    ?? '' );
    $service  = sanitize_text_field( $_POST['service']  ?? '' );
    $timeline = sanitize_text_field( $_POST['timeline'] ?? '' );
    $message  = sanitize_textarea_field( $_POST['message'] ?? '' );

    if ( empty( $fname ) || empty( $lname ) || empty( $phone ) || empty( $service ) ) {
        wp_send_json_error( [ 'message' => 'Please fill in all required fields.' ] );
        return;
    }

    $to      = get_option( 'admin_email' );
    $subject = "New Consultation Request from {$fname} {$lname}";
    $body    = "Name:     {$fname} {$lname}\n"
             . "Phone:    {$phone}\n"
             . "Email:    {$email}\n"
             . "Service:  {$service}\n"
             . "Timeline: {$timeline}\n\n"
             . "Message:\n{$message}";
    $headers = [ 'Content-Type: text/plain; charset=UTF-8', "Reply-To: {$email}" ];

    $sent = wp_mail( $to, $subject, $body, $headers );

    if ( $sent ) {
        wp_send_json_success( [ 'message' => 'Thank you! We will be in touch shortly.' ] );
    } else {
        wp_send_json_error( [ 'message' => 'Something went wrong. Please call us directly.' ] );
    }
}
add_action( 'wp_ajax_nopriv_milestone_contact', 'milestone_handle_contact_form' );
add_action( 'wp_ajax_milestone_contact',        'milestone_handle_contact_form' );

/* ============================================================
   CUSTOM LOGO HELPER
   ============================================================ */
function milestone_logo(): void {
    if ( has_custom_logo() ) {
        the_custom_logo();
    } else {
        echo '<a href="' . esc_url( home_url( '/' ) ) . '" class="nav-logo-fallback">';
        echo '<img src="' . esc_url( MILESTONE_URI . '/assets/images/mf-logo.png' ) . '" alt="' . esc_attr( get_bloginfo( 'name' ) ) . '" style="height:54px;width:auto;">';
        echo '</a>';
    }
}

/* ============================================================
   MILESTONE THEME OPTIONS (Customizer)
   ============================================================ */
function milestone_customizer( $wp_customize ): void {
    $wp_customize->add_section( 'milestone_options', [
        'title'    => __( 'Milestone Theme Options', 'milestone' ),
        'priority' => 30,
    ] );

    // Phone Number
    $wp_customize->add_setting( 'milestone_phone', [ 'default' => '(480) 555-0198', 'sanitize_callback' => 'sanitize_text_field' ] );
    $wp_customize->add_control( 'milestone_phone', [ 'label' => __( 'Phone Number', 'milestone' ), 'section' => 'milestone_options', 'type' => 'text' ] );

    // Phone Link
    $wp_customize->add_setting( 'milestone_phone_link', [ 'default' => 'tel:4805550198', 'sanitize_callback' => 'sanitize_text_field' ] );
    $wp_customize->add_control( 'milestone_phone_link', [ 'label' => __( 'Phone Link (tel:...)', 'milestone' ), 'section' => 'milestone_options', 'type' => 'text' ] );

    // Email
    $wp_customize->add_setting( 'milestone_email', [ 'default' => 'info@milestoneremodel.com', 'sanitize_callback' => 'sanitize_email' ] );
    $wp_customize->add_control( 'milestone_email', [ 'label' => __( 'Email Address', 'milestone' ), 'section' => 'milestone_options', 'type' => 'email' ] );

    // Service Area
    $wp_customize->add_setting( 'milestone_area', [ 'default' => 'Anthem & North Phoenix, AZ', 'sanitize_callback' => 'sanitize_text_field' ] );
    $wp_customize->add_control( 'milestone_area', [ 'label' => __( 'Service Area', 'milestone' ), 'section' => 'milestone_options', 'type' => 'text' ] );

    // ROC Number
    $wp_customize->add_setting( 'milestone_roc', [ 'default' => 'ROC 364355', 'sanitize_callback' => 'sanitize_text_field' ] );
    $wp_customize->add_control( 'milestone_roc', [ 'label' => __( 'License / ROC Number', 'milestone' ), 'section' => 'milestone_options', 'type' => 'text' ] );

    // Facebook URL
    $wp_customize->add_setting( 'milestone_facebook', [ 'default' => '#', 'sanitize_callback' => 'esc_url_raw' ] );
    $wp_customize->add_control( 'milestone_facebook', [ 'label' => __( 'Facebook URL', 'milestone' ), 'section' => 'milestone_options', 'type' => 'url' ] );

    // Instagram URL
    $wp_customize->add_setting( 'milestone_instagram', [ 'default' => '#', 'sanitize_callback' => 'esc_url_raw' ] );
    $wp_customize->add_control( 'milestone_instagram', [ 'label' => __( 'Instagram URL', 'milestone' ), 'section' => 'milestone_options', 'type' => 'url' ] );
}
add_action( 'customize_register', 'milestone_customizer' );

/* ============================================================
   HELPERS — get theme options
   ============================================================ */
function milestone_option( string $key, string $default = '' ): string {
    return get_theme_mod( $key, $default );
}

function milestone_phone():      string { return milestone_option( 'milestone_phone',      '(480) 555-0198' ); }
function milestone_phone_link(): string { return milestone_option( 'milestone_phone_link', 'tel:4805550198' ); }
function milestone_email():      string { return milestone_option( 'milestone_email',      'info@milestoneremodel.com' ); }
function milestone_area():       string { return milestone_option( 'milestone_area',       'Anthem & North Phoenix, AZ' ); }
function milestone_roc():        string { return milestone_option( 'milestone_roc',        'ROC 364355' ); }
function milestone_facebook():   string { return milestone_option( 'milestone_facebook',   '#' ); }
function milestone_instagram():  string { return milestone_option( 'milestone_instagram',  '#' ); }

/* ============================================================
   BODY CLASS — add page-specific classes
   ============================================================ */
function milestone_body_classes( array $classes ): array {
    if ( is_page_template() ) {
        $classes[] = 'has-page-template';
    }
    return $classes;
}
add_filter( 'body_class', 'milestone_body_classes' );

/* ============================================================
   EXCERPT LENGTH
   ============================================================ */
add_filter( 'excerpt_length', fn() => 25 );

/* ============================================================
   REMOVE EMOJI SCRIPTS (performance)
   ============================================================ */
remove_action( 'wp_head',             'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles',     'print_emoji_styles' );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles',  'print_emoji_styles' );

/* ============================================================
   DEFER/ASYNC NON-CRITICAL SCRIPTS
   ============================================================ */
function milestone_defer_scripts( string $tag, string $handle ): string {
    $defer = [ 'milestone-main' ];
    if ( in_array( $handle, $defer, true ) ) {
        return str_replace( ' src', ' defer src', $tag );
    }
    return $tag;
}
add_filter( 'script_loader_tag', 'milestone_defer_scripts', 10, 2 );
