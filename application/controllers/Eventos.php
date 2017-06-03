<?php
    class Eventos extends CI_Controller{
		public function index(){
			$this->load->view('eventos/index');
        }
		
		public function create(){
			$data['slug'] = bin2hex($this->encryption->create_key(16));
			$this->evento_model->create_evento($data['slug']);
			
			redirect('eventos/view/'.$data['slug']);
        }
		
		public function view($slug){
			$data['evento'] = $this->evento_model->get_evento($slug);
			
			$this->load->view('eventos/view', $data);
        }
    }