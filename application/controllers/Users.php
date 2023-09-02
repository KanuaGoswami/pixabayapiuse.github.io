<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Users extends CI_Controller { 
    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('user');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('upload');

        
        // $this->isUserLoggedIn = $this->session->
    }
    public function index(){
        if($this->session->userdata('email')){
            $this->session->set_flashdata('Success', 'Data created successfully');
            // $data['name$this->session->userdata('profilepic'));
            // exit;
            // $data['users']=$this->user->get_users();
            $this->load->view('templates/d');


        }else{
            redirect('users/login');
            
        }
      
    }
    public function registration(){
        if($this->input->method() == 'post'){
            $config = [
                'upload_path'=>'./upload/',
                'allowed_types' => 'gif|jpg|png',
                'max_size'=> 1000000000000000000000000000000,
            ]; 
            $this->upload->initialize($config);
            if($this->upload->do_upload('profilepic')){
                $d = $this->upload->data();
                $filename = $d['file_name'];
                //  $error = array('error' => $this->upload->display_errors());
    
    
            }
            else{
                $error = array('error' => $this->upload->display_errors());
                
               
            }
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]');
            $this->form_validation->set_rules('password','Password','required');
            $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
            
            
            
            $this->form_validation->set_rules('name','Name','required');
            if($this->form_validation->run() == FALSE){
                echo "j";
            }else{
                $this->user->set_user($filename);
                redirect('users/login');
            }  

        }
        

        $this->load->view('templates/registration');
    }
    public function search(){
        if($this->input->method()=='post'){
            $value = $this->input->post('searchValue');
            $url = "https://pixabay.com/api/?key=6770126-783f12da5d489ec78db69504e&q=".$value."&image_type=photo";
            $ch = curl_init();
            curl_setopt($ch,CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            $result = curl_exec($ch);
            if($e = curl_error($ch)){
                echo "<pre>";
                print_r($e);
                echo "</pre>";


            }else{
                $data = json_decode($result);
                $data =$data->hits ;
                $d['images']=$data;
              
                
                return $this->load->view('templates/search',$d);



              


            }
            curl_close($ch);
            // foreach($data as $value){
                // echo "<img src='".$value->previewURL."'>";
                // echo "<img src='".$value->webformatURL."'>";
                // echo "<img src='".$value->largeImageURL."'>";


                // print_r($value);
                // exit;

            // }



                        


        }
        return $this->load->view('templates/search');
    }
    public function update_user($id){ 
        if($this->session->userdata('email')){
            if($this->input->method()=='post'){
                $this->form_validation->set_rules('email', 'Email','required|valid_email');
                $this->form_validation->set_rules('password','Password','required');
                $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
                $this->form_validation->set_rules('profilepic','Profilepic','required');
                $this->form_validation->set_rules('name','Name','required');
                if($this->form_validation->run() == FALSE){
                    echo "j";
                }else{
                    $this->user->edit_user($id);
                    redirect('users/index');
                }

            }
            $data = $this->user->get_user($id);  
        // print_r($data[0]);
        // exit;

        $this->load->view('templates/edit',$data[0]);
            
            

        }
        
    }
    public function login(){
        
    

        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('password','Password','required');
        if($this->form_validation->run() == false){
            echo "nothing";

        }else{
            $data = $this->user->validate_user();
            $this->session->set_userdata($data[0]);
            redirect('users/index');
            // print_r($data[0]['id']);

        }

        $this->load->view('templates/login.php');
    }
    public function logout(){
        $this->session->unset_userdata('email');
        redirect('users/login');
    }
    public function update_user_data($id){
        if($this->session->userdata('email')){
            $data = ['id'=>$id];
            $this->load->database();
            $this->load->model('user');
            $query = $this->db->get_where('user',$data);

            $data['user']=$query->result_array();


            
            $this->load->view('templates/edit',$data);
        }
    }
    public function delete_user($id){
        if ($this->session->userdata('email')){
            $data = ['id'=>$id];
            $this->load->database();
            $this->load->model('user');
            $this->db->delete('user',$data);
            redirect('users/index');
        }else{
            redirect('users/login');
        }

    }
}
