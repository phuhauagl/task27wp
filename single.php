<?php get_header(); ?>
<main class="p-single">
	<div class="c-title c-title--page">
		<h1>TOPICS</h1>
	</div>
	<div class="l-container">
    <?php get_sidebar(); ?>
		<div class="l-main">
			<h2 class="p-single__title"><?php the_title(); ?></h2>
			<div class="p-single__info">
				<span><?php echo get_the_date('Y/m/d'); ?></span>
				<p>
          <?php
            $categories = get_the_category();
            foreach($categories as $category) { ?>
              <a href="<?php echo get_category_link($category->cat_ID); ?>"><?php echo $category->cat_name ?></a>
          <?php } ?>
				</p>
			</div>

			<div class="p-single__content">
        <?php the_post_thumbnail(); ?>
				<?php the_content(); ?>
			</div>

			<ul class="groupbtn">
				<li class="prev_link"><?php previous_post_link('%link', 'Prev', true ); ?></li>
				<li class="next_link"><?php next_post_link('%link', 'Next', true ); ?></li>
			</ul>

		</div>
	</div>
</main>

<?php get_footer(); ?>