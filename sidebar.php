<div class="l-sidebar">
  <div class="c-widget">
    <h3 class="c-widget__title">Search</h3>
    <div class="c-search">
      <form action="<?php bloginfo('url') ?>" method="get">
          <input type="search" name="s" id="search" value="" placeholder=""/>
          <input type="hidden" name="post_type" value="post"/>
          <input type="submit" name="search" id="search" value="search" />
          
      </form>
    </div>
  </div>
  <div class="c-widget">
    <h3 class="c-widget__title">Category</h3>
    <ul class="c-list">
    <?php
		$args = array(
			'type'      => 'post',
			'child_of'  => 0,
			'parent'    => '',
			'hide_empty' => 1
		);
		$categories = get_categories( $args );
		foreach ( $categories as $category ) { ?>
			<li>
				<a href="<?php echo get_term_link($category->slug,'category');?>"><?php echo $category->name ;?></a>
			</li>
	<?php } ?>
    </ul>
  </div>
  <div class="c-widget">
    <h3 class="c-widget__title">Archive</h3>
    <ul class="c-list">
		<?php wp_get_archives( array( 
					'type'  =>  'yearly',
					'after' => '年',
		));?>
    </ul>
  </div>
  </div>