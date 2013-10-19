

<div class="container">
    <div class="row" style="margin-top: 25px;">
        <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/admin/upload_photo/" method="post" enctype="multipart/form-data">
            <div class="control-group">
                <label class="control-label" for="upload_image">Upload Image</label>
                <div class="controls">
                    <input type="file" name="upload_image"/>
                </div>
            </div>
            
            <div class="control-group">
                <div class="controls">
                    
                    <button type="submit" class="btn">Insert Photo</button>
                </div>
            </div>
        </form>
    </div>
    
    <div class="row"  style="margin-top: 25px; margin-bottom: 25px;">
            <ul class="thumbnails">
              <?php if(isset($photo_list)): foreach ($photo_list as $row): ?>
              <li class="span3">
                <div class="thumbnail">
                    <img  alt="photo" style="width: 260px; height: 180px;" src="<?php echo base_url(); ?>assets/photos/<?php echo $row['pic_id']; ?>">
                  <div class="caption alert alert-success">  
                     
                    <p ><?php echo $row['date']; ?> <a href="#myModal<?php echo $row['id']; ?>" role="button" class="btn btn-danger pull-right" data-toggle="modal">Delete</a></p>
                  </div>
                    <div id="myModal<?php echo $row['id']; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-header">

                                <h3 id="myModalLabel" class="alert alert-danger">Alert</h3>
                            </div>
                            <div class="modal-body">
                                <p>Do you want to delete this photo?</p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
                                <a class="btn btn-primary" href="<?php echo base_url(); ?>index.php/admin/delete_photo/<?php echo $row['id']; ?>/">Yes</a>
                            </div>
                        </div>
                </div>
              </li>
              <?php endforeach; endif;?>
              
            </ul>
    </div>
    
   
</div>

