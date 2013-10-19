

<div class="container">


    <div class="row"  style="margin-top: 25px; margin-bottom: 25px;">
        <ul class="thumbnails">
            <?php foreach ($news as $row): ?>
                <li class="span4">
                    <div class="thumbnail">
                        <img alt="<?php echo $row['headline']; ?>" style="width: 300px; height: 200px;" src="<?php echo base_url() . "assets/news/" . $row['pic']; ?>">
                        <div class="caption">
                            <h6 class="alert alert-success"><?php echo $row['date']; ?></h6>
                            <h4><?php echo $row['headline']; ?></h4>                                       
                            <p><?php echo $row['news']; ?></p>
                            <p><a href="#myModal<?php echo $row['id']; ?>" role="button" class="btn btn-danger" data-toggle="modal">Delete</a> <a href="#editModal<?php echo $row['id']; ?>" role="button" class="btn btn-primary" data-toggle="modal">Edit</a></p>

                            <div id="myModal<?php echo $row['id']; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-header">

                                    <h3 id="myModalLabel" class="alert alert-danger">Alert</h3>
                                </div>
                                <div class="modal-body">
                                    <p>Do you want to delete this news?</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
                                    <a class="btn btn-primary" href="<?php echo base_url(); ?>index.php/admin/delete_news/<?php echo $row['id']; ?>/">Yes</a>
                                </div>
                            </div>

                            <div id="editModal<?php echo $row['id']; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-header">

                                    <h3 id="myModalLabel" class="alert alert-success">Edit News</h3>
                                </div>
                                <div class="modal-body">
                                    <?php
                                    $attributes = array('class' => 'form-horizontal');
                                    echo form_open_multipart('admin/edit_news/' . $row['id'] . '/', $attributes);
                                    //<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                    ?>
                                    <div class="control-group">
                                        <label class="control-label" for="headline">Headline</label>
                                        <div class="controls">
                                            <input class="input-xlarge" type="text" id="headline" name="headline" value="<?php echo $row['headline']; ?>" placeholder="Headline">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="news">News</label>
                                        <div class="controls">
                                            <textarea rows="10" id="news" name="news" class="input-xlarge" ><?php echo $row['news']; ?> </textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
                                    <button type="submit" class="btn btn-primary" >Save</button>
                                </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </li>
            <?php endforeach; ?>

        </ul>
    </div> 
</div>

