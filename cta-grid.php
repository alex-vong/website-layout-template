<inner-column>
	<section class="cta-container cta">
		<?php 
			$ctaContent = [
						"img" => 'https://peprojects.dev/images/landscape.jpg',
						"header" => 'This module is a "call to action."',
						"text" => 'This is a pretty standard part of any website. It usually features some image, heading, description, and a button.',
						"button" => "Here's the action!",
					];
			
			for ($index = 0; $index < 3; $index++) { ?>
			
			<section class="cta-Card">	
				<section class="cta-image">
					<picture>
						<img src="<?=$ctaContent["img"]?>" alt="cta-image-placeholder">
					</picture>
				</section>

				<section class="cta-text">
					<h2 class="desc-fs">
						<?=$ctaContent["header"]?>
					</h2>
					<p class="text-fs">
						<?=$ctaContent["text"]?>
					</p>

					<button>
						<a href="" class="button link-fs"><?=$ctaContent["button"]?></a>
					</button>
				</section>

			</section>

		 <?php } ?>

	
	</section>

</inner-column>