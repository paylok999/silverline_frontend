<?php
$datas = file_get_contents("product_data_features_1404188546.json");

$datas = json_decode($datas);

?>

<?php foreach($datas as $data){ ?>
<div class="boxes">
	<img src="/images/example-product.jpg" class="main-img">
	<p><?php echo $data->item_name ?></p>
	<div class="price-container">
		<span><?php echo $data->pricing[0]->item_price ?></span>
	</div>
	<div class="price-compare">
		<button type="button" class="btn btn-custom ">Compare</button>
	</div>
</div>
<?php } ?>