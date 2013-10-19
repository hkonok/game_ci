

<div class="container">
    <div class="row" style="margin-top: 25px;">
        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
            <div class="control-group">
                <label class="control-label" for="video_id">Video ID</label>
                <div class="controls">
                    <input class="input-large" type="text" id="video_id" name="video_id" placeholder="ID of youtube video">
                </div>
            </div>

            <div class="control-group">
                <div class="controls">

                    <button type="submit" class="btn">Insert Video</button>
                </div>
            </div>
        </form>
    </div>

    <div class="row"  style="margin-top: 25px; margin-bottom: 25px;">
        <ul class="thumbnails">
            <?php if(isset($video_list)): foreach ($video_list as $row): ?>
                <li class="span4">
                    <div class="thumbnail">
                        <img  alt="Video" style="width: 320px; height: 200px;" src="http://img.youtube.com/vi/<?php echo $row['video_id']; ?>/0.jpg">
                        <div class="caption alert alert-success">     
                            <p ><?php echo $row['date']; ?> <a href="#myModal<?php echo $row['id']; ?>" role="button" class="btn btn-danger pull-right" data-toggle="modal">Delete</a></p>
                        </div>
                        <p>
                            <?php
                                $content = file_get_contents("http://youtube.com/get_video_info?video_id=" . $row['video_id']);
                                parse_str($content, $ytarr);
                                if(isset($ytarr['title']))echo $ytarr['title'];
                            ?>
                        </p>
                        <div id="myModal<?php echo $row['id']; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-header">

                                <h3 id="myModalLabel" class="alert alert-danger">Alert</h3>
                            </div>
                            <div class="modal-body">
                                <p>Do you want to delete this video?</p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
                                <a class="btn btn-primary" href="<?php echo base_url(); ?>index.php/admin/delete_video/<?php echo $row['id']; ?>/">Yes</a>
                            </div>
                        </div>
                    </div>
                </li>
            <?php endforeach;                endif;?>
        </ul>
    </div>


</div>

