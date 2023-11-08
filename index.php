<?php ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header>

		<?php if (!(is_front_page() || is_home())) : bloginfo('name');
		else : ?>
			<h1><?php bloginfo('name'); ?></h1>
		<?php endif; ?>

		<p><?php bloginfo('description'); ?></p>
		<?php if (has_nav_menu('main_menu')) : ?>
			<nav><?php wp_nav_menu(array('theme_location' => 'main_menu')); ?></nav>
		<?php endif; ?>

	</header>
	<main id="main">

		<?php if (have_posts()) : ?>
			<section>

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
			</section>
		<?php else : ?>
			<?php if (is_404()) : ?>
				<p>Sorry, we couldn't find your page.</p>
			<?php endif; ?>
		<?php endif; ?>

		<?php get_template_part(
			'partials/dialog/dialog',
			null,
			[
				'id'	=> 'my-dialog',
				'content'	=> '<p>Hey there! This is a dialog</p>',
				'button_text' => 'Open dialog box'
			]
		); ?>
	</main>
	<footer>

	</footer>
	<?php wp_footer(); ?>
</body>

</html>