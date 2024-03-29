<?php

namespace App\Http\Controllers;

use App\ModelMasterJurusan;
use App\ModelMasterProdi;

use Illuminate\Http\Request;

class API extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = \App\ModelMasterJurusan::all();
        $data1 = \App\ModelMasterProdi::all();
        $res['jur'] = count($data);
        $res['pro'] = count($data1);

        return response($res);
        // if(count($data) > 0){ //mengecek apakah data kosong atau tidak
        //     $res['message'] = "Success!";
        //     $res['values'] = $data;
        //     return response($res);
        // }
        // else{
        //     $res['message'] = "Empty!";
        //     return response($res);
        // }
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
