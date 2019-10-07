<div id="contentInside">
	<div class="breadCrumbs">
		<a href="index.php">Главная</a>
	</div>

	<h1>
		<?php echo $categoryName; ?>
	</h1>
	<div>
	<?php foreach ($goods as $good): ?>
		<?php if($good['catid'] == $category) : ?>
			<div class="shortCard">
				<div class="cardImg">
					<img src="<?php echo $good['img']; ?>"/>
				</div>
				<div class="prodName">
					<?php echo $good['name']; ?>
				</div>
				<div class="prodDesc">
					<?php 
						$string = $good['desc'];
						$string = substr($string, 0, 200);
						$string = rtrim($string, "!,.-");
						$string = substr($string, 0, strrpos($string, ' '));
					?>
					<?php echo $string . "... "; ?>
				</div>
				<div class="prodPrice">
					Цена: <?php echo $good['price']; ?>
				</div>
				<a href="index.php?category=<?php echo $category; ?>&id=<?php echo $good['id']; ?>" class="prodMore">
					Подробнее..
				</a>
				<a href="" class="prodMore">
					В корзину
				</a>
			</div>
		<?php endif; ?>
	<?php endforeach; ?>
	</div>
</div>
