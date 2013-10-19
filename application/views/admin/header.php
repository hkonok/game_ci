<!DOCTYPE html>
<html>
  <head>
    <title>Bountypuncture</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
   
  </head>
  <body style="padding-top: 40px;">
      <div class="row">
      <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#"></a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="<?php if($page == "1") echo "active";?>">
                  <a href="<?php echo base_url(); ?>index.php/admin/home/" >Home</a>
              </li>
              <li class="<?php if($page == "2") echo "active";?>">
                  <a href="<?php echo base_url(); ?>index.php/admin/insert_news/">Insert News</a>
              </li>
              <li class="<?php if($page == "3") echo "active";?>">
                <a href="<?php echo base_url(); ?>index.php/admin/news_list/">News List</a>
              </li>
              <li class="<?php if($page == "4") echo "active";?>">
                  <a href="<?php echo base_url(); ?>index.php/admin/insert_video/">Insert Video</a>
              </li>
              <li class="<?php if($page == "5") echo "active";?>">
                <a href="<?php echo base_url();?>index.php/admin/insert_photos/">Insert Photos</a>
              </li>
              
            </ul>
          </div>
        </div>
      </div>
    </div>
      </div>