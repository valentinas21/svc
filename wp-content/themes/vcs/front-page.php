
<?php
    get_header();
    get_template_part('elements/baner');
    get_template_part('elements/fonts');
    get_template_part('elements/images');
    get_template_part('elements/team');
    get_template_part('elements/carusel');
    get_template_part('elements/download');
    get_template_part('elements/slider');
    get_template_part('elements/about');
    get_template_part('elements/services');
    get_template_part('elements/work');
?>
<div class="section">
    <div class="map-container">
        <?php get_template_part('elements/map') ?>
    </div>
</div>
<?php
get_footer();
 ?>
