<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class central_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function create_news($headline, $news, $date, $pic) {
        $data = array(
            'headline' => $headline,
            'news' => $news,
            'date' => $date,
            'pic' => $pic
        );
        $this->db->insert('news', $data);
    }

    public function news_list() {
        $data = $this->db->order_by('id', 'desc')
                ->get('news')
                ->result_array();

        return $data;
    }

    public function get_news($news_id) {
        $data = $this->db->where('id', $news_id)
                ->get('news')
                ->row_array();
        return $data;
    }

    public function delete_news($news_id) {
        $this->db->where('id', $news_id)
                ->delete('news');
    }

    public function edit_news($news_id, $headline, $news) {
        $data = array('headline' => $headline,
            'news' => $news);
        $this->db->where('id', $news_id)
                ->update('news', $data);
    }

    public function video_list() {
        $data = $this->db->order_by('id', 'desc')
                ->get('videos')
                ->result_array();

        return $data;
    }

    public function insert_video($video_id, $date) {
        $data = array('video_id' => $video_id,
            'date' => $date);
        $this->db->insert('videos', $data);
    }
    
    public function delete_video($id){
        $this->db->where('id', $id)
                 ->delete('videos');
    }
    
    public function create_photo($date, $file_name){
        $data = array('pic_id' => $file_name, 'date' => $date);
        $this->db->insert('photos', $data);
    }
    
    public function photo_list(){
        $data = $this->db->get('photos')
                         ->result_array();
        return $data;
    }
    
    public function get_photo($id){
        $data = $this->db->where('id', $id)
                 ->get('photos')
                 ->row_array();
         return $data;
    }

        public function delete_photo($id){
        $this->db->where('id', $id)
                 ->delete('photos');
    }

}
