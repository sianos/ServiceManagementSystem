<?php ob_start(); ?>
<?php include "db.php"; ?>
<?php include "functions.php"; ?>

<?php            

    if(isset($_GET['delete'])){
        
            $the_serv_id = escape($_GET['delete']);
            $query = "DELETE FROM service WHERE serv_id = {$the_serv_id} ";
            $delete_serv_query = mysqli_query($connection, $query);
            header("Location: ../view_open_serv.php");


    }   

?> 