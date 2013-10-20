<div id="templatemo_content_wrapper">
    <div id="templatemo_content">

        <div class="margin_bottom_20"></div>
        <div class="fl margin_left_320">
            <h3>NEWS</h3>
        </div>
        <div class="margin_bottom_15"></div>
        <div class=" column_w921">
        </div>
        <div class="margin_bottom_15"></div>
        <div class="column_w920">
            
            <?php $date = ""; foreach ($news_list as $row): ?>
            
            <?php if($date != $row['date']):
                    $date = $row['date'];
                ?>
            <div class="column_w190 fl margin_left_60">
                <p align="right"><?php echo date("D",strtotime($date));?>, <?php echo date("M",strtotime($date));?> <?php echo date("d",strtotime($date));?></p>                
            </div>
            <div class="column_w190 fl margin_left_60">
                <a href="#"><img src="<?php echo base_url(); ?>/assets/news/<?php echo $row['pic']; ?>" alt="image" width="139px" height="103px" /></a>
            </div>
            <?php else: ?>
                <div class="column_w190 fl margin_left_190">
            	<a href="#"><img src="<?php echo base_url(); ?>/assets/news/<?php echo $row['pic']; ?>" alt="image" width="139px" height="103px" /></a>
                </div>
            <?php endif; ?>

            

            <div class="column_w190 fl margin_left_60">
                <p style="text-transform: uppercase;"><?php echo $row['headline']; ?></p>
                <p><?php echo substr($row['news'], 0, 90) . '......'; ?><br/><a href="<?php echo base_url();?>index.php/games/news_details/<?php echo $row['id'];?>/">Read More</a></p>
            </div>
            <div class="margin_bottom_30"></div>
            
            <?php endforeach; ?>

        </div>

        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

        <div class="cleaner"></div>
    </div> <!-- end of wrapper 02 -->        
</div> <!-- end of wrapper 01 -->