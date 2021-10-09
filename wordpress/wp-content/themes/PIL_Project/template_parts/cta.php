<?php 

$image = get_field('image_de_fond', 'options');
$petitTitre = get_field('petit_titre', 'options');
$grandTitre = get_field('grand_titre', 'options');
$lien = get_field('lien_vers_page', 'options');

?>

<section class="cta-container">
    <a class="cta-link" href="<?php echo $lien; ?>">
        <div class="cta-content">
            <div class="cta-text-container align-left-with-header">
                <h4 class="h4-desktop-negative">
                    <?php echo $petitTitre ?>
                </h4>
                <h2 class="h2-desktop-negative">
                    <?php echo $grandTitre ?>
                </h4>
            </div>
            <div class="cta-image-container">
                <img class="cta-image" src="<?php echo esc_url($image['url']);?>" alt="">
            </div>
        </div>
    </a>
</section>

