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
h2{
    margin: 0;     
    color: #666;
    padding-top: 90px;
    font-size: 52px;
    font-family: "trebuchet ms", sans-serif;    
}
.item{
    background:#fefefe !important;
    text-align: center;
    width:100% !important;
    height: 450px !important;
}


.carousel-indicators{
  position:absolute !important;
  bottom:3%;
}
.carousel-indicators li{
  background:#696969 !important;
  
}
.carousel-indicators .active{
  background:#06cdff !important;
  
}
.carousel-caption{
  width:35% !important;
  height:270px  !important;
  margin-left:-10% !important;
	background:none !important;
  text-align:left !important;
 
  margin-bottom:7% !important;
}
.carousel-caption h3{
  color:#476100 !important;
  font-family:'FuturaStd-Book', Verdana, Geneva, sans-serif !important;
  font-size:32px !important;
  margin-bottom:35px !important;
  
  
}
.carousel-caption p{
  color:#333333 !important;
  font-family:"OpenSans-Light", Arial, Helvetica, sans-serif !important;
  font-size:14px !important;
 margin-bottom:35px !important;
}
.carousel-caption button{
  font-size:16px !important;
   color:#FFFFFF !important;
  background:#476100 !important;
  border:none !important;
    font-family:'OpenSans-Bold', Verdana, Geneva, sans-serif !important;
  
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
								 $page = "gallery.php";
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
										<div class="common-portion">
                                   		<!-- <h2>PHOTOS</h2>  -->                     		
									  </div>                                    
                            	</div>

                 
										<div class="col-md-12">
																	
                                  		<div class="white-potion">
 

                                      			<div class="row our-contact">
                                            		<div class="col-md-12 col-lg-12 col-sm-12"><h1>PHOTOS</h1></div>
                                                        <div class="col-md-12">
                                                        		<p></p>
                                                        </div>                                                
                                            		</div>
                                            		<div class="row" style="margin-top:35px;">
                                            			<div class="col-md-6 col-lg-6 col-sm-6" style="padding-top:20px">
                                                        	<img src="images/img1.png" border="0" class="img-responsive" />	
                                                  		</div>	

                                            			<div class="col-md-6 col-lg-6 col-sm-6" style="padding-top:20px">
                                                        <img src="images/img2.png" border="0" class="img-responsive" />	
                                                        </div>	

                                            			<div class="col-md-6 col-lg-6 col-sm-6" style="padding-top:20px">
                                                       <img src="images/img3.png" border="0" class="img-responsive" />	
                                                        </div>	

                                            			<div class="col-md-6 col-lg-6 col-sm-6" style="padding-top:20px">
                                                        <img src="images/img4.png" border="0" class="img-responsive" />	
                                                        </div>	
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