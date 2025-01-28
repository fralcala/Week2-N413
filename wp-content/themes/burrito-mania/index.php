<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Burrito Mania</title>
    <?php wp_head() ?>
</head>

<body>

    <nav>
        <ul>
            <li>Home</li>
            <li>Locations</li>
            <li>Menu</li>
        </ul>
    </nav>
    <h1>Burrito Mania</h1>

    <?php
    if (have_posts()) :
        while (have_posts()):
            the_post()
    ?>

            <h4><?php the_title() ?></h4>
            <p><i>By <?php the_author() ?></i> <?php the_date() ?></p>
            <p><?php the_excerpt() ?></p>

    <?php
        endwhile;

    endif;
    ?>

    <?php wp_footer() ?>
</body>

</html>