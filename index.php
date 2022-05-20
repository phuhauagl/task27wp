
<?php get_header(); ?>
<div class="c-mainvisual">
	<div class="l-container">
		<div class="c-mainvisual__inner js-slider">
			<?php
				$post_id = 136;
				$images = get_field("choose_mainvisual", $post_id);
				if ($images): 
			?>
				<?php foreach ($images as $image): ?>
					<a href="#">
						<img src="<?php echo esc_url($image['url']);?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					</a>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</div>
</div>

<main>
	<div class="l-container">
		<div class="c-grouplink">
			<a href="#"><img src="<?php bloginfo('template_directory')?>/img/img_01_no.png" alt="" class="js-imglink"></a>
			<a href="#"><img src="<?php bloginfo('template_directory')?>/img/img_02_no.png" alt="" class="js-imglink"></a>
			<a href="#"><img src="<?php bloginfo('template_directory')?>/img/img_03_no.png" alt="" class="js-imglink"></a>
		</div>

		<div class="p-topics">
			<h2 class="c-title">Topics</h2>
			<?php 
				$args = array(
					'post_type' => 'post',
					'hide_empty' => 0,
					'include' => '2, 3, 4, 5'
				);
				$categories = get_categories($args);
			?>
				<select id="cars" class="c-btn__list" >
					<option class="c-option__all" value="all">All</option>
					<?php foreach($categories as $i): ?>
						<option class="c-option__btn" value="<?php echo $i->term_id ; ?>"><?php echo $i->name ; ?></option>	
					<?php endforeach;?>
				</select>

			<ul class="c-listpost" id = "c-listcurrent">


				
			</ul>

			<div class="l-btn">
				<a href="<?php echo home_url() ?>/topics" class="c-btn c-btn--small">一覧を見る</a>
			</div>
		</div>

		<div class="c-grouplink">
			<a href="#"><img src="<?php bloginfo('template_directory')?>/img/btn_03_no.png" alt="" class="js-imglink"></a>
			<a href="#"><img src="<?php bloginfo('template_directory')?>/img/btn_04_no.png" alt="" class="js-imglink"></a>
		</div>

		<!-- <div class="c-access"> -->
			<?php $access = get_field('add_access_map', $post_id); ?>
			<?php if($access): ?>
				<?php foreach($access as $i): ?>

					<?php 
						$title = esc_attr($i['title_map']);
						$address = esc_attr($i['address_map']);
						$time = esc_attr($i['time_map']);
						$tel = esc_attr($i['tel_map']);
						$fax = esc_attr($i['fax_map']);
						$email = esc_attr($i['email_map']);
						$image = esc_attr($i['image_map']['url']);
						$image_alt = esc_attr($i['image_map']['alt']);
						
					?>

					<div class="c-access">
						<div class="c-access__info">
							<h3 class="c-title c-title--sub"><?php echo $title ?></h3>
							<p class="address"><?php echo $address ?></p>
							<p class="time"><?php echo $time ?></p>
							<br/>
							<p>
								<span class="tel"><?php echo $tel ?></span>
								<span class="fax"><?php echo $fax ?></span>
								<br/>
								<span class="email"><?php echo $email ?></span>
							</p>
						</div>
						<div class="c-access__img">
							<img src="<?php echo $image ?>" alt="<?php echo $image_alt ?>">
						</div>
					</div>
				<?php	endforeach ?>
			<?php endif ?>
		<!-- </div> -->

	</div>
</main>
<div class="loader-container">
		<div class="loader"></div>
	</div>

<?php get_footer(); ?>