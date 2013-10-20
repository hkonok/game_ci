<div id="templatemo_content_wrapper">
    <div id="templatemo_content">


        <div class="margin_bottom_10"></div>
        <div class="fl margin_left_310">
            <h3>VIDEOS</h3>
        </div>
        <br/><br/><br/>
        <div class="column_w920">               
            <?php
            $i = 0;
            foreach ($video_list as $row):
                if ($i % 3 == 0) {
                    echo '<div class="margin_bottom_15"></div><div class="column_w190 fl margin_left_60">';
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
                <p><?php
            $content = file_get_contents("http://youtube.com/get_video_info?video_id=" . $row['video_id']);
            parse_str($content, $ytarr);
            if (isset($ytarr['title']))
                echo $ytarr['title'];
                ?></p>


            </div>
            <?php
            $i++;
        endforeach;
        ?>
        <div class="margin_bottom_15"></div>
        <div class="column_w190 fl margin_left_60">
            <a href="<?php echo base_url(); ?>index.php/games/media/">RETURN TO MEDIA</a>
        </div>
        <!---------->


    </div>


    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

    <div class="cleaner"></div>
</div> <!-- end of wrapper 02 -->        
</div> <!-- end of wrapper 01 -->