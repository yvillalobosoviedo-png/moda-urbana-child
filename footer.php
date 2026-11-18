<?php
// Copia del footer.php del padre, con área de widgets y enlaces de políticas.
$politicas = array(
    'politica-de-privacidad'   => 'Política de privacidad',
    'politica-de-cookies'      => 'Política de cookies',
    'terminos-y-condiciones'   => 'Términos y condiciones',
    'politica-de-envios'       => 'Política de envíos',
    'politica-de-devoluciones' => 'Política de devoluciones',
);
?>
<footer class="footer-moda">
  <div class="footer-widgets">
    <?php if ( is_active_sidebar( 'footer-moda-urbana' ) ) : ?>
      <?php dynamic_sidebar( 'footer-moda-urbana' ); ?>
    <?php endif; ?>

    <nav class="footer-politicas widget" aria-label="Políticas del sitio">
      <h2 class="widget-titulo">Información legal</h2>
      <ul>
        <?php foreach ( $politicas as $slug => $texto ) : ?>
          <li><a href="<?php echo esc_url( home_url( '/' . $slug . '/' ) ); ?>"><?php echo esc_html( $texto ); ?></a></li>
        <?php endforeach; ?>
      </ul>
    </nav>
  </div>

  <div class="footer-base">
    <p>&copy; 2026 Moda Urbana. Todos los derechos reservados.</p>
  </div>
</footer>

    <?php wp_footer(); ?>
  </body>
</html>