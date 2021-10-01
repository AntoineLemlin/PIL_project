<?php get_header(); ?>
<main>
<?php get_template_part('./template_parts/sidebar'); ?>
<section id="section-intro">
    <h1>Espaces pour industries créatives</h1>
    <div class="arrow"><img src="<?php bloginfo('template_url')?>/assets/img/svg/arrow-down.svg" alt=""></svg></div>
    <img id="front-page-video" src="<?php bloginfo('template_url'); ?>/assets/img/front-page-image.jpg" alt="front image">
</section>

<section class="intro-text">
    <div class="texte"><p>Le plus grand cluster d'entreprises wallon, dédié à l'audiovisuel, aux métiers du digital, au gaming et à l'AR/VR.</p></div>
       <div class="installation">
           <h3>Installation à la pointe</h3>
           <ul>
               <li>Texte</li>
               <li>Texte</li>
               <li>Texte</li>
           </ul>
       </div>
       <div class="lieu-travail">
           <h3>Plus qu’un lieu de travail</h3>
           <ul>
               <li>Texte</li>
               <li>Texte</li>
               <li>Texte</li>
           </ul>
       </div>
</section>

<div class="text-scroll">
    <h2>30+ entreprises / 400+ personnes / 35</h2>
</div>

<section class="projet">
    <h2>Vous avez un projet <span>audiovisuel ou digital ?</span></h2>

    <div class="container">
        <p>Une entreprise du Pôle peut vous aider !</p>
        <div class="cards">
            <div class="card">
                <div class="company-logo"><img src="<?php echo bloginfo('url') . '/wp-content/uploads/2021/09/cat-image.svg'?>" alt=""></div> 
                <h4>Image <span>(14)</span></h4>
            </div>
            <div class="card">
                <div class="company-logo"><img src="<?php echo bloginfo('url') . '/wp-content/uploads/2021/09/cat-ar-vr.svg'?>" alt=""></div> 
                <h4>Ar / Vr <span>(5)</span></h4>
            </div>
            <div class="card">
            <div class="company-logo"><img src="<?php echo bloginfo('url') . '/wp-content/uploads/2021/09/cat-son.svg'?>" alt=""></div> 
                <h4>Son <span>(8)</span></h4>
            </div>
            <div class="card">
            <div class="company-logo"><img src="<?php echo bloginfo('url') . '/wp-content/uploads/2021/09/cat-digital.svg'?>" alt=""></div> 
                <h4>Digital <span>(23)</span></h4>
            </div>
            <div class="card">
            <div class="company-logo"><img src="<?php echo bloginfo('url') . '/wp-content/uploads/2021/09/cat-digital-2.svg'?>" alt=""></div> 
                <h4>Digital <span>(23)</span></h4>
            </div>
            <div class="card">
                <div class="container">
                    <img src="<?php echo bloginfo('url') . '/wp-content/uploads/2021/09/cat-digital.svg'?>" alt="">
                    <h4>Voir toutes les entreprises</h4>
                </div>
            </div>  
        </div>

    </div>
</section>
</main>
<?php get_footer(); ?>
