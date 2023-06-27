<?php
/**
 * 
 */
class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mcrud');

    }
    public function index()
    {
        //load data
        // $data['content'] = "admin/adminpanel";
        $data['admin'] = $this->Mcrud->get_all_data('tbl_admin')->result();
        $data['kriteria'] = $this->Mcrud->get_all_data('tbl_kriteria')->result();
        $data['seleksi'] = $this->Mcrud->get_all_data('tbl_seleksi')->result();
        //load view
        $this->load->view('dashboard', $data);
    }
    public function aksi_perhitungan()
    {
        //get data
        $nisn = $_POST['nisn'];
        $nama = $_POST['nama'];
        $C1 = $_POST['C1'];
        $C2 = $_POST['C2'];
        $C3 = $_POST['C3'];
        $C4 = $_POST['C4'];
        $C5 = $_POST['C5'];

        $skor = array(
            'C1' => $C1,
            'C2' => $C2,
            'C3' => $C3,
            'C4' => $C4,
            'C5' => $C5
        );
        //save data
        $data['skor'] = $skor;
        $data['nisn'] = $nisn;
        $data['nama'] = $nama;
        $data['jurusan'] = $this->Mcrud->get_all_data('tbl_jurusan')->result();
        $data['kriteria'] = $this->Mcrud->get_all_data('tbl_kriteria')->result();
        $this->session->set_flashdata('flash', 'Berhasil');
        $this->load->view('seleksi', $data);
    }
    public function seleksi()
    {
        //load data
        $data['admin'] = $this->Mcrud->get_all_data('tbl_admin')->result();
        $data['kriteria'] = $this->Mcrud->get_all_data('tbl_kriteria')->result();
        $this->session->set_flashdata('flash', 'Anda Harus Login');
        //load view
        $this->load->view('dashboard', $data);
    }
    public function save_seleksi()
    {
        //get data
        $nisn = $_POST['nisn'];
        $nama = $_POST['nama'];
        $C1 = $_POST['C1'];
        $C2 = $_POST['C2'];
        $C3 = $_POST['C3'];
        $C4 = $_POST['C4'];
        $C5 = $_POST['C5'];
        $tot_tb = $_POST['tot_tb'];
        $tot_tkj = $_POST['tot_tkj'];
        $id_admin = $_POST['id_admin'];

        //save data
        $datatambah = array(
            'nisn' => $nisn,
            'nama' => $nama,
            'C1' => $C1,
            'C2' => $C2,
            'C3' => $C3,
            'C4' => $C4,
            'C5' => $C5,
            'tot_tb' => $tot_tb,
            'tot_tkj' => $tot_tkj,
            'id_admin' => $id_admin
        );
        $this->Mcrud->insert('tbl_seleksi', $datatambah);

        $this->session->set_flashdata('flash', 'Berhasil');
        redirect('Dashboard');

    }
}
?>