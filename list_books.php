<?php

    include("db.php");

    $query = "SELECT * FROM book";
    $query_run = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.3/css/dataTables.dataTables.min.css">   
    <title>BookQuest</title>
</head>

<body>
    <div class="container my-4">
        
        <h3 style="text-align: center;font-weight: bold;font-size: 50px;">List of Books</h3>

        <div class="d-flex justify-content-center my-3">
            <a href="add_book.php" class="btn btn-dark btn-lg" style="width: 30%;">Add New Book <i class="bi bi-plus-circle ms-2"></i></a>
        </div>

        <table class="table table-striped table-hover my-4">
            <tr style="text-align: center;">
                <th>Title</th>
                <th>Author</th>
                <th>Published Year</th>
                <th>Genre</th>
                <th>Action</th>
            </tr>
            <?php
                while($row = mysqli_fetch_assoc($query_run))
                {
                    ?>
                        <tr style="text-align: center;">
                            <td><?php echo $row['title']; ?></td>
                            <td><?php echo $row['author']; ?></td>
                            <td><?php echo $row['published_year']; ?></td>
                            <td><?php echo $row['genre']; ?></td>
                            <td>
                                <a href="delete_book.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" data-toggle="tooltip" title="Delete"><i class="bi bi-trash3"></i></a>&nbsp
                                <a href="edit_book.php?id=<?php echo $row['id']; ?>" class="btn btn-secondary" data-toggle="tooltip" title="Edit"><i class="bi bi-pencil-square"></i></a>
                            </td>
                        </tr>
                    <?php
                }
            ?>
        </table>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>