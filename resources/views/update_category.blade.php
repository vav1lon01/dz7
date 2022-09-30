@extends('layot_update_category')
@section('update')
    <h1>Category{{$category->id}}</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/../../public/index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="/../../public/category.php">Category</a></li>
            <li class="breadcrumb-item active" aria-current="page">Category{{$category->id}}</li>
        </ol>
    </nav>
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="{{$category->title}}">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Slug</label>
        <input type="text" class="form-control" id="slug" name="slug"  placeholder="{{$category->slug}}">
    </div>
    <button type="submit" name="submit" class="btn btn-primary" value="Submit">Submit</button>
@endsection
