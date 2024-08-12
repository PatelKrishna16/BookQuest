<?php

    include("db.php");

    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $query = "SELECT * FROM book WHERE id = '$id'";
        $query_run = mysqli_query($con,$query);
        $result = mysqli_fetch_assoc($query_run);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <title>BookQuest</title>
</head>

<style>
    label
    {
        font-weight: bold;
        font-size: 18px;
    }
    .card 
    {
        background-repeat: no-repeat;
        background-size: cover;
        background: transparent;
        border: 2px solid black;
        backdrop-filter: blur(10px);
        box-shadow: 0 0 30px black;
        border-radius: 20px;
    }
    body
    {
        background-image: url('book.jpg');
        background-size: cover;
        background-repeat: no-repeat;
    }
    .btn
    {
        border-radius: 20px;
    }
</style>


<body>
    <div class="container">
        <div class="card my-5">
            <div class="card-header" style="text-align: center; font-weight: bold; font-size: 40px">
                Update Your Book details here...
            </div>
            <form method="POST">
                <div class="card-body my-3">

                    <div class="form-group">
                        <input type="hidden" name="id" value = "<?php echo $result['id']; ?>">
                    </div>

                    <div class="row">
                        <div class="col">
                            <label>Title</label>
                            <input type="text" id="title" name="title" class="form-control" placeholder="Enter Book Title" value = "<?php echo $result['title']; ?>" required/>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col">
                            <label>Author</label>
                            <input type="text" id="author" name="author" class="form-control" placeholder="Enter Book Author Name" value="<?php echo $result['author']; ?>" required/>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Published Year</label>
                                <input type="number" id="pyear" name="pyear" class="form-control" placeholder="Enter Published Year of Book" value="<?php echo $result['published_year']; ?>" required/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Genre</label>
                                <input type="text" id="genre" name="genre" class="form-control" placeholder="Enter genre of Book" value="<?php echo $result['genre']; ?>" required/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer" style="text-align: center">
                    <input type="submit" name="update" value="Update Book details" class="btn btn-dark my-3 btn-lg" style="width: 30%;"/>
                </div>
            </form>
        </div>
    </div>
</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

</html>

<?php

    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $author = $_POST['author'];
        $pyear = $_POST['pyear'];
        $genre = $_POST['genre'];

        $uquery = "UPDATE book SET title='$title',author='$author',published_year='$pyear',genre='$genre' WHERE id = '$id'"; 
        $udata = mysqli_query($con,$uquery);
        if($udata)
        {
            echo "<script>alert('Details Updated Successfully..')</script>";
            echo "<script>window.location.href = 'list_books.php'</script>";
        }
        else
        {
            echo "<script>alert('Details are not Updated..')</script>";
            echo "<script>window.location.href = 'list_books.php'</script>";
        }
    }

?>s