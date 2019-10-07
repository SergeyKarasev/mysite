<div id="contentInside">
	<div class="breadCrumbs">
		<a href="index.php">Главная</a>
		-
		<a href="index.php?category=<?php echo $category; ?>"><?php echo $categoryName; ?></a>
	</div>

	<div>
	<?php foreach ($goods as $good): ?>
		<?php if($good['id'] == $id) : ?>
			<div class="productFlex">
				<div>
					<img src="<?php echo $good['img']; ?>"/>
				</div>
				<div>    
					<div id="productName">
						<?php echo $good['name']; ?>
					</div>
					<div id="productDesc">
						<?php echo $good['desc']; ?>
					</div>
					<div id="productPrice">
						<?php echo $good['price']; ?>
					</div>
					<a href="" class="prodMore">
						В корзину
					</a>
				</div>
			</div>
		<?php endif; ?>
	<?php endforeach; ?>
	</div>
</div>