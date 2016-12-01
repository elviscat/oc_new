<?php
	require_once('header.html');
?>




<?php
	require_once('class.wordpress_posts.php');
	$wordpress_posts = new WORDPRESS_POSTS();
	ini_set('display_errors', 1);
	error_reporting(~0);
	
	$category_id = '';
	if ( isset($_GET['c']) ) {
		$category_id = $_GET['c'];
	}
	
	$page_title = '';
	if ( $category_id == '4767' ) {
		$page_title = '徵才專區';
	} else if (  $category_id == '11' ) {
		$page_title = '招生';
	} else if (  $category_id == '4769' ) {
		$page_title = '本所消息';
	} else if (  $category_id == '12' ) {
		$page_title = '演講';
	} else if (  $category_id == '3032' ) {
		$page_title = '海洋研所船務室公告';
	} else if (  $category_id == '' ) {
		$page_title = '其他所務訊息';
	}
	
	
	$content_array = $wordpress_posts->getPostContentList($category_id, '10');
	
	
	print "<section id=\"post_list_by_category\" class=\"container\">\n";
		print "<div class=\"center\">\n";
			print "<div class=\"col-xs-12 col-sm-12 blog-content\">\n";
				print "<h2>".$page_title."</h2>\n";
				print "<table>\n";
					print "<tr>\n";
						print "<th>編號</th>\n";
						print "<th>標題</th>\n";
						print "<th>發佈時間</th>\n";
					print "</tr>\n";	


	if ( sizeof($content_array) >= 1 ) {
		$counter = 1;			
		foreach ($content_array as $key => $value) {
			// print $key."\n";
			// print_r($value);
			$post_id = '';
			$post_title = '';
			$post_content = '';
			$post_date = '';
			
			$post_id = $value['object_id'];
			$post_title = $value['post_title'];
			$post_content = $value['post_content'];
			$post_date = $value['post_date'];
			// print $value['post_date'];
			
			$post_title = strip_tags($post_title);
			// $post_title = substr($post_title, 0, 52).'...';
			// decreated on 161121-1030
			// REF
			// 解決PHP substr切割中文字問題 @ Bruse的日誌 __ 隨意窩 Xuite日誌.html 
			// http://blog.xuite.net/chenbruse/bruse/13351768-%E8%A7%A3%E6%B1%BAPHP+substr%E5%88%87%E5%89%B2%E4%B8%AD%E6%96%87%E5%AD%97%E5%95%8F%E9%A1%8C
			// echo mb_substr($content,0,15,"UTF-8");
			// 
			// $post_title = mb_substr($post_title,0,50,"UTF-8").'...';
			print "<tr>\n";
				print "<td>".$counter."</td>\n";
				print "<td><a href=\"page.php?p=".$post_id."\">".$post_title."</a></td>\n";
				print "<td>".$post_date."</td>\n";
			print "</tr>\n";
			$counter +=1;
		}		
		
	}
					

				print "</table>\n";
			print "</div>\n";
		print "</div>\n";
	print "</section>\n";
/*

<section id="blog" class="container">
        <div class="center">
         
         <div class="col-xs-12 col-sm-12 blog-content">
                                    
<h2>徵才專區</h2>

<table>
  <tr>
    <th>編號</th>
    <th>標題</th>
    <th>發佈時間</th>
  </tr>
  <tr>
    <td>1</td>
    <td><a href="hiring1.html">[本校] 台大地質系曾泰琳實驗室誠徵研究助理</a></td>
    <td>2016/08/22</td>
  </tr>
  <tr>
    <td>2</td>
    <td><a href="hiring2.html">[本所] 海洋研究所陳韋仁老師實驗室誠徵博士後研究員(一~兩年) 或 研究助理 (3個月, 視狀況續約) 1名</a></td>
    <td>2016/08/17</td>
  </tr>
  <tr>
    <td>3</td>
    <td><a href="hiring3.html">[本所] 圖書室徵求105學年度工讀生6名</a></td>
    <td>2016/07/27</td>
  </tr>
 
</table>
                                
           



</div>
</div>




</div>




</section>  
*/		

	

?> 


    
<?php
	require_once('footer.html');

?>


     
 