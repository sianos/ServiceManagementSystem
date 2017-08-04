<?php include "includes/header.php" ?> 
   
   
<?php
   

   if(isset($_POST['create_serv'])) {
       
            
            $item_id           = escape($_POST['item_id']);
            $serv_date_in      = escape($_POST['serv_date_in']);
      // echo $serv_date_in;
            //$date_in = date("d-m-Y", strtotime($serv_date_in));
      // echo $newDate;
            $serv_date_out     = escape($_POST['serv_date_out']);
            $status            = escape($_POST['status']);
            $serv_notes        = escape($_POST['serv_notes']);

            if (!item_exists($item_id)) {
                echo "Ο κωδικός του μηχανήματος δεν υπάρχει. Παρακαλώ προχωρήστε πρώτα στην καταχώρηση του μηχανήματος"
                      . " " . "<a href='add_item.php'>Καταχώρηση Μηχανήματος</a> ";
            } else {
       
            $query = "INSERT INTO service(item_id, date_in, date_out, serv_status, serv_notes) ";
                 
            $query .= "VALUES('{$item_id}','{$serv_date_in}','{$serv_date_out}','{$status}','{$serv_notes}') "; 
                 
            $create_serv_query = mysqli_query($connection, $query);  
              
            confirmQuery($create_serv_query); 
       
       
                 echo "Η Εγγραφή Δημιουργήθηκε : " . " " . "<a href='view_serv.php'>Προβολή Service</a> "; 
       
            }
   
   }
    

    
    
?>
      
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Καταχώρηση Προϊόντων προς Επισκευή</h1>
                <br><br>
                
                <form action="" method="post" enctype="multipart/form-data">    
                    
                    <div class="form-group">
                        <label for="item_id">Κωδικός Μηχανήματος</label>
                        <input type="text" class="form-control" name="item_id">
                    </div>
                    
                    <div class="form-group">
                        <label for="serv_date_in">Ημερομηνία Εισόδου</label>
                        <input type="date" class="form-control" name="serv_date_in">
                    </div>
                    
                    <div class="form-group">
                        <label for="serv_date_out">Ημερομηνία Εξόδου</label>
                        <input type="date" class="form-control" name="serv_date_out">
                    </div>
                    
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" class="form-control" id="">
           
                        <?php
                        $query = "SELECT * FROM service_status ";
                        $select_status = mysqli_query($connection,$query);
                            
                        confirmQuery($select_status);
                        
                        while($row = mysqli_fetch_assoc($select_status )) {
                            $status_id   = $row['status_id'];
                            $status_desc = $row['status_desc'];

                            echo "<option value='{$status_id}'>{$status_desc}</option>";

                        }
                        ?>      
                        </select>
                    </div>                                                            
      
                    <div class="form-group">
                        <label for="serv_notes">Σημειώσεις</label>
                        <textarea class="form-control "name="serv_notes" id="" cols="30" rows="10">
                        </textarea>
                    </div>
      
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="create_serv" value="Καταχώρηση">
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
