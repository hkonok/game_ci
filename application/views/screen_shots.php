<div id="templatemo_content_wrapper">
    <div id="templatemo_content">

        <div class="column_w210 fl">
            <div class="margin_bottom_10"></div>
        </div> <!-- end of a column -->

        <div class="column_w430 fl vl_divider">     
        </div> <!-- end of a column -->

        <div class="column_w210 fl">	
        </div> <!-- end of a column -->


        <div class="column_w211">	
        </div> <!-- end of a column -->
        <div class="margin_bottom_20"></div>

        <br/><br/><br/>
        <div class="column_w920">

            <div class="margin_bottom_15"></div>
            <!---------->
            <div class=" fl margin_left_100">
                <h3 align="right">SCREEN SHOTS</h3>                
            </div>
            <?php
            $i = 0;
            foreach ($photo_list as $row):
                if ($i % 4 == 0) {
                    echo '<div class="margin_bottom_15"></div><div class="column_w190 fl margin_left_100">';
                } else {
                    echo '<div class="column_w190 fl margin_left_10">';
                }
                ?>
                <a href="#modal-pictures<?php echo $row['id']; ?>" class="call-modal" title="Show Picture">
            <img src="<?php echo base_url(); ?>assets/photos/<?php echo $row['pic_id']; ?>" width="120px" height="89px" alt="image" /></a>

       
        <section class="semantic-content is-active" id="modal-pictures<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="modal-label-3" aria-hidden="true">

				<div class="modal-inner">
						<img style=" margin: 0;" src="<?php echo base_url(); ?>assets/photos/<?php echo $row['pic_id']; ?>" alt="" height="auto" width="auto"/>

				</div>

				<!-- Use Hash-Bang to maintain scroll position when closing modal -->
				<a href="#!" class="modal-close" title="Close this modal" data-close="Close">×</a>
			</section>

            </div>
            <?php
            $i++;
        endforeach;
        ?>







        <div class="margin_bottom_15"></div>
        <div class="column_w190 fl margin_left_100">
            <a href="<?php echo base_url(); ?>index.php/games/media/">RETURN TO MEDIA</a>
        </div>
    </div>


    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

    <div class="cleaner"></div>
</div> <!-- end of wrapper 02 -->        
</div> <!-- end of wrapper 01 -->