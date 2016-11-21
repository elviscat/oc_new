<?php
	require_once('header.html');
?>




<?php
	require_once('class.wordpress_posts.php');
	$wordpress_posts = new WORDPRESS_POSTS();
	ini_set('display_errors', 1);
	error_reporting(~0);
	
	$post_id = '';
	if ( isset($_GET['p']) ) {
		$post_id = $_GET['p'];
	}
	
	
	$content_array = $wordpress_posts->getPostContent($post_id);
	print "<section id=\"page\" class=\"container\">\n";
		print "<div class=\"center\">\n";
			print "<div class=\"col-xs-8 col-sm-8 blog-content\">\n";	
	if ( sizeof($content_array) == 1) {
	// print_r($content_array);

		foreach ($content_array as $key => $value) {
		// print $key."\n";
		// print_r($value);
		// print $value['post_date'];
		
		$post_title = '';
		$post_content = '';
		$post_date = '';
		
		$post_id = $value['ID'];
		$post_title = $value['post_title'];
		$post_content = $value['post_content'];
		$post_date = $value['post_date'];
					
		$post_title = strip_tags($post_title);
		// decreated on 161121-1030
		// REF
		// 解決PHP substr切割中文字問題 @ Bruse的日誌 __ 隨意窩 Xuite日誌.html 
		// http://blog.xuite.net/chenbruse/bruse/13351768-%E8%A7%A3%E6%B1%BAPHP+substr%E5%88%87%E5%89%B2%E4%B8%AD%E6%96%87%E5%AD%97%E5%95%8F%E9%A1%8C
		// echo mb_substr($content,0,15,"UTF-8");
		// 
		// $post_title = mb_substr($post_title,0,25,"UTF-8").'...';
		print '<h2>'.$post_title.'</h2>';
		
		$post_content_array = explode(PHP_EOL, $post_content);
		// print sizeof($post_content_array);
		foreach ($post_content_array as $value_of_post_content_array) {
			// print $value_of_post_content_array.'<br>';
			print "<p style=\"text-align:left;\">".$value_of_post_content_array."</p>\n";	
		}
		// print "<p style=\"text-align:left;\">".$post_content."</p>\n";	
	}
	
	} else {
		print "<p style=\"text-align:left;\">Empty Post!!</p>\n";
	}
		print "</div>\n";
		print "</div>\n";
	print "</section>\n"; 
	

?> 


    
<?php
	require_once('footer.html');

?>