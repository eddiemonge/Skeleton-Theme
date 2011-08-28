<?php /* Template Name: Archives */ ?>
<?php get_header(); ?>

<section id="primary">
	<div id="content" role="main">
		<header class="page-header page">
			<h2 class="post-title"><?php the_title(); ?></h2>
		</header>

		<section id="top" class="post archives-page">
			<nav id="archive-nav">
				<ul>
					<li>Browse by: </li>
					<li><a href="#archive-category">Categories</a></li>
					<li><a href="#archive-date">Monthly</a></li>
					<li><a href="#archive-author">Authors</a></li>
					<li><a href="#archive-pages">Pages</a></li>
				</ul>
			</nav>
			
			<hr />

			<?php wp_tag_cloud(); ?>
		</section>

		
		<section id="archive-category" class="post archives-page">
			<h3>Archives by Category:</h3>
			<ul>
				 <?php wp_list_categories(array('show_count' => true, 'title_li' => null)); ?>
			</ul>
			<a href="#top" class="nav-to-top">Back to the top</a>
		</section>

		<section id="archive-date" class="post archives-page">
			<h3>Archives by Date:</h3>
			<ul>
				<?php wp_get_archives('show_post_count=true'); ?>
			</ul>
			<a href="#top" class="nav-to-top">Back to the top</a>
		</section>

		<section id="archive-author" class="post archives-page">
			<h3>Archives by Author:</h3>
			<ul>
				<?php wp_list_authors(array('show_fullname' => true, 'optioncount' => true) ); ?>
			</ul>
			<a href="#top" class="nav-to-top">Back to the top</a>
		</section>

		<section id="archive-pages" class="post archives-page">
			<h3>Pages:</h3>
			<ul>
				<?php wp_list_pages('title_li='); ?>
			</ul>
			<a href="#top" class="nav-to-top">Back to the top</a>
		</section>

	</div>

	<?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>
