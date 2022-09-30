@extends('layot_category')

@section('category')
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
    @foreach($categories as $catigoty)
        <tr>
            <th scope="row">{{$catigoty->id}}</th>
            <th>{{$catigoty->title}}</th>
            <th>{{$catigoty->slug}}</th>
            <td><a href="/../src/workCategory/updete.php?id={{$catigoty->id}}" class="btn btn-primary">Update</a></td>
            <td><a href="/../src/workCategory/delete.php?id={{$catigoty->id}}" class="btn btn-danger">Delete</a></td>
            <th></th>

        </tr>
    @endforeach
    </tbody>

@endsection