<?php

class admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function home() {
        $data['page'] = "1";
        $this->load->view("admin/header", $data);
        $this->load->view("admin/home");
        $this->load->view("admin/footer");
    }

    public function insert_news() {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('headline', 'Headline', 'required');
        $this->form_validation->set_rules('news', 'News', 'required');

        $data['page'] = "2";

        if ($this->form_validation->run() == FALSE) {
            $this->load->view("admin/header", $data);
            $this->load->view("admin/insert_news");
            $this->load->view("admin/footer");
        } else {
            $config['upload_path'] = './assets/news/';
            $config['allowed_types'] = '*';
            $config['max_size'] = '40000';
            $config['max_width'] = '40000';
            $config['max_height'] = '40000';

            $now = new DateTime();
            $config['file_name'] = "" . $now->getTimestamp();
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('upload_image')) {
                $error = array('error' => $this->upload->display_errors());
                redirect(base_url() . 'index.php/admin/insert_news/');
            } else {
                $this->load->model('central_model');
                $data = $this->upload->data();
                $this->central_model->create_news($this->input->post('headline', TRUE), $this->input->post('news', TRUE), $now->format('Y-m-d'), $data['file_name']);
                redirect(base_url() . 'index.php/admin/news_list/');
            }
        }
    }

    public function edit_news($news_id) {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('headline', 'Headline', 'required');
        $this->form_validation->set_rules('news', 'News', 'required');
        if ($this->form_validation->run() == TRUE) {
            $this->load->model('central_model');
            $this->central_model->edit_news($news_id, $this->input->post('headline', TRUE), $this->input->post('news', TRUE));
        }
        redirect('admin/news_list/');
    }

    public function news_list() {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['page'] = "3";
        $this->load->view("admin/header", $data);

        $this->load->model('central_model');
        $data['news'] = $this->central_model->news_list();
        $this->load->view("admin/news_list", $data);

        $this->load->view("admin/footer");
    }

    public function delete_news($news_id) {
        $this->load->model('central_model');
        $data = $this->central_model->get_news($news_id);
        $this->central_model->delete_news($news_id);
        unlink('./assets/news/' . $data['pic']);
        redirect('admin/news_list/');
    }

    public function insert_video() {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('central_model');
        $this->form_validation->set_rules('video_id', 'Video ID', 'required');

        if ($this->form_validation->run() == TRUE) {
            $now = new DateTime();
            $this->central_model->insert_video($this->input->post('video_id', TRUE), $now->format('Y-m-d'));
        }

        $data['page'] = "4";
        $this->load->view("admin/header", $data);

        $data['video_list'] = $this->central_model->video_list();
        $this->load->view("admin/insert_video", $data);

        $this->load->view("admin/footer");
    }

    public function insert_photos() {
        $data['page'] = "5";
        $this->load->model('central_model');
        $this->load->view("admin/header", $data);
        
        $data['photo_list'] = $this->central_model->photo_list();
        $this->load->view("admin/insert_photos", $data);
        
        $this->load->view("admin/footer");
    }

    public function delete_video($id) {
        $this->load->model('central_model');
        $this->central_model->delete_video($id);
        redirect('admin/insert_video/');
    }

    public function upload_photo() {

        $this->load->helper('form');
        $this->load->library('form_validation');

        $config['upload_path'] = './assets/photos/';
        $config['allowed_types'] = '*';
        $config['max_size'] = '40000';
        $config['max_width'] = '40000';
        $config['max_height'] = '40000';

        $now = new DateTime();
        $config['file_name'] = "" . $now->getTimestamp();
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('upload_image')) {
            $this->load->model('central_model');
            $data = $this->upload->data();
            $now= new DateTime();
            $this->central_model->create_photo($now->format('Y-m-d'), $data['file_name']); 
        }
        else{
            $error = array('error' => $this->upload->display_errors());
           // var_dump($error);
        }


        redirect('admin/insert_photos/');
    }
    
    public function delete_photo($id){
        $this->load->model('central_model');
        $data = $this->central_model->get_photo($id);
        $this->central_model->delete_photo($id);
        unlink('./assets/photos/' . $data['pic_id']);
        redirect('admin/insert_photos/');
    }

}