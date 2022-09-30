<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
<form method="post">
    <h1>Add Tag</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/../../public/index.php">Home</a></li>
        <li class="breadcrumb-item"><a href="/../../public/tag.php">Tags</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add Tag</li>
    </ol>
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Slug</label>
        <input type="text" class="form-control" id="slug" name="slug"  placeholder="">
    </div>
    <button type="submit" name="submit" class="btn btn-primary" value="Submit">Submit</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>
