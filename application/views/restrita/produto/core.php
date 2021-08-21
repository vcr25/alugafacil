<?php $this->load->view('restrita/layout/navbar'); ?>

<?php $this->load->view('restrita/layout/sidebar'); ?>


<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <!-- add content here -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4><?php echo $titulo; ?></h4>
                        </div>

                        <?php
                        $atributos = array(
                            'name' => 'form_core',
                        );

                        if (isset($produto)) {
                            $produto_id = $produto->produto_id;
                        } else {
                            $produto_id = '';
                        }
                        ?>


                        <?php echo form_open_multipart('restrita/produto/core/' . $produto_id, $atributos); ?>

                        <div class="card-body">

                            <?php if (isset($produto)): ?>

                                <div class="form-row">

                                    <div class="col-md-12">
                                        <label>Meta link do produto</label>
                                        <p class="text-info"><?php echo $produto->produto_meta_link; ?></p>
                                    </div>

                                </div>

                            <?php endif; ?>

                            <div class="form-row">

                                <div class="form-group col-md-2">
                                    <label>Código da propriedade</label>
                                    <input type="text" name="produto_codigo" class="form-control border-0" value="<?php echo (isset($produto) ? $produto->produto_codigo :  $codigo_gerado); ?>" readonly="">
                                    <?php echo form_error('produto_codigo', '<div class="text-danger">', '</div>'); ?>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Nome do produto</label>
                                    <input type="text" name="produto_nome" class="form-control" value="<?php echo (isset($produto) ? $produto->produto_nome : set_value('produto_nome')); ?>" >
                                    <?php echo form_error('produto_nome', '<div class="text-danger">', '</div>'); ?>
                                </div>


                                <div class="form-group col-md-2">
                                    <label for="">Categoria</label>
                                    <select id="" class="form-control" name="produto_categoria_id">

                                        <option value="">Escolha....</option>

                                        <?php foreach ($categorias as $categoria): ?>

                                            <?php if (isset($produto)): ?>

                                                <option value="<?php echo $categoria->categoria_id; ?>"
                                                        <?php echo ($categoria->categoria_id == $produto->produto_categoria_id ? 'selected' : '') ?>><?php echo $categoria->categoria_nome; ?>
                                                </option>

                                            <?php else: ?>

                                                <option value="<?php echo $categoria->categoria_id; ?>"><?php echo $categoria->categoria_nome; ?></option>

                                                </option>

                                            <?php endif; ?>

                                        <?php endforeach; ?>

                                    </select>
                                    <?php echo form_error('produto_categoria_id', '<div class="text-danger">', '</div>'); ?>
                                </div>

                                <div class="form-group col-md-2">
                                    <label for="">Bairro</label>
                                    <select id="" class="form-control" name="produto_marca_id">

                                        <option value="">Escolha....</option>

                                        <?php foreach ($marcas as $marca): ?>


                                            <?php if (isset($produto)): ?>

                                                <option value="<?php echo $marca->marca_id; ?>"
                                                        <?php echo ($marca->marca_id == $produto->produto_marca_id ? 'selected' : '') ?>><?php echo $marca->marca_nome; ?>
                                                </option>


                                            <?php else: ?>

                                                <option value="<?php echo $marca->marca_id; ?>"><?php echo $marca->marca_nome; ?></option>

                                                </option>

                                            <?php endif; ?>

                                        <?php endforeach; ?>

                                    </select>
                                    <?php echo form_error('produto_marca_id', '<div class="text-danger">', '</div>'); ?>
                                </div>

                            </div>

                            <div class="form-row">

                                <div class="form-group col-md-3">
                                    <label>Logradouro</label>
                                    <input type="text" name="produto_logradouro" class="form-control " value="<?php echo (isset($produto) ? $produto->produto_logradouro : set_value('produto_logradouro')); ?>" >
                                    <?php echo form_error('produto_logradouro', '<div class="text-danger">', '</div>'); ?>
                                </div>

                                <div class="form-group col-md-2">
                                    <label>Número</label>
                                    <input type="text" name="produto_numero" class="form-control" value="<?php echo (isset($produto) ? $produto->produto_numero : set_value('produto_numero')); ?>" >
                                    <?php echo form_error('produto_numero', '<div class="text-danger">', '</div>'); ?>
                                </div>

                                <div class="form-group col-md-3">
                                    <label>Cidade</label>
                                    <input type="text" name="produto_cidade" class="form-control " value="<?php echo (isset($produto) ? $produto->produto_cidade : set_value('produto_cidade')); ?>" >
                                    <?php echo form_error('produto_cidade', '<div class="text-danger">', '</div>'); ?>
                                </div>

                                <div class="form-group col-md-3">
                                    <label>CEP</label>
                                    <input type="text" name="produto_cep" class="form-control cep" value="<?php echo (isset($produto) ? $produto->produto_cep : set_value('produto_cep')); ?>" >
                                    <?php echo form_error('produto_cep', '<div class="text-danger">', '</div>'); ?>
                                </div>



                            </div>

                            <div class="form-row">

                                <div class="form-group col-md-2">
                                    <label>Valor Alguel/Diaria</label>
                                    <input type="text" name="produto_valor" class="form-control money2" value="<?php echo (isset($produto) ? $produto->produto_valor : set_value('produto_valor')); ?>" >
                                    <?php echo form_error('produto_valor', '<div class="text-danger">', '</div>'); ?>
                                </div>

                                <div class="form-group col-md-2">
                                    <label>Area</label>
                                    <input type="number" name="produto_area" class="form-control" value="<?php echo (isset($produto) ? $produto->produto_area : set_value('produto_area')); ?>" >
                                    <?php echo form_error('produto_area', '<div class="text-danger">', '</div>'); ?>
                                </div>

                                <div class="form-group col-md-2">
                                    <label>Quartos</label>
                                    <input type="number" name="produto_quartos" class="form-control" value="<?php echo (isset($produto) ? $produto->produto_quartos : set_value('produto_quartos')); ?>" >
                                    <?php echo form_error('produto_quartos', '<div class="text-danger">', '</div>'); ?>
                                </div>

                                <div class="form-group col-md-2">
                                    <label>Banheiros</label>
                                    <input type="number" name="produto_banheiros" class="form-control" value="<?php echo (isset($produto) ? $produto->produto_banheiros : set_value('produto_banheiros')); ?>" >
                                    <?php echo form_error('produto_bainheiros', '<div class="text-danger">', '</div>'); ?>
                                </div>

                                <div class="form-group col-md-2">
                                    <label>Garagem</label>
                                    <input type="number" name="produto_garagem" class="form-control" value="<?php echo (isset($produto) ? $produto->produto_garagem : set_value('produto_garagem')); ?>" >
                                    <?php echo form_error('produto_garagem', '<div class="text-danger">', '</div>'); ?>
                                </div>

                                <div class="form-group col-md-2">
                                    <label>Tipo da Propriedade</label>
                                    <input type="text" name="produto_tipo" class="form-control" value="<?php echo (isset($produto) ? $produto->produto_tipo : set_value('produto_tipo')); ?>" >
                                    <?php echo form_error('produto_tipo', '<div class="text-danger">', '</div>'); ?>
                                </div>

                            </div>


                            <div class="form-row">

                                <div class="form-group col-md-2">
                                    <label>Nome do Proprietário</label>
                                    <input type="text" name="produto_nome_proprietario" class="form-control" value="<?php echo (isset($produto) ? $produto->produto_nome_proprietario : set_value('produto_nome_proprietario')); ?>" >
                                    <?php echo form_error('produto_nome_proprietario', '<div class="text-danger">', '</div>'); ?>
                                </div>

                                <div class="form-group col-md-2">
                                    <label>Telefone Proprietário</label>
                                    <input type="text" name="produto_fixo_proprietario" class="form-control" value="<?php echo (isset($produto) ? $produto->produto_fixo_proprietario : set_value('produto_fixo_proprietario')); ?>" >
                                    <?php echo form_error('produto_fixo_proprietario', '<div class="text-danger">', '</div>'); ?>
                                </div>

                                <div class="form-group col-md-2">
                                    <label>Celular Proprietário</label>
                                    <input type="text" name="produto_cel_proprietario" class="form-control" value="<?php echo (isset($produto) ? $produto->produto_cel_proprietario : set_value('produto_cel_proprietario')); ?>" >
                                    <?php echo form_error('produto_cel_proprietario', '<div class="text-danger">', '</div>'); ?>
                                </div>

                                <div class="form-group col-md-2">
                                    <label>Email do Proprietário</label>
                                    <input type="email" name="produto_email_proprietario" class="form-control" value="<?php echo (isset($produto) ? $produto->produto_email_proprietario : set_value('produto_email_proprietario')); ?>" >
                                    <?php echo form_error('produto_email_proprietario', '<div class="text-danger">', '</div>'); ?>
                                </div>


                                <div class="form-group col-md-2">
                                    <label for="">Disponível</label>
                                    <select id="" class="form-control" name="produto_ativo">

                                        <?php if (isset($produto)): ?>

                                            <option value="1" <?php echo ($produto->produto_ativo == 1 ? 'selected' : ''); ?>>Sim</option>
                                            <option value="0" <?php echo ($produto->produto_ativo == 0 ? 'selected' : ''); ?>>Não</option>

                                        <?php else: ?>

                                            <option value="1">Sim</option>
                                            <option value="0">Não</option>

                                        <?php endif; ?>

                                    </select>
                                </div>


                                <div class="form-group col-md-2">
                                    <label for="">Produto em destaque</label>
                                    <select id="" class="form-control" name="produto_destaque">

                                        <?php if (isset($produto)): ?>

                                            <option value="1" <?php echo ($produto->produto_destaque == 1 ? 'selected' : ''); ?>>Sim</option>
                                            <option value="0" <?php echo ($produto->produto_destaque == 0 ? 'selected' : ''); ?>>Não</option>

                                        <?php else: ?>

                                            <option value="1">Sim</option>
                                            <option value="0">Não</option>

                                        <?php endif; ?>

                                    </select>
                                </div>

                                <div class="form-group col-md-2">
                                    <label for="">Controla estoque</label>
                                    <select id="" class="form-control" name="produto_controlar_estoque">

                                        <?php if (isset($produto)): ?>

                                            <option value="1" <?php echo ($produto->produto_controlar_estoque == 1 ? 'selected' : ''); ?>>Sim</option>
                                            <option value="0" <?php echo ($produto->produto_controlar_estoque == 0 ? 'selected' : ''); ?>>Não</option>

                                        <?php else: ?>

                                            <option value="1">Sim</option>
                                            <option value="0">Não</option>

                                        <?php endif; ?>

                                    </select>
                                </div>

                            </div>


                            <div class="form-row">


                                <div class="form-group col-md-8">
                                    <label>Descrição do produto</label>
                                    <textarea class="form-control" name="produto_descricao" rows="2" style="min-height: 100px"><?php echo (isset($produto) ? $produto->produto_descricao : set_value('produto_descricao')); ?></textarea>
                                    <?php echo form_error('produto_descricao', '<div class="text-danger">', '</div>'); ?>
                                </div>


                            </div>


                            <div class="form-row">


                                <div class="form-group col-md-8">
                                    <label>Imagens do produto</label>
                                    <div id="fileuploader">

                                    </div>

                                    <div id="erro_uploaded" class="text-danger">

                                    </div>

                                    <?php echo form_error('fotos_produtos', '<div class="text-danger">', '</div>'); ?>
                                </div>

                            </div>


                            <div class="form-row">

                                <div class="col-md-12">

                                    <?php if (isset($produto)): ?>

                                        <div id="uploaded_image" class="text-danger">

                                            <?php foreach ($fotos_produto as $foto): ?>

                                                <ul style="list-style: none; display: inline-block">

                                                    <li>

                                                        <img src="<?php echo base_url('uploads/produtos/' . $foto->foto_caminho); ?>" width="80" class="img-thumbnail mr-1 mb-2">
                                                        <input type="hidden" name="fotos_produtos[]" value="<?php echo $foto->foto_caminho; ?>">
                                                        <a href="javascript:(void)" class="btn btn-danger d-block btn-icon mx-auto mb-30 btn-remove"><i class="fas fa-times"></i></a>

                                                    </li>

                                                </ul>

                                            <?php endforeach; ?>

                                        </div>

                                    <?php else: ?>

                                        <div id="uploaded_image" class="text-danger">

                                        </div>

                                    <?php endif; ?>



                                </div>





                            </div>




                            <div class="form-row">

                                <?php if (isset($produto)): ?>
                                    <input type="hidden" name="produto_id" value="<?php echo $produto->produto_id; ?>">
                                <?php endif; ?>

                            </div>





                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary mr-2">Salvar</button>
                            <a class="btn btn-dark" href="<?php echo base_url('restrita/produto'); ?>">Voltar</a>
                        </div>

                        <?php echo form_close(); ?>

                    </div>
                </div>
            </div>

        </div>
    </section>

       <!-- <?php $this->load->view('restrita/layout/settings_sidebar'); ?> -->
  </div>
