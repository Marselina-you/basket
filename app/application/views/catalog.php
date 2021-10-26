<h1><?=$TiteCategory?></h1>
<?

//представление каталога (страница каталога)
foreach($Items as $item)
		{
			if($i%3==0):?> 
			<div style="clear:both;"></div>
			<?endif;?>
			<div class="product">
				<div class="product_image">
					<a href="/product/<?=$item["url"]?>"><image src="/images/<?=$item["id"]?>.jpg" /></a>
				</div>
				<h2>
				<a href='/<?=$item["url"]?>/<?=$item["url"]?>'><?=$item["url"]?></a>
				</h2>
				<div class="product_price">
				<?=$item["price"]?> руб.
				</div>
				<div class="product_buy">
				
						<a href="/catalog?in-cart-product-id=<?=$item["id"]?>">В корзину</a>
					
				</div>
			
			</div>
		<?
			$i++;
		}
		
		
		?>