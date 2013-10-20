<div id="templatemo_content_wrapper">
    	<div id="templatemo_content">
    
    	<!--div class="column_w210 fl">
    
            <div class="margin_bottom_10"></div>
            
      
                        
            <div class="margin_bottom_10"></div>
            
           
        </div> <!-- end of a column -->
        
        <!--div class="column_w430 fl vl_divider">
        	
            <img src="images/boarder_11.png" alt="image" width="650px" height="auto"/>
            
            <!--div class="header_01">Welcome to our photo site!</div>
            
            <p>This <a href="http://www.templatemo.com" target="_parent">free website template</a> is brought to you by <a href="http://www.templatemo.com" target="_parent">templatemo.com</a> website. You may use this template in your websites. Credit goes to <a href="http://www.photovaco.com" target="_blank">Free Photos</a> for photos.</p>
	
		  <p>Vivamus a massa. Donec iaculis felis id neque. Morbi nunc. Praesent varius egestas velit. Donec a massa ut pede pulvinar vulputate. Nulla et augue. Sed eu nunc quis pede tristique suscipit. Nam sit amet justo vel libero tincidunt dignissim. Cras magna velit, pellentesque mattis, faucibus vitae, feugiat vitae, sapien. Donec ante. Fusce ac orci sit amet velit ultrices condimentum.</p>
        
        	<div class="cleaner"></div-->        
        <!--/div--> <!-- end of a column -->
        
		<div class="date"><p><?php echo date("D",strtotime($news_details['date']));?>, <?php echo date("M",strtotime($news_details['date']));?> <?php echo date("d",strtotime($news_details['date']));?>, <?php echo date("Y",strtotime($news_details['date']));?></p></div>
        <div class="margin_bottom_20"></div>
		<div class="fl margin_left_100">
		<div class="margin_left_311">
        <h3 style="text-transform: uppercase;"><?php echo $news_details['headline']; ?></h3>
		</div>
		</div>
		<div class="margin_bottom_15"></div>
        <div class="column_w920">
        
      <div class="column_w190 fl margin_left_311">
          <img src="<?php echo base_url(); ?>assets/news/<?php echo $news_details['pic']; ?>" width="330px" height="300px" alt="image" />
                         
          </div>
            
  
            
      <div class="column_w191 fl margin_left_320">
            	<!--a href="#"><img src="images/1.jpg" alt="image" /></a-->
				
				<p align="justify"><?php echo $news_details['news']; ?></p>
      </div>
        

       	<div class="margin_bottom_15"></div>
        </div>
                <div class="margin_left_310"><a href="<?php echo base_url(); ?>index.php/games/news/">RETURN TO NEWS</a></div>
  
          <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
     
    	<div class="cleaner"></div>
	</div> <!-- end of wrapper 02 -->        
    </div> <!-- end of wrapper 01 -->