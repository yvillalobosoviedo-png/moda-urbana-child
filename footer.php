<?php
// Copia del footer.php del padre, con el área de widgets añadida.
// WordPress usa este archivo en lugar del del padre mientras el hijo esté activo.
?>
<footer>
  <?php if ( is_active_sidebar( 'footer-moda-urbana' ) ) : ?>
    <div class="footer-widgets">
      <?php dynamic_sidebar( 'footer-moda-urbana' ); ?>
    </div>
  <?php endif; ?>

  <p>&copy; 2026 Moda Urbana. Todos los derechos reservados.</p>
</footer>

    <?php wp_footer(); ?>
  </body>
</html>
