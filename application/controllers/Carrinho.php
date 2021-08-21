<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carrinho extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

       // $this->load->library('carrinho_compras');
    }

    public function index()
    {
        $data = array(
            'titulo' => 'Carrinho de Compra',
             'scripts' => array (
                'mask/jquery.mask.min.js',
                'mask/custom.js',
   
             ),
          
        );

        $carrinho = array(
            'carrinho' => $this->carrinho_compras->get_all(),
        );
        
       // echo '<pre>';
       // print_r($carrinho);
        //exit;

        $this->load->view('web/layout/header', $data);
        $this->load->view('web/carrinho', $carrinho);
        $this->load->view('web/layout/footer');
    }

    public function insert()
    {
        $produto_id = (int) $this->input->post('produto_id');
        $produto_quantidade  = (int) $this->input->post('produto_quantidade');

        $retorno = array();

        if(!$produto_id || $produto_quantidade < 1){
            $retorno['erro'] = 3;
            $retorno['mensagem'] = 'Informe a quantidade maior que 0(zero)';
            //echo json_encode($retorno);
            //exit();
        }else{

            if(!$produto = $this->core_model->get_by_id('produtos', array('produto_id' => $produto_id))){
                $retorno['erro'] = 3;
                $retorno['mensagem'] = 'Produto não encontrado';
                //echo json_encode($retorno);
                //exit();
            }else{
                if($produto_quantidade > $produto->produto_quantidade_estoque){
                    $retorno['erro'] = 3;
                    $retorno['mensagem'] = 'Só temos em estoque '. $produto->produto_quantidade_estoque . 'em estoque';
                    //echo json_encode($retorno);
                   // exit();
                }else{
                    $this->carrinho_compras->insert($produto_id, $produto_quantidade);
                    $retorno['erro'] = 0;
                    $retorno['mensagem'] = 'Produto adicionado com sucesso!';
                   // echo json_encode($retorno);
                   // exit();
                }
            }
            
        }

        echo json_encode($retorno);
    }


}