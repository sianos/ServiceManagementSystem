<?php include "includes/header.php" ?> 
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Μηχανήματα</h1>
                <br><br>
   

            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Κατηγορία</th>
                        <th>Πελάτης</th>
                        <th>Περιγραφή</th>
                        <th>S/N</th>


                    </tr>
                </thead>

                <tbody>

                 <?php 
    
                    $query = "SELECT * FROM items";
                    $select_item = mysqli_query($connection,$query);  
                    while($row = mysqli_fetch_assoc($select_item)) {
                        $item_id             = $row['item_id'];
                        $cat_id              = $row['cat_id'];
                        $cust_id             = $row['cust_id'];
                        $item_desc           = $row['item_desc'];
                        $item_sn             = $row['item_sn'];
                        $item_notes          = $row['item_notes'];

                        echo "<tr>";

                        echo "<td>$item_id </td>";

                        $query = "SELECT * FROM categories WHERE cat_id = {$cat_id} ";
                        $select_categories_id = mysqli_query($connection,$query);  

                        while($row = mysqli_fetch_assoc($select_categories_id)) {
                        $cat_id = $row['cat_id'];
                        $cat_desc = $row['cat_desc'];

                        echo "<td>$cat_desc</td>";

                        }                        
 
                        $query = "SELECT * FROM customers WHERE cust_id = {$cust_id} ";
                        $select_cust_id = mysqli_query($connection,$query);  

                        while($row = mysqli_fetch_assoc($select_cust_id)) {
                        $cust_id = $row['cust_id'];
                        $cust_name = $row['cust_name'];

                        echo "<td>$cust_name</td>";

                        }                           
                        
                        echo "<td>$item_desc</td>";
                        echo "<td>$item_sn</td>";
                        echo "<td><a href='edit_item.php?edit_edit={$item_id}'><img src='images/edit.png'></a></td>";
                        echo "<td><a href='includes/del_item.php?delete={$item_id}'><img src='images/delete.png'></a></td>";
                        echo "<td><a href='includes/del_cat.php?delete={$cat_id}'><img src='images/service.png'></a></td>";
                        
                        echo "</tr>";
                    }
                ?>
                </tbody>
            </table>
               
            <a href="add_item.php" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-plus"></span> Νέο Μηχάνημα </a>
          
            
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>