<?php 
	if(have_posts()):
		while (have_posts()): the_post();?>
	<article class="post">
								<header>
									<div class="title">
										<h2><a href="<?= the_permalink(); ?>"><?= the_title(); ?></a></h2>
										<p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p>
									</div>
									<div class="meta">
										<time class="published"><?= the_time('y-m-d'); ?></time>
										<a href="#" class="author"><span class="name"><?= the_author(); ?></span><img src="images/avatar.jpg" alt="" /></a>
									</div>
								</header>
								<a href="#" class="image featured"><img src="image
								s/pic01.jpg" alt="" /></a>
								<p><?= the_excerpt(); ?></p>
								<footer>
									<ul class="actions">
										<li><a href="#" class="button big">Continue Reading</a></li>
									</ul>
									<ul class="stats">
										<li><a href="<?= the_permalink(); ?>">General</a></li>
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
							