@extends('admin.master')
@section('content')

    <div class="container card " style="margin: 2%;padding: 2%;padding-right: 4%;padding-left: 2%;margin-top: 3%">


        <form action="">
            <div align="center" id="button" >
                <a class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalsotish" id="button1"  onclick="sotish()">Mahsulot sotish</a>
                <a class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalolish" id="button2"  onclick="olish()" style="margin-left: 5%;margin-right: 5%">Mahsulot sotib olish</a>
                <a class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalkochirish" id="button3" onclick="kochirish()" >Mahsulot ko'chirish</a>

            </div>
        </form>





            {{--Mahsulot sotish--}}
        <div class="modal fade bd-example-modal-lg" id="modalsotish" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg card p-2" role="document">
                <div class="modal-content">


                    <form action="{{route('add')}}" method="post" style="display: none" id="sotish">
                        @csrf
                        <h1 class="text text-center text-primary">Mahsulot sotish</h1>

                        <div class="mb-3 d-flex justify-content-end">
                            {{--                <input type="submit" class="btn btn-success" onclick="()" value="Mahsulot qo'shish">--}}
                            {{--                <a href="" class="btn btn-success" onclick="bosildi()">Mahsulot qo'shish</a>--}}
                            {{--                <button class="btn btn-success" onclick="bosildi()">Mahsulot qo'shish</button>--}}
                        </div>




                        <div class="mb-3" style="width: 80%;margin-left: 5% ">
                            <input type="hidden" value="2" name="to" class="form-control">
                            <label for="" class="form-label">Qayerdan </label>
                            <select class="form-select" id="sotish_select"  name="from" style="width: 100%">
                                <option value="">Tanlang</option>
                                @foreach($object as $o)
                                    @if($o->id<=2) @continue @endif
                                    <option value="{{$o->id}}" >{{$o->name}}</option>
                                @endforeach
                            </select>
                        </div>




                        <div class="mb-3" style="width: 80%;margin-left: 5%">
                            <label for="" class="form-label">Mahsulot tanlang</label>
                            <select  class="form-select " id="sotish_select2"  name="product" style="width: 100%">
                                <option value="">Tanlang</option>
                                @foreach($product as $p)
                                    <option value="{{$p->id}}">{{$p->name}}</option>
                                @endforeach
                            </select>
                        </div>



                        <div class="mb-3" style="width: 80%;margin-left: 5%">
                            <label for="c" class="form-label">Mahsulot sonini kiriting</label>
                            <input type="text" name="count" class="form-control" id="c">
                        </div>

                        <div class="mb-3" style="width: 80%;margin-left: 5%">
                            <button type="submit" class="btn btn-success">Saqlash</button>
                        </div>

                    </form>



                </div>
            </div>
        </div>
{{--end Mahsulot sotish--}}








        {{-- Mahsulot sotib olish --}}
        <div class="modal fade bd-example-modal-lg" id="modalolish" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg card p-2" role="document">
                <div class="modal-content">

                    <form action="{{route('olish')}}" method="post" style="display: none" id="olish">

            @csrf
            @method('POST')

            <div class="mb-3 d-flex justify-content-end">
                                <input type="button" class="btn btn-success" onclick="bosildi()" value="Mahsulot qo'shish">
            </div>

            <h1 class="taxt text-center text-primary">Mahsulot sotib olish</h1>

            <div class="mb-3" style="width: 80%;margin-left: 5%">
                <input type="hidden" value="1" name="from" class="form-control">
                <label for="" class="form-label">Qayerga</label>
                <select class="form-select" id="product5"  name="to" style="width: 100%">
                    <option value="">Tanlang</option>

                @foreach($object as $p)
                    @if($p->id<=2) @continue @endif
                        <option value="{{$p->id}}">{{$p->name}}</option>
                    @endforeach
                </select>
            </div>



            <div class="mb-3" style="width: 80%;margin-left: 5%">
                <label for="" class="form-label">Mahsulot tanlang</label>
                <select class="form-select" id="product2"  name="product2" style="width: 100%">
                    <option value="">Tanlang</option>
                @foreach($product as $p)
                        <option value="{{$p->id}}">{{$p->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3" style="width: 80%;margin-left: 5%">
                <label for="4" class="form-label">Mahsulot sonini kiriting</label>
                <input type="text" name="count"  class="form-control" id="4">
            </div>

            <div style="width: 80%;margin-left: 5%;margin-bottom: 2%">
                <h5 id="product_input2" style="display: none" class="text text-center text-primary">Omborga mahsulot nomi va narxini kiriting </h5>
                <input type="text"  id="product_input1" name="product_name" placeholder="Mahsulot nomini kiriting" class="form-control pr" style="display: none;margin-bottom: 2%">
                <input type="text"  id="product_input3" name="product_price" placeholder="Mahsulot narxini kiriting" class="form-control pr" style="display: none">
            </div>
{{--            <div style="width: 80%;margin-left: 5%;margin-bottom: 2%;">--}}
{{--                <input type="text" id="product_input2" name="product_price" placeholder="Mahsulot sonini kiriting" class="form-control" style="display: none">--}}
{{--            </div>--}}

            <div class="mb-3" style="width: 80%;margin-left: 5%">
                <button id="button_olish" onclick="button2()" type="submit" class="btn btn-success">Saqlash</button>
            </div>

        </form>


                </div>
            </div>
        </div>
{{-- end Mahsulot sotib olish --}}










        {{-- Mahsulot ko'chirish  --}}
        <div class="modal fade bd-example-modal-lg" id="modalkochirish" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg card p-2" role="document">
                <div class="modal-content">

                     <form action="{{route('kochirish')}}" method="post" style="display: none" id="kochirish">

            @csrf
            <h1 class="text text-center text-primary">Mahsulot ko'chirish</h1>

            <div class="mb-3" style="width: 80%;margin-left: 5%">
                <label for="" class="form-label">Qayerdan</label>
                <select class="form-select" id="kochirish_select"  name="from" style="width: 100%">
                    <option value="">Tanlang</option>
                @foreach($object as $p)
                        @if($p->id<=2) @continue @endif
                        <option value="{{$p->id}}">{{$p->name}}</option>
                    @endforeach
                </select>
            </div>



            <div class="mb-3" style="width: 80%;margin-left: 5%">
                <label for="" class="form-label">Qayerga</label>
                <select class="form-select" id="kochirish_select2"  name="to" style="width: 100%">
                    <option value="">Tanlang</option>
                @foreach($object as $p)
                        @if($p->id<=2) @continue @endif
                        <option value="{{$p->id}}">{{$p->name}}</option>
                    @endforeach
                </select>
            </div>

{{--            <div class="mb-3" style="width: 80%;margin-left: 5%">--}}
{{--                <label for="3" class="form-label">Mahsulot nomini kiriting</label>--}}
{{--                <input type="text" name="name"  class="form-control" id="3">--}}
{{--            </div>--}}


            <div class="mb-3" style="width: 80%;margin-left: 5%">
                <label for="" class="form-label">Mahsulot tanlang</label>
                <select class="form-select" id="kochirish_select3"  name="product3" style="width: 100%">
                    <option value="">Tanlang</option>
                @foreach($product as $p)
                        <option value="{{$p->id}}">{{$p->name}}</option>
                    @endforeach
                </select>
            </div>


{{--            <div class="mb-3" style="width: 80%;margin-left: 5%">--}}
{{--                <label for="4" class="form-label">Mahsulot narxini kiriting</label>--}}
{{--                <input type="text" name="price"  class="form-control" id="4">--}}
{{--            </div>--}}

            <div class="mb-3" style="width: 80%;margin-left: 5%">
                <label for="4" class="form-label">Mahsulot sonini kiriting</label>
                <input type="text" name="count"  class="form-control" id="4">
            </div>

            <div class="mb-3" style="width: 80%;margin-left: 5%">
                <button type="submit" class="btn btn-success">Saqlash</button>
            </div>

        </form>

                </div>
            </div>
        </div>
        {{-- end Mahsulot ko'chirish  --}}


    </div>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <script>

        let tahlil = @json($tahlil);
        console.log(tahlil);

        $(document).ready(function() {
            $("#sotish_select").change(function () {
                var value = $(this).val();
                var tanlandi=tahlil[value];
                var options='';
                var result = Object.keys(tanlandi).map((key) => [Number(key), tanlandi[key]]);
                // console.log(result);
                var i=0;
                for ( i=0;i<result.length-1;i++){
                    if(result[i][1]['count']>0){
                        options+="<option value='"+result[i][0]+"'>"+result[i][1]['name']+"</option>";
                    }
                }
                // console.log(options);
                $("#sotish_select2").html(options);
            });
        });

        $(document).ready(function() {
            $("#kochirish_select").change(function () {
                var value = $(this).val();
                var tanlandi=tahlil[value];
                var options='';
                var result = Object.keys(tanlandi).map((key) => [Number(key), tanlandi[key]]);
                // console.log(result);
                var i=0;
                for ( i=0;i<result.length-1;i++){
                    if(result[i][1]['count']>0){
                        options+="<option value='"+result[i][0]+"'>"+result[i][1]['name']+"</option>";
                    }
                }
                // console.log(options);
                $("#kochirish_select3").html(options);
            });
        });





        function bosildi(){
            document.getElementById('product_input1').style.display = 'block';
            document.getElementById('product_input2').style.display = 'block';
            document.getElementById('product_input3').style.display = 'block';
        }

        function sotish(){
            document.getElementById('button').style.paddingBottom = '3%';


            document.getElementById('sotish').style.display = 'block';
            document.getElementById('olish').style.display = 'none';
            document.getElementById('kochirish').style.display = 'none';
        }
        function olish(){


            document.getElementById('olish').style.display = 'block';
            document.getElementById('sotish').style.display = 'none';
            document.getElementById('kochirish').style.display = 'none';
        }
        function kochirish(){
            document.getElementById('button').style.paddingBottom = '3%';


            document.getElementById('kochirish').style.display = 'block';
            document.getElementById('olish').style.display = 'none';
            document.getElementById('sotish').style.display = 'none';
        }





        // function button2(){
        //     Swal.fire({
        //         icon: 'success',
        //         title: 'Oops...',
        //         text: 'Something went wrong!',
        //     })

    // }

    </script>

@endsection
