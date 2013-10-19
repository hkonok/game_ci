<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class games extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        
    }
    
    public function index(){
        redirect('games/home/');
    }

    public function home(){
        $data['page'] = '1';
        $this->load->view("header", $data);
        $this->load->view("home");
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
        $this->load->view("media");
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
        $this->load->view("news");
        $this->load->view("footer");
    }
    
    public function contact(){
        $data['page'] = '6';
        $this->load->view("header", $data);
        $this->load->view("contact");
        $this->load->view("footer");
    }
    
}