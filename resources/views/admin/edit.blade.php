@extends('admin.master')
@section('content')


    <div class="container card" style="width: 94%;padding: 2%;margin-top: 3%">
        <h1 class="text text-center text-primary">Edit qilish</h1>

        <form action="{{route('userUpdate',$user->id)}}" method="post" enctype="multipart/form-data" >
            @csrf
            @method('GET')

            <div class="mb-3">
                <label for="name" class="form-label" >Foydalanuvchi ismi</label>
                <input type="text" name="name" required value="{{$user->name}}" class="form-control" id="name">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label" >Foydalanuvchi emili</label>
                <input type="text" name="email" required value="{{$user->email}}" class="form-control" id="email">
            </div>

            <button type="submit" class="btn btn-success">Tahrirlash</button>

        </form>

    </div>

@endsection
