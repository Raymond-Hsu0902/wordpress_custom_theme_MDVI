<?php

get_header('page');
?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h1><?php the_title(); ?></h1>
            <?php get_template_part('includes/section', 'content'); ?>
        </div>
        <div class="col-4">
            <?php if (is_active_sidebar('page-sidebar')) : ?>
                <?php dynamic_sidebar('page-sidebar'); ?>
            <?php endif; ?>
        </div>
    </div>
</div>


<script>
    jQuery(document).ready(function() {
        jQuery('.dropdown-menu > li > .dropdown-menu').parent().addClass('dropdown-submenu').find(' > .dropdown-item').attr('href', 'javascript:;').addClass('dropdown-toggle');
        jQuery('.dropdown-submenu > a').on("click", function(e) {
            var dropdown = $(this).parent().find(' > .show');
            jQuery('.dropdown-submenu .dropdown-menu').not(dropdown).removeClass('show');
            jQuery(this).next('.dropdown-menu').toggleClass('show');
            e.stopPropagation();
        });
        jQuery('.dropdown').on("hidden.bs.dropdown", function() {
            jQuery('.dropdown-menu.show').removeClass('show');
        });
    });
</script>
<?php get_footer(); ?>