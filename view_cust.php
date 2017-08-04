<?php include "includes/header.php" ?> 
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Πελάτες</h1>
                <br><br>
   

            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Όνομα</th>
                        <th>Τηλέφωνο</th>
                        <th>Κινητό</th>


                    </tr>
                </thead>

                <tbody>

                 <?php 
    
                    $query = "SELECT * FROM customers";
                    $select_cust = mysqli_query($connection,$query);  
                    while($row = mysqli_fetch_assoc($select_cust)) {
                        $cust_id             = $row['cust_id'];
                        $cust_name           = $row['cust_name'];
                        $cust_tel            = $row['cust_tel'];
                        $cust_mob            = $row['cust_mob'];


                        echo "<tr>";

                        echo "<td>$cust_id </td>";
                        echo "<td>$cust_name</td>";
                        echo "<td>$cust_tel</td>";
                        echo "<td>$cust_mob</td>";
                        echo "<td><a href='edit_cust.php?edit_cust={$cust_id}'><img src='images/edit.png'></a></td>";
                        echo "<td><a href='includes/del_cust.php?delete={$cust_id}'><img src='images/delete.png'></a></td>";
                        
                        echo "</tr>";
                    }
                ?>
                </tbody>
            </table>
               
            <a href="add_cust.php" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-plus"></span> Νέος Πελάτης </a>
          
            
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
