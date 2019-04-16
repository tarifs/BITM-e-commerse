@extends('admin.master')
@section('title','Add Category')
@section('body')

    <div class="row">
        <div class="col-md-8">
            <br/>
            <div class="well">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="bg-light">Edit Category</h3>
                    </div>
                    <hr/>
                    <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                    <div class="panel-body">
                        <form action="{{route('update-category')}}" method="post" class="form-horizontal">
                            @csrf
                            <div class="form-group">
                                <label class="control-label col-md-3">Category Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="category_name" value="{{$category->category_name}}">
                                    <input type="hidden" class="form-control" name="id" value="{{$category->id}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Category Description</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" rows="5" name="category_description">{{$category->category_description}}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Publicaiton Status</label>
                                <div class="col-md-9" style="margin:8px 0 0 0;">
                                    <input type="radio" name="publication_status" {{$category->publication_status==1?'checked':''}} value="1"> Pbulished &nbsp;&nbsp;
                                    <input type="radio" name="publication_status" {{$category->publication_status==0?'checked':''}} value="0"> Unbulished
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-9 col-md-offset-3">
                                    <input type="submit" name="btn" class="btn btn-primary btn-block" value="Update Brand">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection