    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2><?=$this->lang->line('Terms_&_Condistions')?></h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><?=$this->lang->line('home')?></a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?=$this->lang->line('Terms_&_Condistions')?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->


    <!-- about section start -->
    <section class="about-page section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p style="text-align: center;">
                    <?php 
                        if($this->session->userdata('site_lang') == "english")
                        {
                            echo $terms_and_condistions->description;
                        }
                        else
                        {
                            echo $terms_and_condistions->description_ar;
                        }
                    ?>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- about section end -->


    