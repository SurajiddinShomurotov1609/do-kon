@extends('admin.master')
@section('content')


<div class="container card" style="margin: 2%;padding: 1%;padding-right: 4%;padding-left: 2%;margin-top: 3%">
    <h1 class="text-primary text text-center">Shukrona  hisobot jadvali</h1>

    <table class="table table-bordered border-1">
        <tr align="center">
            <th>#</th>
            <th>Do'kon nomi</th>
            <th>Mahsulot nomi</th>
            <th>Mahsulot soni</th>
            <th>Mahsulot narxi</th>
            <th>Umumiy narxi</th>
        </tr>



        @for($i=1; $i<count($shop1); $i++)
        <tr align="center">
            <td>{{$i}}</td>
            <td>{{$shop1[0]}}</td>
            <td>{{$shop1[$i]}}</td>
            <td>{{$array1[$i-1]}}</td>
            <td>{{number_format($price[$i-1],0,' ',' ')}}</td>
            <td>{{number_format($array1[$i-1] * $price[$i-1],0,' ',' ')}}</td>
        </tr>
            @endfor

        <tr align="center">
            <td></td>
            <td>Qolgan mahsulotlar hisoboti</td>
            <td></td>
            <td>Umumiy soni: {{number_format($um_son1,0,' ',' ')}}</td>
            <td></td>
            <td>Umumiy narx: {{number_format($um_summ1,0,' ',' ')}}</td>
        </tr>
        <tr align="center">
            <td></td>
            <td>Sotilgan mahsulotlar hisoboti</td>
            <td></td>
            <td>Umumiy soni: {{number_format($son1,0,' ',' ')}}</td>
            <td></td>
            <td>Umumiy narx: {{number_format($pul1,0,' ',' ')}}</td>
        </tr>


{{--        @for($i=1; $i<count($shop2); $i++)--}}
{{--            <tr align="center">--}}
{{--                <td>{{$i+count($shop2)-1}}</td>--}}
{{--                <td>{{$shop2[0]}}</td>--}}
{{--                <td>{{$shop2[$i]}}</td>--}}
{{--                <td>{{$array2[$i-1]}}</td>--}}
{{--                <td>{{number_format($price[$i-1],0,' ',' ')}}</td>--}}
{{--                <td>{{number_format($array2[$i-1] * $price[$i-1],0,' ',' ')}}</td>--}}
{{--            </tr>--}}
{{--        @endfor--}}

    </table>



    <h1 class="text-primary text text-center">Omborxona  hisobot jadvali</h1>

    <table class="table table-bordered border-1">
        <tr align="center">
            <th>#</th>
            <th>Do'kon nomi</th>
            <th>Mahsulot nomi</th>
            <th>Mahsulot soni</th>
            <th>Mahsulot narxi</th>
            <th>Umumiy narxi</th>
        </tr>

        @for($i=1; $i<count($shop2); $i++)
{{--            @if($array2[$i-1]>0)--}}
            <tr align="center">
                <td>{{$i}}</td>
                <td>{{$shop2[0]}}</td>
                <td>{{$shop2[$i]}}</td>
                <td>{{$array2[$i-1]}}</td>
                <td>{{number_format($price[$i-1],0,' ',' ')}}</td>
                <td>{{number_format($array2[$i-1] * $price[$i-1],0,' ',' ')}}</td>
            </tr>
{{--            @endif--}}
        @endfor


        <tr align="center">
            <td></td>
            <td>Qolgan mahsulotlar hisoboti</td>
            <td></td>
            <td>Umumiy soni: {{number_format($um_son2,0,' ',' ')}}</td>
            <td></td>
            <td>Umumiy narx: {{number_format($um_summ2,0,' ',' ')}}</td>
        </tr>
        <tr align="center">
            <td></td>
            <td>Sotilgan mahsulotlar hisoboti</td>
            <td></td>
            <td>Umumiy soni: {{number_format($son2,0,' ',' ')}}</td>
            <td></td>
            <td>Umumiy narx: {{number_format($pul2,0,' ',' ')}}</td>
        </tr>


    </table>

</div>




@endsection

