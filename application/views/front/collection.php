
    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2><?php echo $this->lang->line('our_collection'); ?></h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?=base_url()?>"><?=$this->lang->line('home')?></a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?=$this->lang->line('categories')?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!--section start-->
    <section class="collection section-b-space ratio_square ">
        <div class="container">
            <div class="row partition-collection">
                <?php 
                    foreach($categories as $cat)
                    {
                        echo '<div class="col-lg-3 col-md-6">
                                <div class="collection-block">
                                    <div><img src="'.base_url().'uploads/category/'.$cat["icon"].'" class="img-fluid blur-up lazyload bg-img"
                                            alt=""></div>
                                    <div class="collection-content">';
                                        foreach ($product_count as $value) {
                                            if($cat["id"] == $value["cat_id"])
                                            {
                                                echo '<h4>('.$value["count"].' '.$this->lang->line("product").')</h4>';
                                            }
                                        }
                                        if($this->session->userdata('site_lang') == "english")
                                        {
                                            echo '<h3>'.$cat["name"].'</h3>';
                                        }
                                        else
                                        {
                                            echo '<h3>'.$cat["name_ar"].'</h3>';
                                        }
                                        
                                        echo '<p>'.$cat["brief"].'</p><a href="'.base_url().'front_end/Category/products_of_cat/'.$cat["id"].'" class="btn btn-outline">'.$this->lang->line("shop_now").' !</a>
                                    </div>
                                </div>
                            </div>';
                    }
                ?>               
            </div>          
        </div>
    </section>
    <!--Section ends-->


    