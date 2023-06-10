@extends('app')
@section('title')
    welcome Create
@endsection
@section('content')
<div class="row">
    <div class="col-lg margin-tb">
        <div class="pull-left">
            <h1>Add New Product</h1>
        </div>
        <div class="pull-right">
            <a href="{{url('/')}}" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops</strong>there were some with your input <br><br>
    </div>
    <ul>
        @foreach ($errors->all() as $error)
           <li class="alert alert-danger">{{ $error }}</li>
            
        @endforeach
    </ul>
    
@endif


<form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label  class="form-label">Name</label>
        <input type="text" class="form-control" name="name" placeholder="name">
      </div>
      <div class="mb-3">
        <label class="form-label">Detail</label>
        <textarea class="form-control" name="detail" rows="3" placeholder="detail"></textarea>
      </div>
      <div class="mb-3">
        <label class="form-label">Created_at</label>
        <input type="date" name="created_at" class="form-control">
      </div>
      <div class="mb-3">
        <label class="form-label">Image</label>
        <input type="file" name="image" class="form-control">
      </div>
      <div class="mb-3">
        
        <button type="submit" class="btn btn-primary" class="form-control">submit</button>
      </div>
</form>
@endsection