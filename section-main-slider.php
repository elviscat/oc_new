<?php
	require_once('class.wordpress_posts.php');
	$wordpress_posts = new WORDPRESS_POSTS();
	ini_set('display_errors', 1);
	error_reporting(~0);


?>



<?php
	
	// SELECT * FROM `wp_posts` WHERE post_type = 'slideshow' AND post_status = 'publish' ORDER BY post_date DESC LIMIT 0,5

	$content_array = $wordpress_posts->getPostContentList('4767', '1'); // 徵人	
	// print_r($content_array);
	// SELECT  a.id, a.post_title, a.post_content, a.post_date, a.post_status, b.term_taxonomy_id, b.object_id FROM `wp_posts` as a, `wp_term_relationships` as b  WHERE b.object_id = a.id AND b.term_taxonomy_id = '5' ORDER BY a.post_date DESC Limit 0, 10
	foreach ($content_array as $key => $value) {

/*
<section id="main-slider" class="no-margin">
<div class="carousel slide">
<ol class="carousel-indicators">
<li data-target="#main-slider" data-slide-to="0" class="active"></li>
<li data-target="#main-slider" data-slide-to="1"></li>
<li data-target="#main-slider" data-slide-to="2"></li>
</ol>
<div class="carousel-inner">

<div class="item active" style="background-image: url(images/slider/bg1.jpg)">
<div class="container">
<div class="row slide-margin">
<div class="col-sm-6">
<div class="carousel-content">
<h1 class="animation animated-item-1">國立臺灣大學海洋研究所海研一號研究船</h1>
<h2 class="animation animated-item-2">台灣海洋探測先鋒</h2>
<a class="btn-slide animation animated-item-3" href="#">Read More</a>
</div>
</div>

<!--
<div class="col-sm-6 hidden-xs animation animated-item-4">
<div class="slider-img">
<img src="images/slider/img1.png" class="img-responsive">
</div>
</div>
-->

</div>
</div>
</div><!--/.item-->

<div class="item" style="background-image: url(images/slider/bg4.jpg)">
<div class="container">
<div class="row slide-margin">
<div class="col-sm-6">
<div class="carousel-content">
<h1 class="animation animated-item-1">國立臺灣大學海洋研究所新一代海氣象浮標觀測系統</h1>
<h2 class="animation animated-item-2">整合海洋所內頂尖電機、資訊、機電整合與浮標施放人才，成功研發出具多個海上海下觀測儀器並通過強颱考驗的新一代浮標系統</h2>
<a class="btn-slide animation animated-item-3" href="#">Read More</a>
</div>
</div>

<!--
<div class="col-sm-6 hidden-xs animation animated-item-4">
<div class="slider-img">
<img src="images/slider/img2.png" class="img-responsive">
</div>
</div>
-->
</div>
</div>
</div><!--/.item-->

<div class="item" style="background-image: url(images/slider/bg5.jpg)">
<div class="container">
<div class="row slide-margin">
<div class="col-sm-6">
<div class="carousel-content">
<h1 class="animation animated-item-1">雙標觀颱</h1>
<h2 class="animation animated-item-2">本所再次於西太平洋施放兩組海氣象觀測浮標並成功蒐集重要海氣象資料</h2>
<a class="btn-slide animation animated-item-3" href="#">Read More</a>
</div>
</div>
<!--
<div class="col-sm-6 hidden-xs animation animated-item-4">
<div class="slider-img">
<img src="images/slider/img3.png" class="img-responsive">
</div>
</div>
-->
</div>
</div>
</div><!--/.item-->
</div><!--/.carousel-inner-->
</div><!--/.carousel-->
<a class="prev hidden-xs" href="#main-slider" data-slide="prev">
<i class="fa fa-chevron-left"></i>
</a>
<a class="next hidden-xs" href="#main-slider" data-slide="next">
<i class="fa fa-chevron-right"></i>
</a>
</section><!--/#main-slider-->

*/

?>