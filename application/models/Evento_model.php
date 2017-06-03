<?php
    class Evento_model extends CI_Model {
        public function __construct() {
            $this->load->database();
        }

        public function create_evento($slug) {
            $data = array(
                'nome' => $this->input->post('nome'),
                'endereco' => $this->input->post('endereco'),
                'data' => $this->input->post('data'),
                'hora' => $this->input->post('hora'),
				'slug' => $slug
            );

            return $this->db->insert('eventos', $data);
        }
		
		public function get_evento($slug) {
            $query = $this->db->get_where('eventos', array('slug' => $slug));
            return $query->row_array();
        }
    }
    