<?php include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>

<?php include('./constant/layout/sidebar.php');?>
<?php 
include('./constant/connect.php');
$sql = "SELECT*from medicine order by med_name ASC";
$result = $db2 -> query($sql);
?>


       <div class="page-wrapper">
            
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary"> View Medicine</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">View Medicine</li>
                    </ol>
                </div>
            </div>
                
                 <div class="card">
                            <div class="card-body">
                              
                            <a href="add-product.php"><button class="btn btn-primary">Add Medicine</button></a>

                            <div class="col col-md-12">
            <hr class="col-md-12" style="padding: 0px; border-top: 5px solid  #ffff;">
          </div>

                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                              <th class="text-center">#</th>

                            <th>Medicine Name</th>                       
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Packaging</th>
                            <th>Dosage</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>Date Added</th>
                            <th>Expiration Date</th>
                                                <th>Action</th>
                                            </tr>
                                       </thead>
                                       <tbody>
                                       
                                       <?php
foreach ($result as $row) {

    ?>            
                 <tr>     
                                            <td><?php echo $row['med_id'] ?></td>
                                            <td><?php echo $row['med_name'] ?></td>
                                             <td><?php echo $row['med_quan'] ?></td>
                                              <td><?php echo $row['med_price'] ?></td>
                                              <td><?php echo $row['med_pack'] ?></td>
                                             <td><?php echo $row['med_dosage'] ?></td>
                                             <td><?php echo $row['med_class'] ?></td>
                                             <td><?php echo $row['med_stat'] ?></td>
                                             <td><?php echo $row['med_added'] ?></td>
                                             <td><?php echo $row['med_exp'] ?></td>
                                            
                                            
                                            <td>
            
                                                <a href="editproduct.php?id=<?php echo $row['med_id']?>"><button type="button" class="btn btn-xs btn-primary" ><i class="fa fa-pencil"></i></button></a>
                                              

             
                                                <a href="action/removeProduct.php?id=<?php echo $row['med_id']?>" ><button type="button" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure to delete this record?')"><i class="fa fa-trash"></i></button></a>
                                           
     
                                                </td>
                                        </tr>
                                    </tbody>
                                   <?php    
}
?>
                               </table>
                                </div>
                            </div>
                        </div>

 
<?php include('./constant/layout/footer.php');?>


