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
                            <th>Product Name</th>
                            <th>Brand Name</th>
                            <th>Category Name</th>
                            <th>Product Price</th>
                            <th>Product Quantity</th>
                            <th>Product Short Description</th>
                            <th>Product Image</th>
                            <th>Product Status</th>
                            <th>Action</th>
                        </tr>
                        @php($i=1)
                        @foreach($products as $product)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$product->product_name}}</td>
                                <td>{{$product->brand_name}}</td>
                                <td>{{$product->category_name}}</td>
                                <td>{{$product->product_price}}</td>
                                <td>{{$product->product_quantity}}</td>
                                <td>{{$product->short_description}}</td>
                                <td><img src="{{asset($product->product_image)}}" width="50" height="50" /></td>
                                <td>{{$product->publication_status==1?'published':'Unpublished'}}</td>
                                <td>
                                    @if($product->publication_status==1)
                                        <a href="{{route('unpublised-product',['id'=>$product->id])}}" class="btn btn-info">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    @else
                                        <a href="{{route('publised-product',['id'=>$product->id])}}" class="btn btn-warning">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    @endif
                                    <a href="{{route('edit-product',['id'=>$product->id])}}" class="btn btn-danger">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a onclick="return confirm('are you sure to delete?')" href="{{route('delete-product',['id'=>$product->id])}}" class="btn btn-danger">
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