<?php /* Template Name: archives */ ?>

<?php get_header(); ?>

<main>

<?php get_template_part('template_parts/sidebar')?>

<div class="widget">
    <h2>Secteurs</h2>
    <?php 
                $args = array(  
            'post_type' => 'entreprises',
            'orderby' => 'menu_order',
            'order' => 'ASC'
        );
    
        $loop = new WP_Query( $args );  ?>
        <?php
        $terms = get_terms( array(
        'taxonomy' => 'secteurs',
        'hide_empty' => false
    ) );
    foreach($terms as $cat){?>
    <ul>
        <li><?php echo $cat->name ?></li>
    </ul>
    
    <?php }?>
</div>

    <section id="companies" class="companies">
    <input class="search" type="text" id="site-search" name="q"
       aria-label="Search through site content">
    <?php if($loop->have_posts()) : while($loop->have_posts()): $loop->the_post();
        $image = get_field('image', get_the_ID());
        ?> 
        <div id="company" class="company">
            <div id="title" class="title">
                <h3 class="title-filter"><?php echo the_title(); ?></h3>
                <img class="arrow-panel" src="<?php bloginfo('template_url')?>/assets/img/svg/arrow-down.svg" alt="">
            </div>
            <div class="panel">
                   <img src="<?php echo esc_url($image['url']); ?>" alt="">
                   <div class="texte">
                       <h4><?php the_field('telephone'); ?></h4>
                       <h4><?php the_field('email'); ?></h4>
                       <h4 class="website"><?php the_field('website'); ?></h4>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    </section>
    
<?php
else:
    ?> <h1>No posts</h1>
    <?php
endif;
     ?>


</main>

<?php get_footer(); ?>