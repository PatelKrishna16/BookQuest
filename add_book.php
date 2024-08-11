<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
        background-image: url('xy.jpg');
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
                Add New Book here...
            </div>
            <form method="POST">
                <div class="card-body my-3">
                    <div class="row">
                        <div class="col">
                            <label>Title</label>
                            <input type="text" id="title" name="title" class="form-control" placeholder="Enter Book Title" value="<?php if(isset($_POST['title'])){ echo $_POST['title'];} ?>" required/>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col">
                            <label>Author</label>
                            <input type="text" id="author" name="author" class="form-control" placeholder="Enter Book Author Name" value="<?php if(isset($_POST['author'])){ echo $_POST['author'];} ?>" required/>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Published Year</label>
                                <input type="text" id="pyear" name="pyear" class="form-control" placeholder="Enter Published Year of Book" value="<?php if(isset($_POST['pyear'])){ echo $_POST['pyear'];} ?>" required/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Genre</label>
                                <input type="text" id="genre" name="genre" class="form-control" placeholder="Enter genre of Book" value="<?php if(isset($_POST['genre'])){ echo $_POST['genre'];} ?>" required/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer" style="text-align: center">
                    <input type="submit" name="add" value="Add Book" class="btn btn-dark my-3 btn-lg" style="width: 30%;"/>
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

    include("db.php");

    if(isset($_POST['add']))
    {
        $title = trim($_POST['title']);
        $author = trim($_POST['author']);
        $pyear = trim($_POST['pyear']);
        $genre = trim($_POST['genre']);

        if(empty($title))
        {
            $error = "Please Enter Book Title";
            $code = 1;
        }
        else if(empty($author))
        {
            $error = "Please Enter Book Author Name";
            $code = 2;
        }
        else if(empty($genre))
        {
            $error = "Please Enter Book Genre";
            $code = 3;
        }
        else if(empty($pyear))
        {
            $error = "Please Enter Book Published Year";
            $code = 4;
        }
        else if(!is_numeric($pyear))
        {
            $error = "Please Enter Valid Published Year";
            $code = 4;
        }
        else
        {
            $query = "INSERT INTO book(title,author,published_year,genre) VALUES('$title','$author','$pyear','$genre')";
            $result = mysqli_query($con,$query);
            if($result)
            {
                echo "<script>alert('Book Added Successfully..')</script>";
                echo "<script>window.location.href = 'list_books.php'</script>";
            }
            else
            {
                echo "<script>alert('Book Not Added..')</script>";
            }
        }
    }

?>