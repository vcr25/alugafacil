<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Produto extends CI_Controller

{

    public function __construct()

    {

         

        parent::__construct();



        if(!$this->ion_auth->logged_in()){

            redirect('restrita/login');

        }

    }



    public function index()

    {

        $data = array(

            'titulo' => 'Produtos Cadastrados',

            'styles' => array(

                'bundles/datatables/datatables.min.css',

                'bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css',

             ),

             'scripts' => array (

                 'bundles/datatables/datatables.min.js',

                 'bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js',

                 'bundles/jquery-ui/jquery-ui.min.js',

                 'js/page/datatables.js',

                 

                 

             ),

            'produtos' => $this->produtos_model->get_all('produtos'),

        );

     

       // echo '<pre>';

       // print_r($data['produtos']);

       // exit();



        $this->load->view('restrita/layout/header', $data);

        $this->load->view('restrita/produto/index');

        $this->load->view('restrita/layout/footer');



      

    }



    public function core($produto_id = NULL)

    {

        $produto_id = (int) $produto_id;



        if(!$produto_id){

            //cadastrar Produto



            $this->form_validation->set_rules('produto_nome', 'Nome do Produto', 'trim|required|callback_valida_nome');

            $this->form_validation->set_rules('produto_categoria_id', 'Categoria do produto', 'trim|required');

            $this->form_validation->set_rules('produto_marca_id', 'Marca do produto', 'trim|required');



            $this->form_validation->set_rules('produto_logradouro', 'Endereço', 'trim|required');

            $this->form_validation->set_rules('produto_numero', 'Número', 'trim|required');

            $this->form_validation->set_rules('produto_cidade', 'Cidade', 'trim|required');

            $this->form_validation->set_rules('produto_cep', 'CEP', 'trim|required');



            $this->form_validation->set_rules('produto_valor', 'Valor de venda do produto', 'trim|required');

            $this->form_validation->set_rules('produto_area', 'Area do produto', 'trim|required|integer');

            $this->form_validation->set_rules('produto_quartos', 'Quartos do produto', 'trim|required|integer');

            $this->form_validation->set_rules('produto_banheiros', 'Banheiros do produto', 'trim|required|integer');

            $this->form_validation->set_rules('produto_garagem', 'Garagem do produto', 'trim|required|integer');

            $this->form_validation->set_rules('produto_tipo', 'Tipo de Propriedade', 'trim|required');



            $this->form_validation->set_rules('produto_nome_proprietario', 'Nome do Proprietário', 'trim|required');

            $this->form_validation->set_rules('produto_fixo_proprietario', 'Telefone fixo do Proprietário', 'trim|required');

            $this->form_validation->set_rules('produto_cel_proprietario', 'Telefone celular do Proprietário', 'trim|required');

            $this->form_validation->set_rules('produto_email_proprietario', 'Email do Proprietário', 'trim|required');



            $this->form_validation->set_rules('produto_descricao', 'Descrição do produto', 'trim|required|min_length[10]|max_length[5000]');



            $fotos_produtos = $this->input->post('fotos_produtos');



            if(!$fotos_produtos){

                $this->form_validation->set_rules('fotos_produtos', 'Imagens do Produto', 'required');

            }



            if($this->form_validation->run()){

                

            

                $data = elements(

                    array(

                        'produto_nome',

                        'produto_categoria_id',

                        'produto_marca_id',

                        'produto_logradouro',

                        'produto_numero',

                        'produto_cidade',

                        'produto_cep',

                        'produto_valor',

                        'produto_area',

                        'produto_quartos',

                        'produto_banheiros',

                        'produto_garagem',

                        'produto_nome_proprietario',

                        'produto_fixo_proprietario',

                        'produto_cel_proprietario',

                        'produto_email_proprietario',

                        'produto_tipo',

                        'produto_ativo',

                        'produto_destaque',

                        'produto_controlar_estoque',

                        'produto_descricao',

                        'produto_video_link',

                    ), $this->input->post()

            );

            //Remove a virgula do valor

            $data['produto_valor'] = str_replace(',', '',  $data['produto_valor']);



            //MetaLink do produto

            $data['produto_meta_link'] = url_amigavel($data['produto_nome']);



            //Codigo Gerado

            $data['produto_codigo'] = $this->input->post('produto_codigo');



            $data = html_escape($data);



           



            //Faz o Insert do Produto

            $this->core_model->insert('produtos', $data, TRUE);



            //pega o last_id 

            $produto_id = $this->session->userdata('last_id');





            //Recupera do Post as fotos

            $fotos_produtos = $this->input->post('fotos_produtos');



            if($fotos_produtos)

            {

                $fotos_total = count($fotos_produtos);



                for($i = 0; $i < $fotos_total; $i++){

                    $data = array(

                        'foto_produto_id' => $produto_id ,

                        'foto_caminho' => $fotos_produtos[$i],

                    );



                    $this->core_model->insert('produtos_fotos', $data);

                }

            }

           

            redirect('restrita/produto');

   



            }else{

            //Erro de validação



            $data = array(

                'titulo' => 'Cadastrar  Produtos',

                'styles' => array(

                    'jquery-upload-file/css/uploadfile.css',

                 ),

                 'scripts' => array (

                    'sweetalert2/sweetalert.min.js',

                    'jquery-upload-file/js/jquery.uploadfile.min.js',

                    'jquery-upload-file/js/produtos.js',

                    'mask/jquery.mask.min.js',

                    'mask/custom.js',

                     

                 ),

                'codigo_gerado' => $this->core_model->generete_unique_code('produtos', 'numeric', 8, 'produto_codigo'),

                'categorias' => $this->core_model->get_all('categorias', array('categoria_ativa' => 1)),

                'marcas' => $this->core_model->get_all('marcas', array('marca_ativa' => 1)),

            );



            

   // echo '<pre>';

   // print_r($data['produto']);

   // exit();

            $this->load->view('restrita/layout/header', $data);

            $this->load->view('restrita/produto/core');

            $this->load->view('restrita/layout/footer');

            }



        }else{

            

            if(!$produto = $this->core_model->get_by_id('produtos', array('produto_id' => $produto_id))){



                $this->sesseion->set_flashdata('erro', 'produto não encontrado');

                

                redirect('restrita/produto');

            }else{

                //editar a produto

                $this->form_validation->set_rules('produto_nome', 'Nome do Produto', 'trim|required|callback_valida_nome');

                $this->form_validation->set_rules('produto_categoria_id', 'Categoria do produto', 'trim|required');

                $this->form_validation->set_rules('produto_marca_id', 'Marca do produto', 'trim|required');

                $this->form_validation->set_rules('produto_valor', 'Valor de venda do produto', 'trim|required');

               

               

                $this->form_validation->set_rules('produto_descricao', 'Descrição do produto', 'trim|required|min_length[10]|max_length[5000]');





                if($this->form_validation->run()){

                    

                    $data = elements(

                        array(

                            'produto_nome',

                            'produto_categoria_id',

                            'produto_marca_id',

                            'produto_logradouro',

                            'produto_numero',

                            'produto_cidade',

                            'produto_cep',

                            'produto_valor',

                            'produto_area',

                            'produto_quartos',

                            'produto_banheiros',

                            'produto_garagem',

                            'produto_nome_proprietario',

                            'produto_fixo_proprietario',

                            'produto_cel_proprietario',

                            'produto_email_proprietario',

                            'produto_tipo',

                            'produto_ativo',

                            'produto_destaque',

                            'produto_controlar_estoque',

                            'produto_descricao',

                            'produto_video_link',

                        ), $this->input->post()

                );

                //Remove a virgula do valor

                $data['produto_valor'] = str_replace(',', '',  $data['produto_valor']);



                //MetaLink do produto

                $data['produto_meta_link'] = url_amigavel($data['produto_nome']);



                $data = html_escape($data);



                //echo '<pre>';

                //print_r($data);

                //exit();



                //Faz o Update do Produto

                $this->core_model->update('produtos', $data, array('produto_id' => $produto_id));



                //Excluir fotos antigas do produto

                $this->core_model->delete('produtos_fotos', array('foto_produto_id' => $produto_id));



                //Recupera do Post as fotos

                $fotos_produtos = $this->input->post('fotos_produtos');



                if($fotos_produtos)

                {

                    $fotos_total = count($fotos_produtos);



                    for($i = 0; $i < $fotos_total; $i++){

                        $data = array(

                            'foto_produto_id' => $produto_id ,

                            'foto_caminho' => $fotos_produtos[$i],

                        );

    

                        $this->core_model->insert('produtos_fotos', $data);

                    }

                }

               

                redirect('restrita/produto');


                }else{

                //Erro de validação



                $data = array(

                    'titulo' => 'Editar Produtos',

                    'styles' => array(

                        'jquery-upload-file/css/uploadfile.css',

                     ),

                     'scripts' => array (

                        'sweetalert2/sweetalert.min.js',

                        'jquery-upload-file/js/jquery.uploadfile.min.js',

                        'jquery-upload-file/js/produtos.js',

                        'mask/jquery.mask.min.js',

                        'mask/custom.js',

                         

                     ),

                    'produto' => $produto,

                    'fotos_produto' => $this->core_model->get_all('produtos_fotos', array('foto_produto_id' => $produto_id)),

                    'categorias' => $this->core_model->get_all('categorias', array('categoria_ativa' => 1)),

                    'marcas' => $this->core_model->get_all('marcas', array('marca_ativa' => 1)),

                );



                

       // echo '<pre>';

       // print_r($data['produto']);

       // exit();

                $this->load->view('restrita/layout/header', $data);

                $this->load->view('restrita/produto/core');

                $this->load->view('restrita/layout/footer');

                }





            }

        }

    }



    public function valida_nome($produto_nome)

    {

        $produto_id = $this->input->post('produto_id');



        if(!$produto_id){

            //Cadastrar Produto

            if($this->core_model->get_by_id('produtos', array('produto_nome' => $produto_nome))){

                $this->form_validation->set_message('valida_nome', 'Essa produto já existe');

                return false;

            }else{

                return true;

            }

        }else{

            //Editar Produto

            if($this->core_model->get_by_id('produtos', array('produto_nome' => $produto_nome, 'produto_id !=' => $produto_id))){

                $this->form_validation->set_message('valida_email', 'Essa produto já existe');

                return false;

            }else{

                return true;

            }

        }

    }



    public function upload()

    {

        

        $config['upload_path'] = './uploads/produtos/';

        $config['allowed_types'] = 'jpg|png|jpeg';

        $config['max_size'] = 2048;  //Max 2M

        $config['max_width'] = 1000;

        $config['max_height'] = 1000;

        $config['encrypt_name'] = TRUE;

        $config['max_filename'] = 200;

        $config['file_ext_tolower'] = TRUE;



        $this->load->library('upload', $config);





        if ($this->upload->do_upload('foto_produto')) {





            $data = array(

                'uploaded_data' => $this->upload->data(),

                'mensagem' => 'Imagem enviada com sucesso',

                'foto_caminho' => $this->upload->data('file_name'),

                'erro' => 0

            );





            //Resize image configuration



            $config['image_library'] = 'gd2';

            $config['source_image'] = './uploads/produtos/' . $this->upload->data('file_name');

            $config['new_image'] = './uploads/produtos/small/' . $this->upload->data('file_name');

            $config['width'] = 300;

            $config['height'] = 300;



            //Chama a biblioteca

            $this->load->library('image_lib', $config);



            //Faz o resize

//            $this->image_lib->resize();





            if (!$this->image_lib->resize()) {

                $data['erro'] = $this->image_lib->display_errors();

            }

        } else {



            $data = array(

                'mensagem' => $this->upload->display_errors(),

                'erro' => 5,

            );

        }

        echo json_encode($data);

    }



    public function delete($produto_id = NULL)

    {

        $produto_id = (int) $produto_id;



        if(!$produto_id || !$this->core_model->get_by_id('produtos', array('produto_id' => $produto_id))){

            $this->session->set_flashdata('erro', 'Esse produto não existe ou não foi encontrado');

            redirect('restrita/produto');

        }



        if( $this->core_model->get_by_id('produtos', array('produto_id' => $produto_id, 'produto_ativo' => 1))){

            $this->session->set_flashdata('erro', 'Esse produto não pode ser excluido (ativo)');

            redirect('restrita/produto');

        }



        //Pega todas fotos do produto

        $fotos_produto = $this->core_model->get_all('produtos_fotos', array('foto_produto_id' => $produto_id));



        //excluir o produto

        $this->core_model->delete('produtos', array('produto_id' => $produto_id));



        //Exclui as fotos do produto selecionado nas pasta de upload

        if($fotos_produto){

            foreach($fotos_produto as $foto){



                $foto_grande = FCPATH . 'uploads/produtos/'.$foto->foto_caminho;

                $foto_pequena = FCPATH . 'uploads/produtos/small' . $foto->foto_caminho;



                //excluir as imagens do banco

                if(file_exists($foto_grande) && file_exists($foto_pequena)){

                    unlink($foto_grande);

                    unlink($foto_pequena);



                }

            }

        

        }



        redirect('restrita/produto');

    }







}