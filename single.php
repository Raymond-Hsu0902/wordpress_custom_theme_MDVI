<?php

get_header();
?>



<div class="container">
    <div class="row">
        <div class="col-md-8 col-12">
            <?php get_template_part('includes/section', 'blogcontent'); ?>
        </div>
        <div class="col-md-4 col-12">
            <?php if (is_active_sidebar('page-sidebar')) : ?>
                <?php dynamic_sidebar('page-sidebar'); ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<div class="container">
    <? get_sidebar(); ?>
</div>

<?php get_footer(); ?>