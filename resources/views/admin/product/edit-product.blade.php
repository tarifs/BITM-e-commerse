@extends('admin.master')
@section('title','Edit Product')
@section('body')

    <div class="row">
        <div class="col-md-8">
            <br/>
            <div class="well">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="bg-light">Edit Product</h3>
                    </div>
                    <hr/>
                    <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                    <div class="panel-body">
                        <form action="{{route('update-product')}}" method="post" class="form-horizontal" name="editProductForm" enctype="multipart/form-data">
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
                                    <input type="text" class="form-control" name="product_name" value="{{$product->product_name}}">
                                    <input type="hidden" class="form-control" name="product_id" value="{{$product->id}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Product Price</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="product_price" value="{{$product->product_price}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Product Qty</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="product_quantity" value="{{$product->product_quantity}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Product Short Description</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" rows="5" name="short_description">{{$product->short_description}}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Product Long Description</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" rows="3" name="long_description">{{$product->long_description}}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Product Image</label>
                                <div class="col-md-9">
                                    <img src="{{asset($product->product_image)}}">
                                    <input type="file" class="form-control" name="product_image">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3">Publicaiton Status</label>
                                <div class="col-md-9" style="margin:8px 0 0 0;">
                                    <input type="radio" name="publication_status" {{$product->publication_status==1?'checked':''}} value="1"> Pbulished &nbsp;&nbsp;
                                    <input type="radio" name="publication_status" {{$product->publication_status==0?'checked':''}} value="0"> Unbulished
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-9 col-md-offset-3">
                                    <input type="submit" name="btn" class="btn btn-primary btn-block" value="Update Product">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        document.forms['editProductForm'].elements['category_id'].value='{{$product->category_id}}';
        document.forms['editProductForm'].elements['brand_id'].value='{{$product->brand_id}}'
    </script>
@endsection