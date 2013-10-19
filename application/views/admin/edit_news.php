

<div class="container">
    <div class="row" style="margin-top: 25px;">
        <?php
        $attributes = array('class' => 'form-horizontal');
        echo form_open_multipart('admin/insert_news/', $attributes);
        //<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
        ?>
        
            <div class="control-group">
                <label class="control-label" for="headline">Headline</label>
                <div class="controls">
                    <input class="input-xxlarge" type="text" id="headline" name="headline" placeholder="Headline">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="news">News</label>
                <div class="controls">
                    <textarea rows="10" id="news" name="news" class="input-xxlarge" > </textarea>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" >Upload Image</label>
                <div class="controls">
                   
                    <input type="file"  name="upload_image"/>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    
                    <button type="submit" class="btn">Insert News</button>
                </div>
            </div>
        </form>
    </div>
    
   
</div>

