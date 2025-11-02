<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\addcottage;

class Addcottagecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $addcottage = addcottage::orderby('id','desc')->paginate(5);
        return view('cottages.index', compact('addcottage'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        addcottage::create ([

        'cottage_type' => $request['cottage_type'],
        'cottage_name' => $request['cottage_name'],
        'price_per_day' => $request['price_per_day'],
        'quantity' => $request['quantity']

        ]);
        return redirect()-> back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
