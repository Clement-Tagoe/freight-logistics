<?php

namespace App\Http\Controllers;

use App\Models\Freight;
use App\Models\ShippingLineRelease;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShippingLineReleaseController extends Controller
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
    public function create(Freight $freight)
    {
        return view('freights.create-shipping-line-release', [
            'freight' => $freight,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Freight $freight)
    {
        $formFields = $request->validate([
            'voyage' => 'required|min:3',
            'port_of_loading' => 'required',
            'port_of_discharge' => 'required|min:3',
        ]);

        $formFields['freight_id'] = $freight->id;

        Freight::create($formFields);

        session()->flash('success_message', 'Freight job created successfully');
        
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShippingLineRelease  $shippingLineRelease
     * @return \Illuminate\Http\Response
     */
    public function show(ShippingLineRelease $shippingLineRelease)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ShippingLineRelease  $shippingLineRelease
     * @return \Illuminate\Http\Response
     */
    public function edit(ShippingLineRelease $shippingLineRelease)
    {
        return view('freights.shipping-line-release', [
            'shippingLineRelease' => $shippingLineRelease,
            'freight' => Freight::all(),
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ShippingLineRelease  $shippingLineRelease
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ShippingLineRelease $shippingLineRelease)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShippingLineRelease  $shippingLineRelease
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShippingLineRelease $shippingLineRelease)
    {
        //
    }
}
