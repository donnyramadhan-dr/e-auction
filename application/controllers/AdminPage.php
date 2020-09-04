<?php

class AdminPage extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('model_sistem');
    }
    
    public function index()
    {
        $data['title'] = 'Admin Home';
        $this->load->view('admin/adminhome', $data);    
    }

    public function add_user()
    {
        $data['title'] = 'Add User';
        $this->load->view('admin/addusers', $data);
    }

    public function add_officer()
    {
        $data['title'] = 'Add Officer';
        $this->load->view('admin/addofficer', $data);
    }

    public function add_barang()
    {
        $data['title'] = 'Add Item';
        $this->load->view('admin/additem', $data);
    }

    //Function Add Data
    public function insert_user()
    {
        $this->model_sistem->insert_datauser();
    }

    public function insert_officer()
    {
        $this->model_sistem->insert_dataofficer();
    }

    public function insert_barang()
    {
        $this->model_sistem->insert_databarang();
    }

    //Show Data
    public function user_table()
    {
        $data['title'] = 'Users Table';
        $data['user'] = $this->model_sistem->get_user();
        $data['c_user'] = $this->model_sistem->count_user();
        $this->load->view('admin/userstable', $data);
    }

    public function officer_table()
    {
        $data['title'] = 'Users Table';
        $data['user'] = $this->model_sistem->get_officer();
        $data['c_user'] = $this->model_sistem->count_user();
        $this->load->view('admin/officertable', $data);
    }

    public function barang_table()
    {
        $data['title'] = 'Users Table';
        $data['user'] = $this->model_sistem->get_item();
        $data['c_user'] = $this->model_sistem->count_user();
        $this->load->view('admin/itemtable', $data);
    }

    //Edit Data admin
    public function edit_user($id_user)
    {
        $where = array('id_user' => $id_user);
        $data['title'] = 'Edit User';
        $data['user'] = $this->model_sistem->edit_datauser($where, 'tb_user')->result();
        $this->load->view('admin/editusers', $data);
    }

    public function edit_petugas($id_petugas)
    {
        $where = array('id_petugas' => $id_petugas);
        $data['title'] = 'Edit Petugas';
        $data['user'] = $this->model_sistem->edit_dataofficer($where, 'tb_petugas')->result();
        $this->load->view('admin/editofficer', $data);
    }

    public function edit_item($id_barang)
    {
        $where = array('id_barang' => $id_barang);
        $data['title'] = 'Edit Item';
        $data['user'] = $this->model_sistem->edit_dataitem($where, 'tb_barang')->result();
        $this->load->view('admin/edititem', $data);
    }

    //Update Data admin
    public function update_user($id_user)
    {
        $name = $this->input->post('names');
        $username = $this->input->post('usernames');
        $password = $this->input->post('passwords');
        $telepon = $this->input->post('phonenumbs');
        $data = array(
            'nama_lengkap' => $name,
            'username' => $username,
            'password' => $password,
            'telp' => $telepon
        );
        $where = array('id_user' => $id_user);
        $this->model_sistem->update_datauser($where,$data, 'tb_user');
    }

    public function update_officer($id_petugas)
    {
        $name = $this->input->post('names');
        $username = $this->input->post('usernames');
        $password = $this->input->post('passwords');
        $level = $this->input->post('levels');
        $data = array(
            'nama_lengkap' => $name,
            'username' => $username,
            'password' => $password,
            'id_level' => $level
        );
        $where = array('id_petugas' => $id_petugas);
        $this->model_sistem->update_dataofficer($where,$data, 'tb_petugas');
    }

    public function update_item($id_barang)
    {
        $name = $this->input->post('names');
        $dates = $this->input->post('dates');
        $price = $this->input->post('prices');
        $description = $this->input->post('descs');
        $data = array(
            'nama_barang' => $name,
            'tgl' => $dates,
            'harga_awal' => $price,
            'deskripsi_barang' => $description
        );

        $where = array('id_barang' => $id_barang);
        $this->model_sistem->update_dataitem($where,$data, 'tb_barang');
    }

    //delete data
    public function delete_user($id_user)
    {
        $where = array('id_user' => $id_user);
        $this->model_sistem->delete_datauser($where, 'tb_user');
    }

    public function delete_officer($id_petugas)
    {
        
        $where = array('id_petugas' => $id_petugas);
        $this->model_sistem->delete_dataofficer($where, 'tb_petugas');
    }

    public function delete_barang($id_barang)
    {
        $where = array('id_barang' => $id_barang);
        $this->model_sistem->delete_dataitem($where, 'tb_barang');
    }

    // pdf print
    public function cetak_pdf_user()
    {
        $data['title'] = 'Users Table PDF';
        $data['user'] = $this->model_sistem->get_user();
        $data['c_user'] = $this->model_sistem->count_user();
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan data user.pdf";
        $this->pdf->load_view('admin/userpreview', $data);
    }

    public function cetak_xls_user()
    {
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="Laporan Data Users.xls"');
        header('Cache-Control: max-age=0');
        $data['user'] = $this->model_sistem->get_user();
        $data['c_user'] = $this->model_sistem->count_user();
        $this->load->view('admin/userpreview', $data);
    }

    public function cetak_xls_officer()
    {
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="Laporan Data Officers.xls"');
        header('Cache-Control: max-age=0');
        $data['user'] = $this->model_sistem->get_officer();
        $data['c_user'] = $this->model_sistem->count_officer();
        $this->load->view('admin/officerpreview', $data);
    }

    public function cetak_xls_item()
    {
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="Laporan Data Items.xls"');
        header('Cache-Control: max-age=0');
        $data['user'] = $this->model_sistem->get_item();
        $data['c_user'] = $this->model_sistem->count_item();
        $this->load->view('admin/itempreview', $data);
    }

}