<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller {

    public function __construct()
	{
		parent::__construct();

		$this->load->helper('text');
	}
	public function index()

	{
		$sistema = info_header_footer();

		$data = array(
			'titulo' => 'Contato',
			'produtos_destaques' => $this->loja_model->get_produto_destaque($sistema->sistema_produtos_destaques),

			'sistema' => $sistema


		);



		$this->load->view('web/layout/header', $data);
		$this->load->view('web/contato');
		$this->load->view('web/layout/footer', $data);
	}


}
