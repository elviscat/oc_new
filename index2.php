<?php
	require_once('header.html');
?>

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
    
	
	<?php require_once("section-main-slider.php"); ?>
	
	<?php // require_once("section-recent-works.php"); ?>
	<?php require_once("section-recent-works-test.php"); ?>

    <section id="feature" >
        <div class="container">
           <div class="center wow fadeInDown">
                <h2>海洋研究所</h2>
                <p class="lead">瞭解與保護我國海洋環境，促進海洋資源開發及永續利用，保育海洋生態<br></p>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                        	<div class="pull-left">
                            <img class="img-responsive" src="images/services/BIO.png">
                        	</div>
                        	<!--
                        	<i class="fa fa-bullhorn"></i>
                            -->
                            <h2>海洋生物及漁業組</h2>
                            <h3>海洋生物多樣性、海洋生態與演化、漁業科學與資源管理</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <div class="pull-left">
                            <img class="img-responsive" src="images/services/CHEM.png">
                            </div>
                            <h2>海洋化學組</h2>
                            <h3>海洋生物地球化學、同位素化學、沉積物化學、海洋環境污染...</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <div class="pull-left">
                            <img class="img-responsive" src="images/services/GEO.png">
                            </div>
                            <h2>海洋地質及地物組</h2>
                            <h3>海洋地質、地球物理、地球化學</h3>
                        </div>
                    </div><!--/.col-md-4-->
                
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <div class="pull-left">
                            <img class="img-responsive" src="images/services/phy.png">
                            </div>
                            <h2>海洋物理組</h2>
                            <h3>數值模擬、黑潮、南海內波，海氣交互，海洋聲學與環流動力結構</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <div class="pull-left">
                            <img class="img-responsive" src="images/services/odb.png">
                            </div>
                            <h2>海洋學門資料庫</h2>
                            <h3>整合、校正、品管科技部海洋學門研究調查成果</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <div class="pull-left">
                            <img class="img-responsive" src="images/services/ship.png">
                            </div>
                            <h2>海研一號</h2>
                            <h3>海洋研究探勘先鋒</h3>
                        </div>
                    </div><!--/.col-md-4-->
                    
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <div class="pull-left">
                            
                            </div>
                            <h2></h2>
                            <h3></h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <div class="pull-left">
                            <img class="img-responsive" src="images/services/MEIC.png">
                            </div>
                            <h2>貴儀中心海洋探勘組</h2>
                            <h3>海洋科學探勘技術服務與儀器研發、製作等</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <div class="pull-left">
                          
                            </div>
                            <h2></h2>
                            <h3></h3>
                        </div>
                    </div><!--/.col-md-4-->
                    
                    
                    
                </div><!--/.services-->
            </div><!--/.row-->    
        </div><!--/.container-->
    </section><!--/#feature-->

    
	<?php require_once("section-services.php"); ?>
	<?php require_once("section-speeches.php"); ?>



    <section id="partner">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>本所隸屬單位</h2>
                <p class="lead">海研所隸屬於台灣大學理學院，與其所屬各系所將研究焦點定位在基礎科學（化學、數學、物理學與心理學)<br>與地球科學（大氣科學、地理學、地質科學與海洋學)，共同推展科學知識與社會發展。</p>
            </div>    

            <div class="partners">
                <ul>
                    <li> <a href="http://www.science.ntu.edu.tw/index.php"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="images/partners/cos_ntu_logo.png"></a></li>
                    <li> <a href="http://www.ntu.edu.tw"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="images/partners/logo.png"></a></li>
                    <!--<li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" src="images/partners/partner3.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" src="images/partners/partner4.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1500ms" src="images/partners/partner5.png"></a></li>-->
                </ul>
            </div>        
        </div><!--/.container-->
    </section><!--/#partner-->

	<!--
    <section id="conatcat-info">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="pull-left">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h2>Have a question or need a custom quote?</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation +0123 456 70 80</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><! --/.container- ->    
    </section><! --/#conatcat-info- ->
	-->

	<section id=spare" >
        <div class="container">
        	<div class="row">
        </div>
	</section>
	
<?php
	require_once('footer.html');

?>
