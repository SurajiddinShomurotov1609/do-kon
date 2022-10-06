@extends('admin.master')
@section('content')

    <div class="container card" style="width: 94%;padding: 2%;margin-top: 3%">
        <h1 class="text text-center text-primary">Edit qilish</h1>

        <form action="{{route('product.update',$product->id)}}" method="post" enctype="multipart/form-data" >
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label" >Mahsulot nomi</label>
                <input type="text" name="name" required value="{{$product->name}}" class="form-control" id="name">
            </div>

            <div class="mb-3">
                <label for="name" class="form-label" >Mahsulot narxi</label>
                <input type="text" name="price" required value="{{$product->price}}" class="form-control" id="name">
            </div>

            <button type="submit" class="btn btn-success">Tahrirlash</button>

        </form>

    </div>

@endsection
