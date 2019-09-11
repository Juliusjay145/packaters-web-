<div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><b>Pa</b>ckaters</a>
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
                        <a href="ui-elements.html"><i class="fa fa-desktop"></i> Service</a>
                    </li>
                    <li>
                        <a href="chart.html"><i class="fa fa-bar-chart-o"></i> Transaction</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> Category<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#" class="active-menu">Add Menu</a>
                            </li>
                            <li>
                                <a href="#">List of Menu</a>
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
                                            <input class="form-control" name="name" placeholder="Enter text">
                                        </div>
                                        <div class="form-group">
                                            <label>File input</label>

                                            <input type="file" name="logo">
                                            <input type="file" name="logo" class="form-control"><br/> <button class="btn info btn btn-primary">Choose file to upload</button>
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