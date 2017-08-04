<?php include "includes/header.php" ?> 
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Κατηγορίες</h1>
                <br><br>
   

            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Περιγραφή</th>                     
                    </tr>
                </thead>

                <tbody>

                 <?php 
    
                    $query = "SELECT * FROM categories";
                    $select_cat = mysqli_query($connection,$query);  
                    while($row = mysqli_fetch_assoc($select_cat)) {
                        $cat_id              = $row['cat_id'];
                        $cat_desc            = $row['cat_desc'];
                        echo "<tr>";

                        echo "<td>$cat_id </td>";
                        echo "<td>$cat_desc</td>";
                        echo "<td><a href='edit_cat.php?edit_cat={$cat_id}'><img src='images/edit.png'></a></td>";
                        echo "<td><a href='includes/del_cat.php?delete={$cat_id}'><img src='images/delete.png'></a></td>";
                        
                        echo "</tr>";
                    }
                ?>
                </tbody>
            </table>
               
            <a href="add_cat.php" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-plus"></span> Νέα Κατηγορία </a>
          
            
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
