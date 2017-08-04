<?php include "includes/header.php" ?> 
   
   
<?php
   

   if(isset($_POST['create_cust'])) {
       
            
            $cust_name         = escape($_POST['cust_name']);
            $cust_addr         = escape($_POST['cust_addr']);
            $cust_tel          = escape($_POST['cust_tel']);
            $cust_mob          = escape($_POST['cust_mob']);
            $cust_email        = escape($_POST['cust_email']);
            $cust_notes        = escape($_POST['cust_notes']);

 
              
            $query = "INSERT INTO customers(cust_name, cust_addr, cust_tel, cust_mob, cust_email, cust_notes) ";
                 
            $query .= "VALUES('{$cust_name}','{$cust_addr}','{$cust_tel}','{$cust_mob}','{$cust_email}', '{$cust_notes}') "; 
                 
            $create_cust_query = mysqli_query($connection, $query);  
              
            confirmQuery($create_cust_query); 
       
       
                 echo "Ο πελάτης Δημιουργήθηκε : " . " " . "<a href='view_cust.php'>Προβολή Πελατών</a> "; 
       
      
   
   }
    

    
    
?>
      
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Προσθήκη Νέου Πελάτη</h1>
                <br><br>
                
                <form action="" method="post" enctype="multipart/form-data">    
                    
                    <div class="form-group">
                        <label for="title">Όνομα</label>
                        <input type="text" class="form-control" name="cust_name">
                    </div>
                    
                    <div class="form-group">
                        <label for="post_tags">Διεύθυνση</label>
                        <input type="text" class="form-control" name="cust_addr">
                    </div>
                    
                    <div class="form-group">
                        <label for="post_tags">Τηλέφωνο</label>
                        <input type="text" class="form-control" name="cust_tel">
                    </div>
                    
                    <div class="form-group">
                        <label for="post_tags">Κινητό</label>
                        <input type="text" class="form-control" name="cust_mob">
                    </div>                                                            
      
                    <div class="form-group">
                        <label for="post_content">Email</label>
                        <input type="email" class="form-control" name="cust_email">
                    </div>
      
                    <div class="form-group">
                        <label for="post_content">Σημειώσεις</label>
                        <textarea class="form-control "name="cust_notes" id="" cols="30" rows="10">
                        </textarea>
                    </div>
      
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="create_cust" value="Καταχώρηση">
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
