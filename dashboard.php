<?php //error_reporting(1); ?>
<?php include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>
<?php include('./constant/layout/sidebar.php');?>

<?php 
$lowStockSql = "SELECT * FROM medicine WHERE status = 1";
$lowStockQuery = $db2->query($lowStockSql);
$countLowStock = $lowStockQuery->num_rows;

$date=date('Y-m-d');
$lowStockSql3 = "SELECT * FROM medicine WHERE  expdate<'".$date."'";
$lowStockQuery3 = $db2->query($lowStockSql3);
$countLowStock3 = $lowStockQuery3->num_rows;

?>

<style type="text/css">
    .ui-datepicker-calendar {
        display: none;
    }
</style>
        <div class="page-wrapper">
            <div class="container-fluid ">
                
                 <div class="row">
                    <div class="col-md-6 dashboard">
                       <div class="card" style="background: #2BC155 ">
                           <div class="media widget-ten">
                               <div class="media-left meida media-middle">
                                   <span><i class="ti-agenda"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                   <h2 class="color-white"><?php echo $countLowStock; ?></h2>
                                   <a href="product.php"><p class="m-b-0">Total Medicine</p></a>
                               </div>
                           </div>
                       </div>
                    </div> 

                    <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                    <div class="col-md-6 dashboard">
                        <div class="card" style="background:#A02CFA ">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-widget"></i></span>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <?php }?>

                    <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                    <div class="col-md-6 dashboard">
                        <div class="card " style="    background-color: #F94687 ">
                            <div class="media widget-ten">
                              <div class="media-left meida media-middle">
                                    <span><i class="ti-vector"></i></span>
                              </div>
                              
                             </div>
                        </div>
                    </div>
                    <?php }?>
                    
                    <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                    <div class="col-md-6 dashboard">
                        <div class="card" style="    background-color: #FFBC11 ">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-agenda"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white"><?php echo $countLowStock3; ?></h2>
                                    <a href="Order.php"><p class="m-b-0">Total Expired Medicine</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                   




                
            </div>
        </div>
    </div>

            
            <?php include ('./constant/layout/footer.php');?>
        