@extends('app')
@section('title')
    welcom index
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1>Laravel CRUD </h1>
            </div>
            <div class="pull-right" style="margin-bottom: 10px">
                <a href="{{url('create')}}" class="btn btn-success">Create New Product</a>
            </div>
        </div>
    </div>
    <br><br><br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>

    @endif



    <table class="table table">
        <tr>
            <th>No</th>
            <th>Image</th>
            <th>Name</th>
            <th>Detail</th>
            <th>Created_at</th>
            <th>Updated_at</th>
            <th width="280px">Action </th>
        </tr>
        @foreach ($products as $product)
        @if ($isLoading)
    <x-skeleton-loader />
  @else
        <tr>
            <td>{{++$i}}</td>
            <td><img src="/images/{{$product->image}}" alt="photo" width="100px"></td>
            <td>{{$product->name}}</td>
            <td>{{$product->detail}}</td>
            <td>{{$product->created_at}}</td>
            <td>{{$product->updated_at}}</td>
            <td>
                <form action="{{route('destroy',$product->id)}}" method="POST">
                    @csrf
                    <a href="{{route('show',$product->id)}}" class="btn btn-info">Show</a>
                    <a href="{{route('edit',$product->id)}}" class="btn btn-primary">Edit</a>
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>

        @endif
        @endforeach
    </table>
    {!! $products->links() !!}
@endsection
