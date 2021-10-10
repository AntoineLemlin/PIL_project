<?php
$banner = get_field('top_banner_-_champs_a_remplir');
if ($banner): ?>


<section class="espaces-top-banner">
        <h1 class="banner-heading h1-desktop-positive align-left-with-header">
            <?php echo $banner['titre_banner']; ?>
        </h1>
        <div class="banner-image-container">
            <img class="banner-image" src="<?php echo esc_url($banner['image_banner']['url']);?>" alt="front image">
        </div>
</section>

<?php endif; ?>