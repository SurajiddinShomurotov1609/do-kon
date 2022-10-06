@extends('admin.master')
@section('content')

    <!-- Large modal -->
{{--Modal create--}}
    <div class="modal fade bd-example-modal-lg" id="modal_create" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="{{route('modal.store')}}" method="post">
                    @csrf
                    <h4 class="text text-primary text-center">Yaratish</h4>

                    <label for="name" class="mb-2 mt-3">Name kiriting</label>
                    <input type="text" name="name" id="name" class="form-control mb-5">
                    <label for="lastname" class="">Lastname kiriting</label>
                    <input type="text" name="lastname" id="lastname" class="form-control mb-5">
                    <label for="email" class="">Email kiriting</label>
                    <input type="text" name="email" id="eamil" class="form-control ">

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>




{{--    Modal etdit--}}
    <div class="modal fade bd-example-modal-lg" id="modal_edit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="{{route('modal.update',1)}}" method="post">
                    <h4 class="text text-primary text-center">Tahrirlash</h4>
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id_edit" id="id_edit">
                    <label for="name" class="mb-2 mt-3">Name </label>

                    <input type="text" name="name" id="edit_name" class="form-control mb-5">
                    <label for="lastname" class="">Lastname </label>
{{--                    <input type="hidden" name="lastname_edit" id="lastname_adit">--}}
                    <input type="text" name="lastname" id="edit_lastname" class="form-control mb-5">
                    <label for="email" class="">Email </label>
{{--                    <input type="hidden" name="email_edit" id="email_edit">--}}
                    <input type="text" name="email" id="edit_eamil" class="form-control ">

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>




    <div class="container card" style="margin: 2%;padding: 1%;padding-right: 4%;padding-left: 2%;margin-top: 3%">

        <h1 class="text text-primary text-center">Modal</h1>

{{--        //modal button--}}
        <div>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_create">Yaratish</button>

        </div>

        <table class="table table-bordered border-1">
            <tr align="center">
                <th>#</th>
                <th>Name</th>
                <th>Last name</th>
                <th>Email</th>
                <th>Amal</th>
            </tr>

            @foreach($modal as $h)
                <tr align="center">
                    <td>{{$loop->index+1}}</td>
                    <td>{{$h->name}}</td>
                    <td>{{$h->lastname}}</td>
                    <td>{{$h->email}}</td>
                    <td class="d-flex">

                        <button onclick="edit({{$h->id}})" type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modal_edit"><i class="fas fa-pen"></i></button>
                        <form action="{{route('modal.destroy',$h->id)}}" method="post">
                            @csrf
                            @method('delete')
                        <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </table>

    </div>

    <script>
        let all = @json($all);
        function edit(id){
            document.getElementById('id_edit').value = id;
            document.getElementById('edit_name').value = all[id]['name'];
            document.getElementById('edit_lastname').value = all[id]['lastname'];
            document.getElementById('edit_eamil').value = all[id]['email'];
        }
    </script>

@endsection
