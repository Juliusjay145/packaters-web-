<div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <?php foreach($catering as $c): ?>
                 
                 <?php
                    if($this->session->userdata('username') == $c['username']):
                    
                        $c['cat_name'];
                        //$id = $pestcontrol['pestcontrol_id'];
                    
                 ?>

                <img src="<?php echo base_url('../bootstrap/img/newlogopackaters.png')?>" style="margin-left: 10px; height: 50px; width: 50px; margin-top: -30px; margin-bottom: -70px " alt="" class="img-fluid">

                <a href="<?php echo base_url('CateringController/home')?>"><h2 style="margin-left: 300px; margin-top: -10px"><?php echo $c['cat_name']; ?></h2>
                <?php endif; ?>
                <?php endforeach; ?>
                </a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <ul class="dropdown-menu dropdown-messages">
                        <li class="divider"></li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url('CateringController/logout')?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                 <ul class="nav" id="main-menu">

                    <li>
                        <a href="<?php echo base_url('CateringController/home')?>"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('ServiceController/service')?>" ><i class="fa fa-desktop"></i>Add Service</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('CateringController/transaction')?>"><i class="fa fa-bar-chart-o"></i> Transaction</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('CateringController/transaction_completed')?>"><i class="fa fa-bar-chart-o"></i> Confirmed Transaction</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('CateringController/transaction_reports')?>"><i class="fa fa-bar-chart-o"></i> Reports Transaction</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('CommentController/comment')?>"><i class="fa fa-comments-o"></i>Feedback</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> Category<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url('ServiceController/listservice')?>" class="active-menu">List of Service</a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
             <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Add Menu<small></small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add Menu
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="<?php echo base_url('CategoryController/add_category')?>" method="post">
                    <input type="hidden" name="service_id" class="form-control" value="<?php echo $getpest[0]['id']; ?>">
                    
                                        <div class="form-group">
                                            <label>Menu Name</label>
                                            <input class="form-control" name="name" placeholder="Enter text" autofocus>
                                        </div>
                                        <div class="form-group">
                                            <label>File input</label>
                                            <input type="file" name="menu_logo" class="form-control"><br/> <button class="btn info btn btn-primary">Choose file to upload</button>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Menu Description</label>
                                            <textarea class="form-control" name="menu_description" rows="3"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Add Menu</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6" style="margin-left: -100px">
                                    <img src="<?php echo base_url('../bootstrapV3/img/icon.png')?>" width="150%"height="150%" >
                                </div>

                                <br/>

                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->