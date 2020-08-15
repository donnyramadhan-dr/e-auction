<?php

class Homepage extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('model_sistem');
    }

    public function indexlog(){
        if ($this->session->userdata('status')!= 'signin') {
            redirect('Homepage/home');
        }else if ($this->session->userdata('status')=='signin') {
            redirect('Homepage/jersey/'.$this->session->userdata('username'));
        }
    }

    public function signin(){
        if ($this->session->userdata('status')=='signin') {
            redirect('sistem/home/'.$this->session->userdata('username'));
        }
        $data['title']="Sign In";
        $this->load->view('header',$data);
        $this->load->view('signin');
        $this->load->view('footer');
    }

    public function aksi_signin(){
        $usernames = $this->input->post('user');
        $passwords = $this->input->post('pw');
        $where = array(
            'username' => $usernames,
            'password' => ($passwords)
        );            
        $cek = $this->model_sistem->cek_signin("tb_user",$where)->num_rows();

        if ($cek > 0 ) {
            $data_session = array(
                'username' => $usernames,
                'status' => 'signin'
            );
            $this->session->set_userdata($data_session);
            if ($this->session->userdata('status')== 'signin') {
                header("location:".base_url().'Homepage/jersey');
            }else {
                echo 'Login Failed!!';
            }
        }else {
                echo 'Username or Password Incorrect';
        }
    }




    public function index(){
        $this->load->view('index');
    }
    public function login(){
        $this->load->view('signin');
    }
    public function register(){
        $data['title'] = "Register";
        $data['user'] = $this->model_sistem->get_user();
        $data['c_user']=$this->model_sistem->count_user();
       $this->load->view('register',$data);
    
    }
    public function jersey(){
        $this->load->view('jerseylist');
    }
    public function shoes(){
        $this->load->view('shoeslist');
    }

    public function simpan_data(){
        $this->model_sistem->simpan_db();
    }

    public function edit($id){
        $where = array('id_user' => $id);
        $data['tb_user'] = $this->model_sistem->update($where,'tb_user')->result();
        $this->load->view('edit',$data);
    }

    public function update(){
        $id = $this->input->post('id_user');
        $nama = $this->input->post('name');
        $usernames = $this->input->post('username');
        $email = $this->input->post('mail');
        $passwords = $this->input->post('pass');
        $telp = $this->input->post('no');

        $data = array(
            'nama_lengkap'=>$nama,
            'username' =>$usernames,
            'email' => $email,
            'password' => $passwords,
            'telp' => $telp
        );
        $this->model_sistem->update_data($id,$data);
        redirect('Homepage/register');
    }

    public function delete($id){
        $where = array('id_user' => $id);
        $this->model_sistem->delete_data($where,'tb_user');
        redirect('Homepage/register');
    }

    public function signout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }

}

