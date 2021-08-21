<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imovel extends CI_Controller {

    public function __construct()
	{
		parent::__construct();

		$this->load->helper('text');
	}

    public function index($produto_meta_link = NULL)
    {
      	$sistema = info_header_footer();

        if(!$produto_meta_link || !$produto = $this->produtos_model->get_by_id($produto_meta_link)){

            $data = array(
                'titulo' => 'Casas para Alugar',
                'subtitulo' => 'Todas propriedades',
                'imovel' => $this->produtos_model->get_all(),
                'sistema' => $sistema,
            );

           // $data['fotos_produtos'] = $this->produtos_model->get_fotos();

            $this->load->view('web/layout/header', $data);
            $this->load->view('web/imoveis');
            $this->load->view('web/layout/footer', $data);

        }else{
            $data = array(
                'titulo' => $produto->produto_meta_link,
                'produto' => $produto,
                'sistema' => $sistema,

                 'scripts' => array (
                    'mask/jquery.mask.min.js',
                    'mask/custom.js',
                    'js/add_produto.js',


                 ),

            );

            $data['fotos_produtos'] = $this->core_model->get_all('produtos_fotos', array('foto_produto_id' => $produto->produto_id));

           // echo '<pre>';
           // print_r($data);
          // exit();


            $this->load->view('web/layout/header', $data);
            $this->load->view('web/imovel');
            $this->load->view('web/layout/footer', $data);
        }
    }



}
