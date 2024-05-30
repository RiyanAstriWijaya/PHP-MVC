<?php

class Home extends Controller{
    public function index(){
        $data['judul'] = 'home';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('template/header',$data);
        $this->view('home/index', $data);
        $this->view('template/footer');
    }
}