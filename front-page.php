<?php get_header(); ?>

<main>
  <section id="inicio" class="hero">
    <div class="hero-texto">
      <h1 class="hero-title">Vístete<br /><span>de calle.</span></h1>
      <span class="hero-stroke"></span>
      <p class="hero-subtitle">
        Ropa urbana diseñada para quienes viven la ciudad a su manera.
      </p>
      <a href="#servicios" class="btn">Ver colección</a>
    </div>
    <figure class="hero-figure">
      <picture>
        <source media="(min-width: 896px)" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/hero-desk.webp" />
        <source media="(min-width: 640px)" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/hero-tablet.webp" />
        <img
          src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/hero-mobile.webp"
          width="1024"
          height="1536"
          fetchpriority="high"
          alt="Joven sentado frente a un muro con grafiti, con hoodie negro, pantalón cargo y sneakers, junto a un skate"
        />
      </picture>
      <figcaption class="sello">Nueva colección 2026</figcaption>
    </figure>
  </section>

  <div class="cinta" aria-hidden="true">
    <div class="cinta-pista">
      <p class="cinta-grupo">
        <span>Hoodies</span><span>Camisetas oversize</span
        ><span>Gorras</span><span>Joggers</span><span>Sneakers</span>
      </p>
      <p class="cinta-grupo">
        <span>Hoodies</span><span>Camisetas oversize</span
        ><span>Gorras</span><span>Joggers</span><span>Sneakers</span>
      </p>
    </div>
  </div>

  <section id="nosotros" class="seccion seccion-superficie">
    <div class="nosotros">
      <div>
        <h2>Nosotros</h2>
        <p class="destacado">
          Moda Urbana nace del arte callejero, el skate y el hip-hop.
          Hacemos ropa para quien no pide permiso para destacar.
        </p>
        <p>
          Somos una tienda especializada en ropa y accesorios streetwear:
          hoodies, camisetas oversize, gorras, joggers y sneakers, con
          diseños propios y actualizados a las tendencias.
        </p>
      </div>
      <div class="pilares">
        <article class="pilar">
          <h3>Visión</h3>
          <p>
            Ser la tienda en línea de referencia para quienes buscan prendas
            urbanas con diseños originales y actuales, marcando tendencia en
            moda streetwear.
          </p>
        </article>
        <article class="pilar pilar-alt">
          <h3>Misión</h3>
          <p>
            Vender ropa y accesorios urbanos de calidad, con diseños
            propios, ofreciendo un catálogo fácil de explorar y comprar
            desde el sitio web.
          </p>
        </article>
      </div>
    </div>
  </section>

  <section id="servicios" class="seccion">
    <h2>Servicios</h2>
    <p>Conoce nuestras colecciones y catálogo de prendas urbanas.</p>
    <ul class="tarjetas">
      <li>
        <article class="tarjeta">
          <img
            src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/hoodies.webp"
            width="800"
            height="600"
            loading="lazy"
            alt=""
          />
          <h3>Hoodies</h3>
          <p>Estampados propios, corte oversize.</p>
          <button
            type="button"
            class="btn-categoria"
            aria-expanded="false"
            aria-controls="productos-hoodies"
            aria-label="Ver productos de hoodies"
          >
            Ver productos
          </button>
        </article>
      </li>
      <li>
        <article class="tarjeta">
          <img
            src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/camisetas.webp"
            width="800"
            height="600"
            loading="lazy"
            alt=""
          />
          <h3>Camisetas</h3>
          <p>Gráficas inspiradas en arte callejero.</p>
          <button
            type="button"
            class="btn-categoria"
            aria-expanded="false"
            aria-controls="productos-camisetas"
            aria-label="Ver productos de camisetas"
          >
            Ver productos
          </button>
        </article>
      </li>
      <li>
        <article class="tarjeta">
          <img
            src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/gorras.webp"
            width="800"
            height="600"
            loading="lazy"
            alt=""
          />
          <h3>Gorras</h3>
          <p>Snapback y trucker, edición limitada.</p>
          <button
            type="button"
            class="btn-categoria"
            aria-expanded="false"
            aria-controls="productos-gorras"
            aria-label="Ver productos de gorras"
          >
            Ver productos
          </button>
        </article>
      </li>
      <li>
        <article class="tarjeta">
          <img
            src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/joggers.webp"
            width="800"
            height="600"
            loading="lazy"
            alt=""
          />
          <h3>Joggers</h3>
          <p>Cortes cargo y holgados para moverte sin límites.</p>
          <button
            type="button"
            class="btn-categoria"
            aria-expanded="false"
            aria-controls="productos-joggers"
            aria-label="Ver productos de joggers"
          >
            Ver productos
          </button>
        </article>
      </li>
      <li>
        <article class="tarjeta">
          <img
            src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/sneakers.webp"
            width="800"
            height="600"
            loading="lazy"
            alt=""
          />
          <h3>Sneakers</h3>
          <p>Colaboraciones exclusivas de temporada.</p>
          <button
            type="button"
            class="btn-categoria"
            aria-expanded="false"
            aria-controls="productos-sneakers"
            aria-label="Ver productos de sneakers"
          >
            Ver productos
          </button>
        </article>
      </li>
      <li>
        <article class="tarjeta">
          <img
            src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/accesorios.webp"
            width="800"
            height="600"
            loading="lazy"
            alt=""
          />
          <h3>Accesorios</h3>
          <p>Mochilas, medias y detalles para completar tu look.</p>
          <button
            type="button"
            class="btn-categoria"
            aria-expanded="false"
            aria-controls="productos-accesorios"
            aria-label="Ver productos de accesorios"
          >
            Ver productos
          </button>
        </article>
      </li>
    </ul>

    <div class="productos" id="productos">
      <div class="productos-grupo" id="productos-hoodies" hidden>
        <div class="productos-cabecera">
          <h3 tabindex="-1">Hoodies</h3>
          <button type="button" class="btn-cerrar-productos">
            Ocultar productos
          </button>
        </div>
        <ul class="productos-lista">
          <li>
            <article class="producto">
              <img
                src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/HoodieOversizeNegro.webp"
                width="800"
                height="600"
                loading="lazy"
                alt=""
              />
              <h4>Hoodie Oversize Negro</h4>
              <p>Algodón pesado, capucha doble y estampado frontal.</p>
              <p class="producto-precio">₡22&nbsp;500</p>
            </article>
          </li>
          <li>
            <article class="producto">
              <img
                src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/HoodieGraffiti.webp"
                width="800"
                height="600"
                loading="lazy"
                alt=""
              />
              <h4>Hoodie Graffiti</h4>
              <p>Estampado inspirado en los murales de la ciudad.</p>
              <p class="producto-precio">₡24&nbsp;000</p>
            </article>
          </li>
          <li>
            <article class="producto">
              <img
                src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/HoodieZipUrbano.webp"
                width="800"
                height="600"
                loading="lazy"
                alt=""
              />
              <h4>Hoodie Zip Urbano</h4>
              <p>Cierre completo y bolsillos amplios.</p>
              <p class="producto-precio">₡26&nbsp;000</p>
            </article>
          </li>
        </ul>
      </div>

      <div class="productos-grupo" id="productos-camisetas" hidden>
        <div class="productos-cabecera">
          <h3 tabindex="-1">Camisetas</h3>
          <button type="button" class="btn-cerrar-productos">
            Ocultar productos
          </button>
        </div>
        <ul class="productos-lista">
          <li>
            <article class="producto">
              <img
                src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/CamisetaOversizeBasica.webp"
                width="800"
                height="600"
                loading="lazy"
                alt=""
              />
              <h4>Camiseta Oversize Básica</h4>
              <p>Corte holgado en algodón suave.</p>
              <p class="producto-precio">₡11&nbsp;000</p>
            </article>
          </li>
          <li>
            <article class="producto">
              <img
                src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/CamisetaStreetArt.webp"
                width="800"
                height="600"
                loading="lazy"
                alt=""
              />
              <h4>Camiseta Street Art</h4>
              <p>Gráfica grande en la espalda.</p>
              <p class="producto-precio">₡13&nbsp;000</p>
            </article>
          </li>
          <li>
            <article class="producto">
              <img
                src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/CamisetaSkateClub.webp"
                width="800"
                height="600"
                loading="lazy"
                alt=""
              />
              <h4>Camiseta Skate Club</h4>
              <p>Edición limitada con estampado retro.</p>
              <p class="producto-precio">₡12&nbsp;000</p>
            </article>
          </li>
        </ul>
      </div>

      <div class="productos-grupo" id="productos-gorras" hidden>
        <div class="productos-cabecera">
          <h3 tabindex="-1">Gorras</h3>
          <button type="button" class="btn-cerrar-productos">
            Ocultar productos
          </button>
        </div>
        <ul class="productos-lista">
          <li>
            <article class="producto">
              <img
                src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/SnapbackClasica.webp"
                width="800"
                height="600"
                loading="lazy"
                alt=""
              />
              <h4>Snapback Clásica</h4>
              <p>Visera plana y cierre ajustable.</p>
              <p class="producto-precio">₡10&nbsp;000</p>
            </article>
          </li>
          <li>
            <article class="producto">
              <img
                src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/TruckerMalla.webp"
                width="800"
                height="600"
                loading="lazy"
                alt=""
              />
              <h4>Trucker de Malla</h4>
              <p>Ligera y ventilada para el verano.</p>
              <p class="producto-precio">₡11&nbsp;000</p>
            </article>
          </li>
          <li>
            <article class="producto">
              <img
                src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/GorraEdicionLimitada.webp"
                width="800"
                height="600"
                loading="lazy"
                alt=""
              />
              <h4>Gorra Edición Limitada</h4>
              <p>Bordado exclusivo de temporada.</p>
              <p class="producto-precio">₡14&nbsp;000</p>
            </article>
          </li>
        </ul>
      </div>

      <div class="productos-grupo" id="productos-joggers" hidden>
        <div class="productos-cabecera">
          <h3 tabindex="-1">Joggers</h3>
          <button type="button" class="btn-cerrar-productos">
            Ocultar productos
          </button>
        </div>
        <ul class="productos-lista">
          <li>
            <article class="producto">
              <img
                src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/JoggerCargoNegro.webp"
                width="800"
                height="600"
                loading="lazy"
                alt=""
              />
              <h4>Jogger Cargo Negro</h4>
              <p>Bolsillos laterales y puño ajustable.</p>
              <p class="producto-precio">₡19&nbsp;000</p>
            </article>
          </li>
          <li>
            <article class="producto">
              <img
                src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/JoggerHolgadoGris.webp"
                width="800"
                height="600"
                loading="lazy"
                alt=""
              />
              <h4>Jogger Holgado Gris</h4>
              <p>Tela gruesa y cintura elástica.</p>
              <p class="producto-precio">₡17&nbsp;500</p>
            </article>
          </li>
          <li>
            <article class="producto">
              <img
                src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/JoggerTelaLigera.webp"
                width="800"
                height="600"
                loading="lazy"
                alt=""
              />
              <h4>Jogger Tela Ligera</h4>
              <p>Cómodo para moverte todo el día.</p>
              <p class="producto-precio">₡18&nbsp;000</p>
            </article>
          </li>
        </ul>
      </div>

      <div class="productos-grupo" id="productos-sneakers" hidden>
        <div class="productos-cabecera">
          <h3 tabindex="-1">Sneakers</h3>
          <button type="button" class="btn-cerrar-productos">
            Ocultar productos
          </button>
        </div>
        <ul class="productos-lista">
          <li>
            <article class="producto">
              <img
                src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/SneakerUrbanoLow.webp"
                width="800"
                height="600"
                loading="lazy"
                alt=""
              />
              <h4>Sneaker Urbano Low</h4>
              <p>Suela gruesa y amortiguación suave.</p>
              <p class="producto-precio">₡39&nbsp;500</p>
            </article>
          </li>
          <li>
            <article class="producto">
              <img
                src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/SneakerColabTemporada.webp"
                width="800"
                height="600"
                loading="lazy"
                alt=""
              />
              <h4>Sneaker Colab de Temporada</h4>
              <p>Diseño exclusivo en tirada corta.</p>
              <p class="producto-precio">₡44&nbsp;500</p>
            </article>
          </li>
          <li>
            <article class="producto">
              <img
                src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/SneakerSkate.webp"
                width="800"
                height="600"
                loading="lazy"
                alt=""
              />
              <h4>Sneaker Skate</h4>
              <p>Refuerzos en la punta y el talón.</p>
              <p class="producto-precio">₡37&nbsp;500</p>
            </article>
          </li>
        </ul>
      </div>

      <div class="productos-grupo" id="productos-accesorios" hidden>
        <div class="productos-cabecera">
          <h3 tabindex="-1">Accesorios</h3>
          <button type="button" class="btn-cerrar-productos">
            Ocultar productos
          </button>
        </div>
        <ul class="productos-lista">
          <li>
            <article class="producto">
              <img
                src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/MochilaUrbana.webp"
                width="800"
                height="600"
                loading="lazy"
                alt=""
              />
              <h4>Mochila Urbana</h4>
              <p>Compartimento para laptop y bolsillos laterales.</p>
              <p class="producto-precio">₡17&nbsp;000</p>
            </article>
          </li>
          <li>
            <article class="producto">
              <img
                src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/PackMedias.webp"
                width="800"
                height="600"
                loading="lazy"
                alt=""
              />
              <h4>Pack de Medias</h4>
              <p>Tres pares de caña media.</p>
              <p class="producto-precio">₡6&nbsp;000</p>
            </article>
          </li>
          <li>
            <article class="producto">
              <img
                src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/RinoneraStreet.webp"
                width="800"
                height="600"
                loading="lazy"
                alt=""
              />
              <h4>Riñonera Street</h4>
              <p>Cierre doble y correa ajustable.</p>
              <p class="producto-precio">₡9&nbsp;000</p>
            </article>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <section id="contacto" class="seccion seccion-oscura">
    <div class="contacto-grid">
      <div class="contacto-info">
        <h2>Contacto</h2>
        <p>Escríbenos y síguenos en nuestras redes.</p>
        <a class="correo" href="mailto:hola@modaurbana.example"
          >hola@modaurbana.example</a
        >
        <ul class="redes">
          <li><a href="https://www.instagram.com/">Instagram</a></li>
          <li><a href="https://www.tiktok.com/">TikTok</a></li>
          <li><a href="https://www.whatsapp.com/">WhatsApp</a></li>
        </ul>
      </div>

      <div class="contacto-formulario">
        <?php
        // Formulario de Contact Form 7 (reemplaza el formulario de práctica en JavaScript).
        // title= debe coincidir con el título del formulario en Contacto > Formularios de contacto.
        // html_class= reutiliza el estilo .formulario del tema padre.
        echo do_shortcode( '[contact-form-7 title="Formulario Moda Urbana" html_class="formulario"]' );
        ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
