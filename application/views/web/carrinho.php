<?php $this->load->view('web/layout/navbar'); ?>


<!-- Begin Li's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="<?php echo base_url('/'); ?>">Home</a></li>
                
                <li class="active"><?php echo $titulo; ?></a></li>

            </ul>
        </div>
    </div>
</div>

 <!--Shopping Cart Area Strat-->
 <div class="Shopping-cart-area pt-60 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <form action="#">
                                <div class="table-content table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="li-product-remove">Remover</th>
                                                <th class="li-product-thumbnail">Imagens</th>
                                                <th class="cart-product-name">Produto</th>
                                                <th class="li-product-price">Preço</th>
                                                <th class="li-product-quantity">Quantidade</th>
                                                <th class="li-product-subtotal">Total</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                        <?php foreach($carrinho as $produto): ?>
                                            <tr>
                                                <td class="li-product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                                <td class="li-product-thumbnail"><a href="<?php echo base_url('produto/'.$produto['produto_meta_link']); ?>"><img width="50" src="<?php echo base_url('uploads/produtos/small/' . $produto['produto_foto']); ?>" alt="<?php echo $produto['produto_nome']; ?>"></a></td>
                                                <td class="li-product-name"><a href="<?php echo base_url('produto/'.$produto['produto_meta_link']); ?>"><?php echo $produto['produto_nome']; ?></a></td>
                                                <td class="li-product-price"><span class="amount">R$:&nbsp<?php echo number_format($produto['produto_valor'], 2); ?></span></td>
                                                <td class="quantity">
                                                    <label>Quantity</label>
                                                    <div class="cart-plus-minus">
                                                        <input class="cart-plus-minus-box" value="<?php echo $produto['produto_quantidade']; ?>" type="text">
                                                        <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                        <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                    </div>
                                                </td>
                                                <td class="product-subtotal"><span class="amount">R$:&nbsp<?php echo number_format($produto['subtotal'], 2); ?></span></td>
                                            </tr>
                                        <?php endforeach; ?>
                                        </tbody>

                                    </table>
                                </div>
                               
                                <div class="row">
                                    <div class="col-md-5 ml-auto">
                                        <div class="cart-page-total">
                                            <h2>Cart totals</h2>
                                            <ul>
                                                <li>Subtotal <span><?php echo number_format($produto['subtotal'], 2); ?></span></li>
                                                <li>Total <span>R$:&nbsp<?php echo ($this->carrinho_compras->get_total() > '0,00' ? $this->carrinho_compras->get_total() : '0,00' ); ?></span></li>
                                            </ul>
                                            <a href="#">Proceed to checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--Shopping Cart Area End-->