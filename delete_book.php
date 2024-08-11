<?php

    include("db.php");  

    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $query = "DELETE FROM book WHERE id = $id";
        if(mysqli_query($con,$query))
        {
            echo "<script>alert('Book Deleted Successfully..')</script>";
            echo "<script>window.location.href = 'list_books.php'</script>";
        }
    }

?>