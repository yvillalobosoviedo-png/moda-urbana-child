<?php get_header(); ?>

<main class="contenido-pagina">
  <?php while ( have_posts() ) : the_post(); ?>

    <section class="politica-contenido seccion">
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </section>

  <?php endwhile; ?>
</main>

<?php get_footer(); ?>