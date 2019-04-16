@extends('admin.master')
@section('title','Add Brand')
@section('body')

    <div class="row">
        <div class="col-md-8">
            <br/>
            <div class="well">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="bg-light">Add Brand</h3>
                    </div>
                    <hr/>
                    <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                    <div class="panel-body">
                        <form action="{{route('new-brand')}}" method="post" class="form-horizontal">
                            @csrf
                            <div class="form-group">
                                <label class="control-label col-md-3">Brand Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="brand_name">
                                    <span>{{$errors->has('brand_name')?$errors->first('brand_name'):''}}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Brand Description</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" rows="5" name="brand_description"></textarea>
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
                                    <input type="submit" name="btn" class="btn btn-primary btn-block" value="Add new Brand">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection