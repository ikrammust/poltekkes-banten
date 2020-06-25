<?php 

class rdsn extends CI_Model{

    private $_table = 'dosen';
    
    public $id;
    public $nip;
    public $nama;
    public $tingkat;
    public $jurusan;
    public $masuk;
    public $password;
    public $pilihan;
    public $status;
    public $role_id;

    public function rules()
    {
        return [
            ['field' => 'nip',
            'label' => 'NIP',
			'rules' => 'required','trim','is_unique', [
                'required' => "NIP harus di isi",
                'is_unique' => "NIP sudah digunakan!"
            ]],

            ['field' => 'nama',
            'label' => 'NAMA',
            'rules' => 'required',[
                'required' => "Kamu ga punya nama?"
            ]],
            
            ['field' => 'password',
            'label' => 'PASSWORD',
			'rules' => 'required','trim',[
                'required' => "Password harus di isi"
            ]],
			
			['field' => 'tingkat',
			'label' => 'TINGKAT', 
			'rules' => '' 
			],

			['field' => 'jurusan',
			'label' => 'JURUSAN',
			'rules' => ''  
			],

			['field' => 'masuk',
			'label' => 'MASUK', 
			'rules' => ''
			],

			['field' => 'pilihan',
			'label' => 'PILIHAN',
			'rules' => ''  
			],

			['field' => 'status',
			'label' => 'STATUS',
			'rules' => ''  
			],

			['field' => 'role_id',
            'label' => 'ROLE_ID',
			'rules' => '' 
			],

        ];
    }

	function get_data(){
		$this->db->select("*");
        $this->db->from($this->_table);
        $this->db->where('role_id =', 2);
        $this->db->order_by($this->nama,'asc');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    

	public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }


	public function save()
    {
        $post = $this->input->post();
        $this->nip = htmlspecialchars($this->input->post('nip'));
        $this->nama = htmlspecialchars($this->input->post('nama'));
        $this->password = password_hash($post['password'], PASSWORD_DEFAULT);
        $this->tingkat = $post["tingkat"];
        $this->jurusan = $post["jurusan"];
        $this->masuk = $post["masuk"];
        $this->pilihan = $post["pilihan"];
        $this->status = $post["status"];
        $this->role_id = $post["role_id"];
        $this->db->insert($this->_table, $this);
	}
	
	public function delete($id)
    {   
        $nana = $this->db->get_where($this->_table, ['id' => $id])->row_array();
        unlink(FCPATH . 'assets/dist/img/' . $nana['image']);
        $this->db->delete('nilai', array('nip' => $nana['nip']));
        $this->db->delete('infodosen', array('nip' => $nana['nip']));
        return $this->db->delete($this->_table, array("id" => $id));
    }

    public function edit_data($where,$table){		
        return $this->db->get_where($table,$where);
    }

    public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}

//     // public function update()
//     // {
//     //     $post = $this->input->post();
//     //     $this->product_id = $post["id"];
//     //     $this->name = $post["name"];
//     //     $this->price = $post["price"];
//     //     $this->description = $post["description"];
//     //     $this->db->update($this->_table, $this, array('product_id' => $post['id']));
//     // }