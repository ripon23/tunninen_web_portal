
<section id="services">
  <div class="container">
    <div class="row"> 
		<article>
		  <div class="post-image">
			<div class="post-heading">
			  <h3><?=$model["title"]?></h3>
                          Published on <?=date('d M, Y',$model["timestamp_create"])?>
			</div>
			<img src="<?=Yii::$app->storage->getImage($model["image_id"])->source;?>" alt="<?=$model["title"]?>" /> 
			</div>
		  <?=$model["text"]?>
		</article>
	</div>
  </div>
</section>
