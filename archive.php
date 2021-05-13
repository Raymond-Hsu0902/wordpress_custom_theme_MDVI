<?php

get_header('page');
?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <?php get_template_part('includes/section', 'archive'); ?>
        </div>
    </div>

</div>
<div class="col-4">
    <?php if (is_active_sidebar('page-sidebar')) : ?>
        <?php dynamic_sidebar('page-sidebar'); ?>
    <?php endif; ?>
</div>
</div>
</div>


<?php get_footer(); ?>