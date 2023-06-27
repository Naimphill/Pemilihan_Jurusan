<?php
/**
 * 
 */
class Login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Mlogin');
        $this->load->model('Mcrud');
    }

    public function index()
    {
        //load data

        //load view
        $this->load->view('login');
    }
    public function register()
    {
        //load data

        //load view
        $this->load->view('register');
    }
    public function aksi_login()
    {
        $this->load->model('Mlogin');
        $u = $_POST['username'];
        $p = md5($_POST['password']);
        $cek = $this->Mlogin->cek_login($u, $p)->num_rows();
        $result = $this->Mlogin->cek_login($u, $p)->result();
        if ($cek == 1) {

            foreach ($result as $sess) {
                // $sess_data['logged_in'] = 'Sudah Login';
                $sess_data['id_admin'] = $sess->id_admin;
                $sess_data['Username'] = $sess->username;
                $sess_data['password'] = $sess->password;
                $sess_data['nama_lengkap'] = $sess->nama_lengkap;
                $sess_data['level'] = $sess->level;
                $this->session->set_userdata($sess_data);
            }
            if ($this->session->userdata('level') == 'admin') {
                redirect('Adminpanel');
            } elseif ($this->session->userdata('level') == 'user') {
                redirect('Dashboard');
            }
        } else {
            $this->session->set_flashdata('flash', 'Username dan atau Password salah');
            redirect('login');
        }

    }

    public function save_register()
    {
        //post data
        $username = $_POST['username'];
        $nama_lengkap = $_POST['nama_lengkap'];
        $password = md5($_POST['password']);
        //save data
        $dataInsert = array(
            'username' => $username,
            'nama_lengkap' => $nama_lengkap,
            'password' => $password,
            'level' => 'user'
        );
        $this->Mcrud->insert('tbl_admin', $dataInsert);
        $this->session->set_flashdata('flash', 'Berhasil');

        redirect('login');

    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}
?>