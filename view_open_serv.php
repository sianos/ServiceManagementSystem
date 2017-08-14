<?php include "includes/header.php" ?> 
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Εκκρεμείς Βλάβες</h1>
                <br><br>
   

            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Μηχάνημα</th>
                        <th>Πελάτης</th>
                        <th>Status</th>
                        <th>Ημερ. Εισόδου</th>

                    </tr>
                </thead>

                <tbody>

                 <?php 
    
                    $query = "SELECT * FROM service WHERE serv_status!='8' ORDER BY date_in";
                    $select_serv = mysqli_query($connection,$query);  
                    while($row = mysqli_fetch_assoc($select_serv)) {
                        $serv_id             = $row['serv_id'];
                        $item_id             = $row['item_id'];
                        $date_in             = date("d-m-Y", strtotime($row['date_in']));
                        $serv_status         = $row['serv_status'];

                        echo "<tr>";

                        echo "<td>$serv_id </td>";
                        
                        
                        $query = "SELECT * FROM items WHERE item_id={$item_id}";
                        $select_item = mysqli_query($connection,$query); 
                        while ($row = mysqli_fetch_assoc($select_item)) {
                            $item_desc=$row['item_desc'];
                            $cust_id=$row['cust_id'];
                            echo "<td>$item_desc </td>";
                            $query = "SELECT * FROM customers WHERE cust_id={$cust_id}";
                            $select_cust = mysqli_query($connection,$query);
                            while ($row = mysqli_fetch_assoc($select_cust)) {
                                $cust_name=$row['cust_name']; 
                                echo "<td>$cust_name </td>";
                            }
                            
                        }
                        
                        
                        $query = "SELECT * FROM service_status WHERE status_id={$serv_status}";
                        $select_status = mysqli_query($connection,$query); 
                        while ($row = mysqli_fetch_assoc($select_status)) {
                            $status_desc = $row['status_desc'];
                            $status_color=$row['status_color'];
                            
                            echo "<td style='background-color:$status_color;'>$status_desc</td>";
                        }
                        
                        echo "<td>$date_in</td>";
                        echo "<td><a href='edit_serv.php?edit_serv={$serv_id}'><img src='images/edit.png'></a></td>";
                        echo "<td><a href='includes/del_serv.php?delete={$serv_id}'><img src='images/delete.png'></a></td>";
                        
                        echo "</tr>";
                    }
                ?>
                </tbody>
            </table>
               
            <a href="add_serv.php" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-plus"></span> Νέα Επισκευή </a>
          
            
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
