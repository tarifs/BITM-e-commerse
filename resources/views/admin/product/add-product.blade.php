@extends('admin.master')
@section('title','Add Product')
@section('body')

    <div class="row">
        <div class="col-md-8">
            <br/>
            <div class="well">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="bg-light">Add Product</h3>
                    </div>
                    <hr/>
                    <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                    <div class="panel-body">
                        <form action="{{route('new-product')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="control-label col-md-3">Category Name</label>
                                <div class="col-md-9">
                                    <select class="form-control" name="category_id">
                                        <option>--select category</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Brand Name</label>
                                <div class="col-md-9">
                                    <select class="form-control" name="brand_id">
                                        <option>--select Brand</option>
                                        @foreach($brands as $brand)
                                            <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Product Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="product_name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Product Price</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="product_price">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Product Qty</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="product_quantity">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Product Short Description</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" rows="5" name="short_description"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Product Long Description</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" rows="3" name="long_description"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Product Image</label>
                                <div class="col-md-9">
                                    <input type="file" class="form-control" name="product_image">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3">Publicaiton Status</label>
                                <div class="col-md-9" style="margin:8px 0 0 0;">
                                    <input type="radio" name="publication_status" value="1"> Pbulished &nbsp;&nbsp;
                                    <input type="radio" name="publication_status" value="0"> Unbulished
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-9 col-md-offset-3">
                                    <input type="submit" name="btn" class="btn btn-primary btn-block" value="Add new Product">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection