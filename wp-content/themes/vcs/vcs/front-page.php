
<?php
    get_header();
    get_template_part('elements/baner');
    get_template_part('elements/fonts');
    get_template_part('elements/images');
    get_template_part('elements/team');
    get_template_part('elements/carusel');
    get_template_part('elements/download');

?>
<div class="section">
    <div class="map-container">
        <?php get_template_part('elements/map') ?>
    </div>
</div>
<?php
get_footer();
 ?>
