<?php
if (!defined ('BASEPATH'))
exit ('No direct script allowed');
class Mahasiswa extends CI_Controller
{
    function Mahasiswa(
        {
            function_construct()
            {
                parent::_construct();
                $this->load->model('Mahasiswa_Model');

            }
            function index()
            {
                $mhs = $this->Mahasiswa_Model->select($geT_mhs, $post);
                foreach ($mhs as $mahasiswa)
                {
                    this->table->add_row($mahasiswa->NIM,$mahasiswa->NAMA,$mahasiswa->PRODI,$mahasiswa->KELAS);
                }
            $data['TABLE'] = $this->table->generate();
            $this->load->view('mahasiswa', $data);
            
            }
        }
    )
}