<!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2><?=$this->lang->line('brand')?></h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><?=$this->lang->line('home')?></a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?=$this->lang->line('brand')?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->


    <!--section start-->
    <div class="container category-button">
        <section class="section-b-space border-section border-bottom-0">
            <div class="row partition1">
                <?php foreach($brands as $brand):?>
                    <div align="center" class="col-3" style="padding-top: 10px;padding-bottom: 10px;">
                        <div style="background-color: #f7f7f7;
                                    -webkit-box-shadow: 0px 0px 5px 0px rgb(154 154 154 / 54%);
                                    box-shadow: 0px 0px 5px 0px rgb(154 154 154 / 54%);;border-radius: 5px;padding-bottom: 10px;">
                            <h3 style="text-align: center;height: 60px;">
                            <?php 
                                if($this->session->userdata('site_lang') == "english")
                                {
                                    echo $brand["brand_name"];
                                }
                                else
                                {
                                    echo $brand["brand_name_ar"];
                                }
                            ?>
                            </h3>
                            <a href="<?=base_url()?>front_end/category/products_of_cat/<?=$brand["category_id"]?>" class="btn btn-solid btn-block" style="font-size: 9px;padding: 5px 0px;width: 100px;"><?=$brand["name"]?></a>
                        </div>
                    </div>
                <?php endforeach?>
            </div>
        </section>
    </div>
    <!--Section ends-->
