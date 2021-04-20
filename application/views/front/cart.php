    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>cart</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">cart</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!--section start-->
    <section class="cart-section section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="cart_counter">
                        <div class="countdownholder">
                            Your cart will be expired in<span id="timer"></span> minutes!
                        </div>
                        <a href="checkout.html" class="cart_checkout btn btn-solid btn-xs">check out</a>
                    </div>
                </div>
                <div class="col-sm-12 table-responsive-xs">
                    <table class="table cart-table">
                        <thead>
                            <tr class="table-head">
                                <th scope="col">image</th>
                                <th scope="col">product name</th>
                                <th scope="col">size</th>
                                <th scope="col">color</th>
                                <th scope="col">price</th>
                                <th scope="col">quantity</th>
                                <th scope="col">action</th>
                                <th scope="col">total</th>
                            </tr>
                        </thead>
                        <?php foreach($cart as $items){ ?>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="#"><img src="<?php echo base_url()?>uploads/product/<?php
                                        if ($this->cart->has_options($items['rowid']) == TRUE)
                                        {
                                            echo $this->cart->product_options($items['rowid'])["image"];
                                        //     foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value)
                                        //     {
                                        //         echo $option_value;
                                        //     }
                                        }
                                    ?>" alt=""></a>
                                </td>
                                <td><a href="#"><?php echo $items['name'];?></a>
                                    <div class="mobile-cart-content row">
                                        <div class="col">
                                            <div class="qty-box">
                                                <div class="input-group">
                                                    <input type="text" name="quantity" class="form-control input-number"
                                                        value="<?php echo $items['qty'];?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <h2 class="td-color">$<?php echo $items['price'];?></h2>
                                        </div>
                                        <div class="col">
                                            <h2 class="td-color"><a href="" class="icon"><i class="ti-close"></i></a>
                                            </h2>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <?php
                                        if ($this->cart->has_options($items['rowid']) == TRUE)
                                        {
                                            echo $this->cart->product_options($items['rowid'])["size"];
                                        }
                                    ?>
                                </td>
                                <td>
                                    <?php
                                        if ($this->cart->has_options($items['rowid']) == TRUE)
                                        {
                                            echo $this->cart->product_options($items['rowid'])["color"];
                                        }
                                    ?>
                                </td>
                                <td>
                                    <h2>$<?php echo $items['price']?></h2>
                                </td>
                                <td>
                                    <div class="qty-box">
                                        <div class="input-group">
                                            <input type="number" name="quantity" class="form-control input-number"
                                                value="<?php echo $items['qty'];?>">
                                        </div>
                                    </div>
                                </td>
                                <td><a href="" id="<?php echo $items['rowid'];?>" class="icon romove_cart"><i class="ti-close"></i></a></td>
                                <td>
                                    <h2 class="td-color">$<?php echo number_format($items['subtotal'])?></h2>
                                </td>
                            </tr>
                        </tbody>
                        <?php }?>  
                    </table>
                    <div class="table-responsive-md">
                        <table class="table cart-table ">
                            <tfoot>
                                <tr>
                                    <td>total price :</td>
                                    <td>
                                        <h2>$<?php echo number_format($this->cart->total())?></h2>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row cart-buttons">
                <div class="col-6"><a href="<?=base_url()?>'front_end/category" class="btn btn-solid">continue shopping</a></div>
                <div class="col-6"><a href="<?=base_url()?>'front_end/checkout" class="btn btn-solid">check out</a></div>
            </div>
        </div>
    </section>
    <!--section end-->

