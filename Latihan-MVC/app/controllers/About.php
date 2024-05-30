<?php

class About extends Controller{
    public function index($nama='Riyan', $profesi='Mahasiswa' , $umur=20){
        $data['nama'] = $nama;
        $data['profesi'] = $profesi;
        $data['umur'] = $umur;
        $data['judul'] = 'About me';
        $this->view('template/header', $data);
        $this->view('about/index',$data);
        $this->view('template/footer');
    }
    public function page(){
        $data['judul'] = 'Pages';
        $this->view('template/header',$data);
        $this->view('about/page');
        $this->view('template/footer');
    }
}