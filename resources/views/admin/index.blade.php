@extends('admin.master')
@section('content')

<div class="container card" style="margin: 2%;padding: 1%;padding-right: 4%;padding-left: 2%;margin-top: 3%">
    <h1 class="text text-center text-primary">Foydalanuvchilar ro'yhati</h1>

    <table class="table-bordered table border-1">
        <tr align="center">
            <th>#</th>
            <th>Ismi</th>
            <th>Email</th>
            <th>Sana</th>
            <th>Amal</th>
        </tr>

        @foreach($user as $u)
            <tr align="center">
                <td>{{$u->id}}</td>
                <td>{{$u->name}}</td>
                <td>{{$u->email}}</td>
                <td>{{$u->created_at}}</td>
                <td>

                    <div class="d-flex align-content-center">
                        <a href="{{route('userEdit',$u->id)}}" class="btn btn-warning" style="margin-left: 12%">
                            <i class="fas fa-pen" ></i>
                        </a>

                        <form action="">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" style="margin-left: 20%">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </div>

                </td>
            </tr>
        @endforeach

    </table>

</div>

@endsection
