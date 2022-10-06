<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\Objects;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use function GuzzleHttp\Promise\all;


class AmalController extends Controller
{

    public function amal()
    {
        $tahlil = [];


        $ob = Objects::all();
        foreach ($ob as $object) {
           $tahlil[$object->id] = [];
           $tahlil[$object->id]['data']['name'] = $object->name;
        }


        $product = Products::all();
        for($i = 0; $i<count($tahlil); $i++){
            foreach ($product as $item) {
                $a = [];
                $a['count'] = 0;
                $a['name'] = $item->name;
                $tahlil[$i][$item->id] = $a;
            }
        }

        $data = History::all();
        foreach ( $data as $d) {
            if($d->from ==1){
                $tahlil[$d->to][$d->product_id]['count']+=$d->count;
            }
            elseif ($d->to==2){
                $tahlil[$d->from][$d->product_id]['count']-=$d->count;
            }
            else{
                $tahlil[$d->from][$d->product_id]['count']-=$d->count;
                $tahlil[$d->to][$d->product_id]['count']+=$d->count;
            }
        }


        $tahlil = (object)$tahlil;
        Session::put('$tahlil');
        return view('admin.amal.index', [
            'product' => $product,
            'object' => $ob,
            'tahlil'=>$tahlil
        ]);
    }

    public function add(Request $request)
    {
        $prId = 0;
        if ($request->product_name != 0) {
            $pr = new Products();
            $pr->name = $request->product_name;
            $pr->price = $request->product_price;
            $pr->save();
            $prId = $pr->id;
            return redirect()->route('product.index');
        } else {
            $prId = $request->product;
            $his = new History();
            $his->from = $request->from;
            $his->to = $request->to;
            $p = $request->product;
            $c = Products::find($p);
            $his->product_id = $prId;
            $his->price = $c->price * $request->count;
            $his->count = $request->count;
            $his->user_id = auth()->user()->name;
            $his->amal = 'Sotildi';
            $his->save();
            return redirect()->route('history.index');
        }

    }

    public function olish(Request $request)
    {
        if ($request->product_name != 0) {
            $pr = new Products();
            $pr->name = $request->product_name;
            $pr->price = $request->product_price;
            $pr->save();
            return redirect()->route('product.index');
        } else {
            $pr_id = $request->product2;
            $ob_id = $request->to;
            $pro = Products::find($pr_id);

            $obj = Objects::find($ob_id);
            $his = new History();
            $his->amal = 'Sotib olindi';
            $his->user_id = auth()->user()->name;
            $his->from = $request->from;
            $his->to = $request->to;
            $his->product_id = $pr_id;
            $his->price = $pro->price * $request->count;
            $his->count = $request->count;
            $his->save();
            return redirect()->route('history.index');
        }
    }



    public function kochirish(Request $request)
    {
//        dd($request);
        $ob_id_1 = $request->from;
        $ob_id_2 = $request->to;
        $pr_id = $request->product3;
        $ob1 = Objects::find($ob_id_1);
        $ob2= Objects::find($ob_id_2);
        $pr = Products::find($pr_id);

        $his = new History();
        $his->amal = "Ko'chirildi";
        $his->user_id = auth()->user()->name;
        $his->from = $request->from;
        $his->to = $request->to;
        $his->product_id = $pr_id;
        $his->price = $pr->price;
        $his->count = $request->count;
        $his->save();
        return redirect()->route('history.index');

    }

    public function hisobot(){
        $a = $this->amal()->tahlil;
        $a = (array)$a;
//        dd($a);
        $m = [];
        for($i=3; $i<count($a); $i++){
            $m[] = $a[$i];
        }
        $dokon_name = [];
        for($i=0; $i<count($m); $i++){
            $dokon_name[] = $m[$i]['data']['name'];
        }


        $z = [];
        for ($i=0; $i<count($m); $i++){
            foreach ($m[$i] as $k=>$p) {
                if($k>0){
                    $z[] = $p;
                }
            }
        }
//        dd($z);
        $son = count($z);
        $dokon_product1 = [];
        $dokon_product2 = [];
        for($i=0; $i<$son/2;$i++){
            $dokon_product1[] = $z[$i];

        }
        for($i=$son/2; $i<$son; $i++){
            $dokon_product2[] = $z[$i];
        }
        $shop1 = [];
        $shop2 = [];
        for($i=0; $i<count($dokon_product1); $i++){
            $shop1[] = $dokon_product1[$i]['name'];
        }
        for($i=0; $i<count($dokon_product2); $i++){
            $shop2[] = $dokon_product2[$i]['name'];
        }
//dd($dokon_product1);
        $count1 = [];
        $count2 = [];
        for($i=count($dokon_product1)-1; $i>0; $i--){
            $count1[] = $dokon_product1[$i]['count'];
            $count2[] = $dokon_product2[$i]['count'];
        }
        $array1 = [];
        $array2 = [];
        for($i=1; $i<count($count1)+1; $i++){
            $array1[] = $count1[count($count1)-$i];
            $array2[] = $count2[count($count1)-$i];
        }


        $pr = Products::all();
        $price = [];
        for($i=0; $i<count($pr); $i++){
            $price[] = $pr[$i]['price'];
        }

        $um_pul1 = [];
        $um_pul2 = [];
        for($i=0; $i<count($price); $i++){
            $um_pul1[] = $array1[$i]*$price[$i];
            $um_pul2[] = $array2[$i]*$price[$i];
        }


        $um_son1 = 0;
        $um_summ1 = 0;
        $um_son2 = 0;
        $um_summ2 = 0;
        for($i=0; $i<count($price); $i++){
            $um_son1+=$array1[$i];
            $um_summ1+=$um_pul1[$i];
            $um_son2+=$array2[$i];
            $um_summ2+=$um_pul2[$i];
        }
//        dd($um_son1,$um_summ1,$um_son2,$um_summ2);

        $h = History::all();
        $history1 = [];
        for($i=0; $i<count($h); $i++){
            if($h[$i]['amal']=="Sotildi" and $h[$i]['from']==3) {
                $history1[] = $h[$i];
            }
        }
        $history2 = [];
        for($i=0; $i<count($h); $i++){
            if($h[$i]['amal']=="Sotildi" and $h[$i]['from']==4) {
                $history2[] = $h[$i];
            }
        }
        $chiqim_pul1 = 0;
        $chiqim_son1 = 0;
        for($i=0; $i<count($history1); $i++){
            $chiqim_pul1+=$history1[$i]['price'];
            $chiqim_son1+=$history1[$i]['count'];
        }
        $chiqim_pul2 = 0;
        $chiqim_son2 = 0;
        for($i=0; $i<count($history2); $i++){
            $chiqim_pul2+=$history2[$i]['price'];
            $chiqim_son2+=$history2[$i]['count'];
        }


        return view('admin.hisobot',[
            'hisobot'=>$a,
            'shop1'=>$shop1,
            'array1'=>$array1,
            'price'=>$price,
            'shop2'=>$shop2,
            'array2'=>$array2,
            'um_son1'=>$um_son1,
            'um_son2'=>$um_son2,
            'um_summ1'=>$um_summ1,
            'um_summ2'=>$um_summ2,
            'pul1'=>$chiqim_pul1,
            'son1'=>$chiqim_son1,
            'pul2'=>$chiqim_pul2,
            'son2'=>$chiqim_son2
        ]);
    }


}




