@extends('admin.master')
@section('content')

    <div class="container card " style="margin: 2%;padding: 1%;padding-right: 4%;padding-left: 2%;margin-top: 3%">
        <h1 class="text text-center text-primary">Mahsulotlar ro'yhati</h1>
{{--        <a href="{{route('product.create')}}" class="btn btn-success" style="margin-bottom: 3px;width: 13%">Mahsulot qo'shish</a>--}}

        <table class="table table-bordered table-1">
            <tr align="center">
                <th>#</th>
                <th>Nomi</th>
                <th>Narxi</th>
                <th>Created_at</th>
{{--                <th>Deleted_at</th>--}}
                <th>Amal</th>
            </tr>

            @foreach($product as $p)
            <tr align="center" >
                <td>{{$loop->index+1}}</td>
                <td>{{$p->name}}</td>
                <td>{{$p->price}}</td>
                <td>{{$p->created_at}}</td>
{{--                <td></td>--}}
                <td class="d-flex ">
                    <div class="d-flex align-content-center" >
                        <a href="{{route('product.edit',$p->id)}}" class="btn btn-warning" style="margin-left: 15%">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                            </svg>
                        </a>
                    </div>

{{--                    <form action="{{route('product.destroy',$p->id)}}" method="post">--}}
{{--                        @csrf--}}
{{--                        @method('delete')--}}
{{--                        <button class="btn btn-danger" style="margin-left: 20%">--}}
{{--                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">--}}
{{--                                <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>--}}
{{--                            </svg>--}}
{{--                        </button>--}}
{{--                    </form>--}}

                </td>
            </tr>

            @endforeach

        </table>

    </div>

@endsection
