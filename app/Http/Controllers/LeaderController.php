<?php

namespace App\Http\Controllers;

use App\Models\Leader;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

class LeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if(isset($request->logo)){
            $nm = $request->logo;
            $namafile = $nm->getClientOriginalName();
    
            $leader = new Leader();
            $leader->category_id = $request->category_id;
            $leader->name = $request->name;
            $leader->email = $request->email;
            $leader->alamat = $request->asal_kota;
            $leader->no_hp = $request->no_hp;
            $leader->nama_tim = $request->nama_tim;
            $leader->logo = $namafile;
            $nm->move(public_path().'/images/logo-squad', $namafile);
            $leader->save();
        }
        else{
            $leader = new Leader();
            $leader->category_id = $request->category_id;
            $leader->name = $request->name;
            $leader->email = $request->email;
            $leader->alamat = $request->asal_kota;
            $leader->no_hp = $request->no_hp;
            $leader->nama_tim = $request->nama_tim;
            $leader->logo = 'foto.png';
            $leader->save();
        }
        $leader_id = Leader::where('email', $request->email)->get();
     
        return response()->json(['success'=>'SUKSES', 'leader_id'=>$leader_id]);
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
     * @param  \App\Models\Leader  $leader
     * @return \Illuminate\Http\Response
     */
    public function show(Leader $leader)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Leader  $leader
     * @return \Illuminate\Http\Response
     */
    public function edit(Leader $leader)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Leader  $leader
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Leader $leader)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Leader  $leader
     * @return \Illuminate\Http\Response
     */
    public function destroy(Leader $leader)
    {
        //
    }
}
