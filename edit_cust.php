<?php include "includes/header.php" ?> 


<?php  // Get request customer id and database data extraction


if(isset($_GET['edit_cust'])){


    $the_cust_id =  escape($_GET['edit_cust']);
    

    $query = "SELECT * FROM customers WHERE cust_id = $the_cust_id ";
    $select_cust_query = mysqli_query($connection,$query);  

      while($row = mysqli_fetch_assoc($select_cust_query)) {

          $cust_id        = $row['cust_id'];
          $cust_name      = $row['cust_name'];
          $cust_addr      = $row['cust_addr'];
          $cust_tel       = $row['cust_tel'];
          $cust_mob       = $row['cust_mob'];
          $cust_email     = $row['cust_email'];
          $cust_notes     = $row['cust_notes'];
          
      }
      
    
    
    
?>
  

   
 <?php  // Post request to update customer 
   

   if(isset($_POST['edit_cust'])) {
       
            
            $cust_name        = escape($_POST['cust_name']);
            $cust_addr        = escape($_POST['cust_addr']);
            $cust_tel         = escape($_POST['cust_tel']);
            $cust_mob         = escape($_POST['cust_mob']);
            $cust_email       = escape($_POST['cust_email']);
            $cust_notes       = escape($_POST['cust_notes']);

       
      

        if(!empty($cust_name)) { 

          $query_name = "SELECT cust_name FROM customers WHERE cust_id =  $the_cust_id";
          $get_cust_query = mysqli_query($connection, $query_name);
          confirmQuery($get_cust_query);

          $row = mysqli_fetch_array($get_cust_query);

          $db_cust_name = $row['cust_name'];


          $query = "UPDATE customers SET ";
          $query .="cust_name  = '{$cust_name}', ";
          $query .="cust_addr = '{$cust_addr}', ";
          $query .="cust_tel   =  '{$cust_tel}', ";
          $query .="cust_mob = '{$cust_mob}', ";
          $query .="cust_email = '{$cust_email}', ";
          $query .="cust_notes   = '{$cust_notes}' ";
          $query .="WHERE cust_id = {$the_cust_id} ";
       
       
          $edit_cust_query = mysqli_query($connection,$query);
       
          confirmQuery($edit_cust_query);


          echo "Ο Πελάτης Ενημερώθηκε" . " <a href='view_cust.php'>Προβολή Πελατών</a>";

      

             }  // if name empty check end

    



      
        } // Post reques to update customer end





 } else {  // If the user id is not present in the URL we redirect to the home page


        header("Location: index.php");


      }




    
    
?>

<!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Ενημέρωση Πελάτη</h1>
                <br><br>
                

    <form action="" method="post" enctype="multipart/form-data">    
     
     
     
    <div class="form-group">
        <label for="title">Όνομα</label>
        <input type="text" value="<?php echo $cust_name; ?>" class="form-control" name="cust_name">
    </div>
      
    <div class="form-group">
        <label for="post_tags">Διεύθυνση</label>
        <input type="text" value="<?php echo $cust_addr; ?>" class="form-control" name="cust_addr">
    </div>
     
    <div class="form-group">
        <label for="post_tags">Τηλέφωνο</label>
        <input type="text" value="<?php echo $cust_tel; ?>" class="form-control" name="cust_tel">
    </div>
                    
    <div class="form-group">
        <label for="post_tags">Κινητό</label>
        <input type="text" value="<?php echo $cust_mob; ?>" class="form-control" name="cust_mob">
    </div>                                                            
      
    <div class="form-group">
        <label for="post_content">Email</label>
        <input type="email" value="<?php echo $cust_email; ?>" class="form-control" name="cust_email">
    </div>
      
    <div class="form-group">
        <label for="post_content">Σημειώσεις</label>
        <textarea class="form-control" name="cust_notes" id="" cols="30" rows="10">
        <?php echo $cust_notes; ?>
        </textarea>
    </div>

      

    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="edit_cust" value="Ενημέρωση Πελάτη">
    </div>


</form>
  
              </div>
        </div>
    </div>
    <!-- /.container -->
   
       <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

    