<div id="templatemo_content_wrapper">
    <div id="templatemo_content">



        <div class="margin_bottom_10"></div>

        <div id="sliderFrame">
            <div id="ribbon"></div>
            <div id="slider">
                <a href="#">
                    <img src="<?php echo base_url(); ?>assets/slider/images/image-slider-1.jpg" alt="bountypuncture" />
                </a>
                <a class="lazyImage" href="<?php echo base_url(); ?>assets/slider/images/image-slider-2.jpg" title="Test image 2. Title test.">Test image 2. Title test Effect</a>
                <a href="#">
                    <b data-src="<?php echo base_url(); ?>assets/slider/images/image-slider-3.jpg" title="three">Test image 3. Title test.</b>
                </a>
                <a class="lazyImage" href="<?php echo base_url(); ?>assets/slider/images/image-slider-4.jpg" title="Test image 4. Title test.">Test image 4. Title test. Effect</a>
                <a class="lazyImage" href="<?php echo base_url(); ?>assets/slider/images/image-slider-5.jpg" title="Test image 5. T 5">Loading Image</a>
                <a class="lazyImage" href="<?php echo base_url(); ?>assets/slider/images/image-slider-1.jpg" title="Test image 6">Test image 6 . E</a>
                <a class="lazyImage" href="<?php echo base_url(); ?>assets/slider/images/image-slider-2.jpg" title="Test image 7">Test image 7. E</a>
                <a class="lazyImage" href="<?php echo base_url(); ?>assets/slider/images/image-slider-3.jpg" title="Test image 8">Test image 8. E</a>
            </div>

            <!--thumbnails-->
            <div id="thumbs">
                <div class="thumb"><img src="<?php echo base_url(); ?>assets/slider/images/thumb1.jpg" /></div>
                <div class="thumb"><img src="<?php echo base_url(); ?>assets/slider/images/thumb2.jpg" /></div>
                <div class="thumb"><img src="<?php echo base_url(); ?>assets/slider/images/thumb3.jpg" /></div>
                <div class="thumb"><img src="<?php echo base_url(); ?>assets/slider/images/thumb4.jpg" /></div>
                <div class="thumb"><img src="<?php echo base_url(); ?>assets/slider/images/thumb5.jpg" /></div>
                <div class="thumb"><img src="<?php echo base_url(); ?>assets/slider/images/thumb1.jpg" /></div>
                <div class="thumb"><img src="<?php echo base_url(); ?>assets/slider/images/thumb2.jpg" /></div>
                <div class="thumb"><img src="<?php echo base_url(); ?>assets/slider/images/thumb3.jpg" /></div>
            </div>
        </div>





        <div class="margin_bottom_20"></div>
        <div class="fl margin_left_310">
            <a href="<?php echo base_url(); ?>index.php/games/media_videos/" style=" color: white;" ><h3>VIDEOS</h3></a>
        </div>
        <br/><br/><br/>
        <div class="column_w920">
            <?php
            $i = 0;
            foreach ($video_list as $row):
                $i++;
                if ($i > 3)
                    break;

                if ($i == 1) {
                    echo '<div class="column_w190 fl margin_left_60">';
                } else {
                    echo '<div class="column_w190 fl margin_left_100">';
                }
                ?>

                <a href="#modal-embed<?php echo $row['id']; ?>" class="call-modal" title="Clicking here to view video">
                    <img src="http://img.youtube.com/vi/<?php echo $row['video_id']; ?>/0.jpg" width="200px" height="auto" alt="image" />
                </a>
                <section class="semantic-content is-active" id="modal-embed<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="modal-label-2" aria-hidden="true">
                    <div class="modal-inner">
                        <iframe src="http://www.youtube.com/embed/<?php echo $row['video_id']; ?>?rel=0" frameborder="0" allowfullscreen="" data-src=""></iframe>
                    </div>
                    <!-- Use Hash-Bang to maintain scroll position when closing modal -->
                    <a href="#!" class="modal-close" title="Close this video" data-close="Close">×</a>
                </section>
            </div>
        <?php endforeach; ?>





        <div class="margin_bottom_15"></div>
        <!---------->
        <div class=" fl margin_left_60">
     <!--a href="#"><img src="<?php echo base_url(); ?>assets/images/templatemo_image_02.jpg" alt="image" /></a-->
            <a href="<?php echo base_url(); ?>index.php/games/screen_shots/" style=" color: white;"><h3 align="right">SCREEN SHOTS</h3></a>           
        </div>
        <div class="margin_bottom_15"></div>
        
        <?php $i = 0;            
        foreach ($photo_list as $row):
            $i++;
            
        ?>
        <div class="column_w190 fl margin_left_60">
            <a href="#modal-pictures<?php echo $row['id']; ?>" class="call-modal" title="Show Picture">
            <img src="<?php echo base_url(); ?>assets/photos/<?php echo $row['pic_id']; ?>" width="120px" height="89px" alt="image" /></a>

        </div>
        <section class="semantic-content is-active" id="modal-pictures<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="modal-label-3" aria-hidden="true">

				<div class="modal-inner">
						<img style=" margin: 0;" src="<?php echo base_url(); ?>assets/photos/<?php echo $row['pic_id']; ?>" alt="" height="auto" width="auto"/>

				</div>

				<!-- Use Hash-Bang to maintain scroll position when closing modal -->
				<a href="#!" class="modal-close" title="Close this modal" data-close="Close">×</a>
			</section>
        <?php 
        if($i % 4 == 0)
            echo '<div class="margin_bottom_15"></div>';
        endforeach; 
        ?>

        
        

       

    </div>


    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

    <div class="cleaner"></div>
</div> <!-- end of wrapper 02 -->        
</div> <!-- end of wrapper 01 -->