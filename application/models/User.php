<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class User extends CI_Model { 
    public function __construct(){
        // parent::__construct();
        // $this->table = 'user';
        $this->load->database();
    }

    public function get_user($id){
        $this->db->where('id',$id);
        $query = $this->db->get('user');
        return $query->result_array();

    }
    public function set_user($fileName){
        $data = [
            'email'=>$this->input->post('email'),
            'password'=>$this->input->post('password'),
            'photo'=>$fileName,
            'name'=>$this->input->post('name')
        ];
        return $this->db->insert('user',$data);
         
    }
    public function validate_user(){
        $data = [
            'email'=>$this->input->post('email'),
            'password'=>$this->input->post('password'),


        ];
        $query  = $this->db->get_where('user',$data);
        return $query->result_array();
    }
    public function edit_user($id){
        $data = [
            'email'=>$this->input->post('email'),
            'password'=>$this->input->post('password'),
            'photo'=>$this->input->post('profilepic'),
            'name'=>$this->input->post('name')
        ];
        $this->db->where('id', $id);
        return $this->db->update('user', $data);
        //  $this->db->insert('user',$data);
         
    }
    
    
}