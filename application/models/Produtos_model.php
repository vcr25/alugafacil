<?php

defined('BASEPATH') OR exit('Você não tem permissão para estar aqui!');

class Produtos_model extends CI_Model
{
    public function get_all()
    {

        $this->db->select([
            'produtos.produto_id',
            'produtos.produto_codigo',
            'produtos.produto_meta_link',
            'produtos.produto_data_cadastro',
            'produtos.produto_nome',
            'produtos.produto_valor',
            'produtos.produto_ativo',
            'produtos.produto_logradouro',
            'produtos.produto_numero',
            'produtos.produto_cidade',
            'produtos.produto_tipo',
            'produtos.produto_cep',
            'produtos.produto_area',
            'produtos.produto_quartos',
            'produtos.produto_banheiros',
            'produtos.produto_garagem',
            'produtos.produto_nome_proprietario',
            'produtos.produto_fixo_proprietario',
            'produtos.produto_cel_proprietario',
            'produtos.produto_email_proprietario',
            'categorias.categoria_id',
            'categorias.categoria_nome',
            'marcas.marca_nome',
            'produtos_fotos.foto_caminho',

        ]);


        $this->db->join('categorias', 'categorias.categoria_id = produtos.produto_categoria_id', 'LEFT');
        $this->db->join('marcas', 'marcas.marca_id = produtos.produto_marca_id', 'LEFT');
        $this->db->join('produtos_fotos', 'produtos_fotos.foto_produto_id = produtos.produto_id');
        $this->db->group_by('produtos.produto_id');
        $this->db->order_by('produtos.produto_id','RANDOM');
        $this->db->limit(12);

        return $this->db->get('produtos')->result();
    }



    public function get_by_id($produto_meta_link = NULL)
    {
        $this->db->select([
            'produtos.produto_id',
            'produtos.produto_codigo',
            'produtos.produto_meta_link',
            'produtos.produto_nome',
            'produtos.produto_valor',
            'produtos.produto_logradouro',
            'produtos.produto_numero',
            'produtos.produto_cidade',
            'produtos.produto_tipo',
            'produtos.produto_cep',
            'produtos.produto_area',
            'produtos.produto_quartos',
            'produtos.produto_banheiros',
            'produtos.produto_garagem',
            'produtos.produto_nome_proprietario',
            'produtos.produto_fixo_proprietario',
            'produtos.produto_cel_proprietario',
            'produtos.produto_email_proprietario',
            'produtos.produto_descricao',
            'produtos.produto_ativo',
            'categorias_pai.categoria_pai_nome',
            'categorias_pai.categoria_pai_meta_link',
            'categorias.categoria_id',
            'categorias.categoria_nome',
            'categorias.categoria_meta_link',
            'marcas.marca_nome',
            'marcas.marca_id',
            'marcas.marca_meta_link',

        ]);

        $this->db->where('produtos.produto_meta_link', $produto_meta_link);

        $this->db->join('marcas', 'marcas.marca_id = produtos.produto_marca_id');
        $this->db->join('categorias', 'categorias.categoria_id = produtos.produto_categoria_id');
        $this->db->join('categorias_pai', 'categorias_pai.categoria_pai_id = categorias.categoria_pai_id');

        return $this->db->get('produtos')->row();
    }

    public function get_all_by($condicoes = NULL)
    {
        $this->db->select([

            'produtos.produto_meta_link',
            'produtos.produto_nome',
            'produtos.produto_valor',
            'produtos.produto_logradouro',
            'produtos.produto_numero',
            'produtos.produto_cidade',
            'produtos.produto_tipo',
            'produtos.produto_cep',
            'produtos.produto_area',
            'produtos.produto_quartos',
            'produtos.produto_banheiros',
            'produtos.produto_garagem',
            'produtos.produto_nome_proprietario',
            'produtos.produto_fixo_proprietario',
            'produtos.produto_cel_proprietario',
            'produtos.produto_email_proprietario',
            'categorias_pai.categoria_pai_nome',
            'categorias_pai.categoria_pai_meta_link',
            'categorias.categoria_nome',
            'produtos_fotos.foto_caminho',
        ]);


        $this->db->where('produtos.produto_ativo', 1);

        if($condicoes && is_array($condicoes)){
            $this->db->where($condicoes);
        }

        $this->db->join('marcas', 'marcas.marca_id = produtos.produto_marca_id','LEFT');

        $this->db->join('categorias', 'categorias.categoria_id = produtos.produto_categoria_id', 'LEFT');
        $this->db->join('categorias_pai', 'categorias_pai.categoria_pai_id = categorias.categoria_pai_id');
        $this->db->join('produtos_fotos', 'produtos_fotos.foto_produto_id = produtos.produto_id', 'LEFT');

        $this->db->group_by('produtos.produto_id');

        return $this->db->get('produtos')->result();
    }

    public function get_all_by_busca($busca = NULL)
    {
        if($busca){
            $this->db->select([

                'produtos.produto_meta_link',
                'produtos.produto_nome',
                'produtos.produto_valor',
                'produtos.produto_logradouro',
                'produtos.produto_numero',
                'produtos.produto_cidade',
                'produtos.produto_tipo',
                'produtos.produto_cep',
                'produtos.produto_area',
                'produtos.produto_quartos',
                'produtos.produto_banheiros',
                'produtos.produto_garagem',
                'produtos.produto_nome_proprietario',
                'produtos.produto_fixo_proprietario',
                'produtos.produto_cel_proprietario',
                'produtos.produto_email_proprietario',
                'categorias_pai.categoria_pai_nome',
                'categorias.categoria_nome',
                'produtos_fotos.foto_caminho',
            ]);

            $this->db->where('produtos.produto_ativo', 1);
            $this->db->like('produtos.produto_nome', $busca, 'BOTH');

            $this->db->join('marcas', 'marcas.marca_id = produtos.produto_marca_id','LEFT');
            $this->db->join('categorias', 'categorias.categoria_id = produtos.produto_categoria_id', 'LEFT');
            $this->db->join('categorias_pai', 'categorias_pai.categoria_pai_id = categorias.categoria_pai_id', 'LEFT');
            $this->db->join('produtos_fotos', 'produtos_fotos.foto_produto_id = produtos.produto_id', 'LEFT');

            $this->db->group_by('produtos.produto_id');

            return $this->db->get('produtos')->result();
        }else{
            return false;
        }
    }

}
