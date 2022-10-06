<?php

namespace App\Http\Controllers;

use App\Models\ModalCrud;
use Illuminate\Http\Request;

class ModalCrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $m = ModalCrud::all();
        $all_object = [];
        foreach ($m as $item) {
            $all_object[$item->id] = $item;
        }
        $all_object = (object)$all_object;
        return view('admin.ModalCrud.index',['modal'=>$m,'all'=>$all_object]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $modal = new ModalCrud();
        $modal->name = $request->name;
        $modal->lastname = $request->lastname;
        $modal->email = $request->email;
        $modal->save();
        return redirect()->route('modal.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $id = $request->id_edit;
        $e = ModalCrud::find($id);
        $e->name = $request->name;
        $e->lastname = $request->lastname;
        $e->email = $request->email;
        $e->save();
        return redirect()->route('modal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $d = ModalCrud::find($id);
        $d->delete();
        return redirect()->route('modal.index');
    }
}
