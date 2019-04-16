@extends('admin.master')
@section('title','Arrange Category')
@section('body')
    <div class="row">
    <div class="col-md-12">
    <div class="panel">
        <div class="panel-heading">
            <h4 class="text-center text-success">{{Session::get('message')}}</h4>
        </div>
        <div class="panel-body">
            <table class="table table-bordered">
                <tr>
                    <th>Sl No.</th>
                    <th>Category Name</th>
                    <th>Category Description</th>
                    <th>Category Status</th>
                    <th>Action</th>
                </tr>
                @php($i=1)
                @foreach($categories as $category)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$category->category_name}}</td>
                    <td>{{$category->category_description}}</td>
                    <td>{{$category->publication_status==1?'published':'Unpublished'}}</td>
                    <td>
                        @if($category->publication_status==1)
                        <a href="{{route('unpublised-category',['id'=>$category->id])}}" class="btn btn-info">
                            <span class="glyphicon glyphicon-arrow-up"></span>
                        </a>
                        @else
                        <a href="{{route('publised-category',['id'=>$category->id])}}" class="btn btn-warning">
                            <span class="glyphicon glyphicon-arrow-down"></span>
                        </a>
                        @endif
                        <a href="{{route('edit-category',['id'=>$category->id])}}" class="btn btn-danger">
                            <span class="glyphicon glyphicon-edit"></span>
                        </a>
                        <a onclick="return confirm('are you sure to delete?')" href="{{route('delete-category',['id'=>$category->id])}}" class="btn btn-danger">
                            <span class="glyphicon glyphicon-trash"></span>
                        </a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    </div>
    </div>
@endsection