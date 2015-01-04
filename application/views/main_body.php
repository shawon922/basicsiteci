<div class="fix floatleft promo_box">
	<div class="fix floatleft box1">
		
		<?php echo heading('Ads or Major Category', 3); ?>
	</div>
	
	<div class="fix floatleft box2">
		<?php echo heading('Ads or Major Category', 3); ?>
	</div>
</div>

<div class="fix floatleft maincontent">
	<div class="fix floatleft bx1">		
		<?php echo heading('Category or Featured Products', 3); ?>
	</div>
	<div class="fix floatleft bx2">
		<?php 
			foreach($output as $row)
			{
				$name = $row->name;
				$des = $row->description;
				$price = $row->price;

			}

			echo heading($name, 2);
			echo heading($des, 3);
		?>
	</div>
	<div class="fix floatleft bx3"><?php echo heading('Category or Featured Products', 3); ?></div>
	<div class="fix floatleft bx4"><?php echo heading('Category or Featured Products', 3); ?></div>
	<div class="fix floatleft bx5"><?php echo heading('Category or Featured Products', 3); ?></div>
	<div class="fix floatleft bx6"><?php echo heading('Category or Featured Products', 3); ?></div>
	<div class="fix floatleft bx7"><?php echo heading('Category or Featured Products', 3); ?></div>
	<div class="fix floatleft bx8"><?php echo heading('Category or Featured Products', 3); ?></div>
	<div class="fix floatleft bx9"><?php echo heading('Category or Featured Products', 3); ?></div>
</div>