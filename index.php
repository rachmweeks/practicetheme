<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset = "utf-8">
	<title><?php bloginfo('name');?></title>
	<link href='http://fonts.googleapis.com/css?family=Raleway:800,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>"/>
	
</head>

<body>
	<header>
		<h1><?php bloginfo('name'); ?></h1>
		<h2><?php bloginfo('description');?></h2>
		<nav>
			<ul>
				<li><a href="<?php bloginfo('url');?>">Home</a></li>
				<li>About</li>
			</ul>
		</nav>
	</header>
	<section id="intro">
		<p>This homepage is just the start of many great things to come. May the caffeine and inspiration be with you all.</p>
		<img src="<?php bloginfo('stylesheet_directory');?>/img/nini.jpg" alt="coffee cup">
		<img src="<?php bloginfo('stylesheet_directory');?>/img/coffee.jpg" alt="coffee cup">
		<img src="<?php bloginfo('stylesheet_directory');?>/img/hiro.jpg" alt="coffee cup">
	</section>
	<section>
		<h3>Blogs</h3>
			<?php if(have_posts()) : while(have_posts()) : the_post();?>
				<article>
					<h4><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
					<?php the_content(); ?>
				</article>
			<?php endwhile; else:?>
			<?php endif;?>
	</section>
	<footer>
		<p>Looking forward to working with you all!</p>
	</footer>
</body>

</html>