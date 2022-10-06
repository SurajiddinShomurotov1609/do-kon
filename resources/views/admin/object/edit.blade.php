@extends('admin.master')
@section('content')

    <div class="container card" style="width: 94%;padding: 2%;margin-top: 3%">
        <h1 class="text text-primary text-primary text-center">Edit qilish</h1>

        <form action="{{route('object.update',$object->id)}}" enctype="multipart/form-data"  method="post">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label" >Mahsulot nomi</label>
                <input type="text" name="name" required value="{{$object->name}}" class="form-control" id="name">
            </div>

            <div class="mb-3">
                <label for="name" class="form-label" >Manzil</label>
                <input type="text" name="location" required value="{{$object->location}}" class="form-control" id="name">
            </div>

            <button class="btn btn-success" type="submit">Tahrirlash</button>

        </form>

    </div>

@endsection
