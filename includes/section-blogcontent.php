<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        我是blogcontent
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
        <?
        $fname = get_the_author_meta('first_name');
        $lname = get_the_author_meta('last_name');
        echo $fname . ' ' . $lname;
        ?>
<?php endwhile;
endif; ?>