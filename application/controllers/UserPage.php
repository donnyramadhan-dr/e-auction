<?php

    class UserPage extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('model_sistem');
     }

        public function index()
        {
            if ($this->session->userdata('status')!= 'signin') {
                redirect('UserPage/home');
            } else if($this->session->userdata('status') == 'signin') {
                redirect('UserPage/barang'.$this->session->userdata('usernama'));
            }
        }

        public function home()
        {
            $data['title'] = "Home";
            $this->load->view('user/index',$data);
        }

        public function signin()
        {
            if ($this->session->userdata('status') == 'signin') {
                redirect('UserPage/barang'.$this->session->userdata('usernama'));
            } 
            $data['title'] = "Sign In";
            $this->load->view('user/signin', $data); 

        }

        public function register()
        {
            $data['title'] = "Register";
            $data['user'] = $this->model_sistem->get_user();
            $data['c_user']= $this->model_sistem->count_user();
            $this->load->view('user/register',$data);
        }

        public function barang()
        {
            $data['title'] = "Barang Lelang";
            $this->load->view('user/barang',$data);
        }

        public function regis()
        {
            $data['title'] = "Regis Petugas";
            $this->load->view('user/jadipelelang',$data);
        }

        public function insert_user()
        {
            $this->model_sistem->insert_data();
        }

        public function signin_action()
        {
            $usernamess = $this->input->post('usernamess');
            $passwordss = $this->input->post('passwordss');

            $where = array(
                'username' => $usernamess,
                'password' => $passwordss
            );

            $check = $this->model_sistem->cek_signin($where)->num_rows();
            if ($check > 0) {
                $role = $this->model_sistem->cek_signin($where)->row(0)->id_level;
                if ($role == '1' || $role == '2') {
                    $current_role = $this->model_sistem->cek_signin($where)->row(0)->id_level;
                    $current_id = $this->model_sistem->cek_signin($where)->row(0)->id_petugas;
                    $data_session = array(
                        'id' => $current_id,
                        'username' => $usernamess,
                        'role' => $current_role,
                        'status' => 'signin'
                    );
                    $this->session->set_userdata($data_session);
                    if ($this->session->userdata('status')=='signin') {
                        header("Location:" . base_url() . 'AdminPage/index');
                    } else {
                        header("Location:" . base_url());   
                    }
                } else {
                    $current_id = $this->model_sistem->cek_signin($where)->row(0)->nik;
                    $data_session = array(
                        'id' => $current_id,
                        'username' => $usernamess,
                        'role' => 'user',
                        'status' => 'signin' 
                    );
                    $this->session->set_userdata($data_session);
                    if ($this->session->userdata('status') == 'signin') {
                        header("Location:" . base_url() . 'UserPage/barang');
                    } else {
                        header("Location:" . base_url());
                    }
                    
                }
                
            }else {
                echo "Login gagal";
            }
        }

        public function logout()
        {
            $this->session->sess_destroy();
            redirect(base_url());
        }
    }