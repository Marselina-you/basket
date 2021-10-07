<a href="/catalog"><<< Назад</a>
<h1><?=$product['name']?></h1>
<div class="card_product">
				<div class="product_image">
					<image src="/images/<?=$product['id']?>.jpg" />
				</div>
				<div class="product_desc">
					<?=$product['desc']?>					
				</div>
				<div class="price">
					<?=$product['price']?> руб.					
				</div>
				<div class="product_buy">
					<a href="/">Купить</a>
				</div>
</div>