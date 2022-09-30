@extends('layout_tag')

@section('tag')
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Title</th>
        <th scope="col">Slug</th>
        <th scope="col">Update</th>
        <th scope="col">Delete</th>
    </tr>
    </thead>
    <tbody>
    @foreach($tags as $tag)
        <tr>
            <th scope="row">{{$tag->id}}</th>
            <th>{{$tag->title}}</th>
            <th>{{$tag->slug}}</th>
            <th><a href="/../src/workTag/update.php?id={{$tag->id}}" class="btn btn-primary">Update</a></th>
            <th><a href="/../src/workTag/delete.php?id={{$tag->id}}" class="btn btn-danger">Delete</a></th>
            <th></th>

        </tr>
    @endforeach
    </tbody>
@endsection