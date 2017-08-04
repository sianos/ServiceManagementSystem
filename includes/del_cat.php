<?php ob_start(); ?>
<?php include "db.php"; ?>
<?php include "functions.php"; ?>

<?php            

    if(isset($_GET['delete'])){
        
            $the_cat_id = escape($_GET['delete']);
            $query = "DELETE FROM categories WHERE cat_id = {$the_cat_id} ";
            $delete_cat_query = mysqli_query($connection, $query);
            header("Location: ../view_cat.php");


    }   

?> 