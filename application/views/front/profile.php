 <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>vendor dashboard</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">vendor dashboard</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!--  dashboard section start -->
    <section class="dashboard-section section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="dashboard-sidebar">
                        <div class="profile-top">
                            <div class="profile-image">
                                <img src="<?=base_url()?>assets/front/images/logos/17.png" alt="" class="img-fluid">
                            </div>
                            <div class="profile-detail">
                                <h5><?=$user_info->name?></h5>
                                <h6><?=$user_info->email?></h6>
                            </div>
                        </div>
                        <div class="faq-tab">
                            <ul class="nav nav-tabs" id="top-tab" role="tablist">
                                <li class="nav-item"><a data-bs-toggle="tab" class="nav-link active"
                                        href="#dashboard">dashboard</a></li>
                                <li class="nav-item"><a data-bs-toggle="tab" class="nav-link"
                                        href="#products">products</a>
                                </li>
                                <li class="nav-item"><a data-bs-toggle="tab" class="nav-link" href="#orders">orders</a>
                                </li>
                                <li class="nav-item"><a data-bs-toggle="tab" class="nav-link"
                                        href="#profile">profile</a>
                                </li>
                                <li class="nav-item"><a data-bs-toggle="tab" class="nav-link"
                                        href="#settings">settings</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="modal" data-bs-target="#logout"
                                        href="#">logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="faq-content tab-content" id="top-tabContent">
                        <div class="tab-pane fade show active" id="dashboard">
                            <div class="counter-section">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="counter-box">
                                            <img src="<?=base_url()?>assets/front/images/icon/dashboard/order.png" class="img-fluid">
                                            <div>
                                                <h3><?=count($order_products)?></h3>
                                                <h5>total products</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="counter-box">
                                            <img src="<?=base_url()?>assets/front/images/icon/dashboard/sale.png" class="img-fluid">
                                            <div>
                                                <h3><?=$total_salse->price?></h3>
                                                <h5>total sales</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="counter-box">
                                            <img src="<?=base_url()?>assets/front/images/icon/dashboard/homework.png" class="img-fluid">
                                            <div>
                                                <h3>
                                                    <?php 
                                                    $number = 0;
                                                    foreach($orders as $order)
                                                    {
                                                        if($order["status"] == 0)
                                                        {
                                                            $number++;
                                                        }
                                                    }
                                                    echo $number;
                                                    ?>
                                                </h3>
                                                <h5>order pending</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="card">
                                        <div class="card-body">
                                            <div id="chart"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="card">
                                        <div class="card-body">
                                            <div id="chart-order"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- <div class="col-lg-6">
                                    <div class="card dashboard-table">
                                        <div class="card-body">
                                            <h3>trending products</h3>
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">image</th>
                                                        <th scope="col">product name</th>
                                                        <th scope="col">price</th>
                                                        <th scope="col">sales</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row"><img
                                                                src="<?=base_url()?>assets/front/images/dashboard/product/1.jpg"
                                                                class="blur-up lazyloaded"></th>
                                                        <td>neck velvet dress</td>
                                                        <td>$205</td>
                                                        <td>1000</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><img
                                                                src="<?=base_url()?>assets/front/images/dashboard/product/9.jpg"
                                                                class="blur-up lazyloaded"></th>
                                                        <td>belted trench coat</td>
                                                        <td>$350</td>
                                                        <td>800</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><img src="<?=base_url()?>assets/front/images/pro3/34.jpg"
                                                                class="blur-up lazyloaded"></th>
                                                        <td>man print tee</td>
                                                        <td>$150</td>
                                                        <td>750</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="col-lg-12 col-md-6">
                                    <div class="card dashboard-table">
                                        <div class="card-body">
                                            <h3>recent orders</h3>
                                            <table class="table mb-0">
                                            <thead>
                                                    <tr>
                                                        <th scope="col">order id</th>
                                                        <th scope="col">status</th>
                                                        <th scope="col">price</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach($orders as $key => $order):
                                                        if($key == 5)
                                                        {
                                                            break;
                                                        }?>
                                                    <tr>
                                                        <th scope="row">#<?=$order["order_id"]?></th>
                                                        <td>
                                                            <?php
                                                            if($order["status"] == 0)
                                                            {
                                                                echo "WAITING";
                                                            }
                                                            else if($order["status"] == 1)
                                                            {
                                                                echo "PROCESSED";
                                                            }
                                                            else if($order["status"] == 2)
                                                            {
                                                                echo "CANCEL";
                                                            }
                                                            ?>
                                                        </td>
                                                        <td>$<?=$order["SUM(order.price)"]?></td>
                                                    </tr>
                                                   <?php endforeach?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="products">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card dashboard-table mt-0">
                                        <div class="card-body table-responsive-md">
                                            <div class="top-sec">
                                                <h3>all products</h3>
                                                <a href="#" class="btn btn-sm btn-solid">add product</a>
                                            </div>
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">image</th>
                                                        <th scope="col">product name</th>
                                                        <th scope="col">category</th>
                                                        <th scope="col">price</th>
                                                        <th scope="col">quantity</th>
                                                        <th scope="col">edit/delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach($order_products as $row):?>
                                                    <tr>
                                                        <th scope="row"><img
                                                                src="<?=base_url()?>uploads/product/<?=$row["image"]?>"
                                                                class="blur-up lazyloaded"></th>
                                                        <td style="width: 200px;"><?=$row["product_name"]?></td>
                                                        <td><?=$row["category_name"]?></td>
                                                        <td>$<?=$row["price"]?></td>
                                                        <td><?=$row["quantity"]?></td>
                                                        <td><i class="fa fa-pencil-square-o me-1"
                                                                aria-hidden="true"></i><i class="fa fa-trash-o ms-1"
                                                                aria-hidden="true"></i></td>
                                                    </tr>
                                                    <?php endforeach?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="orders">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card dashboard-table mt-0">
                                        <div class="card-body table-responsive-sm">
                                            <div class="top-sec">
                                                <h3>orders</h3>
                                                <a href="#" class="btn btn-sm btn-solid">add product</a>
                                            </div>
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">order id</th>
                                                        <th scope="col">status</th>
                                                        <th scope="col">price</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach($orders as $order):?>
                                                    <tr>
                                                        <th scope="row">#<?=$order["order_id"]?></th>
                                                        <td>
                                                            <?php
                                                            if($order["status"] == 0)
                                                            {
                                                                echo "WAITING";
                                                            }
                                                            else if($order["status"] == 1)
                                                            {
                                                                echo "PROCESSED";
                                                            }
                                                            else if($order["status"] == 2)
                                                            {
                                                                echo "CANCEL";
                                                            }
                                                            ?>
                                                        </td>
                                                        <td>$<?=$order["SUM(order.price)"]?></td>
                                                    </tr>
                                                   <?php endforeach?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card mt-0">
                                        <div class="card-body">
                                            <div class="dashboard-box">
                                                <div class="dashboard-title">
                                                    <h4>profile</h4>
                                                    <span data-bs-toggle="modal" data-bs-target="#edit-profile">edit</span>
                                                </div>
                                                <div class="dashboard-detail">
                                                    <ul>
                                                        <li>
                                                            <div class="details">
                                                                <div class="left">
                                                                    <h6>Name</h6>
                                                                </div>
                                                                <div class="right">
                                                                    <h6><?=$user_info->name?></h6>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="details">
                                                                <div class="left">
                                                                    <h6>email address</h6>
                                                                </div>
                                                                <div class="right">
                                                                    <h6><?=$user_info->email?></h6>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="details">
                                                                <div class="left">
                                                                    <h6>Phone Number</h6>
                                                                </div>
                                                                <div class="right">
                                                                    <h6><?=$user_info->phone_number?></h6>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="details">
                                                                <div class="left">
                                                                    <h6>Address</h6>
                                                                </div>
                                                                <div class="right">
                                                                    <h6><?=$user_info->address?></h6>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="settings">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card mt-0">
                                        <div class="card-body">
                                            <div class="dashboard-box">
                                                <div class="dashboard-title">
                                                    <h4>settings</h4>
                                                </div>
                                                <div class="dashboard-detail">
                                                    <div class="account-setting">
                                                        <h5>Notifications</h5>
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="form-check">
                                                                    <input class="radio_animated form-check-input"
                                                                        type="radio" name="exampleRadios"
                                                                        id="exampleRadios1" value="option1" checked>
                                                                    <label class="form-check-label"
                                                                        for="exampleRadios1">
                                                                        Allow Desktop Notifications
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="radio_animated form-check-input"
                                                                        type="radio" name="exampleRadios"
                                                                        id="exampleRadios2" value="option2">
                                                                    <label class="form-check-label"
                                                                        for="exampleRadios2">
                                                                        Enable Notifications
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="radio_animated form-check-input"
                                                                        type="radio" name="exampleRadios"
                                                                        id="exampleRadios3" value="option3">
                                                                    <label class="form-check-label"
                                                                        for="exampleRadios3">
                                                                        Get notification for my own activity
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="radio_animated form-check-input"
                                                                        type="radio" name="exampleRadios"
                                                                        id="exampleRadios4" value="option4">
                                                                    <label class="form-check-label"
                                                                        for="exampleRadios4">
                                                                        DND
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="account-setting">
                                                        <h5>deactivate account</h5>
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="form-check">
                                                                    <input class="radio_animated form-check-input"
                                                                        type="radio" name="exampleRadios1"
                                                                        id="exampleRadios4" value="option4" checked>
                                                                    <label class="form-check-label"
                                                                        for="exampleRadios4">
                                                                        I have a privacy concern
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="radio_animated form-check-input"
                                                                        type="radio" name="exampleRadios1"
                                                                        id="exampleRadios5" value="option5">
                                                                    <label class="form-check-label"
                                                                        for="exampleRadios5">
                                                                        This is temporary
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="radio_animated form-check-input"
                                                                        type="radio" name="exampleRadios1"
                                                                        id="exampleRadios6" value="option6">
                                                                    <label class="form-check-label"
                                                                        for="exampleRadios6">
                                                                        other
                                                                    </label>
                                                                </div>
                                                                <button type="button"
                                                                    class="btn btn-solid btn-xs">Deactivate
                                                                    Account</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="account-setting">
                                                        <h5>Delete account</h5>
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="form-check">
                                                                    <input class="radio_animated form-check-input"
                                                                        type="radio" name="exampleRadios3"
                                                                        id="exampleRadios7" value="option7" checked>
                                                                    <label class="form-check-label"
                                                                        for="exampleRadios7">
                                                                        No longer usable
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="radio_animated form-check-input"
                                                                        type="radio" name="exampleRadios3"
                                                                        id="exampleRadios8" value="option8">
                                                                    <label class="form-check-label"
                                                                        for="exampleRadios8">
                                                                        Want to switch on other account
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="radio_animated form-check-input"
                                                                        type="radio" name="exampleRadios3"
                                                                        id="exampleRadios9" value="option9">
                                                                    <label class="form-check-label"
                                                                        for="exampleRadios9">
                                                                        other
                                                                    </label>
                                                                </div>
                                                                <button type="button"
                                                                    class="btn btn-solid btn-xs">Delete Account</button>
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
    <!--  dashboard section end -->


    <!-- Modal start -->
    <div class="modal logout-modal fade" id="logout" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Logging Out</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Do you want to log out?
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-dark btn-custom" data-bs-dismiss="modal">no</a>
                    <a href="<?=base_url()?>front_end/logout" class="btn btn-solid btn-custom">yes</a>
                </div>
            </div>
        </div>
    </div>
    <!-- modal end -->
        <!-- Modal start -->
    <div class="modal fade" id="edit-profile"  role="modal" aria-hidden="true" role="dialog"> 
        <div class="modal-dialog modal-dialog-centered" >
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="theme-form" style="margin: 0 40px;">
                    <div class="modal-body">          
                        <div class="form-group">
                            <label for="name"><?php echo $this->lang->line('name'); ?></label>
                            <input type="text" class="form-control" name="user_name" id="name" placeholder="<?php echo $this->lang->line('name'); ?>" value="<?=$user_info->name?>" required="">
                        </div>
                        <div class="form-group">
                            <label for="email"><?php echo $this->lang->line('email'); ?></label>
                            <input type="text" class="form-control" name="user_email" id="email" placeholder="<?php echo $this->lang->line('email'); ?>" value="<?=$user_info->email?>" required="">
                        </div>
                        <div class="form-group">
                            <label for="phone"><?php echo $this->lang->line('phone'); ?></label>
                            <input type="text" class="form-control" name="user_phone" id="phone"
                                placeholder="<?php echo $this->lang->line('phone'); ?>" value="<?=$user_info->phone_number?>" required="">
                        </div>    
                        <div class="form-group">
                            <label for="address"><?php echo $this->lang->line('address'); ?></label>
                            <input type="text" class="form-control" name="user_phone" id="phone"
                                placeholder="<?php echo $this->lang->line('address'); ?>" value="<?=$user_info->address?>" required="">
                        </div>               
                    </div>
                    <div class="modal-footer">
                    <input type="submit" class="btn btn-solid" value="<?php echo $this->lang->line('save'); ?>" />
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- modal end -->
