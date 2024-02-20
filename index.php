<?php get_header(); ?>

<main id="main">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<?php if (is_single() || is_page()) : ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header>
						<?php the_category(); ?>
						<h1><?php the_title(); ?></h1>
						<p><?php the_author(); ?></p>
						<p><?php the_date(); ?></p>
					</header>
					<div>
						<?php the_content(); ?>
					</div>
					<footer>
						<?php the_tags(); ?>
					</footer>
				</article>

			<?php else : ?>

				<?php if (is_search()) : ?>
					<h1>Search results for <?php the_search_query(); ?>:</h1>
				<?php endif; ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header>
						<figure><?php the_post_thumbnail(); ?></figure>
						<a href="<?php the_permalink(); ?>">
							<h2><?php the_title(); ?></h2>
						</a>
						<p><?php the_author(); ?></p>
						<p><?php the_date(); ?></p>
					</header>
					<div>
						<?php the_excerpt(); ?>
					</div>
				</article>
		<?php endif; // end content
		endwhile; // close the loop 
		?>

	<?php else : ?>
		<?php if (is_404()) : ?>
			<p>Sorry, we couldn't find your page.</p>
		<?php endif; ?>
	<?php endif; ?>

	<?php get_template_part(
		'template-parts/dialog/dialog',
		null,
		[
			'id'	=> 'my-dialog',
			'content'	=> '<p>Hey there! This is a dialog</p>',
			'button_text' => 'Open dialog box'
		]
	); ?>
</main>
<?php get_footer(); ?>