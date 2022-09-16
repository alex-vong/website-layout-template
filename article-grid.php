<inner-column>
	<section class="ag-container">
		<section class="ag-heading">
			<h2 class="desc-fs">This is an "Article Grid" module. This is it's heading.</h2>

			<p class="text-fs">Again, this is totally made up. It is just a box with boxes in it.</p>
		</section>

		<section class="ag-card-grid">
			
				<?php 

				$gridContent = [
					"head" => "This is the title of an article card",
					"text" => "Here's a little info to help you understand if this is an article you want to read",
					"button" => "Read More!",
				];

				for ($index = 0; $index < 3; $index++) { ?>
				<div class="card-container">
					<div class="grid-card">
						<h3 class="desc-fs"><?=$gridContent["head"]?></h2>
						<p class="text-fs"><?=$gridContent["text"]?></p>
						<button>
							<a href="" class="btn text-fs"><?=$gridContent["button"]?></a>
						</button>
					</div>
				</div>
				<?php }


				?>
			
		</section>
	</section>
</inner-column>