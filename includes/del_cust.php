<?php ob_start(); ?>
<?php include "db.php"; ?>
<?php include "functions.php"; ?>

<?php            

    if(isset($_GET['delete'])){
        
            $the_cust_id = escape($_GET['delete']);
            $query = "DELETE FROM customers WHERE cust_id = {$the_cust_id} ";
            $delete_cust_query = mysqli_query($connection, $query);
            header("Location: ../view_cust.php");


    }   

?> 