<?php include "includes/header.php" ?> 
   
   
<?php
   

   if(isset($_POST['create_status'])) {
       
            
            $status_desc          = escape($_POST['status_desc']);
            $status_color         = escape($_POST['status_color']);
 
              
            $query = "INSERT INTO service_status (status_desc, status_color) ";
                 
            $query .= "VALUES('{$status_desc}','{$status_color}') "; 
                 
            $create_status_query = mysqli_query($connection, $query);  
              
            confirmQuery($create_status_query); 
       
       
                 echo "Το Status Δημιουργήθηκε : " . " " . "<a href='view_status.php'>Προβολή Status</a> "; 
       
      
   
   }
    

    
    
?>
      
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Προσθήκη Νέου Status</h1>
                <br><br>
                
                <form action="" method="post" enctype="multipart/form-data">    
                    
                    <div class="form-group">
                        <label for="status_desc">Περιγραφή</label>
                        <input type="text" class="form-control" name="status_desc">
                    </div>

                    <div class="form-group">
                        <label for="status_color">Χρώμα</label>
                        <select name="status_color" class="form-control" id="">
                            <option value="green" style="background-color:green;">Πράσινο</option>
                            <option value="cyan" style="background-color:cyan;">Γαλάζιο</option>
                            <option value="orange" style="background-color:orange;">Πορτοκαλί</option>
                            <option value="red" style="background-color:red;">Κόκκινο</option>
                            <option value="blue" style="background-color:blue;">Μπλε</option>
                            <option value="yellow" style="background-color:yellow;">Κίτρινο</option>
                            <option value="silver" style="background-color:silver;">Ασημένιο</option>
                            <option value="pink" style="background-color:pink;">Ροζ</option>
                            <option value="peru" style="background-color:peru;">Καφέ</option>
                            <option value="orchid" style="background-color:orchid;">Μωβ</option>
                        </select>
                    </div>   

                                             
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="create_status" value="Καταχώρηση">
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