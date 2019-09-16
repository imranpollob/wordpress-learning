<?php get_header(); ?>

<div id="content">

	<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>

        <article <?php post_class(); ?>>
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

            <p><?php the_excerpt(); ?></p>

			<?php the_content(); ?>

            <footer>
                <p class="byline">
                    Author: <a href="<?php get_author_posts_url( $post->post_author ); ?>"><?php the_author(); ?></a> |
                    Date: <?php the_time( 'M. j, Y' ); ?> |
                    Categories: <?php the_category( ', ' ); ?> |
                    Tags: <?php the_tags( '', ', ', '' ); ?>
                </p>
            </footer>
        </article>

	<?php endwhile; else: ?>
        <h2><?php esc_html_e('404 Error', 'phpforwp') ?></h2>
		<p><?php esc_html_e( "Sorry, no content is found", "phpforwp" ) ?></p>

	<?php endif; ?>

</div>

<?php get_footer(); ?>

