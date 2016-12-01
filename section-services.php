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
	$content_array = $wordpress_posts->getPostContentList('4767', '1'); // 徵人	
	// print_r($content_array);
	// SELECT  a.id, a.post_title, a.post_content, a.post_date, a.post_status, b.term_taxonomy_id, b.object_id FROM `wp_posts` as a, `wp_term_relationships` as b  WHERE b.object_id = a.id AND b.term_taxonomy_id = '5' ORDER BY a.post_date DESC Limit 0, 10
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
		$post_title = mb_substr($post_title,0,25,"UTF-8").'...';

		print "<div class=\"col-sm-6 col-md-4\">\n";
			print "<div class=\"media services-wrap wow fadeInDown\">\n";
				print "<div class=\"pull-left\">\n";
					print "<img class=\"img-responsive\" src=\"images/services/job.png\">\n";
				print "</div> \n";
				print "<div class=\"media-body\">\n";
					print "<h3 class=\"media-heading\">徵人</h3>\n";
					print "<p>".$post_title."</p>\n";
					print "<p>".$post_date."</p>\n";
					print "<a class=\"btn-slide animation animated-item-3\" href=\"category.php?c=4767\">Read More</a>\n";
				print "</div> \n";
			print "</div> \n";
		print "</div> \n";			
		
		
	}

	$content_array = $wordpress_posts->getPostContentList('11', '1'); // 招生	
	// print_r($content_array);
	// SELECT  a.id, a.post_title, a.post_content, a.post_date, a.post_status, b.term_taxonomy_id, b.object_id FROM `wp_posts` as a, `wp_term_relationships` as b  WHERE b.object_id = a.id AND b.term_taxonomy_id = '5' ORDER BY a.post_date DESC Limit 0, 10
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
		$post_title = mb_substr($post_title,0,25,"UTF-8").'...';

		print "<div class=\"col-sm-6 col-md-4\">\n";
			print "<div class=\"media services-wrap wow fadeInDown\">\n";
				print "<div class=\"pull-left\">\n";
					print "<img class=\"img-responsive\" src=\"images/services/admi.png\">\n";
				print "</div> \n";
				print "<div class=\"media-body\">\n";
					print "<h3 class=\"media-heading\">招生</h3>\n";
					print "<p>".$post_title."</p>\n";
					print "<p>".$post_date."</p>\n";
					print "<a class=\"btn-slide animation animated-item-3\" href=\"category.php?c=11\">Read More</a>\n";
				print "</div> \n";
			print "</div> \n";
		print "</div> \n";				
	}

	$content_array = $wordpress_posts->getPostContentList('3032', '1'); // 船務室	
	// print_r($content_array);
	// SELECT  a.id, a.post_title, a.post_content, a.post_date, a.post_status, b.term_taxonomy_id, b.object_id FROM `wp_posts` as a, `wp_term_relationships` as b  WHERE b.object_id = a.id AND b.term_taxonomy_id = '5' ORDER BY a.post_date DESC Limit 0, 10
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
		$post_title = mb_substr($post_title,0,25,"UTF-8").'...';

		print "<div class=\"col-sm-6 col-md-4\">\n";
			print "<div class=\"media services-wrap wow fadeInDown\">\n";
				print "<div class=\"pull-left\">\n";
					print "<img class=\"img-responsive\" src=\"images/services/ship\">\n";
				print "</div> \n";
				print "<div class=\"media-body\">\n";
					print "<h3 class=\"media-heading\">船務室</h3>\n";
					print "<p>".$post_title."</p>\n";
					print "<p>".$post_date."</p>\n";
					print "<a class=\"btn-slide animation animated-item-3\" href=\"category.php?c=3032\">Read More</a>\n";
				print "</div> \n";
			print "</div> \n";
		print "</div> \n";				
	}
	$content_array = $wordpress_posts->getPostContentList('4769', '1'); // 本所消息	
	// print_r($content_array);
	// SELECT  a.id, a.post_title, a.post_content, a.post_date, a.post_status, b.term_taxonomy_id, b.object_id FROM `wp_posts` as a, `wp_term_relationships` as b  WHERE b.object_id = a.id AND b.term_taxonomy_id = '5' ORDER BY a.post_date DESC Limit 0, 10
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
		$post_title = mb_substr($post_title,0,25,"UTF-8").'...';

		print "<div class=\"col-sm-6 col-md-4\">\n";
			print "<div class=\"media services-wrap wow fadeInDown\">\n";
				print "<div class=\"pull-left\">\n";
					print "<img class=\"img-responsive\" src=\"images/services/job.png\">\n";
				print "</div> \n";
				print "<div class=\"media-body\">\n";
					print "<h3 class=\"media-heading\">本所消息</h3>\n";
					print "<p>".$post_title."</p>\n";
					print "<p>".$post_date."</p>\n";
					print "<a class=\"btn-slide animation animated-item-3\" href=\"category.php?c=4769\">Read More</a>\n";
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











