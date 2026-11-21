<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="Moda Urbana: hoodies, camisetas oversize, gorras, joggers y sneakers con diseños inspirados en el arte callejero."
    />
    <link rel="icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/favicon.svg" type="image/svg+xml" />
    <link rel="icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/favicon.ico" sizes="32x32" />
    <link rel="apple-touch-icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/apple-touch-icon.png" />
    <meta name="theme-color" content="#141414" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Anton&family=Inter:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <noscript
      ><style>
        .productos-grupo[hidden] {
          display: grid !important;
        }
        .btn-categoria,
        .btn-cerrar-productos {
          display: none;
        }
      </style></noscript
    >
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <?php
    // Si estamos en el inicio, los enlaces del menú saltan directo a la sección (#inicio).
    // Si estamos en otra página (políticas, etc.), primero regresan al inicio y luego saltan a la sección.
    $inicio_url = is_front_page() ? '' : home_url( '/' );
    ?>

    <header class="barra-nav">
      <p class="logo">
        <a href="<?php echo esc_url( $inicio_url . '#inicio' ); ?>"
          ><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo.svg" width="40" height="40" alt="" />Moda<span
            >Urbana</span
          ></a
        >
      </p>
      <button
        id="btn-menu"
        class="btn-menu"
        type="button"
        aria-label="Abrir menú de navegación"
        aria-expanded="false"
        aria-controls="menu-principal"
      >
        <span class="btn-menu-icono" aria-hidden="true"></span>
        <span>Menú</span>
      </button>
      <nav id="menu-principal" aria-label="Principal">
        <ul class="menu">
          <li><a href="<?php echo esc_url( $inicio_url . '#inicio' ); ?>">Inicio</a></li>
          <li><a href="<?php echo esc_url( $inicio_url . '#nosotros' ); ?>">Nosotros</a></li>
          <li><a href="<?php echo esc_url( $inicio_url . '#servicios' ); ?>">Colección</a></li>
          <li><a href="<?php echo esc_url( $inicio_url . '#preguntas' ); ?>">Preguntas frecuentes</a></li>
          <li><a href="<?php echo esc_url( $inicio_url . '#opiniones' ); ?>">Opiniones</a></li>
          <li><a href="<?php echo esc_url( $inicio_url . '#contacto' ); ?>">Contacto</a></li>
        </ul>
      </nav>
    </header>