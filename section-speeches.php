<?php
	require_once('class.wordpress_posts.php');
	$wordpress_posts = new WORDPRESS_POSTS();
	ini_set('display_errors', 1);
	error_reporting(~0);


?>
	


	<section id="speeches">
		<div class="container">
			<div class="center wow fadeInDown">
				<h2>演講公告</h2>
				<p class="lead">站在巨人的肩膀上，看見更遠的方向，感受科學最深沈的浩瀚</p>
			</div> 
			<div class="row">
<?php
	$content_array = $recent_works->getPostContentList('12', '5'); // 演講公告	
	// print_r($content_array);
	// SELECT  a.id, a.post_title, a.post_content, a.post_date, a.post_status, b.term_taxonomy_id, b.object_id FROM `wp_posts` as a, `wp_term_relationships` as b  WHERE b.object_id = a.id AND b.term_taxonomy_id = '5' ORDER BY a.post_date DESC Limit 0, 10

	
	// print "<div class=\"col-xs-12 col-sm-8 wow fadeInDown\">\n";
	print "<div class=\"col-xs-12 col-sm-12 wow fadeInDown\">\n";
		print "<div class=\"tab-wrap\">\n";
			print "<div class=\"media\">\n";
				print "<div class=\"parrent pull-left\">\n";
					print "<ul class=\"nav nav-tabs nav-stacked\">\n";
	
	$counter = 1;
	foreach ($content_array as $key => $value) {
		// print $key."\n";
		// print_r($value);
		
		$post_id = $value['object_id'];
		$post_title = $value['post_title'];
		$post_content = $value['post_content'];
		$post_date = $value['post_date'];
		
		
		$post_title = strip_tags($post_title);
		// $post_title = substr($post_title, 0, 52).'...';
		// decreated on 161121-1030
		// REF
		// 解決PHP substr切割中文字問題 @ Bruse的日誌 __ 隨意窩 Xuite日誌.html 
		// http://blog.xuite.net/chenbruse/bruse/13351768-%E8%A7%A3%E6%B1%BAPHP+substr%E5%88%87%E5%89%B2%E4%B8%AD%E6%96%87%E5%AD%97%E5%95%8F%E9%A1%8C
		// echo mb_substr($content,0,15,"UTF-8");
		// 
		$post_title = mb_substr($post_title,0,40,"UTF-8").'...';
		
		$img_address = "";
		foreach ($value as $key_of_value => $value_of_value) {
			// print $key_of_value.'\n';
			if ($key_of_value == 'post_content') {
				// print $value_of_value;
				$pattern = "/(<img\s)(.*)(src=)(.*)(alt=)(.*)(\/>)/";
				
				if ( preg_match($pattern, $value_of_value, $output_array) ) {
					// print_r($output_array);
					// print $output_array[4];
					if ($output_array[4] && $output_array[4] != ''){
						$img_address = $output_array[4];
						$img_address = str_replace('"','',$img_address);
						// print $img_address;
						break;
					}
				}
			}
					
		}
		if ( $counter == 1 ) {
			print "<li class=\"active\"><a href=\"#tab".$counter."\" data-toggle=\"tab\" class=\"analistic-01\">".$post_title."</a></li>\n";	
		} else {
			print "<li class=\"\"><a href=\"#tab".$counter."\" data-toggle=\"tab\" class=\"analistic-01\">".$post_title."</a></li>\n";
			
		}
		$counter +=1;
	}
						print "</ul>\n";
				print "</div> \n";
	
				$counter = 1;
				print "<div class=\"parrent media-body\">\n";
					print "<div class=\"tab-content\">\n";
					
					// 
					foreach ($content_array as $key => $value) {
						// print $key."\n";
						// print_r($value);
						
						$post_id = $value['object_id'];
						$post_title = $value['post_title'];
						$post_content = $value['post_content'];
						$post_date = $value['post_date'];
						
						
						$post_title = strip_tags($post_title);
						// $post_title = substr($post_title, 0, 52).'...';
						// decreated on 161121-1030
						// REF
						// 解決PHP substr切割中文字問題 @ Bruse的日誌 __ 隨意窩 Xuite日誌.html 
						// http://blog.xuite.net/chenbruse/bruse/13351768-%E8%A7%A3%E6%B1%BAPHP+substr%E5%88%87%E5%89%B2%E4%B8%AD%E6%96%87%E5%AD%97%E5%95%8F%E9%A1%8C
						// echo mb_substr($content,0,15,"UTF-8");
						// 
						$post_title = mb_substr($post_title,0,40,"UTF-8").'...';
						
								
						
						
						
						if ( $counter == 1 ) {
							print "<div class=\"tab-pane fade active in\" id=\"tab".$counter."\">\n";
						} else {
							print "<div class=\"tab-pane fade\" id=\"tab".$counter."\">\n";

						}
						

							print "<div class=\"media\">\n";
								print "<div class=\"media-body\">\n";
									
									// print $post_id;
									
									// print $post_content;
									
									// print '<br>';
									
									$post_content_array = explode(PHP_EOL, $post_content);
									// print sizeof($post_content_array);
									foreach ($post_content_array as $value_of_post_content_array) {
										print $value_of_post_content_array.'<br>';
										
									}	
						
									
								print "</div>\n";
							print "</div>\n";
						print "</div>\n";		
						$counter +=1;						
					}					
					
					
					print "</div> \n";
				print "</div> \n";
			print "</div> \n";
		print "</div> \n";
	print "</div> \n";	

	
