<?php include "includes/header.php" ?> 
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Status</h1>
                <br><br>
   

            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Περιγραφή</th> 
                        <th>Χρώμα</th>                  
                    </tr>
                </thead>

                <tbody>

                 <?php 
    
                    $query = "SELECT * FROM service_status";
                    $select_status = mysqli_query($connection,$query);  
                    while($row = mysqli_fetch_assoc($select_status)) {
                        $status_id           = $row['status_id'];
                        $status_desc         = $row['status_desc'];
                        $status_color        = $row['status_color'];
                        echo "<tr>";

                        echo "<td>$status_id </td>";
                        echo "<td>$status_desc</td>";
                        echo "<td style='background-color:$status_color;'></td>";
                        echo "<td><a href='edit_cat.php?edit_cat={$status_id}'><img src='images/edit.png'></a></td>";
                        echo "<td><a href='includes/del_cat.php?delete={$status_id}'><img src='images/delete.png'></a></td>";
                        
                        echo "</tr>";
                    }
                ?>
                </tbody>
            </table>
               
            <a href="add_status.php" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-plus"></span> Νέο Status </a>
          
            
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>