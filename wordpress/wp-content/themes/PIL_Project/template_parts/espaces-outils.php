<?php
$outils = get_field('outils_de_production_-_champs_a_remplir');
if ($outils): ?>

<section class="section-outils-black">
    <div class="outils-pagination">
        02
    </div>

    <div class="outils-description-container align-left-with-header">
        <div class="outils-title">
            <h1 class="h1-desktop-negative">
                <?php echo $outils["titre_outils"]; ?>
            </h1>
        </div>
        <div class="outils-content">
            <p class="big_p-desktop-negative">
                <?php echo $outils["texte_outils"]; ?>
            </p>
        </div>
    </div>

    <div class="outils-image-container align-left-with-header">
        <img class="outils-image" src="<?php echo esc_url($outils['image_outils']['url']);?>" alt="outils image">
    </div>

<?php endif; ?>

    <div class="outils-accordeon-container align-left-with-header">
        <?php
        if (have_rows('liste_des_outils')):
            while(have_rows('liste_des_outils')): the_row();
                $outilTitre = get_sub_field('outil_titre');
                $outilTexte = get_sub_field('outil_texte');
                $outilPetitTitre = get_sub_field('outil_petit_titre');
                echo '
                    <article class="outils-article">
                        <div class="article-title-container">
                            <h1 class="h1-desktop-negative article-title-heading">'.
                                $outilTitre
                            .'</h1>
                            <img class="article-title-icon" src="">
                        </div>
                        <div class="article-text-container">
                            <h3 class="h3-desktop-negative">'.
                                $outilTexte
                            .'</h3>
                        </div>
                        <div class="article-description-container">
                            <h4 class="h4-desktop-negative article-description-title">'.
                                $outilPetitTitre
                            .'</h4>
                        </div>';
                if (have_rows('outil_liste_des_equipements')):
                    echo '
                        <div class="big_p-desktop-negative article-description-lists">';
                    while (have_rows('outil_liste_des_equipements')): the_row();
                        $equipement1 = get_sub_field('equipement_1');
                        $equipement2 = get_sub_field('equipement_2');
                        $equipement3 = get_sub_field('equipement_3');
                        $equipement4 = get_sub_field('equipement_4');
                        $equipement5 = get_sub_field('equipement_5');
                        $equipement6 = get_sub_field('equipement_6');
                        $equipement7 = get_sub_field('equipement_7');
                        echo '
                            <ul class="article-description-list">
                                <li>'.$equipement1.'</li>
                                <li>'.$equipement2.'</li>
                                <li>'.$equipement3.'</li>
                                <li>'.$equipement4.'</li>
                                <li>'.$equipement5.'</li>
                                <li>'.$equipement6.'</li>
                                <li>'.$equipement7.'</li>
                            </ul>';
                    endwhile;
                    echo'</div>';
                endif;
                echo '</article>';
            endwhile;
        endif;
        ?>

    </div>
</section>