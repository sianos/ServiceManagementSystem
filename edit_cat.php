<?php include "includes/header.php" ?> 


<?php  // Get request category id and database data extraction


if(isset($_GET['edit_cat'])){


    $the_cat_id =  escape($_GET['edit_cat']);
    

    $query = "SELECT * FROM categories WHERE cat_id = $the_cat_id ";
    $select_cat_query = mysqli_query($connection,$query);  

      while($row = mysqli_fetch_assoc($select_cat_query)) {

          $cat_id         = $row['cat_id'];
          $cat_desc       = $row['cat_desc'];
          
      }
      
    
    
    
?>
  

   
 <?php  // Post request to update category 
   

   if(isset($_POST['edit_cat'])) {
       
            
            $cat_desc         = escape($_POST['cat_desc']);
            

        if(!empty($cat_desc)) { 

          $query_desc = "SELECT cat_desc FROM categories WHERE cat_id =  $the_cat_id";
          $get_cat_query = mysqli_query($connection, $query_desc);
          confirmQuery($get_cat_query);

          $row = mysqli_fetch_array($get_cat_query);

          $db_cat_desc = $row['cat_desc'];


          $query = "UPDATE categories SET ";
          $query .="cat_desc  = '{$cat_desc}' ";
          $query .="WHERE cat_id = {$the_cat_id} ";
       
       
          $edit_cat_query = mysqli_query($connection,$query);
       
          confirmQuery($edit_cat_query);


          echo "Η Κατηγορία Ενημερώθηκε" . " <a href='view_cat.php'>Προβολή Κατηγοριών</a>";

      

             }  // if desc empty check end

    



      
        } // Post reques to update category end





 } else {  // If the user id is not present in the URL we redirect to the home page


        header("Location: index.php");


      }




    
    
?>

<!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Ενημέρωση Κατηγορίας</h1>
                <br><br>
                

    <form action="" method="post" enctype="multipart/form-data">    
     
     
     
    <div class="form-group">
        <label for="title">Περιγραφή</label>
        <input type="text" value="<?php echo $cat_desc; ?>" class="form-control" name="cat_desc">
    </div>


    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="edit_cat" value="Ενημέρωση Κατηγορίας">
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

    