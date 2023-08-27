<?php get_header(); ?>

    <div class="container">
        <div class="row">
            <section class="main col-md-8">
                <div class="row titulo-seccion">
                    <div class="col-md-12">
                        <h3>Novedades</h3>
                    </div>
                </div>
                <div class="row posts">

                    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
                        <article class="col-sm-6 post">
                            <div class="contenedor">
                                <div class="thumb">
                                    <a href="<?php the_permalink();?>">
                                        <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'homepage-thumb' ); } ?>
                                    </a>
                                </div>      
                                <div class="info">
                                    <h2 class="titulo"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                                    <p class="fecha"><?php echo get_the_date();?></p>
                                    <div class="extracto"><?php echo the_excerpt();?> </div>
                                    <div class="categorias">
                                        <?php the_category();?>
                                    </div>
                                </div>
                            
                            </div>
                        </article>
                    <?php endwhile; else: ?> 
                        <article class="col-sm-6 post">
                            <div class="contenedor">
                                <div class="info">
                                    <h2 class="titulo">El post no existe</a></h2>        
                                    <div class="extracto">Revisar que la URL sea correcta</div>
                                </div>
                            </div>
                        </article>
                    <?php endif; ?>

                    
                </div>

                <section class="row paginacion">
                    <div class="col-md-12">
                        <ul>
                            <li class="disabled">Pagina 1 de 4</li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#"> >> Final</a></li>
                        </ul>
                    </div>
                </section>
            </section>

            <?php get_sidebar(); ?>

        </div>
    </div>
    <?php get_sidebar(); ?>

<?php get_footer(); ?>
