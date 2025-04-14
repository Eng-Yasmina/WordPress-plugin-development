<?php get_header(); ?>
    <section>
        <h2>Blog Posts</h2>

        <?php if(have_posts()):?>
            <?php //Loop through the posts ?>
            <?php while(have_posts()): the_post();?>
                <?php  //if(get_post_type() === "Books"):?>
                <article>
                    <?php //Template tags : https://developer.wordpress.org/themes/references/list-of-template-tags/ ?>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php the_title('<h2><a href="'.get_permalink().'">','</a></h2>'); ?>
                    <p><?php the_content(); ?></p>
                    <p>Published on: <?php the_date(); ?></p>
                    <p>Author: <?php the_author(); ?></p>
                    <p>Categories: <?php the_category(', '); ?></p>
                    <p>Tags: <?php the_tags('', ', '); ?></p>
                    <p>Comments: <?php comments_number(); ?></p>
                    <p>Post ID: <?php the_ID(); ?></p>
                    <p>Post Type: <?php echo get_post_type(); ?></p>
                    <p>Post Status: <?php echo get_post_status(get_the_ID()); ?></p>
                    <p>Post Excerpt: <?php the_excerpt(); ?></p>
                    <p>Post Thumbnail: <?php the_post_thumbnail(); ?></p>
                    <p>Post Format: <?php get_post_format(); ?></p>
                    <p>Post Link: <a href="<?php the_permalink(); ?>"><?php the_permalink(); ?></a></p>
                    <p>Post Meta: <?php echo get_post_meta(get_the_ID(), 'meta_key', true); ?></p>
                    <p>Post Password Protected: <?php echo post_password_required() ? 'Yes' : 'No'; ?></p>
                    <p>Post Author ID: <?php the_author_meta('ID'); ?></p>
                    <p>Post Author URL: <?php the_author_meta('user_url'); ?></p>
                    <p>Post Author Bio: <?php the_author_meta('description'); ?></p>
                    <p>Post Author Avatar: <?php echo get_avatar(get_the_author_meta('ID')); ?></p>
                    <p>Post Author Posts: <?php echo count_user_posts(get_the_author_meta('ID')); ?></p>
                    <p>Post Author Posts Link: <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php echo get_author_posts_url(get_the_author_meta('ID')); ?></a></p>
                </article>
                <?php //endif; ?>
            <?php endwhile;?>
        <?php else: ?>
            <?php echo 'nope'; ?>
        <?php endif;?>
    </section>
<?php get_sidebar();?>
<?php get_footer(); ?>







<?php if(have_posts()) : ?>
    <?php while(have_posts()) : ?>
        <?php the_post(); ?>
        <article>
        <?php the_title('<h3><a href="'.get_the_permalink().'">','</a></h3>'); ?>
        <?php the_content(); ?>
        <?php the_author(); ?>
        </article>
       
    <?php endwhile; ?>
<?php else : ?>
<?php endif; ?>