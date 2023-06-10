@extends('app')
@section('title')
    welcome edit
@endsection
@section('content')
   <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a href="{{route('index')}}" class="btn btn-primary">back</a>
            </div>
        </div>
   </div>
    <form action="{{route('update',$product->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">

            <div class="col-xs-12-sm col-md-12">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" value="{{$product->name}}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12-sm col-md-12">
                <div class="form-group">
                    <label>Detail</label>
                    <textarea  name="detail" value="{{$product->detail}}" class="form-control"></textarea>
                </div>
            </div>
            <div class="col-xs-12-sm col-md-12">
                <div class="form-group">
                    <label>Image</label>
                    <input name="image"type="file" class="form-control">
                    <img src="/images/{{$product->image}}" alt="photo" width="300px">
                </div>
            </div>
            <div class="col-xs-12-sm col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>


        </div>
    </form>
@endsection

