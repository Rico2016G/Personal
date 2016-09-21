<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Gian Szymon Gamefarm</title>
<link href="css/bootstrap.css" rel="stylesheet">
 <link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<style type="text/css">

.item{
    background:#fefefe !important;
    
    text-align: center;
    width:100% !important;
    height: 400px !important;
}
.item img{
  width:100%;
  height:100% !important;

}

.carousel-indicators{
  position:absolute !important;
  bottom:3%;
}
.carousel-indicators li{
  background:#b0ea8b !important;
  
}
.carousel-indicators .active{
  background:#b0ea8b !important;
  
}
.carousel-caption{
  width:40% !important;
  height:230px  !important;
  margin-left:-10% !important;
	background:#a3d981 !important;
  border:#FFFFFF 5px solid !important;
  text-align:justify !important;
  padding-left:3% !important;
  padding-right:3% !important;
  margin-bottom:9% !important;
}
.carousel-caption h3{
  color:#ffffff !important;
  font-family:'Lato-Bold', Verdana, Geneva, sans-serif !important;
  font-size:20px !important;
 
  
}
.carousel-caption p{
  margin:0 !important;
  padding:0 !important;
  color:#FFFFFF !important;
  font-family:'Lato-Regular', Verdana, Geneva, sans-serif !important;
  font-size:14px !important;

}
.carousel-caption button{
  font-size:16px !important;
   color:#e2e4e3 !important;
  background:#7cd24d !important;
  border:none !important;
    font-family:'Late-Regular', Verdana, Geneva, sans-serif !important;
  
}
.carousel-control{
  background:none !important;
}
.carousel .glyphicon{
  color:#933638 !important;
}
.important{
  color:#333333 !important;
}
</style>
</head>
<body>
      <div class="wrap">
							<!--START OF HEADER-->
              <div class="container">
                   <div class="header clearfix">
												
                             <div class="row">
                                 <?php
								 $page = "index.php";
                                 include "header.php";
                                 ?> 		
                             </div>
                             
                       </div>   
                              	
               </div>
    		        <!--END OF HEADER-->
                <!--START OF CONTENT-->
                 <div class="container">
                 		<div class="content-home">
                    		<div class="row">
                        
                        
                        
                        
                            <div class="col-md-12">

                                	<div class="slider-portion">
                                     <div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
                                        <!-- Carousel indicators -->
