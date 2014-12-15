<div class="pad-slider">
			<div class="main-slider">
				<ul class="items">
				<?php foreach ($sliderImages AS $sliderImage):?>
					<li>
						<img src="<?php echo $sliderImage["imagePath"] ?> " alt="<?php echo $sliderImage ["imageName"]?>" />
						<div class="slider-banner"><span><?php echo $sliderImage ["caption"] ?></span></div>
						<?php endforeach ?>
					</li>

				</ul>
			</div>
		</div>


		<section class="padsection">
		<div class="container_24">
		<div class="padline2"><div class="lineH"></div></div>
			<div class="grid_24">

			<?php
				$i = 1;
				foreach ( $rolloverImages AS $rolloverImage):?>
				<div class="<?php if ($i == 1){echo "services first";
				}elseif($i == 5){
				echo "services last";
				}else echo "services"; ?>">
					<a href="#">
						<em>
							<img src="<?php echo $rolloverImage["normalImagePath"]?> " alt="">
							<img src="<?php echo $rolloverImage["hoverImagePath"]?> " alt="" class="image-hover">
						</em>
						<span><strong><?php echo $rolloverImage["caption"]?></strong></span>
					</a>
				<?php $i++ ?>
				</div>
				<?php endforeach; ?>
			</div>

			<div class="clear"></div>
			<div class="padline2"><div class="lineH"></div></div>

			<div class="wrapper">
				<?php foreach ($subContent AS $contents):?>
				<div class="grid_8">

					<h2><?php echo $contents["title"] ?></h2>
					<img src="<?php echo $contents["imagePath"] ?>" alt="">
					<p class="pad"><?php echo $contents["content"] ?></p>

				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>