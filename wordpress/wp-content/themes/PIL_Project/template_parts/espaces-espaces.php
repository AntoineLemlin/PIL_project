<?php
$espaces = get_field('nos_espaces_-_champs_a_remplir');
if ($espaces): ?>

<section class="section-espaces-white">
    <div class="espaces-pagination">
        01
    </div>
    <div class="espaces-description-container align-left-with-header">
        <div class="espaces-title">
            <h1 class="h1-desktop-positive">
                <?php echo $espaces["titre_gauche"]; ?>
            </h1>
            <h4 class="h4-desktop-positive">
                <?php echo $espaces["texte_gauche"]; ?>
            </h4>
        </div>
            
        <div class="espaces-content">
            <div class="espaces-content-texte big_p-desktop-positive">
                <?php echo $espaces["texte_droite"]; ?>
            </div>
            <button type="button" class="espaces-content-button to-contact-page">
                <?php   
                    $url = $espaces['bouton_droite']['url'];
                    $target = 'target="_blank" rel="noopener"';

                    if( $espaces['bouton_droite']['choice'] == 'pagelink' ) {
                        $url = $espaces['bouton_droite']['page_link'];
                        $target = '';
                    }
                ?>
                <a class="button-link" href="<?php echo $url; ?>" <?php echo $target;?> >
                    <?php echo $espaces['bouton_droite']['titre_bouton_droite']; ?> <span class="button-plus">+</span>
                </a>
            </button>
        </div>
    </div>
</section>

<?php endif; ?>