<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Freight;
use App\Models\ShippingLineRelease;
use Illuminate\Http\Request;

class FreightController extends Controller
{
    //Show all freight jobs
    public function index()
    {
        return view('freights.index');
    }

    //Show single freight job
    public function show(Freight $freight)
    {
        return view('freights.show', ['freight' => $freight]);
    }

    //Show create freight form
    public function create() 
    {
        return view('freights.create-data-entry', [
            'categories' => Category::all(),
        ]);
    }

    //Store freight data
    public function store(Request $request)
    {
        
        $formFields = $request->validate([
            'file_number' => 'required|min:4',
            'bl_number' => 'required',
            'customer_name' => 'required|min:3',
            'category_id' => 'required|integer|exists:categories,id'
        ]);

        $formFields['status_id'] = 1;

        Freight::create($formFields);

        session()->flash('success_message', 'Freight job created successfully');
        
        return redirect()->route('freights');
    }

    //Show edit freight form
    public function edit(Freight $freight)
    {
        return view('freights.edit-data-entry', [
            'freight' => $freight,
            'categories' => Category::all(),
            'shippingLineRelease' => ShippingLineRelease::all(),
        ]);
    }

    //Update freight data
    public function update(Request $request, Freight $freight) {

        $formFields = $request->validate([
            'file_number' => 'required|min:4',
            'bl_number' => 'required',
            'customer_name' => 'required|min:3',
            'category_id' => 'required|integer|exists:categories,id',
        ]);

        $freight->update($formFields);

        session()->flash('success_message', 'Freight job updated successfully');

        return back();
    }

    //show edit form for approval
    public function approve(Freight $freight) {
        return view('freights.approval', [
            'freight' => $freight,
            'categories' => Category::all(),
        ]);
    }

    //Approve/Update freight data
    public function updateApproval(Request $request, Freight $freight) {

        $formFields = $request->validate([
            'file_number' => 'required|min:4',
            'bl_number' => 'required',
            'customer_name' => 'required|min:3',
            'category_id' => 'required|integer|exists:categories,id',
        ]);

        $freight->update($formFields);

        session()->flash('success_message', 'Freight job approved successfully');

        return back();
    }
}
