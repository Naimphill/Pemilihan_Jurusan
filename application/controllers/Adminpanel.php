<?php
/**
 * 
 */
class Adminpanel extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mcrud');
    }
    public function index()
    {
        // cek login
        if (empty($this->session->userdata('id_admin'))) {
            redirect('Login');
        } elseif ($this->session->userdata('level') == 'user') {
            redirect('Dashboard');
        } else {

            //load data
            // $data['content'] = "admin/adminpanel";
            $data['admin'] = $this->Mcrud->get_all_data('tbl_admin')->result();
            $data['kriteria'] = $this->Mcrud->get_all_data('tbl_kriteria')->result();
            $data['jurusan'] = $this->Mcrud->get_all_data('tbl_jurusan')->result();
            $data['seleksi'] = $this->Mcrud->get_all_data('tbl_seleksi')->result();
            //load view
            $this->load->view('adminpanel', $data);
        }
    }
    public function add_admin()
    {
        //post data
        $username = $_POST['username'];
        $nama_lengkap = $_POST['nama_lengkap'];
        $password = md5($_POST['password']);
        $level = $_POST['level'];
        //save data
        $dataInsert = array(
            'nama_lengkap' => $nama_lengkap,
            'username' => $username,
            'password' => $password,
            'level' => $level
        );
        $this->Mcrud->insert('tbl_admin', $dataInsert);
        $this->session->set_flashdata('flash', 'Disimpan');

        redirect('Adminpanel');
    }
    public function hapus_admin($id)
    {
        $datawhere = array('id_admin' => $id);
        $data['admin'] = $this->Mcrud->hapus_data($datawhere, 'tbl_admin');
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('Adminpanel');
    }
}
?>