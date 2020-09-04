<?php

class model_sistem extends CI_Model
{

    // for barang
	public function simpanBarang()
	{
		$foto = $_FILES['foto']['tmp_name'];
		if ($foto = '') {
			echo "Tidak Ada Gambar!";
		} else {
			$config['upload_path'] = './assets/fotobarang';
			$config['allowed_types'] = 'jpg|png|gif';

			$this->load->library('upload');
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('foto')) {
				echo "gagal upload";
				die();
			} else {
				$foto = $this->upload->data('file_name');
			}
		}

		$data = array(
			'id_barang' => "",
			'nama_barang' => $this->input->post('namabarang'),
			'harga_awal' => $this->input->post('hargabarang'),
			'deskripsi_barang' => $this->input->post('deskripsiitem'),
			'foto_barang' => $foto
		);

		$this->db->set('tanggal_upload', 'NOW()', FALSE);
		$this->db->insert('tb_barang', $data);
		header("Location: " . base_url() . 'index.php/homecontroller/addGoods');
	}


    //users
    public function insert_data(){

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
            'password'=>md5($this->input->post('pw')),

        );

        $this->db->insert('tb_user',$data);
        header("location:".base_url().'UserPage/signin');
    }

    //admin
    //add data

    public function insert_datauser()
    {
        $data = array(
            'id_user' => "",
            'nama_lengkap' => $this->input->post('names'),
            'username' => $this->input->post('usernames'),
            'password' => $this->input->post('passwords'),
            'telp' => $this->input->post('phonenumbs')
        );
        $this->db->insert('tb_user', $data);
        header("Location:" . base_url('AdminPage/user_table'));
    }

    public function insert_dataofficer()
    {
        $data = array(
            'id_petugas' => "",
            'nama_lengkap' => $this->input->post('names'),
            'username' => $this->input->post('usernames'),
            'password' => $this->input->post('passwords'),
            'id_level' => $this->input->post('levels')
        );

        $this->db->insert('tb_petugas', $data);
        header("Location:" . base_url('AdminPage/officer_table'));
    }

    public function insert_databarang()
    {
        $foto = $_FILES['foto']['tmp_name'];
		if ($foto = '') {
			echo "Tidak Ada Gambar!";
		} else {
			$config['upload_path'] = './asset/img';
			$config['allowed_types'] = 'jpg|png|gif';

			$this->load->library('upload');
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('foto')) {
				echo "gagal upload";
				die();
			} else {
				$foto = $this->upload->data('file_name');
			}
		}

        $data = array(
            'id_barang' => "",
            'nama_barang' => $this->input->post('names'),
            'tgl' => $this->input->post('dates'),
            'harga_awal' => $this->input->post('prices'),
            'deskripsi_barang' => $this->input->post('descs'),
            'foto_barang' => $foto
        );

        $this->db->insert('tb_barang', $data);
        header("Location:" . base_url('AdminPage/barang_table'));
    }

    //Get & Count Data
    public function get_user()
    {
        $data = $this->db->get('tb_user');
        return $data->result();
    }

    public function count_user()
    {
        $data = $this->db->get('tb_user');
        return $data->num_rows();
    }

    public function get_officer()
    {
        $data = $this->db->get('tb_petugas');
        return $data->result();
    }

    public function count_officer()
    {
        $data = $this->db->get('tb_petugas');
        return $data->num_rows();
    }

    public function get_item()
    {
        $data = $this->db->get('tb_barang');
        return $data->result();
    }

    public function count_item()
    {
        $data = $this->db->get('tb_barang');
        return $data->num_rows();
    }

    //Edit data
    public function edit_datauser($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function edit_dataofficer($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function edit_dataitem($where, $table)
    {

        return $this->db->get_where($table, $where);
    }

    //Update data
    public function update_datauser($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
        header("Location:" . base_url('AdminPage/user_table'));
    }

    public function update_dataofficer($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
        header("Location:" . base_url('AdminPage/officer_table'));
    }

    public function update_dataitem($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
        header("Location:" . base_url('AdminPage/barang_table'));
    }

    //Delete Data
    public function delete_datauser($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
        header("Location:" . base_url('AdminPage/user_table'));
    }

    public function delete_dataofficer($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
        header("Location:" . base_url('AdminPage/officer_table'));
    }

    public function delete_dataitem($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
        header("Location:" . base_url('AdminPage/barang_table'));
    }


    //cek signin
    public function cek_signin($where)
    {
        $petugas = $this->db->get_where("tb_petugas",$where);
        $user = $this->db->get_where("tb_user",$where);
        if ($petugas->result() == null) {
            return $user; 
        }else {
            return $petugas;
        }
    }
}
