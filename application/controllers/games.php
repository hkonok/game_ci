<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class games extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('central_model');
    }
    
    public function index(){
        redirect('games/home/');
        
    }

    public function home(){
        $data['page'] = '1';
        $this->load->view("header", $data);
        
        $data['video_list'] = $this->central_model->video_list();
        $data['news_list'] = $this->central_model->news_list();
        $this->load->view("home", $data);
        $this->load->view("footer");
    }
    
    public function game(){
        $data['page'] = '2';
        $this->load->view("header", $data);
        $this->load->view("game");
        $this->load->view("footer");
    }
    
    public function media(){
        $data['page'] = '3';
        $this->load->view("header", $data);
        
        $data['video_list'] = $this->central_model->video_list();
        $data['photo_list'] = $this->central_model->photo_list();
        $this->load->view("media", $data);
        $this->load->view("footer");
    }
    
    public function media_videos(){
        $data['page'] = '3';
        $this->load->view("header", $data);
        
        $data['video_list'] = $this->central_model->video_list();
        $this->load->view("media_videos", $data);
        $this->load->view("footer");
    }
    
    public function screen_shots(){
        $data['page'] = '3';
        $this->load->view("header", $data);
        
        $data['photo_list'] = $this->central_model->photo_list();
        $this->load->view("screen_shots", $data);
        $this->load->view("footer");
    }

    public function downloads(){
        $data['page'] = '4';
        $this->load->view("header", $data);
        $this->load->view("downloads");
        $this->load->view("footer");
    }
    
    public function news(){
        $data['page'] = '5';
        $this->load->view("header", $data);
        
        $data['news_list'] = $this->central_model->news_list();
        $this->load->view("news", $data);
        $this->load->view("footer");
    }
    
    public function contact(){
        $data['page'] = '6';
        $this->load->view("header", $data);
        $this->load->view("contact");
        $this->load->view("footer");
    }
    
    public function news_details($news_id){
        $data['page'] = '5';
        $this->load->view("header", $data);
        
        $data['news_details'] = $this->central_model->get_news($news_id);
        $this->load->view("news_details", $data);
        $this->load->view("footer");
    }
    
}