
<?php get_header();?>

<body>
	<header>
		<h1><?php bloginfo('name'); ?></h1>
		<h2><?php bloginfo('description');?></h2>
		<nav>
			<?php wp_nav_menu(array('menu' => 'Main Nav')); ?>
		</nav>
	</header>
	<section id="intro">
		<p>This homepage is just the start of many great things to come. May the caffeine and inspiration be with you all.</p>
		<img src="<?php bloginfo('stylesheet_directory');?>/img/nini.jpg" alt="coffee cup">
		<img src="<?php bloginfo('stylesheet_directory');?>/img/coffee.jpg" alt="coffee cup">
		<img src="<?php bloginfo('stylesheet_directory');?>/img/hiro.jpg" alt="coffee cup">
	</section>
	<section id="aside">
		<?php get_sidebar();?>
	</section>
	<section id="blog">
		<h3>Blogs</h3>
			<?php if(have_posts()) : while(have_posts()) : the_post();?>
				<article>
					<h4><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
					<?php the_content(); ?>
				</article>
			<?php endwhile; else:?>
			<?php endif;?>
	</section>
	
	<?php get_footer();?>

