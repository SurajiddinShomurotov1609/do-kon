@extends('admin.master')
@section('content')
    <div class="container card" style="margin: 2%;padding: 1%;padding-right: 4%;padding-left: 2%;margin-top: 3%">


        <h1 class="text text-primary text-center">Tarix jadvali</h1>



        <table class="table table-bordered border-1" id="table">
            <thead>
            <tr align="center">
                <th>#</th>
                <th>Amal</th>
                <th>Xodim ismi</th>
                <th>From</th>
                <th>To</th>
                <th>Product_id</th>
                <th>Mahsulot narxi</th>
                <th>Mahsulot soni</th>
                <th>Sana</th>
            </tr>
            </thead>

            <tbody>
            @foreach($history as $h)
                <tr align="center">
                    <td>{{$h->id}}</td>
                    <td>{{$h->amal}}</td>
                    <td>{{$h->user_id}}</td>
                    <td>{{$h->from}}</td>
                    <td>{{$h->to}}</td>
                    <td>{{$h->product_id}}</td>
                    <td>{{number_format($h->price,0,' ',' ')}}</td>
                    <td>{{$h->count}}</td>
                    <td>{{$h->created_at}}</td>
                </tr>

            @endforeach
            </tbody>

        </table>

    </div>

    <script>
        $(document).ready(function() {
            $('#table').DataTable()
        } );
    </script>


@endsection
