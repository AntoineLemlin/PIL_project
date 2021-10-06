<?php
/* Template Name: Pole */
?>
<?php get_header(); ?>
<?php
$title = get_field('title');
$introduction = get_field('introduction');
$teamTitle = get_field('team_title');
// Display each images of members from DB.
$actusTitle = get_field('title_actus');
$facebook = get_field('facebook');
$followUs = get_field('follow_us');
$carouselActus = '';
?>
<main class="pagePoleContainer">
    <?php get_template_part('./template_parts/sidebar'); ?>
    <?php get_template_part('./template_parts/arrow'); ?>
    <!-- // Same acf from homepage IMG mask. Or videos. -->
    <?php get_template_part(''); ?>

    <div class="titleDescr">
        <h1 class="title"><?php echo $title; ?></h1>
        <h3 class="description"><?php echo $introduction; ?></h3>
    </div>
    <!-- Same ACF of home page VR mask img -->
    <img src="/wp-content/uploads/2021/10/Mask-Group-98@2x-2048x825.jpg" alt="" width="1658" height="668">

    <!-- Repeated carousel from front-page -->
    <!-- Carousel acf from homepage. (js part from Antoine). -->
    <?php get_template_part('./template_parts/scroll-text'); ?>
    <div class="carousel"></div>
    <div class="teamPicsInfos">
        <h2 class="team"><?php echo $teamTitle; ?></h2>
        <img src="/wp-content/uploads/2021/10/formations-photo-615x1024.jpg" alt="" width="450" height="540">
        <!-- Under image of team member > infos mail, role, lastnameH3 -->
        <div class="infosOnClick">
            <h3 class="teamName">ACF Esther</h3>
            <h4 class="teamRole">ACF Administratif</h4>
            <h4 class="teamMail">ACF MailUser@gmail.com</h4>
        </div>
    </div>
    <h2 class="actus"><?php echo $actusTitle ?></h2>
    <!-- With actus come an other carousel with cards 450Wx435H with news of facebook entreprises pages. -->
    <a class="ctaFollowFacebook" href="<?php echo $facebook; ?>"><?php echo $followUs; ?><img src="" alt=""></a>
    <!-- CTA "Vous êtes intéressés par... un bureau?" -->



</main>


<?php get_footer(); ?>