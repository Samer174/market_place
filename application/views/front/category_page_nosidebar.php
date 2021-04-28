


    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>
                            <?php 
                            if($this->session->userdata('site_lang') == "english")
                            {
                                echo $one_cat->name;
                            }
                            else
                            {
                                echo $one_cat->name_ar;
                            }
                            ?>
                        </h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><?php echo $this->lang->line('home');?></a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?php echo $this->lang->line('our_collection');?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->


    <!-- section start -->
    <section class="section-b-space ratio_asos">
        <div class="collection-wrapper">
            <div class="container">
                <div class="row">
                    <div class="collection-content col">
                        <div class="page-main-content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="top-banner-wrapper">
                                        <a href="#"><img src="<?=base_url()?>uploads/category/<?php echo $one_cat->icon?>"
                                                class="img-fluid blur-up lazyload" alt=""></a>
                                        <div class="top-banner-content small-section">
                                            <h4><?php echo $this->lang->line('top_deals');?></h4>
                                            <p>The trick to choosing the best wear for yourself is to keep in mind your
                                                body type, individual style, occasion and also the time of day or
                                                weather.
                                                In addition to eye-catching products from top brands, we also offer an
                                                easy 30-day return and exchange policy, free and fast shipping across
                                                all pin codes, cash or card on delivery option, deals and discounts,
                                                among other perks. So, sign up now and shop for westarn wear to your
                                                heart’s content on Multikart. </p>
                                        </div>
                                    </div>
                                    <div class="collection-product-wrapper">
                                        <div class="product-top-filter">
                                            <div class="container-fluid p-0">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="product-filter-content">
                                                            <div class="search-count">
                                                                <h5>Showing Products 1-24 of 10 Result</h5>
                                                            </div>
                                                            <div class="collection-view">
                                                                <ul>
                                                                    <li><i class="fa fa-th grid-layout-view"></i></li>
                                                                    <li><i class="fa fa-list-ul list-layout-view"></i>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="collection-grid-view">
                                                                <ul>
                                                                    <li><img src="<?=base_url()?>assets/front/images/icon/2.png" alt=""
                                                                            class="product-2-layout-view"></li>
                                                                    <li><img src="<?=base_url()?>assets/front/images/icon/3.png" alt=""
                                                                            class="product-3-layout-view"></li>
                                                                    <li><img src="<?=base_url()?>assets/front/images/icon/4.png" alt=""
                                                                            class="product-4-layout-view"></li>
                                                                    <li><img src="<?=base_url()?>assets/front/images/icon/6.png" alt=""
                                                                            class="product-6-layout-view"></li>
                                                                </ul>
                                                            </div>
                                                            <div class="product-page-per-view">
                                                                <select>
                                                                    <option value="High to low">24 Products Par Page
                                                                    </option>
                                                                    <option value="Low to High">50 Products Par Page
                                                                    </option>
                                                                    <option value="Low to High">100 Products Par Page
                                                                    </option>
                                                                </select>
                                                            </div>
                                                            <div class="product-page-filter">
                                                                <select>
                                                                    <option value="High to low">Sorting items</option>
                                                                    <option value="Low to High">50 Products</option>
                                                                    <option value="Low to High">100 Products</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-wrapper-grid">
                                            <div class="row margin-res">
                                            <?php foreach($data as $product):?>
                                                <div class="col-xl-3 col-6 col-grid-box">
                                                    <div class="product-box">
                                                        <div class="img-wrapper">
                                                            <div class="front">
                                                                <a href="<?php echo base_url('front_end/Product/Single_product/'.$product['id']);?>"><img src="<?php echo base_url('uploads/product/'.$product['image']);?>"
                                                                        class="img-fluid blur-up lazyload bg-img"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="back">
                                                                <a href="<?php echo base_url('front_end/Product/Single_product/'.$product['id']);?>"><<img src="<?php echo base_url('uploads/product/'.$product['image']);?>"
                                                                        class="img-fluid blur-up lazyload bg-img"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="cart-info cart-wrap">
                                                                <button data-bs-toggle="modal"
                                                                data-bs-target="#addtocart" title="Add to cart" class="add_cart" data-productid="<?php echo $product['id'];?>" data-productname="<?php echo $product['name'];?>" data-productprice="<?php echo $product['price'];?>" data-productimage="<?php echo $product['image'];?>"><i
                                                                        class="ti-shopping-cart"></i></button> <a
                                                                    href="javascript:void(0)" onclick="Add_wishlist(<?php echo $product['id'];?>)" title="Add to Wishlist"><i
                                                                        class="ti-heart" aria-hidden="true"></i></a> <a
                                                                    href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view-exclusive<?php echo $product['id'];?>" title="Quick View"><i
                                                                        class="ti-search" aria-hidden="true"></i></a> <a
                                                                    href="compare.html" title="Compare"><i
                                                                        class="ti-reload" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="product-detail">
                                                            <div>
                                                                <div class="rating"><i class="fa fa-star"></i> <i
                                                                        class="fa fa-star"></i> <i
                                                                        class="fa fa-star"></i> <i
                                                                        class="fa fa-star"></i> <i
                                                                        class="fa fa-star"></i></div>
                                                                <a href="product-page(no-sidebar).html">
                                                                    <h6><?php
                                                                        if($this->session->userdata('site_lang') == "english")
                                                                        {
                                                                            echo $product["name"];
                                                                        }
                                                                        else
                                                                        {
                                                                            echo $product["name_ar"];
                                                                        }
                                                                     ?></h6>
                                                                </a>
                                                                <p>Lorem Ipsum is simply dummy text of the printing and
                                                                    typesetting industry. Lorem Ipsum has been the
                                                                    industry's standard dummy text ever since the 1500s,
                                                                    when an unknown printer took a galley
                                                                    of type and scrambled it to make a type specimen
                                                                    book</p>
                                                                <h4><?php echo $product['price'];?></h4>
                                                                <ul class="color-variant">
                                                                    <li class="bg-light0"></li>
                                                                    <li class="bg-light1"></li>
                                                                    <li class="bg-light2"></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                              <?php endforeach;?>
                                            </div>
                                        </div>
                                        <div class="product-pagination">
                                            <div class="theme-paggination-block">
                                                <div class="container-fluid p-0">
                                                    <div class="row">
                                                        <div class="col-xl-6 col-md-6 col-sm-12">
                                                            <nav aria-label="Page navigation">
                                                                <ul class="pagination">
                                                                    <li class="page-item"><a class="page-link" href="#"
                                                                            aria-label="Previous"><span
                                                                                aria-hidden="true"><i
                                                                                    class="fa fa-chevron-left"
                                                                                    aria-hidden="true"></i></span> <span
                                                                                class="sr-only">Previous</span></a></li>
                                                                    <li class="page-item active"><a class="page-link"
                                                                            href="#">1</a></li>
                                                                    <li class="page-item"><a class="page-link"
                                                                            href="#">2</a></li>
                                                                    <li class="page-item"><a class="page-link"
                                                                            href="#">3</a></li>
                                                                    <li class="page-item"><a class="page-link" href="#"
                                                                            aria-label="Next"><span
                                                                                aria-hidden="true"><i
                                                                                    class="fa fa-chevron-right"
                                                                                    aria-hidden="true"></i></span> <span
                                                                                class="sr-only">Next</span></a></li>
                                                                </ul>
                                                            </nav>
                                                        </div>
                                                        <div class="col-xl-6 col-md-6 col-sm-12">
                                                            <div class="product-search-count-bottom">
                                                                <h5>Showing Products 1-24 of 10 Result</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section End -->




    
    
