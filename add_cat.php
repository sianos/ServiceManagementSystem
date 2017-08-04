<?php include "includes/header.php" ?> 
   
   
<?php
   

   if(isset($_POST['create_cat'])) {
       
            
            $cat_desc          = escape($_POST['cat_desc']);
 
              
            $query = "INSERT INTO categories (cat_desc) ";
                 
            $query .= "VALUES('{$cat_desc}') "; 
                 
            $create_cat_query = mysqli_query($connection, $query);  
              
            confirmQuery($create_cat_query); 
       
       
                 echo "Η Κατηγορία Δημιουργήθηκε : " . " " . "<a href='view_cat.php'>Προβολή Κατηγοριών</a> "; 
       
      
   
   }
    

    
    
?>
      
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Προσθήκη Νέας Κατηγορίας</h1>
                <br><br>
                
                <form action="" method="post" enctype="multipart/form-data">    
                    
                    <div class="form-group">
                        <label for="title">Περιγραφή</label>
                        <input type="text" class="form-control" name="cat_desc">
                    </div>
      
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="create_cat" value="Καταχώρηση">
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