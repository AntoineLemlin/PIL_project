<?php get_header(); ?>
<main>
<?php get_template_part('./template_parts/sidebar'); ?>
<section id="section-intro">
    <h1><?php echo the_field('title_text'); ?></h1>
    <div class="arrow"><a href="#projet"><img src="<?php bloginfo('template_url')?>/assets/img/svg/arrow-down.svg" alt=""></a></div>
    <?php if(get_field('video')): ?>
        <div id="box" class="front-page-container">
            <?php echo get_field('video'); ?>

        </div>
        
      
        

    <?php else: ?>
        <img id="front-page-video" src="<?php bloginfo('template_url'); ?>/assets/img/front-page-image.jpg" alt="front image">
    <?php endif; ?>
      
</section>

<section class="intro-text">
    <div class="texte"><p><?php echo the_field('introduction'); ?></p></div>
       <div class="installation">
           <h3><?php echo the_field('titre'); ?></h3>
           <?php if( have_rows('installation') ): ?>
           <ul>
               <?php while( have_rows('installation') ) : the_row(); ?>

                <li><?php echo the_sub_field('item'); ?></li>

                <?php endwhile; ?>
           </ul>

           <?php endif; ?>
       </div>
       <div class="lieu-travail">
           <h3><?php echo the_field('titre-travail'); ?></h3>
           <?php if( have_rows('travail') ): ?>
           <ul>
               <?php while( have_rows('travail') ) : the_row(); ?>

                <li><?php echo the_sub_field('item'); ?></li>

                <?php endwhile; ?>
           </ul>

           <?php endif; ?>
       </div>
</section>

    <div class="text-scroll">
        <h2>30+ entreprises / 400+ personnes / 35</h2>
    </div>

<section id="projet" class="projet">
    <h2>Vous avez un projet <span>audiovisuel ou digital ?</span></h2>

        <div class="container">
            <p>Une entreprise du Pôle peut vous aider !</p>
            <div class="cards">
                <?php
                    $terms = get_terms( array(
                    'taxonomy' => 'categories',
                    'hide_empty' => false,
                    'number' => '5'
                ) );
             foreach($terms as $cat){?>
                <div class="card">
                    <div class="company-logo"><img src="<?php echo bloginfo('url') . '/wp-content/uploads/2021/09/cat-' . $cat->slug .  '.svg' ?>" alt=""></div>
                    <a href="<?php echo get_term_link($cat) ?>"><h4><?php echo $cat->name ?> <span>(<?php echo $cat->count ?>)</span></h4></a>
                </div>

                <?php }?>

                <div class="card">
                    <div class="container">
                        <img src="<?php echo bloginfo('url') . '/wp-content/uploads/2021/09/cat-digital.svg' ?>" alt="">
                        <h4>Voir toutes les entreprises</h4>
                    </div>
                </div>
            </div>

    </div>
</section>

    <section class="formations">
        <div class="container">
            <?php $image = get_field('image-formation'); ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />            <div class="texte-formations">
                <h2><?php echo the_field('titre-formation'); ?></h2>
                <h4><?php echo the_field('introduction-formation'); ?></h4>
                <p><?php echo the_field('texte-formation'); ?></p>
                <ul>
                <?php if( have_rows('liste-formation') ): ?>
           <ul>
               <?php while( have_rows('liste-formation') ) : the_row(); ?>

                <li><?php echo the_sub_field('item'); ?></li>

                <?php endwhile; ?>
           </ul>

           <?php endif; ?>
                </ul>

                <a href="<?php echo the_field('lien_bouton'); ?>">Voir le site ACA +</a>
            </div>
        </div>
    </section>

    <section class="entreprises">
        <h3>Les entreprises</h3>

        <ul>
            <?php 
            $args = array(  
        'post_type' => 'entreprises',
        'posts_per_page' => 28,
    );

    $loop = new WP_Query( $args );

    if($loop->have_posts()) : while($loop->have_posts()): $loop->the_post();
    ?> 
    <li><?php the_title(); ?></li>
<?php
endwhile;

else:
    ?> <h1>No posts</h1>
    <?php
endif;
     ?>
        </ul>
    </section>
    <?php get_template_part('./template_parts/cookies'); ?>
</main>
<?php get_footer(); ?>