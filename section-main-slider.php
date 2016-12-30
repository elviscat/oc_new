<?php
	require_once('class.wordpress_posts.php');
	$wordpress_posts = new WORDPRESS_POSTS();

	ini_set('display_errors', 1);
	error_reporting(~0);


?>



<?php
	
	// SELECT * FROM `wp_posts` WHERE post_type = 'slideshow' AND post_status = 'publish' ORDER BY post_date DESC LIMIT 0,5

	$content_array = $wordpress_posts->getPostSlider('5'); // Slide
	// print_r($content_array);
	// SELECT  a.id, a.post_title, a.post_content, a.post_date, a.post_status, b.term_taxonomy_id, b.object_id FROM `wp_posts` as a, `wp_term_relationships` as b  WHERE b.object_id = a.id AND b.term_taxonomy_id = '5' ORDER BY a.post_date DESC Limit 0, 10
	
	print "\t<section id=\"main-slider\" class=\"no-margin\">\n";
		print "\t\t<div class=\"carousel slide\">\n";
			print "\t\t\t<ol class=\"carousel-indicators\">\n";
	$counter = 0;
	foreach ($content_array as $key => $value) {
		if ( $counter == 0) { 
				print "\t\t\t\t<li data-target=\"#main-slider\" data-slide-to=\"".$counter."\" class=\"active\"></li>\n"; 
		} else {
				print "\t\t\t\t<li data-target=\"#main-slider\" data-slide-to=\"".$counter."\"></li>\n";
		}
		$counter+=1;
	}
			print "\t\t\t</ol>\n";	
			print "\t\t\t<div class=\"carousel-inner\">\n";
			
	$counter = 0;
	foreach ($content_array as $key => $value) {
		
		$PostMeta_List = $wordpress_posts->getPostMeta_List($value['ID']); // Slide
		
		// wpzoom_slide_url
		// _thumbnail_id
		$PostAttachmentContent = array();
		$wpzoom_slide_url = '';
		$thumbnail_id = '';		
		if ( sizeof($PostMeta_List) >= 1 ) {
			// print_r($PostMeta_List);

			
			foreach ($PostMeta_List as $key2 => $value2) {
				// print_r($value2);				
				if ( $value2['meta_key'] == 'wpzoom_slide_url') {
					$wpzoom_slide_url = $value2['meta_value'];
				}			
				if ( $value2['meta_key'] == '_thumbnail_id') {
					$thumbnail_id = $value2['meta_value'];
				}

				
			}			
		}
		# print $wpzoom_slide_url;
		# print $thumbnail_id;
		$PostAttachmentContent = $wordpress_posts->getPostAttachmentContent($thumbnail_id);
		// print_r($PostAttachmentContent);
		// print $PostAttachmentContent[0]['guid'];
		$wpzoom_slide_url = str_replace("http://www.oc.ntu.edu.tw/?p=","",$wpzoom_slide_url);
		
		if ( $counter == 0) { 
				print "\t\t\t\t<div class=\"item active\" style=\"background-image: url(".$PostAttachmentContent[0]['guid'].")\">\n";
		} else {  
				print "\t\t\t\t<div class=\"item\" style=\"background-image: url(".$PostAttachmentContent[0]['guid'].")\">\n";
		}
					print "\t\t\t\t\t<div class=\"container\">\n";
						// print "\t\t\t\t\t<div class=\"container\">\n";
						print "\t\t\t\t\t\t<div class=\"row slide-margin\">\n";
							print "\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n";
								print "\t\t\t\t\t\t\t\t<div class=\"carousel-content\">\n";
									print "\t\t\t\t\t\t\t\t\t<h1 class=\"animation animated-item-1\">".$value['post_title']."</h1>\n";
									print "\t\t\t\t\t\t\t\t\t<h2 class=\"animation animated-item-2\">".$value['post_content']."</h2>\n";
									



									$content_array = $wordpress_posts->getPostContent($wpzoom_slide_url);
									if ( sizeof($content_array) == 1) {
										print "\t\t\t\t\t\t\t\t\t<a class=\"btn-slide animation animated-item-3\" href=\"page.php?p=".$wpzoom_slide_url."\">Read More</a>\n";
									} else {
										// print "\t\t\t\t\t\t\t\t\t<a class=\"btn-slide animation animated-item-3\" href=\"page.php?p=".$wpzoom_slide_url."\">Read More</a>\n";
									}
								print "\t\t\t\t\t\t\t\t</div>\n";
							print "\t\t\t\t\t\t\t</div>\n";
						print "\t\t\t\t\t\t</div>\n";
						// print "\t\t\t\t\t</div>\n";
					print "\t\t\t\t\t</div>\n";
				print "\t\t\t\t</div><!--/.item-->\n";
		$counter+=1;
	}
			print "\t\t\t</div><!--/.carousel-inner-->\n";
		print "\t\t</div><!--/.carousel-->\n";
		print "\t\t<a class=\"prev hidden-xs\" href=\"#main-slider\" data-slide=\"prev\">\n";
			print "\t\t<i class=\"fa fa-chevron-left\"></i>\n";
		print "\t\t</a>\n";
		print "\t\t<a class=\"next hidden-xs\" href=\"#main-slider\" data-slide=\"next\">\n";
			print "\t\t\t<i class=\"fa fa-chevron-right\"></i>\n";
		print "\t\t</a>\n";
	print "\t</section><!--/#main-slider-->\n";
	
	
	
	
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