/*
	<div class="col-xs-12 col-sm-8 wow fadeInDown">
		<div class="tab-wrap">
			<div class="media">
				<div class="parrent pull-left">
					<ul class="nav nav-tabs nav-stacked">
						<li class="active"><a href="#tab1" data-toggle="tab" class="analistic-01">生物組演講公告  2016年8月5日(五)  15：00</a></li>
						<li class=""><a href="#tab2" data-toggle="tab" class="analistic-02">生物組演講公告  2016年6月17日(三)  10：30</a></li>
						<li class=""><a href="#tab3" data-toggle="tab" class="tehnical">海洋所演講公告  2016年6月12日(五)  15：30</a></li>
						<li class=""><a href="#tab4" data-toggle="tab" class="tehnical">化學組演講公告  2016年5月27日(三)  13：30 </a></li>
						<li class=""><a href="#tab5" data-toggle="tab" class="tehnical">生物組演講公告  2016年5月15日(五)  13：20</a></li>
					</ul>
				</div>
				<div class="parrent media-body">
					<div class="tab-content">
						<div class="tab-pane fade" id="tab1">
							<div class="media">
								<!--
								<div class="pull-left">
									<img class="img-responsive" src="images/tab2.png">
								</div>
								-->
								<div class="media-body">
									<!--
									<h2>2016年8月5日(五)  15：00  The trophic strategies of Indo-Pacific corals.  Inga Conti-Jerpe (香港大學太古海洋科學研究所博士班學生)</h2>
									-->
                                    <p>講者：Inga Conti-Jerpe (香港大學太古海洋科學研究所博士班學生)
									<br>題目：The trophic strategies of Indo-Pacific corals.
									<br>時間：2016年8月5日(五) 15:00
									<br>地點：本所二樓大講堂</p>
								</div>
							</div>
						</div>

						<div class="tab-pane fade active in" id="tab2">
                                        <div class="media">
                                           <!--<div class="pull-left">
                                                <img class="img-responsive" src="images/tab1.png">
                                            </div>-->
                                            <div class="media-body">
                                                 <!--<h2>生物組演講公告  6月17日(三)  10：30  Linking phylogeny, traits, and habitats: contrasting micro-organisms versus macro-organisms (Do organisms behave as who they are?)  Dr. Hsiao-Pei Lu (IONTU)</h2>-->
                                                 <p>講者：Dr. Hsiao-Pei Lu (IONTU)

<br>題目：Linking phylogeny, traits, and habitats: contrasting micro-organisms versus macro-organisms (Do organisms behave as who they are?)

<br>時間：2016年6月17日(三) 10:30-12:00

<br>地點：海洋所2樓大講堂
												 </p>
                                            </div>
                                        </div>
                                     </div>

                                     
                                     <div class="tab-pane fade active in" id="tab3">
                                        <div class="media">
                                           <!--<div class="pull-left">
                                                <img class="img-responsive" src="images/tab1.png">
                                            </div>-->
                                            <div class="media-body">
                                                 <!--<h2>生物組演講公告  6月17日(三)  10：30  Linking phylogeny, traits, and habitats: contrasting micro-organisms versus macro-organisms (Do organisms behave as who they are?)  Dr. Hsiao-Pei Lu (IONTU)</h2>-->
                                                 <p>講者：蔡日耀 (行政院農業委員會漁業署署長)

<br>題目：臺灣漁業的亮點

<br>時間：2016年6月12日(五) 15：30

<br>地點：海洋所大講堂


												 </p>
                                            </div>
                                        </div>
                                     </div>

                                     
                                     <div class="tab-pane fade active in" id="tab4">
                                        <div class="media">
                                           <!--<div class="pull-left">
                                                <img class="img-responsive" src="images/tab1.png">
                                            </div>-->
                                            <div class="media-body">
                                                 <!--<h2>生物組演講公告  6月17日(三)  10：30  Linking phylogeny, traits, and habitats: contrasting micro-organisms versus macro-organisms (Do organisms behave as who they are?)  Dr. Hsiao-Pei Lu (IONTU)</h2>-->
                                                 <p>講者：Dr. Paul Liu (Dept. of Marine, Earth, and Atmospheric Sciences, NCSU.)

<br>題目：New Crisis: Recent Dramatic Changes of Global River Discharge to the Ocean – the Physical and Biogeochemical Implications.

<br>時間：2016年5月27日(三) 13：30 – 14：30

<br>地點：海洋所106會議室
<br><a class="btn-slide animation animated-item-3" href="#">Read More</a>

												 </p>
                                            </div>
                                        </div>
                                     </div>

                                     <div class="tab-pane fade active in" id="tab5">
                                        <div class="media">
                                           <!--<div class="pull-left">
                                                <img class="img-responsive" src="images/tab1.png">
                                            </div>-->
                                            <div class="media-body">
                                                 <!--<h2>生物組演講公告  6月17日(三)  10：30  Linking phylogeny, traits, and habitats: contrasting micro-organisms versus macro-organisms (Do organisms behave as who they are?)  Dr. Hsiao-Pei Lu (IONTU)</h2>-->
                                                 <p>講者：Prof. Ruoying He (North Carolina State University)

<br>題目：Observational and modeling study of ocean circulation, air-sea interactions, and biogeochemical processes off the u.s. eastern seaboard and gulf of mexico coast

<br>時間：2016年5月15日(五) 13:20~14:10

<br>地點：Room 106, Institute of Oceanography, National Taiwan University
<br><a class="btn-slide animation animated-item-3" href="#">Read More</a>

												 </p>
                                            </div>
                                        </div>
                                     </div>
                                </div> <!--/.tab-content-->  
                            </div> <!--/.media-body--> 
                        </div> <!--/.media-->     
                    </div><!--/.tab-wrap-->               
                </div><!--/.col-sm-6-->                                          

*/
?>
			</div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#recent-works-->			













