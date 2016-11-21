<?php
	require_once('class.recent_works.php');
	$recent_works = new RECENT_WORKS();
	ini_set('display_errors', 1);
	error_reporting(~0);


?>
	
    <section id="recent-works">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>本所亮點</h2>
                <p class="lead">我們秉持追求卓越，不畏艱難的信念，<br>跨出勇敢堅定的步伐，探索海洋的每一個未知。</p>
            </div>

            <div class="row">



<?php
	// $content_array = $recent_works->getPostContentList('12');
	$content_array = $recent_works->getPostContentList('5', '8');

	
	// print_r($content_array);
	// SELECT  a.id, a.post_title, a.post_content, a.post_date, a.post_status, b.term_taxonomy_id, b.object_id FROM `wp_posts` as a, `wp_term_relationships` as b  WHERE b.object_id = a.id AND b.term_taxonomy_id = '5' ORDER BY a.post_date DESC Limit 0, 10
	foreach ($content_array as $key => $value) {
		// print $key."\n";
		// print_r($value);
		$post_id = '';
		
		// print $value['post_date'];
		
		$post_title = '';
		$post_content = '';
		$post_date = '';
		
		$post_id = $value['object_id'];
		$post_title = $value['post_title'];
		$post_content = $value['post_content'];
		$post_date = $value['post_date'];
		$img_address = "http://www.oc.ntu.edu.tw/oc/wp-content/uploads/2016/11/OBS.png";
		
		$post_title = strip_tags($post_title);
		// $post_title = substr($post_title, 0, 52).'...';
		// decreated on 161121-1030
		// REF
		// 解決PHP substr切割中文字問題 @ Bruse的日誌 __ 隨意窩 Xuite日誌.html 
		// http://blog.xuite.net/chenbruse/bruse/13351768-%E8%A7%A3%E6%B1%BAPHP+substr%E5%88%87%E5%89%B2%E4%B8%AD%E6%96%87%E5%AD%97%E5%95%8F%E9%A1%8C
		// echo mb_substr($content,0,15,"UTF-8");
		// 
		$post_title = mb_substr($post_title,0,25,"UTF-8").'...';
		
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
		
		/*
		$img_address = "http://www.oc.ntu.edu.tw/oc/wp-content/uploads/2016/11/OBS.png";
		$post_content = '';
		$post_date = '';
		foreach ($value as $key_of_value => $value_of_value) {
			print $key_of_value.'\n';
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
			if ($key_of_value == 'post_title') {
				$post_title = $value_of_value;
			}
			if ($key_of_value == 'post_date') {
				print $post_date."\n";
				$post_date = $value_of_value;
			}
			if ($key_of_value == 'id') {
				$post_id = $value_of_value;
			}			
		}
		*/
		
		
		
		print "<div class=\"col-xs-12 col-sm-4 col-md-3\">\n";
		print "<div class=\"recent-work-wrap\">\n";
		print "<img class=\"img-responsive\" src=\"".$img_address."\" alt=\"\">\n";
		// print "<img class=\"img-responsive\" src=\"".$img_address."\" alt=\"\" width=\"600\" height=\"400\">\n";
		print "<div class=\"overlay\">\n";
		print "<div class=\"recent-work-inner\">\n";
		print "<h3><a href=\"http://www.oc.ntu.edu.tw/?p=".$post_id."\">".$post_title."</a></h3>\n";
		print "<p>".$post_date."</p>\n";
		// print "<a class=\"preview\" href=\"images/portfolio/full/item1.png\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i>Read more</a>\n";
		// print "<a class=\"preview\" href=\"http://www.oc.ntu.edu.tw/?p=".$post_id."\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i>Read more</a>\n";
		print "<a href=\"http://www.oc.ntu.edu.tw/?p=".$post_id."\" ><i class=\"fa fa-eye\"></i>Read more</a>\n";
		print "</div> \n";
		print "</div> \n";
		print "</div> \n";
		print "</div> \n";			
		
		

	}
/*
				<div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/spot1.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">於西太平洋施放兩組海氣象觀測浮標</a> </h3>
                                <!--<p>本所的兩組新設計的海氣象自動觀測浮標，已經分別於6/26與6/27兩天由海研一號...</p>-->
                                <p>2016/07/13</p>
                                <a class="preview" href="images/portfolio/full/item1.png" rel="prettyPhoto"><i class="fa fa-eye"></i>Read more</a>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/spot2.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="research spot2.html">黑潮通量變化探測整合計畫</a></h3>
                                <p>2016/08/08</p>
                                <a style="color:#fff;"href="research spot2.html"><i class="fa fa-eye"></i>Read more</a>
                            </div> 
                        </div>
                    </div>
                </div> 

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/spot3.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">本所引進水下滑翔觀測載具Seaglider提升海洋觀測技術 </a></h3>
                                <p>2016/07/13</p>
                                <a class="preview" href="images/portfolio/full/item3.png" rel="prettyPhoto"><i class="fa fa-eye"></i> Read more</a>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/spot4.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">參與臺美研究團隊，於Nature雜誌發表論文共同揭露內波生命史 </a></h3>
                                <p>2015/05/13</p>
                                <a class="preview" href="images/portfolio/full/item4.png" rel="prettyPhoto"><i class="fa fa-eye"></i> Read more</a>
                            </div> 
                        </div>
                    </div>
                </div>   
                
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/spot5.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">楊穎堅、詹森教授舉辦OKMC/OKTV 2015 Meeting</a></h3>
                                <p>2015/02/10</p>
                                <a class="preview" href="images/portfolio/full/item5.png" rel="prettyPhoto"><i class="fa fa-eye"></i> Read more</a>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/spot6.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">湖泊暖化與水位穩定化造成藻類稀有物種消失 </a></h3>
                                <p>2014/12/15</p>
                                <a class="preview" href="images/portfolio/full/item6.png" rel="prettyPhoto"><i class="fa fa-eye"></i> Read more</a>
                            </div> 
                        </div>
                    </div>
                </div> 

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/spot7.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">生態系的功能冗餘性(functional redundancy)及生物多樣性的重要性 </a></h3>
                                <p>2013/12/19</p>
                                <a class="preview" href="images/portfolio/full/item7.png" rel="prettyPhoto"><i class="fa fa-eye"></i> Read more</a>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/spot8.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">本所教授任 Journal of Marine Research 客座編輯出版臺灣東北部海域環境與海洋動力研究成果專刊</a></h3>
                                <p>2013/08/19</p>
                                <a class="preview" href="images/portfolio/full/item8.png" rel="prettyPhoto"><i class="fa fa-eye"></i> Read more</a>
                            </div> 
                        </div>
                    </div>
                </div>   
*/
?>
				</div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#recent-works-->











