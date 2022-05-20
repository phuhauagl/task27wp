<?php /* Template Name: Service Page */ ?>	
<?php get_header(); ?>
<main class="p-service">
	<div class="l-container">
		<div class="c-title c-title--page">
			<h1>サービス</h1>
		</div>
		<div class="p-service__top">
			<p class="c-label">Smile Service</p>
			<p class="label_content">私たちのサービスは、笑顔をつくります。</p>

			<p class="note">私たち下平会計事務所のすべてのサービスは、個人事業主様や会社の経営者様を笑顔にするものです。<br/>
			笑顔のあるところにはヒトやモノが集まり、組織が活性化します。<br/>
			私たちはこれまで、笑顔のチカラでお客様の成長・発展をサポートしてきました。<br/>
			これから先もすべてのお客様に寄りそい、信頼の笑顔を育んでまいります。</p>
		</div>
		
		<div class="p-service__content">

		<?php $access = get_field('service', 149); ?>
			<?php if($access): ?>
				<?php foreach($access as $item): ?>
					<?php 
						$titleService = $item['service_title'];
						$textService = $item['service_text'];
					?>

					<div class="c-service">
						<h2 class="c-service__title"><span class="c-label c-label--white"><?php echo $titleService ?></span></h2>
						<p><?php echo $textService ?></p>
					</div>
					
				<?php	endforeach ?>
			<?php endif ?>

		</div>
	</div>
</main>

<?php get_footer(); ?>