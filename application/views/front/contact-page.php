

    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2><?php echo $this->lang->line('contact');?></h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><?php echo $this->lang->line('home');?></a></li>
                            <li class="breadcrumb-item active"><?php echo $this->lang->line('contact');?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!--section start-->
    <section class="contact-page section-b-space">
        <div class="container">
            <div class="row section-b-space">
                <div class="col-lg-7 map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1605.811957341231!2d25.45976406005396!3d36.3940974010114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1550912388321"
                        allowfullscreen></iframe>
                </div>
                <div class="col-lg-5">
                    <div class="contact-right">
                        <ul>
                        
                                <?php if($this->session->userdata('site_lang') =="arabic"){?>
                                    <?php echo $contact[0]['description_ar'];?>
                               <?php }else{?>
                                    <?php echo $contact[0]['description'];?>
                              <?php  }
                                    ?>

                            
                                    
                        </ul>
                    </div>
                </div>
            </div>
            <?php if($this->session->userdata('site_lang') =="english"){?>
                      <?php echo $sent_msg;?>
                               <?php }else{?>
                                <?php echo $sent_msg_ar;?>
                              <?php  }
                                    ?>

           
           
            <div class="row">
                <div class="col-sm-12">
                      <?=form_open('front_end/Contact_info/insert_contact', 'class="theme-form"');?> 
                        <div class="form-row row">
                            <div class="col-md-6">
                                <label for="name"><?php echo $this->lang->line('name');?> </label>
                                <input type="text" name = "name" class="form-control" id="name" placeholder="<?php echo $this->lang->line('name');?>"
                                    required="">
                            </div>
                            <div class="col-md-6">
                                <label for="email"><?php echo $this->lang->line('checkout_lname');?></label>
                                <input type="text" name = "last_name" class="form-control" id="last-name" placeholder="<?php echo $this->lang->line('checkout_lname');?>" required="">
                            </div>
                            <div class="col-md-6">
                                <label for="review"> <?php echo $this->lang->line('phone');?></label>
                                <input type="tel" name = "phone" class="form-control" id="review" placeholder="<?php echo $this->lang->line('phone');?>"
                                    required="">
                            </div>
                            <div class="col-md-6">
                                <label for="email"><?php echo $this->lang->line('email');?> </label>
                                <input type="email" name = "email" class="form-control" id="email" placeholder="<?php echo $this->lang->line('email');?> " required="">
                            </div>
                            <div class="col-md-12">
                                <label for="review"><?php echo $this->lang->line('msg');?>  </label>
                                <textarea type="text" name="msg" class="form-control" id="exampleFormControlTextarea1" placeholder="<?php echo $this->lang->line('msg');?>" required=""
                                    rows="5"></textarea>
                            </div>
                            <div class="col-md-12">
                                <input class="btn btn-solid" type="submit" value="<?php echo $this->lang->line('send');?>">
                            </div>
                        </div>
                        <?=form_close()?>
                </div>
            </div>
        </div>
    </section>
    <!--Section ends-->
