<?php

namespace App\Http\Controllers;

use App\Models\Leader;
use App\Models\Order;
use App\Models\Player;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $order_id = $request->order_id;
        $order = Order::where('order_id', $order_id)->with('leader')->get();
        $id = $order[0]->leader->id;
        $tim = Player::where('leader_id', $id)->get();
        return view('web.invoices', ['order' => $order, 'tim' => $tim]);
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
        $leader = Leader::where('email', $request->email)->get();
        $order = new Order();
        $order->leader_id = $leader[0]->id;
        $order->status = $request->status;
        $order->order_id = $request->order_id;
        $order->snap_token = $request->snap_token;
        $order->total = '25000';
        $order->name = $leader[0]->name;
        $order->email = $leader[0]->email;
        $order->alamat = $leader[0]->alamat;
        $order->phone = $leader[0]->no_hp;
        $order->save();
        return response()->json(['success'=>'SUKSES']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
