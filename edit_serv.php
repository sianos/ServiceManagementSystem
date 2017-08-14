<?php include "includes/header.php" ?> 


<?php  // Get request service id and database data extraction


if(isset($_GET['edit_serv'])){


    $the_serv_id =  escape($_GET['edit_serv']);
    

    $query = "SELECT * FROM service WHERE serv_id = $the_serv_id ";
    $select_serv_query = mysqli_query($connection,$query);  

      while($row = mysqli_fetch_assoc($select_serv_query)) {

          $serv_id        = $row['serv_id'];
          $item_id        = $row['item_id'];
          $date_in        = $row['date_in'];
          $date_out       = $row['date_out'];
          $serv_status    = $row['serv_status'];
          $serv_notes     = $row['serv_notes'];
          
      }
      
    
    
    
?>
  

   
 <?php  // Post request to update service
   

   if(isset($_POST['edit_serv'])) {
       
            
            //$item_id           = escape($_POST['item_id']);
            $date_in           = escape($_POST['date_in']);
            $date_out          = escape($_POST['date_out']);
            $serv_status       = escape($_POST['serv_status']);
            $serv_notes        = escape($_POST['serv_notes']);



          $query = "UPDATE service SET ";
          $query .="date_in  = '{$date_in}', ";
          $query .="date_out = '{$date_out}', ";
          $query .="serv_status   =  '{$serv_status}', ";
          $query .="serv_notes = '{$serv_notes}' ";
          $query .="WHERE serv_id = {$the_serv_id} ";
       
       
          $edit_serv_query = mysqli_query($connection,$query);
       
          confirmQuery($edit_serv_query);


          echo "Η Επισκευή Ενημερώθηκε" . " <a href='view_open_serv.php'>Προβολή Βλαβών</a>";


    



      
        } // Post reques to update service end





 } else { 


        header("Location: index.php");


      }




    
    
?>

<!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Ενημέρωση Επισκευής</h1>
                <br><br>
                

    <form action="" method="post" enctype="multipart/form-data">    
    
    <label><?php echo "Κωδικός Επισκευής: ".$serv_id; ?></label> 
          
    <div class="form-group">
        <label for="date_in">Ημερομηνία Εισόδου</label>
        <input type="date" class="form-control" name="date_in" value='<?php echo $date_in; ?>'>
    </div>
                    
    <div class="form-group">
        <label for="date_out">Ημερομηνία Εξόδου</label>
        <input type="date" class="form-control" name="date_out"  value='<?php echo $date_out; ?>'>
    </div>

        
        
    <div class="form-group">
        <label for="serv_status">Status</label>                    
        <select name="serv_status" class="form-control" id="">
           
        <?php

        $query = "SELECT * FROM service_status ";
        $select_status = mysqli_query($connection,$query);
        
        confirmQuery($select_status);


        while($row = mysqli_fetch_assoc($select_status )) {
        $status_id = $row['status_id'];
        $status_desc = $row['status_desc'];


        if($status_id == $serv_status) {

      
            echo "<option selected value='{$status_id}'>{$status_desc}</option>";


        } else {

            echo "<option value='{$status_id}'>{$status_desc}</option>";
        }   
        }
?>   
       </select>
                        
    </div>     
        
        
    <div class="form-group">
        <label for="serv_notes">Σημειώσεις</label>
        <textarea class="form-control" name="serv_notes" id="" cols="30" rows="10">
        <?php echo $serv_notes; ?>
        </textarea>
    </div>

      

    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="edit_serv" value="Ενημέρωση Επισκευής">
    </div>


</form>
  
              </div>
        </div>
            <div class="row">

            <h2>Ιστορικό Βλαβών Μηχανήματος : <?php echo $item_id; ?></h2>
            <br><br>
   

            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Ημερομηνία Εισόδου</th>
                        <th>Ημερομηνία Εξόδου</th>
                        <th>Σημειώσες</th>


                    </tr>
                </thead>

                <tbody>

                 <?php 
    
                    $query = "SELECT * FROM service WHERE item_id=$item_id";
                    $select_serv = mysqli_query($connection,$query);  
                    while($row = mysqli_fetch_assoc($select_serv)) {
                        $date_in             = date("d-m-Y", strtotime($row['date_in']));
                        $date_out            = date("d-m-Y", strtotime($row['date_out']));
                        $serv_notes          = $row['serv_notes'];


                        echo "<tr>";

                        echo "<td>$date_in </td>";
                        echo "<td>$date_out</td>";
                        echo "<td>$serv_notes</td>";
                        
                        echo "</tr>";
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /.container -->
   
       <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

    