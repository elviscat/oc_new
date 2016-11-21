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
    
	<?php require_once("section-recent-works.php"); ?>

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
                            <h3>海洋生物與生態，漁業生態</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <div class="pull-left">
                            <img class="img-responsive" src="images/services/CHEM.png">
                            </div>
                            <h2>海洋化學組</h2>
                            <h3>海洋同位素檢定</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <div class="pull-left">
                            <img class="img-responsive" src="images/services/GEO.png">
                            </div>
                            <h2>海洋地質及地物組</h2>
                            <h3>研究海底下地質組成特色</h3>
                        </div>
                    </div><!--/.col-md-4-->
                
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <div class="pull-left">
                            <img class="img-responsive" src="images/services/phy.png">
                            </div>
                            <h2>海洋物理組</h2>
                            <h3>潮汐預報</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <div class="pull-left">
                            <img class="img-responsive" src="images/services/odb.png">
                            </div>
                            <h2>海洋學門資料庫</h2>
                            <h3>技術支援</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <div class="pull-left">
                            <img class="img-responsive" src="images/services/ship.png">
                            </div>
                            <h2>海研一號</h2>
                            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
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
                            <h3>技術支援</h3>
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
    <section id="services" class="service-item">
	   <div class="container">
            <div class="center wow fadeInDown">
                <h2>所務</h2>
                <p class="lead">關於本所的最新消息與相關事務<br></p>
            </div>

            <div class="row">

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
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#services-->

    <!-- marked on 16081101216 --> 
    <!-- marked on 16081101216 -->
     
    <!-- part 1 
    
    <section id="middle">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 wow fadeInDown">
                    <div class="skill">
                        <h2>Our Skills</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                        <div class="progress-wrap">
                            <h3>Graphic Design</h3>
                            <div class="progress">
                              <div class="progress-bar  color1" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                                <span class="bar-width">85%</span>
                              </div>

                            </div>
                        </div>

                        <div class="progress-wrap">
                            <h3>HTML</h3>
                            <div class="progress">
                              <div class="progress-bar color2" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                               <span class="bar-width">95%</span>
                              </div>
                            </div>
                        </div>

                        <div class="progress-wrap">
                            <h3>CSS</h3>
                            <div class="progress">
                              <div class="progress-bar color3" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                <span class="bar-width">80%</span>
                              </div>
                            </div>
                        </div>

                        <div class="progress-wrap">
                            <h3>Wordpress</h3>
                            <div class="progress">
                              <div class="progress-bar color4" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                <span class="bar-width">90%</span>
                              </div>
                            </div>
                        </div>
                    </div>

                </div>part 1 --><!--/.col-sm-6-->
	<!-- part 2
                <div class="col-sm-6 wow fadeInDown">
                    <div class="accordion">
                        <h2>Why People like us?</h2>
                        <div class="panel-group" id="accordion1">
                          <div class="panel panel-default">
                            <div class="panel-heading active">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">
                                  Lorem ipsum dolor sit amet
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>

                            <div id="collapseOne1" class="panel-collapse collapse in">
                              <div class="panel-body">
                                  <div class="media accordion-inner">
                                        <div class="pull-left">
                                            <img class="img-responsive" src="images/accordion1.png">
                                        </div>
                                        <div class="media-body">
                                             <h4>Adipisicing elit</h4>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                                        </div>
                                  </div>
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
                                  Lorem ipsum dolor sit amet
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseTwo1" class="panel-collapse collapse">
                              <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">
                                  Lorem ipsum dolor sit amet
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseThree1" class="panel-collapse collapse">
                              <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour1">
                                  Lorem ipsum dolor sit amet
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseFour1" class="panel-collapse collapse">
                              <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                              </div>
                            </div>
                          </div>
                        </div> part 2--><!--/#accordion1-->
	<!-- part 3
                    </div>
                </div>

            </div> part 3--><!--/.row-->
	<!-- part 4
    
        </div> part 4--><!--/.container-->
	<!-- part 5
        
    </section> part 5--><!--/#middle-->
  	<!-- marked on 16081101216 --> 

    <section id="content">
        <div class="container">
        <div class="center wow fadeInDown">
                <h2>演講公告</h2>
                <p class="lead">站在巨人的肩膀上，看見更遠的方向，感受科學最深沈的浩瀚</p>
            </div> 
            <div class="row">
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
                                           <!--<div class="pull-left">
                                                <img class="img-responsive" src="images/tab2.png">
                                            </div>-->
                                            <div class="media-body">
                                                 <!--<h2>2016年8月5日(五)  15：00  The trophic strategies of Indo-Pacific corals.  Inga Conti-Jerpe (香港大學太古海洋科學研究所博士班學生)</h2>-->
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

                <div class="col-xs-12 col-sm-4 wow fadeInDown">
                    
                    <!--
                    <div class="testimonial">
                        <h2>Testimonials</h2>
                         <div class="media testimonial-inner">
                            <div class="pull-left">
                                <img class="img-responsive img-circle" src="images/testimonials1.png">
                            </div>
                            <div class="media-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                                <span><strong>-John Doe/</strong> Director of corlate.com</span>
                            </div>
                         </div>

                         <div class="media testimonial-inner">
                            <div class="pull-left">
                                <img class="img-responsive img-circle" src="images/testimonials1.png">
                            </div>
                            <div class="media-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                                <span><strong>-John Doe/</strong> Director of corlate.com</span>
                            </div>
                         </div>

                    </div>
                    -->
                </div>

            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#content-->

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
