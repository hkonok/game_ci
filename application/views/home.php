<div id="templatemo_content_wrapper">
    <div id="templatemo_content">

        <div style="margin-top: 10px;">

            <div id="sliderFrame">
                <div id="slider" >
                    <?php
                    $i = 0;
                    foreach ($video_list as $row):
                    $i++;
                    if ($i > 5)
                    break;
                    ?>
                    <a class="video" href="http://www.youtube.com/watch?v=<?php echo $row['video_id']; ?>">
                        <img src="http://img.youtube.com/vi/<?php echo $row['video_id']; ?>/0.jpg" />
                    </a>
                    <?php endforeach; ?>


                </div>
            </div>

            <!--
      <div id="thumbs" >
        <div class="thumb">
            <div class ="frame"><img src="<?php echo base_url(); ?>assets/slider/images/thumb1.jpg" /></div>
            <div class ="thumb-content"><p>HTML Content</p>Thumbnails allows any HTML content</div>
            <div style ="clear:both;"></div>
        </div>
        <div class="thumb">
            <div class="frame"><img src="<?php echo base_url(); ?>assets/slider/images/thumb2.jpg" /></div>
            <div class="thumb-content"><p>Customizable</p>Thumbnail style is customizable</div>
            <div style="clear:both;"></div>
        </div>
        <div class="thumb">
            <div class="frame"><img src="<?php echo base_url(); ?>assets/slider/images/thumb3.jpg" /></div>
            <div class="thumb-content"><p>Variety of Layouts</p>Just a CSS tweak.</div>
            <div style="clear:both;"></div>
        </div>
        <div class="thumb">
            <div class="frame"><img src="<?php echo base_url(); ?>assets/slider/images/thumb4.jpg" /></div>
            <div class="thumb-content"><p>Integration</p>Built-in functions for the thumbnails</div>
            <div style="clear:both;"></div>
        </div>
    </div> -->
        </div>
        <!--thumbnails-->

        <!-- end of a column -->


        <div class="margin_bottom_20"></div>
        <div class="fl margin_left_320">
            <h3>NEWS</h3>
        </div>
        <br/><br/><br/>
        <div class="column_w920">

            <div class="column_w190 fl margin_left_60">
                      <!--a href="#"><img src="images/templatemo_image_02.jpg" alt="image" /></a-->
                <p align="right">Latest</p>                
            </div>
            <?php
            $i = 0;
            foreach ($news_list as $row):
            $i++;
            if ($i > 3)
            break;
            ?>
            <div class="column_w190 fl margin_left_60">
                <a href="#"><img src="<?php echo base_url(); ?>assets/news/<?php echo $row['pic']; ?>" alt="image" width="149px" height="103px" /></a>
                <p style=" text-transform: uppercase;"><?php echo $row['headline']; ?><br/><br/></p>

                <p><?php echo substr($row['news'], 0, 150) . '......'; ?><br/><a href="<?php echo base_url();?>index.php/games/news_details/<?php echo $row['id'];?>/">Read More</a></p>
            </div>
            <?php endforeach; ?>

            <div class="margin_bottom_15"></div>
            <!---------->
            <div class="column_w190 fl margin_left_60">
         <!--a href="#"><img src="images/templatemo_image_02.jpg" alt="image" /></a-->
                <p align="right">Archive</p>                
            </div>
            <?php
                $i = 0;
                foreach ($news_list as $row):
                    $i++;
                    if ($i <= 3)
                        continue;
            ?>
            <div class="column_w190 fl margin_left_60">
                <a href="#"><img src="<?php echo base_url(); ?>assets/news/<?php echo $row['pic']; ?>" alt="image" width="149px" height="103px" /></a>
                <p style=" text-transform: uppercase;"><?php echo $row['headline']; ?><br/><br/></p>

                <p><?php echo substr($row['news'], 0, 150) . '......'; ?><br/><a href="<?php echo base_url();?>index.php/games/news_details/<?php echo $row['id'];?>/">Read More</a></p>
            </div>
            <?php endforeach; ?>

            

            <div class="margin_bottom_15"></div>
        </div>

        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

        <div class="cleaner"></div>
    </div> <!-- end of wrapper 02 -->        
</div> <!-- end of wrapper 01 -->