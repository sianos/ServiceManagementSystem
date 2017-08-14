<?php include "includes/header.php" ?> 
   
   
<?php
   

   if(isset($_POST['create_item'])) {
       
            
            $cat_id            = escape($_POST['category']);
            $cust_id           = escape($_POST['customer']);
            $item_desc         = escape($_POST['item_desc']);
            $item_sn           = escape($_POST['item_sn']);
            $item_notes        = escape($_POST['item_notes']);

 
              
            $query = "INSERT INTO items(cat_id, cust_id, item_desc, item_sn, item_notes) ";
                 
            $query .= "VALUES('{$cat_id}','{$cust_id}','{$item_desc}','{$item_sn}','{$item_notes}') "; 
                 
            $create_item_query = mysqli_query($connection, $query);  
              
            confirmQuery($create_item_query); 
       
       
                 echo "Το Μηχάνημα Καταχωρήθηκε : " . " " . "<a href='view_items.php'>Προβολή Μηχανημάτων</a> "; 
       
      
   
   }
    

    
    
?>
      
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Προσθήκη Νέου Μηχανήματος</h1>
                <br><br>
                
                <form action="" method="post" enctype="multipart/form-data">                                            
                       
                    <div class="form-group">
                        <label for="category">Κατηγορία</label>
                        <select name="category" class="form-control" id="">
           
                        <?php
                        $query = "SELECT * FROM categories ";
                        $select_categories = mysqli_query($connection,$query);
                            
                        confirmQuery($select_categories);
                        
                        while($row = mysqli_fetch_assoc($select_categories )) {
                            $cat_id = $row['cat_id'];
                            $cat_desc = $row['cat_desc'];

                            echo "<option value='{$cat_id}'>{$cat_desc}</option>";

                        }
                        ?>      
                        </select>
                    </div>    
                       
                    <div class="form-group">
                        <label for="customer">Πελάτης</label>
                        <select name="customer" class="form-control" id="">
           
                        <?php
                        $query = "SELECT * FROM customers ORDER BY cust_name";
                        $select_customers = mysqli_query($connection,$query);
                            
                        confirmQuery($select_customers);
                        
                        while($row = mysqli_fetch_assoc($select_customers )) {
                            $cust_id = $row['cust_id'];
                            $cust_name = $row['cust_name'];

                            echo "<option value='{$cust_id}'>{$cust_name}</option>";

                        }
                        ?>      
                        </select>
                    </div>                         
                       
                    <div class="form-group">
                        <label for="title">Περιγραφή</label>
                        <input type="text" class="form-control" name="item_desc">
                    </div>
                    
                    <div class="form-group">
                        <label for="post_tags">Serial Number</label>
                        <input type="text" class="form-control" name="item_sn">
                    </div>
      
                    <div class="form-group">
                        <label for="post_content">Σημειώσεις</label>
                        <textarea class="form-control "name="item_notes" id="" cols="30" rows="10">
                        </textarea>
                    </div>
      
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="create_item" value="Καταχώρηση">
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
