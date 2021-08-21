<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bairro extends CI_Controller {

    public function __construct()
	{
		parent::__construct();

		$this->load->helper('text');
	}

    public function index($marca_meta_link = NULL)
    {
      	$sistema = info_header_footer();
        if(!$marca_meta_link || !$marca = $this->core_model->get_by_id('marcas', array('marca_meta_link' => $marca_meta_link))){

            redirect('/');

        }else{
            $data = array(
                'titulo' => 'Propriedades do bairro '. $marca->marca_nome,
                'bairro' => $marca->marca_nome,
                'imovel' => $this->produtos_model->get_all_by(array('marca_meta_link' => $marca_meta_link)),
                'sistema' => $sistema
            );


            //echo '<pre>';
           // print_r($data);
           // exit();


            $this->load->view('web/layout/header', $data);
            $this->load->view('web/bairro');
            $this->load->view('web/layout/footer', $data);
        }
    }



}
