<?php

class model_sistem extends CI_Model
{
    public function simpan_db(){

        // $config['upload_path']='./asset/';
        // $config['allowed_types']='jpg|png|gif';
        // $config['max_size']='2048000';
        // $config['file_name']= url_title($this->input->post('gambar'));
        // $filename = $this->upload->file_name;
        

        $data = array(
            'id_user' => "",
            'nama_lengkap'=> $this->input->post('name'),
            'username'=>$this->input->post('user'),
            'telp'=>$this->input->post('no'), 
            'email'=>$this->input->post('mail'),
            'password'=>$this->input->post('pw'),

        );

        $this->db->insert('tb_user',$data);
        header("location:".base_url().'Homepage/login');
    }

    public function update($where,$table){
        return $this->db->get_where($table,$where);  
    }

    public function update_data($id,$data){
        $this->db->set($data);
        $this->db->where('id_user',$id);
        $this->db->update('tb_user');
    }

    public function delete_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function get_user(){
        $data = $this->db->get('tb_user');
        return $data->result();
    }
    public function count_user(){
        $data= $this->db->get('tb_user');
        return $data->num_rows();
    }
    public function cek_signin($table,$where){
        return $this->db->get_where($table,$where);
    }


}
