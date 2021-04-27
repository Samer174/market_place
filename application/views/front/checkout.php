    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>Check-out</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?=base_url()?>"><?=$this->lang->line('home')?></a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?=$this->lang->line('checkout')?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!-- section start -->
    <section class="section-b-space">
        <div class="container">
            <div class="checkout-page">
                <div class="checkout-form">
                    <form id="form_checkout" action="<?=base_url()?>front_end/checkout/checkout_submit" method="post">
                        <div class="row">
                            <div class="col-lg-6 col-sm-12 col-xs-12">
                                <div class="checkout-title">
                                    <h3><?=$this->lang->line('billing_details')?></h3>
                                </div>
                                <div class="row check-out">
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="field-label"><?=$this->lang->line('checkout_fname')?></div>
                                        <input type="text" name="f_name" value="" placeholder="" required>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="field-label"><?=$this->lang->line('checkout_lname')?></div>
                                        <input type="text" name="l_name" value="" placeholder="" required>
                                    </div>
                                    <!-- <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="field-label">Phone</div>
                                        <input type="text" name="field-phone" value="" placeholder="">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="field-label">Email Address</div>
                                        <input type="text" name="field-email" value="" placeholder="">
                                    </div> -->
                                    <!-- <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label">Country</div>
                                        <select id="country" name="country">
                                            <option value="Brazil">Brazil</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="France">France</option>
                                        </select>
                                    </div> -->
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label"><?=$this->lang->line('checkout_address')?></div>
                                        <input type="text" name="address" value="" placeholder="Street address" required>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label"><?=$this->lang->line('checkout_city')?></div>
                                        <input type="text" name="city" value="" placeholder="" required>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label"><?=$this->lang->line('checkout_state')?></div>
                                        <input type="text" name="state" value="" placeholder="" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12 col-xs-12">
                                <div class="checkout-details">
                                    <div class="order-box">
                                        <div class="title-box">
                                            <div><?=$this->lang->line('product')?> <span><?=$this->lang->line('cart_product_total')?></span></div>
                                        </div>
                                        <ul class="qty">
                                            <?php
                                            foreach($this->cart->contents() as $items)
                                            {
                                                $string = (strlen($items['name']) > 30) ? substr($items['name'],0,29).'...' : $items['name'];
                                                echo '<li>'.$string.' × '.$items['qty'].' <span>'.number_format($items['subtotal']).'</span></li>';
                                            }
                                            ?>
                                        </ul>
                                        <ul class="sub-total">
                                            <!-- <li>Subtotal <span class="count">$380.10</span></li> -->
                                            <li><?=$this->lang->line('shipping')?>
                                                <div class="shipping">
                                                    <div class="shopping-option">
                                                        <input type="checkbox" name="free-shipping" id="free-shipping">
                                                        <label for="free-shipping"><?=$this->lang->line('free_shipping')?></label>
                                                    </div>
                                                    <div class="shopping-option">
                                                        <input type="checkbox" name="local-pickup" id="local-pickup">
                                                        <label for="local-pickup"><?=$this->lang->line('local_pickup')?></label>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="total">
                                            <li><?=$this->lang->line('cart_product_total_all')?> <span class="count">$<?php echo number_format($this->cart->total())?></span></li>
                                        </ul>
                                    </div>
                                    <div class="payment-box">
                                        <div class="upper-box">
                                            <div class="payment-options">
                                                <ul>
                                                    <li>
                                                        <div class="radio-option">
                                                            <input type="radio" name="payment-group" value="check" id="payment-1">
                                                            <label for="payment-1"><?=$this->lang->line('check_payments')?><span
                                                                    class="small-text">Please send a check to Store
                                                                    Name, Store Street, Store Town, Store State /
                                                                    County, Store Postcode.</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="radio-option">
                                                            <input type="radio" name="payment-group" value="cash" id="payment-2"
                                                                    checked="checked">
                                                            <label for="payment-2"><?=$this->lang->line('cash_on_delivery')?><span
                                                                    class="small-text">Please send a check to Store
                                                                    Name, Store Street, Store Town, Store State /
                                                                    County, Store Postcode.</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="radio-option paypal">
                                                            <input type="radio" name="payment-group" value="paypal" id="payment-3">
                                                            <label for="payment-3">PayPal<span class="image"><img
                                                                        src="../assets/images/paypal.png"
                                                                        alt=""></span></label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="text-end"><input type="submit" name="placeOrder" class="btn-solid btn" value="<?=$this->lang->line('place_order')?>" /></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->
