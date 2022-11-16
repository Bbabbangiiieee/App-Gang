 <?php 
 require_once('./constant/connect.php');
 ?>
        <div class="left-sidebar">
            
            <div class="scroll-sidebar">
                
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label" style="margin-top: 50px">Home</li>
                        <li> <a href="dashboard.php" aria-expanded="false"><i class="fa fa-tachometer"></i>Dashboard</a>
                        </li> 
                 
                         <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                        <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-industry"></i><span class="hide-menu">Manufacturer</span></a>
                            <ul aria-expanded="false" class="collapse">
                           
                                <li><a href="add-brand.php">Add Manufacturer</a></li>
                           
                                <li><a href="brand.php">Manage Manufacturer</a></li>
                            </ul>
                        </li>
                    <?php }?>
                        <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                        <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-list"></i><span class="hide-menu">Categories</span></a>
                            <ul aria-expanded="false" class="collapse">
                           
                                <li><a href="add-category.php">Add Category</a></li>
                           
                                <li><a href="categories.php">Manage Categories</a></li>
                            </ul>
                        </li>
                    <?php }?>
                    <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                        <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-medkit"></i><span class="hide-menu">Medicine</span></a>
                            <ul aria-expanded="false" class="collapse">
                           
                                <li><a href="index.php">Add Medicine</a></li>
                           
                                <li><a href="view.php">Manage Medicine</a></li>
                            </ul>
                        </li>
                    <!--<?php }?>
                         
                        <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                         <!-- <li><a href="report.php" href="#" aria-expanded="false"><i class="fa fa-print"></i><span class="hide-menu">Reports</span></a></li> -->
                        



                  

<li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-flag"></i><span class="hide-menu">Inventory</span></a>
                            <ul aria-expanded="false" class="collapse">
                           
                                <li><a href="productreport.php">Medicines Stock </a></li>
                                <li><a href="expreport.php">Expired Medicines</a></li>
                            </ul>
                        </li>
                  <?php }?>

                         
                    <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                                <li> <a href="./constant/logout.php" aria-expanded="false"><i class="fa fa-power-off"></i>LOG OUT</a>
                            </ul>
                        </li>
                    <?php }?>


    
                    </ul>   
                </nav>
                
            </div>
            
        </div>
        