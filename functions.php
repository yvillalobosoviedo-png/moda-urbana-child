<?php
// Evita el acceso directo al archivo
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Carga de estilos del tema hijo.
 *
 * El tema padre encola su 'style.css' con get_stylesheet_uri(). Con un tema hijo
 * activo, esa función devuelve el style.css DEL HIJO, así que el style.css del
 * padre (ajuste de la barra de administración) dejaría de cargarse. Se corrige
 * volviendo a registrar el manejador del padre apuntando a su propio archivo,
 * y se encola después el style.css del hijo.
 *
 * El CSS y el JS del padre (assets/) siguen cargando desde la carpeta del padre
 * porque usa get_template_directory_uri().
 */
function modaurbana_child_cargar_estilos() {
    $version_hijo = wp_get_theme()->get( 'Version' );

    // Reapunta 'modaurbana-base' al style.css del padre
    wp_deregister_style( 'modaurbana-base' );
    wp_register_style(
        'modaurbana-base',
        get_template_directory_uri() . '/style.css',
        array(),
        '1.0'
    );
    wp_enqueue_style( 'modaurbana-base' );

    // style.css del hijo: depende del CSS principal del padre para cargar después
    wp_enqueue_style(
        'modaurbana-child',
        get_stylesheet_uri(),
        array( 'modaurbana-base', 'modaurbana-estilos' ),
        $version_hijo
    );
}
// Prioridad 20: se ejecuta después de que el padre (prioridad 10) encole sus recursos
add_action( 'wp_enqueue_scripts', 'modaurbana_child_cargar_estilos', 20 );

/**
 * Área de widgets del footer.
 *
 * register_sidebar() le dice a WordPress que existe una zona donde se pueden
 * arrastrar widgets desde Apariencia > Widgets. El footer.php del hijo la muestra
 * con dynamic_sidebar().
 */
function modaurbana_child_registrar_widgets() {
    register_sidebar( array(
        'name'          => 'Footer de Moda Urbana',
        'id'            => 'footer-moda-urbana',
        'description'   => 'Widgets que se muestran en el pie de página (horario, contacto, enlaces).',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-titulo">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'modaurbana_child_registrar_widgets' );
