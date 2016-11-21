<?php
	require_once('header.html');
?>

<section id="blog" class="container">
<div class="center">

	<div class="col-xs-12 col-sm-12 blog-content">
<?php
		
?>
<h2 class="article"><?php _e("<!--:en-->Members <!--:--><!--:tw-->人員介紹<!--:-->"); ?></h2>

		<div class="prof_tab_wrap">
		<?php

		$aryDataTitle = array(	"<!--:en-->Name： <!--:--><!--:tw-->姓名：<!--:-->",
								"<!--:en-->Title： <!--:--><!--:tw-->職稱：<!--:-->",
								"<!--:en-->Tel： <!--:--><!--:tw-->電話：<!--:-->",
								"<!--:en-->E-mail： <!--:--><!--:tw-->E-mail：<!--:-->",
								"<!--:en-->Business Contents： <!--:--><!--:tw-->業務內容：<!--:-->");

		$args = array(
			'post_type' => 'shipmembers',
			'tax_query' => array(
				array(
					'taxonomy' => 'shipgroup',
					'field' => 'slug',
					'terms' => '貴儀中心海洋探勘組'
				)
			),
			'order' => 'ASC'
		);
		query_posts($args);
	
		// The Loop
		while ( have_posts() ) : the_post();
			global $post;
			$pid = $post->ID;
			$t_photo = get_post_meta($pid, 'image', true);
			unset($arySData);
			unset($arySEData);
			
			$arySData = array(	get_post_meta($pid, 'name', true),
								get_post_meta($pid, 'position', true),
								get_post_meta($pid, 'tel', true),
								get_post_meta($pid, 'email', true),
								get_post_meta($pid, 'duty', true) );
			$arySEData = array(	get_post_meta($pid, 'ename', true),
								get_post_meta($pid, 'eposition', true),
								get_post_meta($pid, 'tel', true),
								get_post_meta($pid, 'email', true),
								get_post_meta($pid, 'eduty', true) );

?>

		<div class="prof_sec">
		<div class="prof_pic">
			<?php
			if(!$t_photo)
			{?>
				<img width="115" src="<?php echo get_stylesheet_directory_uri()."/images/nophoto.jpg";?>">
			<?php
			}
			else
			{
				echo wp_get_attachment_image($t_photo, array(125,160));
			}
			?>
		</div>
		<div class="prof_cont">
		<ul>
		<?php
		for ($k = 0; $k<sizeof($aryDataTitle); $k++)
		{
		?>
			<li>
				<span><?php _e($aryDataTitle[$k]); ?></span><?php _e("<!--:en-->$arySEData[$k] <!--:--><!--:tw-->$arySData[$k]<!--:-->"); ?>
			</li>
		<?php
		}
		?>
		</ul>
		</div>
		</div>
<?php
		endwhile;

		// Reset Query
		wp_reset_query();
?>

		</div>	

	</div>
</div>   
    
</section>       
    
        
<?php
	require_once('footer.html');
?>
