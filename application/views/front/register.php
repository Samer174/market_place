
    <?php $this->load->view('front/header');?>
    <!-- header end -->


    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2><?php echo $this->lang->line('create_account'); ?></h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><?php echo $this->lang->line('home'); ?></a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?php echo $this->lang->line('create_account'); ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!--section start-->
    <section class="register-page section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3><?php echo $this->lang->line('create_account'); ?></h3>
                    <div class="theme-card">
                        <?=form_open('front_end/auth/register/submit_register', 'class="theme-form"');?>
                            <div class="form-row row">
                                <div class="col-md-6">
                                    <label for="email"> <?php echo $this->lang->line('name'); ?></label>
                                    <input type="text" name="user_name" class="form-control" id="fname" placeholder="<?php echo $this->lang->line('name'); ?>"
                                        required="">
                                </div>
                                <!-- <div class="col-md-6">
                                    <label for="review">Last Name</label>
                                    <input type="password" class="form-control" id="lname" placeholder="Last Name"
                                        required="">
                                </div> -->
                            </div>
                            <div class="form-row row">
                                <div class="col-md-6">
                                    <label for="email"><?php echo $this->lang->line('email'); ?></label>
                                    <input type="text" name="user_email" class="form-control" id="email" placeholder="<?php echo $this->lang->line('email'); ?>" required="">
                                </div>
                                <div class="col-md-6">
                                    <label for="review"><?php echo $this->lang->line('password'); ?></label>
                                    <input type="password" name="user_password" class="form-control" id="review"
                                        placeholder="<?php echo $this->lang->line('password'); ?>" required="">
                                </div>
                                <p><?=$this->lang->line('Terms_&_Condistions_msg')?> <a href="<?=base_url()?>front_end/Terms_and_Condistions"><?=$this->lang->line('Terms_&_Condistions')?></a></p>
                                <input type="submit" class="btn btn-solid w-auto" value="<?php echo $this->lang->line('create_account'); ?>">
                            </div>
                        <?=form_close()?>
                        <!-- </form> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Section ends-->


    <?php $this->load->view('front/footer');?>
