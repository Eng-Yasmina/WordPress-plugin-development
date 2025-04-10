<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WordPress Theme Test</title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/editor-style.css">
</head>
<body>
    <header>
        <h1>Welcome to My WordPress Theme</h1>
    </header>
    <main>
        <article>
            <h2>Sample Post Title</h2>
            <p>This is a sample post content. You can add your own content here.</p>
        </article>
    </main>
    <aside>
        <h2>Sidebar</h2>
        <p>This is a sample sidebar content. You can add widgets here.</p>
    </aside>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> My WordPress Theme</p>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>









