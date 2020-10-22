<?php
/*
Template Name: Contacts page 
*/
?>
<?php get_header(); ?>
<div id="page-content" class="page-content">
    <div class="container"> 
        <?php the_content(); ?>
            <p>contacts</p>git 
            <?php echo do_shortcode('[contact-form-7 id="6" title="Контактная форма общая"]')?>
    </div>
</div>
<?php get_footer(); ?>
<?php wp_footer() ?>