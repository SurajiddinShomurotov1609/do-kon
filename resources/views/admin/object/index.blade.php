@extends('admin.master')
@section('content')

    <div class="container card" style="margin: 2%;padding: 1%;padding-right: 4%;padding-left: 2%;margin-top: 3%">
        <h1 class="text text-center text-primary">Do'konlar jadvali</h1>
        <div>

        </div>
        <table class="table table-bordered border-1">
            <tr align="center">
                <th>#</th>
                <th>Nomi</th>
                <th>Manzil</th>
                <th>Sana</th>
                <th>Amal</th>
            </tr>

            @foreach($object as $o)
                <tr align="center">
                    <td>{{$o->id}}</td>
                    <td>{{$o->name}}</td>
                    <td>{{$o->location}}</td>
                    <td>{{$o->created_at}}</td>
                    <td>
                        <div class="d-flex align-content-center" >
                            <a href="{{route('object.edit',$o->id)}}" class="btn btn-warning" style="margin-left: 15%">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                                </svg>
                            </a>
                        </div>
                    </td>
                </tr>

            @endforeach

        </table>
    </div>

@endsection
