<link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet">
<?php
    get_header();
?>

<div id="main-container">
    <?php get_template_part('posts', 'page') ?>
    <?php
        get_sidebar();
    ?>
</div>

<?php
    get_footer();
?>