<?php ?>


<div class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="user-menu">
                    <ul>
                        <li><a href="#"><i class="fa fa-user"></i> Minha Conta</a></li>
                        <li><a href="#"><i class="fa fa-heart"></i> Lista de Desejos</a></li>
                        <li><a href="#"><i class="fa fa-shopping-cart"></i> Meu Carrinho</a></li>
                        <li><a href="#"><i class="fa fa-lock"></i> Login</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4">
                <div class="header-right">
                    <ul class="list-unstyled list-inline">
                        <li class="dropdown dropdown-small">
                            <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">moeda :</span><span class="value">BRL </span><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">BRL</a></li>
                                <li><a href="#">USD</a></li>
                            </ul>
                        </li>

                        <li class="dropdown dropdown-small">
                            <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">linguagem :</span><span class="value">Português </span><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Português</a></li>
                                <li><a href="#">Inglês</a></li>
                                <li><a href="#">Espanhol</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End header area -->

<div class="site-branding-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="logo">
                    <h1><a href="#"><img src="img/logo.png"></a></h1>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="shopping-item">
                    <a href="carrinho.html">Carrinho - <span class="cart-amunt">R$100</span> <i class="fa fa-shopping-cart"></i> <span class="product-count">5</span></a>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End site branding area -->

<div class="mainmenu-area">
    <div class="container">
        <div class="row">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Produtos</a></li>
                    <li class="active"><a href="#">Carrinho</a></li>
                </ul>
            </div>
        </div>
    </div>
</div> <!-- End mainmenu area -->

<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Carrinho de Compras</h2>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End Page title area -->


<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="product-content-right">
                    <div class="woocommerce">
                        <form method="post" action="#">
                            <table cellspacing="0" class="shop_table cart">
                                <thead>
                                <tr>
                                    <th class="product-remove">&nbsp;</th>
                                    <th class="product-thumbnail">&nbsp;</th>
                                    <th class="product-name">Produto</th>
                                    <th class="product-price">Preço</th>
                                    <th class="product-quantity">Quantidade</th>
                                    <th class="product-subtotal">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="cart_item">
                                    <td class="product-remove">
                                        <a title="Remove this item" class="remove" href="#">×</a>
                                    </td>

                                    <td class="product-thumbnail">
                                        <a href="single-product.html"><img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="img/product-thumb-2.jpg"></a>
                                    </td>

                                    <td class="product-name">
                                        <a href="single-product.html">Ship Your Idea</a>
                                    </td>

                                    <td class="product-price">
                                        <span class="amount">R$15.00</span>
                                    </td>

                                    <td class="product-quantity">
                                        <div class="quantity buttons_added">
                                            <input type="button" class="minus" value="-">
                                            <input type="number" size="4" class="input-text qty text" title="Qty" value="1" min="0" step="1">
                                            <input type="button" class="plus" value="+">
                                        </div>
                                    </td>

                                    <td class="product-subtotal">
                                        <span class="amount">R$15.00</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="actions" colspan="6">
                                        <div class="coupon">
                                            <label for="coupon_code">Cupom:</label>
                                            <input type="text" placeholder="Coupon code" value="" id="coupon_code" class="input-text" name="coupon_code">
                                            <input type="submit" value="Aplicar" name="apply_coupon" class="button">
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </form>

                        <div class="cart-collaterals">

                            <div class="cross-sells">

                                <h2>Cálculo de Frete</h2>
                                <form>
                                    <div class="coupon">
                                        <label for="cep">CEP:</label>
                                        <input type="text" placeholder="00000-000" value="" id="cep" class="input-text" name="cep">
                                        <input type="submit" value="CÁLCULAR" class="button">
                                    </div>
                                </form>

                            </div>


                            <div class="cart_totals ">
                                <h2>Resumo da Compra</h2>

                                <table cellspacing="0">
                                    <tbody>
                                    <tr class="cart-subtotal">
                                        <th>Subtotal</th>
                                        <td><span class="amount">R$15,00</span></td>
                                    </tr>

                                    <tr class="shipping">
                                        <th>Frete</th>
                                        <td>R$0,00</td>
                                    </tr>

                                    <tr class="order-total">
                                        <th>Total</th>
                                        <td><strong><span class="amount">R$15,00</span></strong> </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>

                        <div class="pull-right">
                            <input type="submit" value="Finalizar Compra" name="proceed" class="checkout-button button alt wc-forward">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


