<?php
	if(have_posts()):
while (have_posts()): the_post();?>
<article class="post">
	<header>
		<div class="title">
			<h2><a href="<?= the_permalink(); ?>"><?= the_title(); ?></a></h2>
			<p> <?= the_field('slogan'); ?> </p>
		</div>
		<div class="meta">
			<time class="published" datetime="2015-11-01"><?= the_time('y-m-d'); ?></time>
			<a href="#" class="author"><span class="name"><?= the_author(); ?></span><img src="images/avatar.jpg" alt="" /></a>
		</div>
	</header>
	<?php if(has_post_thumbnail()): ?>
	<a href="#" class="image featured">
	<?= the_post_thumbnail(); ?></a>
	<?php endif; ?>
	<p><?= !is_single() ? the_excerpt() : the_content(); ?></p>
	<footer>
		<ul class="actions">
			<?php if(!is_single()): ?>
			<li><a href="<?= the_permalink(); ?>" class="button big">Continue Reading</a></li>
			<?php endif; ?>
		</ul>
		<ul class="stats">
			<li><a href="#">General</a></li>
			<li><a href="#" class="icon fa-heart">28</a></li>
			<li><a href="#" class="icon fa-comment">128</a></li>
		</ul>
	</footer>
</article>
<?php
	endwhile;
	endif;
?>
<!-- Post -->