<!--                                      <ol class="carousel-indicators">
                                              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                              <li data-target="#myCarousel" data-slide-to="1"></li>
                                              <li data-target="#myCarousel" data-slide-to="2"></li>
                                          </ol>  -->
                                         <!-- Carousel items -->
                                          <ol class="carousel-indicators">
                                              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                              <li data-target="#myCarousel" data-slide-to="1"></li>
                                              <li data-target="#myCarousel" data-slide-to="2"></li>
                                              <li data-target="#myCarousel" data-slide-to="3"></li>
                                          </ol>
                                          <div class="carousel-inner">
                                              <div class="active item">
                                              <img src="images/carousel-item1.png" border="0" class="img-responsive" />
                                                  
                                                 <!-- <div class="carousel-caption">
                                                  			<div class="row">

                                                        			<div class="col-md-12">
                                                              		<h3>Get in shape today for <span class="important">Zero Money Down, $19.99 Per Month</span> Limited Time Offer* </h3>
                                                              </div>
                                                              <div class="col-md-12">
                                                              		<p>*Lorem ipsum dolor sit amet consectetur adipiscing</p>
                                                              </div>                                                              
                                                              <div class="col-md-12" style="margin-top:3%;">
                                                              		<button type="button" class="btn btn-danger">SIGNUP NOW</button>
                                                              </div>
                                                              
                                                        </div>
                                                      		
                                                     
	
                                                  </div>-->
                                              </div>
                                              <div class="item">
                                              <img src="images/carousel-item2.png" border="0" class="img-responsive" />
                                                  
                                                  <!--<div class="carousel-caption">
                                                  			<div class="row">

                                                        			<div class="col-md-12">
                                                              		<h3>Get in shape today for <span class="important">Zero Money Down, $19.99 Per Month</span> Limited Time Offer* </h3>
                                                              </div>
                                                              <div class="col-md-12">
                                                              		<p>*Lorem ipsum dolor sit amet consectetur adipiscing</p>
                                                              </div>                                                              
                                                              <div class="col-md-12" style="margin-top:3%;">
                                                              		<button type="button" class="btn btn-danger">SIGNUP NOW</button>
                                                              </div>
                                                              
                                                        </div>
    
                                                  </div>-->
                                              </div>
                                              <div class="item">
                                              <img src="images/carousel-item3.png" border="0" class="img-responsive" />
                                                  
                                                  <!--<div class="carousel-caption">
                                                  			<div class="row">

                                                        			<div class="col-md-12">
                                                              		<h3>Get in shape today for <span class="important">Zero Money Down, $19.99 Per Month</span> Limited Time Offer* </h3>
                                                              </div>
                                                              <div class="col-md-12">
                                                              		<p>*Lorem ipsum dolor sit amet consectetur adipiscing</p>
                                                              </div>                                                              
                                                              <div class="col-md-12" style="margin-top:3%;">
                                                              		<button type="button" class="btn btn-danger">SIGNUP NOW</button>
                                                              </div>
                                                              
                                                        </div>
                                                  </div>-->
                                              </div>
                                              
                                              <div class="item">
                                              <img src="images/carousel-item4.png" border="0" class="img-responsive" />
                                                  
                                                  <!--<div class="carousel-caption">
                                                  			<div class="row">

                                                        			<div class="col-md-12">
                                                              		<h3>Get in shape today for <span class="important">Zero Money Down, $19.99 Per Month</span> Limited Time Offer* </h3>
                                                              </div>
                                                              <div class="col-md-12">
                                                              		<p>*Lorem ipsum dolor sit amet consectetur adipiscing</p>
                                                              </div>                                                              
                                                              <div class="col-md-12" style="margin-top:3%;">
                                                              		<button type="button" class="btn btn-danger">SIGNUP NOW</button>
                                                              </div>
                                                              
                                                        </div>
                                                  </div>-->
                                              </div>
                                          </div>

                                          <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                                              <span class="glyphicon glyphicon-chevron-left"></span>
                                          </a>
                                          <a class="carousel-control right" href="#myCarousel" data-slide="next">
                                              <span class="glyphicon glyphicon-chevron-right"></span>
                                          </a>                                          
                                      </div>                                     		
									</div>                                     
                            </div>
                            
                          <!--  <div class="col-md-12">
                            			<div class="white-potion">
                                  			<div class="row">
                                        
 													 <div class="col-md-12 col-lg-12 col-sm-12">
                                               			<div class="service-item">
                                                    		<div class="row">
                                                        		


                                                          
                                                        
                                                        </div>
                                                    </div>
                                                </div>
                                                                      
                                        
                                        </div>
                                  </div>
                            </div>-->
							
                            <div class="col-md-12">
																	
                                  		<div class="upper-potion">
                                      			<div class="row">
                                            		<div class="col-md-12 col-lg-12 col-sm-12">
																						              <h3>TOP BREEDS</h3>                                        
                                                </div>
                                            </div>	                                                

                                            <div class="row" style="margin-top:5%;">
                                                <div class="col-md-4 col-lg-4 col-sm-4">
                                               				<div class="row">
                                                      		<div class="col-md-12" style="text-align:left">
                                                            <img src="images/breed1.png" border="0" class="img-responsive" />
                                                            <p>This breed is mixed . . . </p>
                                                             <a href="#" class="btn btn-info btn-xs">read more</a>
                                                          </div>
                                                      </div>
                                                </div>
                                                <div class="col-md-4 col-lg-4 col-sm-4">
                                               				<div class="row">
                                                      		<div class="col-md-12" style="text-align:left">
                                                            <img src="images/breed2.png" border="0" class="img-responsive" />
                                                            <p>Pure . . . </p>
                                                             <a href="#" class="btn btn-info btn-xs">read more</a>
                                                          </div>
                                                      </div>

                                                </div>
                                                <div class="col-md-4 col-lg-4 col-sm-4">
                                               				<div class="row">
                                                      		<div class="col-md-12" style="text-align:left">
                                                            <img src="images/breed3.png" border="0" class="img-responsive" />
                                                            <p>This breed is . . . </p>
                                                            <a href="#" class="btn btn-info btn-xs">read more</a>
                                                            </div>
                                                          
                                                      </div>

                                                </div>
                                                
                                            </div>

                                                      

                                            
                                            

                                           
                                                                                       
                                            
                                      </div>
                                  
                            </div>
                            <div class="col-md-12">
                            			<div class="white-potion below-port">
                                  			<div class="row">
                                                		<div class="col-md-6"  style="text-align:left">
                                                            <h4><strong>GS Gamefarm </strong></h4>
                                                            <br>
                                                            Strive to produce the highest-quality cock fighting breeds. 
                                                            <br>
                                                            <br>
                                                            
                                                            We sourced our materiales from different part of the globe to achieve great breeds.
                                                            
                                                            <br><br>
                                                            
                                                            <a href="contact.php" class="btn btn-info">CONTACT US</a>
                                                            <br><br>
                                                        </div>
                                                        
                                                        
                                               
    
    
    
                              
                                                        <div class="col-md-6">
                                                        <p >
                                                          <h4 style="text-align:left">Current Location</h4>
                                                        </p>
                                                          <div class="map-part">
                                
                                                                 <iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15733.794552272971!2d123.36161677889895!3d9.642652510022083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33ab9a164078c89f%3A0x9e66fd8eb82bb574!2sMalabuyoc%2C+Cebu!5e0!3m2!1sen!2sph!4v1474174849361"></iframe>
                                                                 
                                                                 
                                                               
                                                                 
                                                                 
                                                                 </div>
                                                        </div>
                                                          
    
                  
                                            
                                        </div>
                                   </div>
                             </div>
                            
                           
                            
                            
                         </div>    	
                    </div>
                 </div>
                <!--END OF CONTENT-->
                <!--START OF FOOTER-->
                 <div class="container">
                 	  <div class="footer">
                          <?php
                          include "footer.php"
						  ?>
                        </div> 	
                 </div>
                 <!--END OFFOOTER-->
     </div>
      
</body>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1-11-1.min.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script> 
    <script type="text/javascript">
				(function($){
			$('#thumbcarousel').carousel(0);
			var $thumbItems = $('#thumbcarousel .item');
				$('#carousel').on('slide.bs.carousel', function (event) {
				 var $slide = $(event.relatedTarget);
				 var thumbIndex = $slide.data('thumb');
				 var curThumbIndex = $thumbItems.index($thumbItems.filter('.active').get(0));
				 
				if (curThumbIndex>thumbIndex) {
					$('#thumbcarousel').one('slid.bs.carousel', function (event) {
						$('#thumbcarousel').carousel(thumbIndex);
					});
					if (curThumbIndex === ($thumbItems.length-1)) {
						$('#thumbcarousel').carousel('next');
					} else {
						$('#thumbcarousel').carousel(numThumbItems-1);
					}
				} else {
					$('#thumbcarousel').carousel(thumbIndex);
				}
			});
		})(jQuery);

		</script>   
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>