<!-- <-- Quick-view modal popup start--> 

<?php foreach($products as $item):?> 

<div class="modal fade bd-example-modal-lg theme-modal" id="quick-view-exclusive<?php echo $item['id'] ;?>" tabindex="-1" role="dialog"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content quick-view-modal">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <div class="row">
                    <div class="col-lg-6 col-xs-12">
                        <div class="quick-view-img"><img src="<?php echo base_url('uploads/product/'.$item['image']);?>" alt=""
                                class="img-fluid blur-up lazyload"></div>
                    </div>
                    <div class="col-lg-6 rtl-text">
                        <div class="product-right">
                            <h2><?php echo $item['name'] ;?></h2>
                            <h3><?php echo $item['price'] ;?></h3>
                            <ul class="color-variant">
                            <?php if(!empty($size))
                                {
                                        $count = 0;
                                        foreach($sizes as $key => $size):?>
                                        <?php   if($size['product_id'] == $item['id'])
                                                { 
                                                    if($count != 0)
                                                    {
                                                        $prev_key = $key-1;
                                                        if($size['product_stock_color'] != $sizes[$prev_key]['product_stock_color'])
                                                        {?>
                                                            <li class="bg-light0 " style="background-color:<?php echo $size['product_stock_color']?>"></li>                               
                                <?php                   }
                                                    }
                                                    else
                                                    {?>
                                                        <li class="bg-light0 " style="background-color:<?php echo $size['product_stock_color']?>"></li>
                                <?php               }
                                                    $count++;
                                                }
                                        endforeach;
                                }
                                else
                                {?>
                                        <li class="bg-light0 " style="background-color:<?php echo $item['product_color'];?>"></li>
                                <?php }?>
                            </ul>
                            <div class="border-product">
                                <h6 class="product-title"><?php echo $this->lang->line('details');?></h6>
                                <p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium
                                    doloremque laudantium</p>
                            </div>
                            <div class="product-description border-product">
                            <div class="size-box" id = "size_P">
                                <ul <?php if(empty($sizes)){echo 'class="empty_size"';}?>>
                                <?php foreach($sizes as $size):?>                             
                               <?php if($size['product_id'] == $item['id'])
                                { ?>
                                    <li><a href="javascript:void(0)"><?php echo $size['name'];?></a></li>
                               <?php  }
                                
                                     endforeach;?>
                                </ul>
                            </div>
                                <h6 class="product-title"><?php echo $this->lang->line('select_product_quantity');?></h6>
                                <div class="qty-box">
                                    <div class="input-group"><span class="input-group-prepend"><button type="button"
                                                class="btn quantity-left-minus" data-type="minus" data-field=""><i
                                                    class="ti-angle-left"></i></button> </span>
                                        <input type="number" name="quantity" class="form-control input-number product_quantity<?=$item['id']?>" value="1"> 
                                        <span class="input-group-prepend"><button type="button"
                                                class="btn quantity-right-plus" data-type="plus" data-field=""><i
                                                    class="ti-angle-right"></i></button></span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-buttons">
                                <a href="javascript:void(0)" class="cartEffect btn btn-solid" data-productid="<?php echo $item['id'] ;?>" data-productname="<?php echo $item['name'] ;?>" data-productprice="<?php echo $item['price'] ;?>" data-productimage="<?php echo $item['image'] ;?>"> <?php echo $this->lang->line('add_to_cart');?></a> 
                                <a href="<?php echo base_url('front_end/Product/Single_product/'.$item['id']);?>" class="btn btn-solid"><?php echo $this->lang->line('details');?></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endforeach;?>

<!-- Quick-view modal popup end-->

     <!-- cart start -->
     <div class="addcart_btm_popup" id="fixed_cart_icon">
        <a href="#" class="fixed_cart">
            <i class="ti-shopping-cart"></i>
        </a>
    </div>
    <!-- cart end -->

