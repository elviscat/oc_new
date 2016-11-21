<?php
	require_once('class.wordpress_posts.php');
	$wordpress_posts = new WORDPRESS_POSTS();
	ini_set('display_errors', 1);
	error_reporting(~0);


?>
	
	<section id="services" class="service-item">
	   <div class="container">
            <div class="center wow fadeInDown">
                <h2>所務</h2>
                <p class="lead">關於本所的最新消息與相關事務<br></p>
            </div>

            <div class="row">



<?php
	// $content_array = $recent_works->getPostContentList('4769');
	$content_array = $recent_works->getPostContentList('4770', '8');
	array_push($content_array, $recent_works->getPostContentList('4769', '8'));

	
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


                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/job.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">徵人</h3>
                            <p>圖書室徵求105學年度工讀生6名</p>
                            <p>2016/07/27</p>
                            <a class="btn-slide animation animated-item-3" href="#">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/money.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">財務</h3>
                            <p>合作社103年社員交易分配金領取通知</p>
                            <p>2016/02/14</p>
                            <a class="btn-slide animation animated-item-3" href="#">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/glory.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">榮耀</h3>
                            <p style="font-size:14px;">恭喜謝志豪教授榮獲第52屆十大傑出青年</p>
                            <p>2014/10/07</p>
                            <a class="btn-slide animation animated-item-3" href="#">Read More</a>
                        </div>
                    </div>
                </div>  

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/admi.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">招生</h3>
                            <p>海洋研究所104學年碩士班甄試錄取名單</p>
                            <p>2014/11/18</p>
                            <a class="btn-slide animation animated-item-3" href="#">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/glory.png">
                        </div>
                        <div class="media-body">
                             <h3 class="media-heading">榮耀</h3>
                            <p>恭賀許鶴瀚與謝雨寰榮獲阮維周學位論文獎</p>
                            <p>2015/05/11</p>
                            <a class="btn-slide animation animated-item-3" href="#">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/ship">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">船務室</h3>
                            <p>海研一號104年4月份 ~ 104年7月份船期表</p>
                            <p>2015/04/26</p>
                            <a class="btn-slide animation animated-item-3" href="#">Read More</a>
                        </div>
                    </div>
                </div>                                                

*/
?>
				</div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#recent-works-->











