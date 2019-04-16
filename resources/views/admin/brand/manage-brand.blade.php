@extends('admin.master')
@section('title','Manage Brand')
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
                            <th>Brand Name</th>
                            <th>Brand Description</th>
                            <th>Brand Status</th>
                            <th>Action</th>
                        </tr>
                        @php($i=1)
                        @foreach($brands as $brand)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$brand->brand_name}}</td>
                                <td>{{$brand->brand_description}}</td>
                                <td>{{$brand->publication_status==1?'published':'Unpublished'}}</td>
                                <td>
                                    @if($brand->publication_status==1)
                                        <a href="{{route('unpublised-brand',['id'=>$brand->id])}}" class="btn btn-info">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    @else
                                        <a href="{{route('publised-brand',['id'=>$brand->id])}}" class="btn btn-warning">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    @endif
                                    <a href="{{route('edit-brand',['id'=>$brand->id])}}" class="btn btn-danger">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a onclick="return confirm('are you sure to delete?')" href="{{route('delete-brand',['id'=>$brand->id])}}" class="btn btn-danger">
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