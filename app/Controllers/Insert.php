<?php 
    
    class Insert extends Controllers {
        public function _construct() {
            parent:: _construct();

            $this->load->database();

            $this->load->model('blogModel');
        }

        
        public function insert() {
            echo "ok";
        }

        public function submit () {
            $this->load->view('pages/display');

            if ($this->input->post('insert')) {
                $t = $this->input->post('title');
                $d = $this->input->post('description');
                $b = $this->input->post('body');
                $i = $this->input->post('image');
                $this->blogModel->saverecords($t,$d,$b,$i);

                echo('Records saved successfully');
                

            }
        }
    }
?>     -