<?php
/*
Template Name: Homepage Template
*/
?>

<?php get_template_part('templates/page', 'header'); ?>

<div id="carousel" class="carousel slide center" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carousel" data-slide-to="0" class="active"></li>
		<li data-target="#carousel" data-slide-to="1"></li>
		<li data-target="#carousel" data-slide-to="2"></li>
	</ol>

	<div class="carousel-inner">
		<div class="item active">
			<img src="http://fc03.deviantart.net/fs70/i/2011/170/3/1/geek_for_hire___wallpaper_by_masonpelt-d3issp4.jpg" alt="bg1">
		</div>
		<div class="item">
			<img src="http://www.mrwallpaper.com/wallpapers/Man-Woman-Geek-1920x1200.jpg" alt="bg2">
		</div>
		<div class="item">
			<img src="http://ihaveapc.com/wp-content/uploads/2011/01/Geek_by_Baddie.png" alt="cupcakes 1">
		</div>
	</div>
	<a href="#carousel" data-slide="prev" class="left carousel-control">
		<span class="glyphicon glyphicon-chevron-left"></span>
	</a>
	<a href="#carousel" data-slide="next" class="right carousel-control">
		<span class="glyphicon glyphicon-chevron-right"></span>
	</a>
</div>


<?php get_template_part('templates/content', 'page'); ?>
<?php get_template_part('templates/page', 'footer'); ?>
