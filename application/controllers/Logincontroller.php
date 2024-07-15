<?php
    class Logincontroller extends CI_Controller{
        
        public function login(){
            if($this->form_validation->run() === FALSE){
                $this->load->view('login');
            }else{
                if($this->login_model->login()) {
                    redirect('home');
                }     
                else{
                    $this->session->set_flashdata('errormsg', 'No User found!');

                    $this->load->view('login');
                } 
            }       
            
        }

        public function logout(){
            unset($_SESSION['fullname']);
            unset($_SESSION['user_id']);
            unset($_SESSION['user_department_id']);
            $this->load->view('login');
        }

        
    }
?>