<?php /* Template Name: Espaces */ ?>

<?php get_header(); ?>

<main>
    <?php get_template_part('./template_parts/sidebar'); ?>
    <section class="espaces-top-banner">
        <h1 class="h1-desktop-positive">
            Espaces et outils de production
        </h1>
    </section>

    <section class="section-espaces-white">
        <div class="espaces-pagination">
            01
        </div>
        <div class="espaces-image-container">
            <img class="espaces-image" src="<?php bloginfo('template_url'); ?>/assets/img/Mask Group 92@2x.jpg" alt="front image">
        </div>
        <div class="espaces-description-container align-left-with-header">
            <div class="espaces-title">
                <h1 class="h1-desktop-positive">
                    Nos espaces
                </h1>
                <h4 class="h4-desktop-positive">
                    Des espaces polyvalents de 15 à 1000 m².
                </h4>
            </div>
                
            <div class="espaces-content">
                <p class="big_p-desktop-positive">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum, illo!
                </p>
                <button type="button" class="button-white to-contact-page">
                    Réservez votre espace <span class="button-plus">+</span>
                </button>
            </div>
        </div>
    </section>
    <section class="section-outils-black">
        <div class="outils-pagination">
            02
        </div>
        <div class="outils-description-container align-left-with-header">
            <div class="outils-title">
                <h1 class="h1-desktop-negative">
                    Nos outils de production
                </h1>
            </div>
                
            <div class="outils-content">
                <p class="big_p-desktop-negative">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum, illo!
                </p>
            </div>
        </div>
        <div class="outils-image-container align-left-with-header">
            <img class="outils-image" src="<?php bloginfo('template_url'); ?>/assets/img/Image 63@2x.jpg" alt="front image">
        </div>

        <div class="outils-accordeon-container align-left-with-header">
            <article class="outils-article">
                <div class="article-title-container">
                    <h1 class="h1-desktop-negative article-title-heading">
                        Salle de mixage cinéma
                    </h1>
                    <img class="article-title-icon" src="">
                </div>
                <div class="article-text-container">
                    <h3 class="h3-desktop-negative">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, iste.
                    </h3>
                </div>
                <div class="article-description-container">
                    <h4 class="h4-desktop-negative article-description-title">
                        Equipement
                    </h4>
                    <div class="big_p-desktop-negative article-description-lists">
                        <ul class="article-description-list1">
                            <li>Text</li>
                            <li>Text</li>
                            <li>Text</li>
                            <li>Text</li>
                            <li>Text</li>
                            <li>Text</li>
                            <li>Text</li>
                        </ul>
                        <ul class="article-description-list2">
                        <li>Text</li>
                            <li>Text</li>
                            <li>Text</li>
                            <li>Text</li>
                            <li>Text</li>
                            <li>Text</li>
                            <li>Text</li>
                        </ul>
                    </div>

            </article>
        </div>
    </section>

    <section class="calltoaction align-left-with-header">
        IMPORT HERE CALL TO ACTION N°2
    </section>


</main>


<?php get_footer(); ?>