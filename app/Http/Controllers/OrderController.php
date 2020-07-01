<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Pizza;

class OrderController extends Controller
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
        $order = new Order;

        $order->client_name = $request->client_name;

        $order->order_day = Carbon::today();

        $value = 0;

        $soda_price = 6 * $request->soda_quantity;
        
        foreach ($request->products_id as $id) {
            $pizza = Pizza::findOrFail($id);
            $value = $value + $pizza->pizza_price;
        }

        $value+=$soda_price;

        $order->order_price = $value;

        $order->save();

        return response()->json([
            'order' => $order
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
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
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }

    /**
     * get the orders for a given day
     */
    public function ordersByDay(Request $request) {
        if ($request->order_day === null)
            $request->order_day = Carbon::today();

        $orders = Order::where('order_day',$request->order_day)->get();

        $value = 0;

        foreach ($orders as $order) {
            $value = $value + $order->order_price;
        }

        return response()->json(["value" => $value, "orders" => $orders ], 200);
    }
}
