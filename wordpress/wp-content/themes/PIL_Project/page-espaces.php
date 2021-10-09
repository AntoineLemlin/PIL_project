<?php /* Template Name: Espaces */ ?>

<?php get_header(); ?>

<main>

    <?php get_template_part('./template_parts/sidebar'); ?>

    <?php get_template_part('./template_parts/espaces', 'banner'); ?>

    <?php get_template_part('./template_parts/espaces', 'espaces'); ?>

    <?php get_template_part('./template_parts/espaces', 'outils'); ?>

    <?php get_template_part('./template_parts/cta'); ?>

</main>

<?php get_footer(); ?>