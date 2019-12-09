<?php
class Mahasiswa extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('M_mahasiswa');
    }
    function index()
    {
        $data['title'] = 'mahasiswa';
        $data ['mhs'] = $this->M_mahasiswa->getMhs()->result();
        $this->load->view('mahasiswa', $data);
    }
    function insertMhs(){
        $data = array(
            'id'=>'',
            'nim'=>$this->input->post('nim'),
            'nama'=>$this->input->post('nama'),
            'kelas'=>$this->input->post('kelas'),
        );
        $this->M_mahasiswa->insert($data);
        redirect('mahasiswa');
    }

    function tambah_Data(){
        $this->load->view('tambahData');
    }
    
    function update_Data($id){
        $id = $this->uri->segment(3);
        $data['mhs'] = $this->M_mahasiswa->update($id)->row();
        $this->load->view('updateData', $data);
    }

    function update_Mhs($id){
        
        $data = array(
            'nim'=>$this->input->post('nim'),
            'nama'=>$this->input->post('nama'),
            'kelas'=>$this->input->post('kelas'),
        );
        $id= $this->uri->segment(3);
        $this->M_mahasiswa->update_Mhs($data, $id);
        redirect('mahasiswa');
    }

    function hapus_Mhs($id){
        $id = $this->uri->segment(3);
        $this->M_mahasiswa->hapus_Mhs($id);
        redirect('mahasiswa');
    }

}