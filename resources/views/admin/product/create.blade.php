@extends('admin.master')
@section('content')

    <div class="container">
        <h1 class="text text-primary text-center">Mahsulot qo'shish</h1>

        <form action="" enctype="multipart/form-data" method="post">

            <div class="mb-3" >
                <label for="name" class="form-label" >Mahsulot nomini kiriting</label>
                <input type="text" name="name" required class="form-control" id="name"  >
            </div>

            <div class="mb-3" >
                <label for="narx" class="form-label" >Mahsulot narxini kiriting</label>
                <input type="text" name="narx" required class="form-control" id="narx"  >
            </div>

            <button type="submit" class="btn btn-success">Mahsulot qo'shish</button>

        </form>

    </div>

@endsection
